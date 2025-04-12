@include('admin.blocks.header')
@include('admin.blocks.sidebar')

<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row" style="display: inline-block; width: 100%;">
        <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Tổng số Tours đang hoạt động</span>
                <div class="count green">23</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-clock-o"></i> Tổng số lượng booking</span>
                <div class="count green">13</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Tổng số người đăng ký</span>
                <div class="count green">2,500</div>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Tổng doanh thu</span>
                <div class="count green">13.456.797</div>
            </div>
        </div>
    </div>
    <!-- /top tiles -->

    <div class="row">
        <div class="col-md-6 col-sm-6 ">
            <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                    <h2>Điểm đến</h2>
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
                    <table class="" style="width:100%">
                        <tr>
                            <th style="width:37%;">
                                <p>Tổng hợp danh sách Tours</p>
                            </th>
                            <th>
                                <div class="col-lg-7 col-md-7 col-sm-7 ">
                                    <p class="">Tên</p>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 ">
                                    <p class="">Phần trăm (%)</p>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <canvas class="canvasDoughnut" height="140" width="140"
                                    style="margin: 15px 10px 10px 0"></canvas>
                            </td>
                            <td>
                                <table class="tile_info">
                                    <tr>
                                        <td>
                                            <p><i class="fa fa-square blue"></i>Miền Bắc </p>
                                        </td>
                                        <td>50</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><i class="fa fa-square green"></i>Miền Trung </p>
                                        </td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><i class="fa fa-square purple"></i>Miền Nam </p>
                                        </td>
                                        <td>30</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6  ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Donut Graph</h2>
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

                    <div id="echart_donut"
                        style="height: 350px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative; background-color: transparent;"
                        _echarts_instance_="ec_1742634566134">
                        <div style="position: relative; overflow: hidden; width: 184px; height: 350px;"><canvas
                                width="184" height="350" data-zr-dom-id="zr_0"
                                style="position: absolute; left: 0px; top: 0px; width: 184px; height: 350px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas>
                        </div>
                        <div></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tours <small>được đặt nhiều nhất</small></h2>
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
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Số chỗ đã đặt</th>
                                <th>Số chỗ còn trống</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">179</th>
                                <td>MIỀN TRUNG 4N3Đ | ĐÀ NẴNG - HỘI AN - BÀ NÀ - HUẾ</td>
                                <td>8</td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <th scope="row">177</th>
                                <td>MIỀN TRUNG 3N2Đ | ĐÀ NẴNG - CÙ LAO CHÀM - HỘI AN - BÀ NÀ (TẾT ÂM LỊCH 2025)</td>
                                <td>7</td>
                                <td>43</td>
                            </tr>
                            <tr>
                                <th scope="row">192</th>
                                <td>MIỀN BẮC 4N3Đ | HÀ NỘI - NINH BÌNH - NAM ĐỊNH</td>
                                <td>7</td>
                                <td>26</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6  ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Đơn đặt mới</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Họ và tên</th>
                    <th>Tên Tours</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">44</th>
                    <td>Quang</td>
                    <td>MIỀN TRUNG 4N3Đ | ĐÀ NẴNG - HỘI AN - BÀ NÀ - HUẾ</td>
                    <td>10.070.000</td>
                    <td style="background-color: yellow; color: black; text-align: center; font-weight: bold;">Chưa xác nhận</td>
                  </tr>
                  <tr>
                    <th scope="row">42</th>
                    <td>Hồng Quang</td>
                    <td>MIỀN TRUNG 4N3Đ | ĐÀ NẴNG - HỘI AN - BÀ NÀ - HUẾ</td>
                    <td>6.080.000</td>
                    <td style="background-color: yellow; color: black; text-align: center; font-weight: bold;">Chưa xác nhận</td>
                  </tr>
                  <tr>
                    <th scope="row">41</th>
                    <td>Phạm Hồng Quang</td>
                    <td>MIỀN BẮC 6N5Đ | HÀ NỘI - NINH BÌNH - HẠ LONG - YÊN TỬ - SAPA</td>
                    <td>23.350.000</td>
                    <td style="background-color: yellow; color: black; text-align: center; font-weight: bold;">Chưa xác nhận</td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12">
      <div class="x_panel" style="width: 100%;">
        <div class="x_title">
        <h2>Line graph<small>Sessions</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
        <canvas id="lineChart"></canvas>
        </div>
      </div>
      </div>
    </div>
    <!-- /page content -->

    @include('admin.blocks.footer')