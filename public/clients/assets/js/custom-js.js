$(document).ready(function () {
    $("#sign-up").click(function () {
        $(".sign-in").hide();
        $(".sign-in").removeClass("show"); // Ẩn sign-in
        $(".signup").show();
        $(".signup").addClass("show"); // Hiển thị sign-up
    });

    $("#sign-in").click(function () {
        $(".signup").hide();
        $(".signup").removeClass("show"); // Ẩn sign-up
        $(".sign-in").show();
        $(".sign-in").addClass("show"); // Hiển thị sign-in
    });
    $('#message').hide(); // Ẩn thông báo lỗi mặc định
    $('#error').hide(); // Ẩn thông báo lỗi mặc định
    $("#login-form").on("submit", function (e) {
        // Thiếu dấu "#" ở selector
        e.preventDefault(); // Ngăn chặn hành động mặc định của form

        var username = $("#username").val().trim();
        var password = $("#password").val().trim();

        $("#validate_username").hide().text("");
        $("#validate_password").hide().text(""); // Ẩn thông báo lỗi trước đó

        var isValid = true; // Biến kiểm tra tính hợp lệ của form

        if (password.length < 8) {
            isValid = false;
            $("#validate_password")
                .show()
                .text("Mật khẩu phải có ít nhất 8 ký tự");
        }

        var sqlInjectionRegex = /['"\\;<>%;()&+]/; // Biểu thức chính quy để kiểm tra SQL Injection

        if (sqlInjectionRegex.test(username)) {
            isValid = false;
            $("#validate_username")
                .show()
                .text("Tên đăng nhập không được chứa ký tự đặc biệt");
        }

        if (sqlInjectionRegex.test(password)) {
            isValid = false;
            $("#validate_password")
                .show()
                .text("Mật khẩu không được chứa ký tự đặc biệt");
        }

        if (isValid) {
            // Submit form nếu không có lỗi
            // Ví dụ: this.submit();
        }
    });

    // Cấu hình datetimepicker
    $("#start_date, #end_date").datetimepicker({
        format: "d/m/Y",
        timepicker: false,
    });

    // Toggle menu dropdown
    $("#userDropdown").click(function () {
        $("#dropdown-menu").toggle();
    });
});
// Handle form submission for signup
$("#register-form").on("submit", function (e) {
    e.preventDefault();
    $(".loader").show();
    $("#register-form").addClass("hidden-content");

    // Lấy giá trị của các trường nhập liệu
    var username = $("#username_register").val().trim();
    var email = $("#email_register").val().trim();
    var password = $("#password_register").val().trim();
    var rePass = $("#re_pass").val().trim();

    // Đặt lại nội dung thông báo lỗi và ẩn chúng
    $("#validate_username_regis").hide().text("");
    $("#validate_email_regis").hide().text("");
    $("#validate_password_regis").hide().text("");
    $("#validate_repass").hide().text("");

    // Kiểm tra lỗi
    var isValid = true;

    // Kiểm tra tên đăng nhập không chứa ký tự SQL injection
    var sqlInjectionPattern = /['"\\;<>%;()&+]/;
    if (sqlInjectionPattern.test(username)) {
        isValid = false;
        $("#validate_username_regis")
            .show()
            .text("Tên tài khoản không được chứa ký tự đặc biệt.");
    }

    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        isValid = false;
        $("#validate_email_regis").show().text("Email không hợp lệ.");
    }

    if (password.length < 6) {
        isValid = false;
        $("#validate_password_regis")
            .show()
            .text("Mật khẩu phải có ít nhất 6 ký tự.");
    }

    if (sqlInjectionPattern.test(password)) {
        isValid = false;
        $("#validate_password_regis")
            .show()
            .text("Mật khẩu không được chứa ký tự đặc biệt.");
    }

    // Kiểm tra nhập lại mật khẩu
    if (password !== rePass) {
        isValid = false;
        $("#validate_repass").show().text("Mật khẩu nhập lại không khớp.");
    }

    if (isValid) {
        var formData = {
            'username_register': username,
            'email_register': email,
            'password_register': password,
            '_token': $('input[name="_token"]').val(),
        };
        console.log(formData);
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: formData,
            success: function (response) {
                if(response.success){
                    $('#message').text(response.message).show();
                    $('#error').hide();
                    $('#login-form').trigger('reset');

                } else {
                    $('message').hide();
                    $('#error').text(response.message).show();
                }
            },
            error: function (xhr, textStatus, errorThrown) {
                alert("Có lỗi xảy ra trong quá trình đăng ký. Vui lòng thử lại sau.");
            },
        });
    }
});
