@include ('admin.blocks.header');
@include ('admin.blocks.sidebar');
<div class= "right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Quản lý người dùng</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class = "row">
            <div class="x_panel">
                <div class="x_content">
                    <div class="col-md-12 col-sm-12  text-center">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4 col-sm-4  profile_details">
                        <div class="well profile_view" style="width: 85%;">
                            <div class="col-sm-12">
                                <h4 class="brief"><i>Đã kích hoạt</i></h4>
                                <div class="left col-md-7 col-sm-7">
                                    <h2>Hồng Quang</h2>
                                    <p><strong> About: </strong> User</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-building"></i> Address: Hà Nội </li>
                                        <li><i class="fa fa-phone"></i> Phone #: 0123456789</li>
                                    </ul>
                                </div>
                                <div class="right col-md-5 col-sm-5 text-center">
                                    <img src="{{ asset('admin/assets/images/user-profile/unnamed.png') }}"
                                        alt="" class="img-circle img-fluid"
                                        style="width: 134px; height: 134px;">
                                </div>
                            </div>
                            <div class=" profile-bottom text-center">
                                <div class=" col-sm-6 emphasis">
                                    <button type="button" class="btn btn-success btn-sm">
                                        <i class="fa fa-ban"></i> Chặn </button>
                                    <button type="button" class="btn btn-primary btn-sm">
                                        <i class="fa fa-close"> </i> Xóa
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4  profile_details">
                        <div class="well profile_view" style="width: 85%;">
                            <div class="col-sm-12">
                                <h4 class="brief"><i>Đã kích hoạt</i></h4>
                                <div class="left col-md-7 col-sm-7">
                                    <h2>Nguyễn Văn A</h2>
                                    <p><strong> About: </strong> User</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-building"></i> Address: Hà Nội </li>
                                        <li><i class="fa fa-phone"></i> Phone #: 0123456789</li>
                                    </ul>
                                </div>
                                <div class="right col-md-5 col-sm-5 text-center">
                                    <img src="{{ asset('admin/assets/images/user-profile/unnamed.png') }}"
                                        alt="" class="img-circle img-fluid"
                                        style="width: 134px; height: 134px;">
                                </div>
                            </div>
                            <div class =    "profile-bottom text-center">
                                <div class=" col-sm-6 emphasis">
                                    <button type="button" class="btn btn-success btn-sm">
                                        <i class="fa fa-ban"></i> Chặn </button>
                                    <button type="button" class="btn btn-primary btn-sm">
                                        <i class="fa fa-close"> </i> Xóa
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class ="col-md-4 col-sm-4  profile_details">
                        <div class="well profile_view" style="width: 85%;">
                            <div class="col-sm-12">
                                <h4 class="brief"><i>Đã kích hoạt</i></h4>
                                <div class="left col-md-7 col-sm-7">
                                    <h2>Nguyễn Văn B</h2>
                                    <p><strong> About: </strong> User</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-building"></i> Address: Hà Nội </li>
                                        <li><i class="fa fa-phone"></i> Phone #: 0123456789</li>
                                    </ul>
                                </div>
                                <div class="right col-md-5 col-sm-5 text-center">
                                    <img src="{{ asset('admin/assets/images/user-profile/unnamed.png') }}"
                                        alt="" class="img-circle img-fluid"
                                        style="width: 134px; height: 134px;">
                                </div>
                            </div>
                            <div class="profile-bottom text-center">
                                <div class=" col-sm-6 emphasis">
                                    <button type="button" class="btn btn-success btn-sm">
                                        <i class="fa fa-ban"></i> Chặn </button>
                                    <button type="button" class="btn btn-primary btn-sm">
                                        <i class="fa fa-close"> </i> Xóa
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class ="col-md-4 col-sm-4 profile_details">
                        <div class = "well profile_view" style="width:85%;">
                            <div class ="col-sm-12">
                                <h4 class ="brief"><i>Đã kích hoạt</i></h4>
                                <div class ="left col-md-7 col-sm-7">
                                    <h2> Tuấn Nghĩa </h2>
                                    <p><strong> About: </strong> User</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-building"></i> Address: Hà Nội </li>
                                        <li><i class="fa fa-phone"></i> Phone #: 0123456789</li>
                                    </ul>
                                </div>
                                <div class="right col-md-5 col-sm-5 text-center">
                                    <img src="{{ asset('admin/assets/images/user-profile/unnamed.png') }}"
                                        alt="" class="img-circle img-fluid"
                                        style="width: 134px; height: 134px;">
                                </div>
                            </div>
                            <div class="profile-bottom text-center">
                                <div class=" col-sm-6 emphasis">
                                    <button type="button" class="btn btn-success btn-sm">
                                        <i class="fa fa-ban"></i> Chặn </button>
                                    <button type="button" class="btn btn-primary btn-sm">
                                        <i class="fa fa-close"> </i> Xóa
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-4 col-sm-4 profile_details">
                        <div class = "well profile_view" style="width: 85%;">
                            <div clas="col-sm-12">
                                <h4 class ="brief"><i>Đã kích hoạt</i></h4>
                                <div class ="left col-md-7 col-sm-7">
                                    <h2> Nguyễn văn C</h2>
                                    <p><strong> About: </strong> User</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-building"></i> Address: Hà Nội </li>
                                        <li><i class="fa fa-phone"></i> Phone #: 0123456789</li>
                                        <ul>
                                </div>
                                <div class="right col-md-5 col-sm-5 text-center">
                                    <img src="{{ asset('admin/assets/images/user-profile/unnamed.png') }}"
                                        alt="" class="img-circle img-fluid"
                                        style="width: 134px; height: 134px;">
                                </div>
                            </div>
                            <div class = "profile-bottom text-center">
                                <div class=" col-sm-6 emphasis">
                                    <button type="button" class="btn btn-success btn-sm">
                                        <i class="fa fa-ban"></i> Chặn </button>
                                    <button type="button" class="btn btn-primary btn-sm">
                                        <i class="fa fa-close"> </i> Xóa
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-4 col-sm-4 profile_details">
                        <div class = "well profile_view" style="width: 85%;">
                            <div class ="col-sm-12">
                                <h4 class ="brief"><i>Đã kích hoạt</i></h4>
                                <div class ="left col-md-7 col-sm-7">
                                    <h2> Nguyễn Văn D</h2>
                                    <p><strong> About: </strong> User</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-building"></i> Address: Hà Nội </li>
                                        <li><i class="fa fa-phone"></i> Phone #: 0123456789</li>
                                    </ul>
                                </div>
                                <div class="right col-md-5 col-sm-5 text-center">
                                    <img src="{{ asset('admin/assets/images/user-profile/unnamed.png') }}"
                                        alt=""
                                        class="img-circle
                                        img-fluid"
                                        style="width: 134px; height: 134px;">
                                </div>
                            </div>
                            <div class="profile-bottom text-center">
                                <div class=" col-sm-6 emphasis">
                                    <button type="button" class="btn btn-success btn-sm">
                                        <i class="fa fa-ban"></i> Chặn </button>
                                    <button type="button" class="btn btn-primary btn-sm">
                                        <i class="fa fa-close"> </i> Xóa
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include ('admin.blocks.footer');
