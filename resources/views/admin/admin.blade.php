@include('admin.blocks.header')
@include('admin.blocks.sidebar')

<div class ="right_col" role="main">
    <div class ="">

        <div class="page-title">
            <div class="title_left">
                <h3>Thông tin ADMIN</h3>
            </div>
            <div class ="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    <div class="input-group">
                        <input type ="text" class ="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class ="row">
            <div class ="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class= "x_title">
                        <ul class = "nav navbar-right panel_toolbox">
                            <li> <a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
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
                        <div class="col-md-3 col-sm-3  profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <img class="img-responsive avatar-view"
                                        src="{{ asset('admin/assets/images/user-profile/avt_admin.jpg') }}"
                                        alt="Avatar" title="Change the avatar" style="width: 250px; height: 250px;">
                                </div>
                            </div>
                            <br>
                            <div class="button-container">
                                <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Tải ảnh lên</a>
                            </div>
                            <h2 style="font-weight: bold;font-size:25px">Phạm Hồng Quang</h2>
                            <ul class ="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i>&nbsp;&nbsp;&nbsp; Ngũ Hiệp,Thanh
                                    Trì,Hà Nội </li>
                                <li>
                                    <i class="fa fa-briefcase user-profile-icon"></i>&nbsp; hongquang02082004@gmail.com
                                </li>
                            </ul>
                            <br />
                        </div>
                        <div class ="col-md-9 col-sm-9">
                            <div class ="x_content">
                                <br />
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    <div class ="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tên
                                            Admin <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" required="required"
                                                class="form-control ">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Mật
                                            khẩu <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="last-name" name="last-name" required="required"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for = "middle-name"
                                            class="col-form-label col-md-3 col-sm-3 label-align">Địa chỉ</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" class="form-control" type="text"
                                                name="middle-name">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name"
                                            class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" class="form-control" type="text"
                                                name="middle-name">
                                        </div>
                                    </div>
                                    <div class = "item form-group">
                                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Số
                                            điện thoại</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input id="middle-name" class="form-control" type="text"
                                                name="middle-name">
                                        </div>
                                    </div>
                                    <div class = "In_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button type= "submit" class ="btn btn-success">Cập nhật</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.blocks.footer')
