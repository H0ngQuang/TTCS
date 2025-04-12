@include('admin.blocks.header')
@include('admin.blocks.sidebar')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Danh sách Tours</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            {{-- button example --}}
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tours</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <p class="text-muted font-13 m-b-30">
                                        Chào mừng bạn đến với trang quản lý Tours. Tại đây, bạn có thể thêm mới, chỉnh
                                        sửa, và quản lý tất cả các Tours hiện có.
                                    </p>
                                    <table id="datatable-buttons" class="table table-striped table-bordered"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Tên</th>
                                                <th>Thời gian</th>
                                                <th>Mô tả</th>
                                                <th>Số lượng</th>
                                                <th>Giá người lớn</th>
                                                <th>Giá trẻ em</th>
                                                <th>Điểm đến</th>
                                                <th>Khả dụng</th>
                                                <th>Ngày bắt đầu</th>
                                                <th>Ngày kết thúc</th>
                                                <th>Sửa</th>
                                                <th>Xóa</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td>MIỀN BẮC 4N3Đ | HÀ NỘI – LÀO CAI – SA PA</td>
                                                <td>4 ngày 3 đêm</td>
                                                <td>QUÀ TẶNG – KHUYẾN MÃI
                                                    Nón du lịch Lửa Việt.
                                                    Tặng 01 vé foot massage.
                                                    Tặng 01 bánh cốm Hàng Than + 01 que kem Tràng Tiền.

                                                    ĐIỂM NHẤN CHƯƠNG TRÌNH
                                                    Tham quan: Hồ Tây, Chùa Trấn Quốc, đền Ngọc Sơn, cầu Thê Húc, hồ
                                                    Hoàn Kiếm, Bản Cát Cát,…
                                                    Lưu trú: Khách sạn chuẩn 4 sao.
                                                    Ăn uống: Thưởng thức đặc sản Miền Bắc: bánh cốm Hà Nội, kem Tràng
                                                    Tiền và các món ăn đặc sản của núi rừng Tây Bắc…
                                                    Hoạt động khác: Chinh phục đỉnh Fansipan với hệ thống cáp treo hiện
                                                    đại. </td>
                                                <td>50</td>
                                                <td>5.990.000</td>
                                                <td>4.195.000</td>
                                                <td>HÀ NỘI – LÀO CAI – SA PA</td>
                                                <td>1</td>
                                                <td>01-01-2025</td>
                                                <td>04-01-2025</td>
                                                <td style="text-align: center;"><a href="{{ route('admin.page-add-tours') }}"
                                                        class="glyphicon glyphicon-edit"
                                                        style="font-size: 1.5em; color:forestgreen;"></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"
                                                        class="glyphicon glyphicon-trash"
                                                        style="font-size: 1.5em; color:red;"
                                                        onclick="this.closest('tr').remove();"></a></td>
                                            </tr>
                                            <tr>
                                                <td>MIỀN BẮC 5N4Đ | HÀ NỘI – HÀ GIANG – CAO BẰNG – BẮC KẠN (KHỞI HÀNH
                                                    THỨ 4 TUẦN THỨ 3 MỖI THÁNG)</td>
                                                <td>5 ngày 4 đêm</td>
                                                <td>QUÀ TẶNG – KHUYẾN MÃI
                                                    Nón du lịch Lửa Việt.
                                                    ĐIỂM NHẤN CHƯƠNG TRÌNH
                                                    Tham quan: Phố Cáo, làng văn hóa Lũng Cẩm, dinh thự vua Mèo, thác
                                                    Bản Giốc, đèo Mã Pí Lèng, đèo Mả Pia – đèo 14 tầng, hồ Ba Bể…
                                                    Lưu trú: Homestay cao cấp, Khách sạn 3*.
                                                    Hoạt động khác: Chụp hình lưu niệm với cột mốc biên giới 836 (02)
                                                    chủ quyền thiêng liêng của Tổ Quốc. </td>
                                                <td>45</td>
                                                <td>6.990.000</td>
                                                <td>5.250.000</td>
                                                <td>HÀ NỘI – HÀ GIANG – CAO BẰNG – BẮC KẠN</td>
                                                <td>1</td>
                                                <td>01-01-2025</td>
                                                <td>05-01-2025</td>
                                                <td style="text-align: center;"><a href="{{ route('admin.page-add-tours') }}"
                                                        class="glyphicon glyphicon-edit"
                                                        style="font-size: 1.5em; color:forestgreen;"></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"
                                                        class="glyphicon glyphicon-trash"
                                                        style="font-size: 1.5em; color:red;"
                                                        onclick="this.closest('tr').remove();"></a></td>
                                            </tr>
                                            <tr>
                                                <td>MIỀN BẮC 5N4Đ | HÀ NỘI – NINH BÌNH – HẠ LONG – YÊN TỬ – SAPA (Khởi
                                                    hành thứ 5 hàng tuần)</td>
                                                <td>5 ngày 4 đêm</td>
                                                <td>ĐIỂM NHẤN

                                                    Tham quan: Chùa Trấn Quốc, Đền Ngọc Sơn, Cầu Thê Húc, Hồ Hoàn Kiếm,
                                                    Văn Miếu – Quốc Tử Giám, Vịnh Hạ Long,…
                                                    Lưu trú: Khách sạn chuẩn 4*.
                                                    Ăn uống: Thưởng thức các món ăn đặc trưng của người dân tộc thiểu số
                                                    vùng Tây Bắc: thắng cố, cơm lam, lợn cắp nách, khoai nướng, bắp
                                                    nướng,…
                                                    Hoạt động khác: Tự do dạo chơi, mua sắm hàng hóa tại khu chợ đêm Hạ
                                                    Long, tự do tham gia không gian văn hóa Hà Thành,…
                                                    QUÀ TẶNG

                                                    Nón Du lịch Lửa Việt.
                                                    Vé cáp treo Yên Tử (chặng Hoa Yên).
                                                    Số lượng quà tặng có giới hạn và các khuyến mãi có điều kiện áp
                                                    dụng. </td>
                                                <td>30</td>
                                                <td>7.790.000</td>
                                                <td>5.453.000</td>
                                                <td>HÀ NỘI – NINH BÌNH – HẠ LONG – YÊN TỬ – SAPA</td>
                                                <td>0</td>
                                                <td>01-01-2025</td>
                                                <td>05-01-2025</td>
                                                <td style="text-align: center;"><a href="{{ route('admin.page-add-tours') }}"
                                                        class="glyphicon glyphicon-edit"
                                                        style="font-size: 1.5em; color:forestgreen;"></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"
                                                        class="glyphicon glyphicon-trash"
                                                        style="font-size: 1.5em; color:red;"
                                                        onclick="this.closest('tr').remove();"></a></td>
                                            </tr>
                                            <tr>
                                                <td>MIỀN TRUNG 4N3Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ (Khởi hành thứ 4 &
                                                    7 hàng tuần)</td>
                                                <td>4 ngày 3 đêm</td>
                                                <td>ĐIỂM NHẤN

                                                    Tham quan: Bà Nà Hills, Chùa Linh Ứng, Cầu Tình Yêu, Cá Chép Hóa
                                                    Rồng, Chùa Quan Thế Âm, Làng nghề điêu khắc đá, Đại Nội – Hoàng Cung
                                                    Triều Nguyễn, Chùa Cầu Nhật Bản,…
                                                    Lưu trú: Khách sạn chuẩn 4 sao.
                                                    Ăn uống: Bánh tráng thịt heo 2 đầu da và mì Quảng Đà Nẵng, đặc sản
                                                    xứ Huế: Bánh bèo, lọc, nậm, khoái…
                                                    Hoạt động khác: Thưởng thức ca Huế trên sông Hương, Tắm biển Mỹ
                                                    Khê,…

                                                    QUÀ TẶNG

                                                    Nón du lịch Lửa Việt.
                                                    Tặng vé Ca Huế trên sông Hương.
                                                    Số lượng quà tặng có giới hạn và các khuyến mãi có điều kiện áp
                                                    dụng.</td>
                                                <td>30</td>
                                                <td>3.990.000</td>
                                                <td>2.990.000</td>
                                                <td>ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ</td>
                                                <td>1</td>
                                                <td>01-01-2025</td>
                                                <td>04-01-2025</td>
                                                <td style="text-align: center;"><a href="{{ route('admin.page-add-tours') }}"
                                                        class="glyphicon glyphicon-edit"
                                                        style="font-size: 1.5em; color:forestgreen;"></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"
                                                        class="glyphicon glyphicon-trash"
                                                        style="font-size: 1.5em; color:red;"
                                                        onclick="this.closest('tr').remove();"></a></td>
                                            </tr>
                                            <tr>
                                                <td>BIỂN ĐẢO 3N2Đ | PHÚ QUỐC (Khởi hành mỗi ngày)</td>
                                                <td>3 ngày 2 đêm</td>
                                                <td>ĐIỂM NHẤN CHƯƠNG TRÌNH
                                                    Tham quan: Cơ sở sản xuất Rượu Sim, Thị Trấn Hoàng Hôn, Vườn Tiêu
                                                    Phú Quốc, Dinh Cậu, Dinh Bà, Tượng Đài Bác Hồ, Chương trình Tàu câu
                                                    cá – lặn ngắm san hô,…
                                                    Lưu trú: Resort 4 sao.
                                                    Hoạt động khác: tắm biển, lặn biển, ngắm san hô, câu cá và thử sức
                                                    với các trò chơi biển.

                                                    QUÀ TẶNG
                                                    Nón du lịch Lửa Việt.
                                                    Số lượng quà tặng có giới hạn và các khuyến mãi có điều kiện áp
                                                    dụng.</td>
                                                <td>45</td>
                                                <td>3.290.000</td>
                                                <td>1.645.000</td>
                                                <td>PHÚ QUỐC</td>
                                                <td>1</td>
                                                <td>01-01-2025</td>
                                                <td>03-01-2025</td>
                                                <td style="text-align: center;"><a href="{{ route('admin.page-add-tours') }}"
                                                        class="glyphicon glyphicon-edit"
                                                        style="font-size: 1.5em; color:forestgreen;"></a></td>
                                                <td style="text-align: center;"><a href="javascript:void(0);"
                                                        class="glyphicon glyphicon-trash"
                                                        style="font-size: 1.5em; color:red;"
                                                        onclick="this.closest('tr').remove();"></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

@include('admin.blocks.footer')