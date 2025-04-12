@include('clients.blocks.header_home')
@include('clients.blocks.banner_home')
<!--Form Back Drop-->
<div class="form-back-drop"></div>

<!-- Destinations Area start -->
<section class="destinations-area bgc-black pt-100 pb-70 rel z-1">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-white text-center counter-text-wrap mb-70" data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="50">
                    <h2>Khám phá những kho báu của thế giới với Travella</h2>
                    <p>Một trang web <span class="count-text plus" data-speed="3000" data-stop="45600">0</span> trải nghiệm phổ biến nhất mà bạn sẽ nhớ mãi</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($tours as $tour)
                <div class="col-xxl-3 col-xl-4 col-md-6 hhh">
                    <div class="destination-item block_tours" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{ asset('clients/assets/images/gallery-tours/'. $tour->images[0].'')}}"
                                alt="Điểm đến">
                        </div>
                        <div class="content">
                            <span class="location"><i class="fal fa-map-marker-alt"></i> {{ $tour->destination }}</span>
                            <h5><a href="{{ route('tour-detail',['id' =>$tour->tourId]) }}">{{ $tour ->title }}</a></h5>
                            <span class="time">{{ $tour ->time }}</span>
                        </div>
                        <div class="destination-footer">
                            <span class="price"><span>{{ number_format ($tour->priceAdult,0, ',' , ',') }}</span> VND / người</span>
                            <a href="{{ route('tour-detail',['id' => $tour->tourId]) }}" class="read-more">Đặt ngay <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Destinations Area end -->

<!-- About Us Area start -->
<section class="about-us-area py-100 rpb-90 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6">
                <div class="about-us-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title mb-25">
                        <h2>Du lịch với sự tự tin - Lý do hàng đầu để chọn công ty của chúng tôi</h2>
                    </div>
                    <p>Chúng tôi sẽ nỗ lực hết mình để biến giấc mơ du lịch của bạn thành hiện thực, khám phá những viên ngọc ẩn và những điểm tham quan không thể bỏ qua.</p>
                    <div class="divider counter-text-wrap mt-45 mb-55"><span>Chúng tôi có <span><span class="count-text plus"
                                    data-speed="3000" data-stop="25">0</span> Năm</span> kinh nghiệm</span></div>
                    <div class="row">
                        <div class="col-6">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text k-plus" data-speed="3000" data-stop="3">0</span>
                                <span class="counter-title">Điểm đến phổ biến</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="counter-item counter-text-wrap">
                                <span class="count-text m-plus" data-speed="3000" data-stop="9">0</span>
                                <span class="counter-title">Khách hàng hài lòng</span>
                            </div>
                        </div>
                    </div>
                    <a href="destination1.html" class="theme-btn mt-10 style-two">
                        <span data-hover="Khám phá điểm đến">Khám phá điểm đến</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                <div class="about-us-image">
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape1.png') }}" alt="Hình dạng"></div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape2.png') }}" alt="Hình dạng"></div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape3.png') }}" alt="Hình dạng"></div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape4.png') }}" alt="Hình dạng"></div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape5.png') }}" alt="Hình dạng"></div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape6.png') }}" alt="Hình dạng"></div>
                    <div class="shape"><img src="{{ asset('clients/assets/images/about/shape7.png') }}" alt="Hình dạng"></div>
                    <img src="assets/images/about/about.png" alt="Giới thiệu">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Area end -->

<!-- Popular Destinations Area start -->
<section class="popular-destinations-area rel z-1">
    <div class="container-fluid">
        <div class="popular-destinations-wrap br-20 bgc-lighter pt-100 pb-70">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center counter-text-wrap mb-70" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Khám phá các điểm đến phổ biến</h2>
                        <p>Một trang web <span class="count-text plus" data-speed="3000" data-stop="45600">0</span> trải nghiệm phổ biến nhất</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{ asset('clients/assets/images/destinations/destination1.jpg') }}"
                                    alt="Điểm đến">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Bãi biển Thái Lan</a></h6>
                                <span class="time">5352+ tour & 856+ hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{ asset('clients/assets/images/destinations/destination2.jpg') }}"
                                    alt="Điểm đến">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Parga, Hy Lạp</a></h6>
                                <span class="time">5352+ tour & 856+ hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{ asset('clients/assets/images/destinations/destination3.jpg') }}"
                                    alt="Điểm đến">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Castellammare del Golfo, Ý</a></h6>
                                <span class="time">5352+ tour & 856+ hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{ asset('clients/assets/images/destinations/destination4.jpg') }}"
                                    alt="Điểm đến">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Khu bảo tồn Canada, Canada</a></h6>
                                <span class="time">9999+ tour & 999+ hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{ asset('clients/assets/images/destinations/destination5.jpg') }}"
                                    alt="Điểm đến">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Dubai, Hoa Kỳ</a></h6>
                                <span class="time">5352+ tour & 856+ hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                                <img src="{{ asset('clients/assets/images/destinations/destination6.jpg') }}"
                                    alt="Điểm đến">
                            </div>
                            <div class="content">
                                <h6><a href="destination-details.html">Milos, Hy Lạp</a></h6>
                                <span class="time">5352+ tour & 856+ hoạt động</span>
                                <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Popular Destinations Area end -->

<!-- Features Area start -->
<section class="features-area pt-100 pb-45 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="features-content-part mb-55" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mb-60">
                        <h2>Trải nghiệm du lịch tuyệt vời - Những tính năng nổi bật của công ty chúng tôi</h2>
                    </div>
                    <div class="features-customer-box">
                        <div class="image">
                            <img src="{{ asset('clients/assets/images/features/features-box.jpg') }}"alt="Tính năng">
                        </div>
                        <div class="content">
                            <div class="feature-authors mb-15">
                                <img src="{{ asset('clients/assets/images/features/feature-author1.jpg') }}"
                                    alt="Tác giả">
                                <img src="{{ asset('clients/assets/images/features/feature-author2.jpg') }}"
                                    alt="Tác giả">
                                <img src="{{ asset('clients/assets/images/features/feature-author3.jpg') }}"
                                    alt="Tác giả">
                                <span>4k+</span>
                            </div>
                            <h6>850K+ Khách hàng hài lòng</h6>
                            <div class="divider style-two counter-text-wrap my-25"><span><span class="count-text plus"
                                        data-speed="3000" data-stop="25">0</span> Năm</span></div>
                            <p>Chúng tôi tự hào cung cấp các hành trình cá nhân hóa</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                <div class="row pb-25">
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5><a href="tour-details.html">Cắm trại lều</a></h5>
                                <p>Cắm trại lều là cách tuyệt vời để kết nối với thiên nhiên</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5><a href="tour-details.html">Chèo thuyền kayak</a></h5>
                                <p>Chèo thuyền kayak là hoạt động ngoài trời thú vị đầy phiêu lưu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item mt-20">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5><a href="tour-details.html">Đạp xe leo núi</a></h5>
                                <p>Đạp xe leo núi là môn thể thao đầy hứng khởi giúp tăng cường thể lực</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="icon"><i class="flaticon-tent"></i></div>
                            <div class="content">
                                <h5><a href="tour-details.html">Câu cá & Thuyền</a></h5>
                                <p>Câu cá và thuyền mang lại niềm vui, là những hoạt động không thể thiếu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Area end -->

<!-- Mobile App Area start -->
<section class="mobile-app-area py-100 rel z-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="mobile-app-content rmb-55" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mb-30">
                        <h2>Chúng tôi có mặt trên cửa hàng - Tải ứng dụng di động của chúng tôi dễ dàng</h2>
                    </div>
                    <p>Chúng tôi vượt xa mong đợi để biến giấc mơ du lịch của bạn thành hiện thực. Tin tưởng chúng tôi để xử lý các chi tiết để bạn có thể tạo ra những kỷ niệm khó quên. Khám phá thế giới với sự tự tin</p>
                    <ul class="list-style-two mt-35 mb-30">
                        <li>Công ty du lịch có kinh nghiệm</li>
                        <li>Đội ngũ chuyên nghiệp</li>
                        <li>Du lịch chi phí thấp</li>
                        <li>Hỗ trợ trực tuyến 24/7</li>
                    </ul>
                    <div class="google-play-app-store">
                        <a href="#"><img src="assets/images/mobile-app/g-play.jpg" alt="Google Play"></a>
                        <a href="#"><img src="assets/images/mobile-app/a-store.jpg" alt="App Store"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mobile-app-images">
                    <div class="bg"><img src="assets/images/mobile-app/phone-bg.png" alt="BG"></div>
                    <div class="images">
                        <img src="assets/images/mobile-app/phone2.png" alt="Điện thoại" data-aos="fade-down-left"
                            data-aos-duration="1500" data-aos-offset="50">
                        <img src="assets/images/mobile-app/phone.png" alt="Điện thoại">
                        <img src="assets/images/mobile-app/phone3.png" alt="Điện thoại" data-aos="fade-up-right"
                            data-aos-duration="1500" data-aos-offset="50">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Mobile App Area end -->

<!-- Testimonials Area start -->
<section class="testimonials-area rel z-1">
    <div class="container">
        <div class="testimonials-wrap bgc-lighter">
            <div class="row">
                <div class="col-lg-5 rel" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="testimonial-left-image rmb-55"
                        style="background-image: url({{ asset('clients/assets/images/testimonials/testimonial-left.jpg') }};">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testimonial-right-content" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-55">
                            <h2><span>5280</span> Khách hàng toàn cầu nói về dịch vụ của chúng tôi</h2>
                        </div>
                        <div class="testimonials-active">
                            <div class="testimonial-item">
                                <div class="testi-header">
                                    <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                    <h4>Dịch vụ chất lượng</h4>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="text">"Chuyến đi của chúng tôi thật hoàn hảo, cảm ơn công ty du lịch này! Họ đã chăm sóc mọi chi tiết, từ chỗ ở đến các trải nghiệm tuyệt vời."</div>
                                <div class="author">
                                    <div class="image"><img
                                            src="{{ asset('clients/assets/images/testimonials/author.jpg') }}"
                                            alt="Tác giả"></div>
                                    <div class="content">
                                        <h5>Randall V. Vasquez</h5>
                                        <span>Nhà thiết kế đồ họa</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item">
                                <div class="testi-header">
                                    <div class="quote"><i class="flaticon-double-quotes"></i></div>
                                    <h4>Dịch vụ chất lượng</h4>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <div class="text">"Chuyến đi của chúng tôi thật hoàn hảo, cảm ơn công ty du lịch này! Họ đã chăm sóc mọi chi tiết, từ chỗ ở đến các trải nghiệm tuyệt vời."</div>
                                <div class="author">
                                    <div class="image"><img
                                            src="{{ asset('clients/assets/images/testimonials/author.jpg') }}"
                                            alt="Tác giả"></div>
                                    <div class="content">
                                        <h5>Randall V. Vasquez</h5>
                                        <span>Nhà thiết kế đồ họa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials Area end -->

<!-- CTA Area start -->
<section class="cta-area pt-100 rel z-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-duration="1500" data-aos-offset="50">
                <div class="cta-item"
                    style="background-image: url({{ asset('clients/assets/images/cta/cta1.jpg') }})">
                    <span class="category">Cắm trại lều</span>
                    <h2>Khám phá du lịch tốt nhất thế giới</h2>
                    <a href="tour-details.html" class="theme-btn style-two bgc-secondary">
                        <span data-hover="Khám phá tour">Khám phá tour</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-delay="50" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="cta-item"
                    style="background-image: url({{ asset('clients/assets/images/cta/cta2.jpg') }})">
                    <span class="category">Bãi biển</span>
                    <h2>Bãi biển lớn nhất thế giới tại Thái Lan</h2>
                    <a href="tour-details.html" class="theme-btn style-two">
                        <span data-hover="Khám phá tour">Khám phá tour</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6" data-aos="zoom-in-down" data-aos-delay="100" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="cta-item"
                    style="background-image:url({{ asset('clients/assets/images/cta/cta3.jpg') }})">
                    <span class="category">Thác nước</span>
                    <h2>Thác nước lớn nhất tại Bali, Indonesia</h2>
                    <a href="tour-details.html" class="theme-btn style-two bgc-secondary">
                        <span data-hover="Khám phá tour">Khám phá tour</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Area end -->

<!-- Blog Area start -->
<section class="blog-area py-70 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center counter-text-wrap mb-70" data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="50">
                    <h2>Đọc tin tức & blog mới nhất</h2>
                    <p>Một trang web <span class="count-text plus bgc-primary" data-speed="3000"
                            data-stop="34500">0</span> trải nghiệm phổ biến nhất mà bạn sẽ nhớ mãi</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6">
                <div class="blog-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="content">
                        <a href="blog.html" class="category">Du lịch</a>
                        <h5><a href="blog-details.html">Hướng dẫn cuối cùng để lên kế hoạch cho kỳ nghỉ mơ ước của bạn với Travella</a></h5>
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar-alt"></i> <a href="#">25 Tháng Hai 2024</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Bình luận (5)</a></li>
                        </ul>
                    </div>
                    <div class="image">
                        <img src="assets/images/blog/blog1.jpg" alt="Blog">
                    </div>
                    <a href="blog-details.html" class="theme-btn">
                        <span data-hover="Đọc thêm">Đọc thêm</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="blog-item" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="content">
                        <a href="blog.html" class="category">Du lịch</a>
                        <h5><a href="blog-details.html">Những cuộc phiêu lưu không thể quên - Danh sách trải nghiệm của Travella</a></h5>
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar-alt"></i> <a href="#">25 Tháng Hai 2024</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Bình luận (5)</a></li>
                        </ul>
                    </div>
                    <div class="image">
                        <img src="assets/images/blog/blog2.jpg" alt="Blog">
                    </div>
                    <a href="blog-details.html" class="theme-btn">
                        <span data-hover="Đọc thêm">Đọc thêm</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="blog-item" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="content">
                        <a href="blog.html" class="category">Du lịch</a>
                        <h5><a href="blog-details.html">Khám phá văn hóa và ẩm thực - Những điểm đến ẩm thực tốt nhất của Travella</a></h5>
                        <ul class="blog-meta">
                            <li><i class="far fa-calendar-alt"></i> <a href="#">25 Tháng Hai 2024</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Bình luận (5)</a></li>
                        </ul>
                    </div>
                    <div class="image">
                        <img src="assets/images/blog/blog3.jpg" alt="Blog">
                    </div>
                    <a href="blog-details.html" class="theme-btn">
                        <span data-hover="Đọc thêm">Đọc thêm</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area end -->
@include('clients.blocks.footer')
