<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\Login;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


class LoginController extends Controller
{
    private $login;
    public function __construct()
    {
        $this->login = new Login();
    }
    public function index()
    {
        $title = 'Đăng nhập';
        return view('clients.login', compact('title'));
    }
    public function register(Request $request)
    {
        $username = $request->username_register; // Sửa tên biến để khớp với form
        $email = $request->email_register; // Sửa tên biến để khớp với form
        $password = $request->password_register; // Sửa tên biến để khớp với form

        // Kiểm tra tài khoản đã tồn tại
        $checkAccountExist = $this->login->checkUserExist($username, $email);

        if ($checkAccountExist) {
            return response()->json([
                'success' => false,
                'message' => 'Tên người dùng hoặc email đã tồn tại',
            ]);
        }
        $activation_token = Str::random(60);
        // Chuẩn bị dữ liệu để lưu
        $dataInsert = [
            'username' => $username,
            'email' => $email,
            'password' => md5($password), // Sử dụng bcrypt để mã hóa mật khẩu
            'activation_token' => $activation_token,
        ];

        // Lưu tài khoản vào cơ sở dữ liệu
        $this->login->registerAccount($dataInsert);

        return response()->json([
            'success' => true,
            'message' => 'Đăng ký thành công! Vui lòng kiểm tra email để kích hoạt tài khoản.',
        ]);
    }
    public function sendActivationEmail($email, $token)
    {
        $activation_link = route('activate.account', ['token' => $token]);
        Mail::send('clients.mail.emails_activation', ['link' => $activation_link], function ($message) use ($email) {
            $message->to($email);
            $message->subject('Kích hoạt tài khoản của bạn');
        });
    }
    public  function activateAccount($token)
    {
        $user = $this->login->getUserByToken($token);

        if ($user) {
            $this->login->activateUserAccount($token);
            return redirect('/login')->with('message', 'Tài khoản của bạn đã được kích hoạt thành công.');
        } else {
            return redirect('/login')->with('error', 'Mã kích hoạt không hợp lệ hoặc đã hết hạn.');
        }
    }
}
