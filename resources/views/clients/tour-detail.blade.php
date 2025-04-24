@include('clients.blocks.header')
<section class="page-banner-two rel z-1">
    <div class="container-fluid">
        <hr class="mt-0">
        <div class="container">
            <div class="banner-inner pt-15 pb-25">
                <h2 class="page-title mb-10 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">{{ $tourDetail->destination }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20 aos-init aos-animate" data-aos="fade-right"
                        data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Tour Gallery start -->
<div class="tour-gallery">
    <div class="container-fluid">
        <div class="row gap-10 justify-content-center rel">
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('clients/assets/images/gallery-tours/' . $tourDetail->images[0] . '') }}"
                        alt="Điểm đến">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('clients/assets/images/gallery-tours/' . $tourDetail->images[1] . '') }}"
                        alt="Điểm đến">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item gallery-between">
                    <img src="{{ asset('clients/assets/images/gallery-tours/' . $tourDetail->images[2] . '') }}"
                        alt="Điểm đến">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('clients/assets/images/gallery-tours/' . $tourDetail->images[3] . '') }}"
                        alt="Điểm đến">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('clients/assets/images/gallery-tours/' . $tourDetail->images[4] . '') }}"
                        alt="Điểm đến">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tour Gallery End -->

<!-- Tour Header Area start -->
<section class="tour-header-area pt-70 rel z-1">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-7">
                <div class="tour-header-content mb-15" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <span class="location d-inline-block mb-10"><i class="fal fa-map-marker-alt"></i>
                        {{ $tourDetail->destination }}</span>
                    <div class="section-title pb-5">
                        <h2>{{ $tourDetail->title }}</h2>
                    </div>
                    <div class="ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 text-lg-end" data-aos="fade-right" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="tour-header-social mb-10">
                    <a href="#"><i class="far fa-share-alt"></i>Chia sẻ tour</a>
                    <a href="#"><i class="fas fa-heart bgc-secondary"></i>Danh sách yêu thích</a>
                </div>
            </div>
        </div>
        <hr class="mt-50 mb-70">
    </div>
</section>
<!-- Tour Header Area end -->

<!-- Tour Details Area start -->
<section class="tour-details-page pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="tour-details-content">
                    <h3>Khám phá Tour</h3>
                    <p>{!! $tourDetail->description !!} </p>
                    <div class="row pb-55">
                        <div class="col-md-6">
                            <div class="tour-include-exclude mt-30">
                                <h5>Bao gồm</h5>
                                <ul class="list-style-one check mt-25">
                                    <li><i class="far fa-check"></i> Dịch vụ đón và trả khách</li>
                                    <li><i class="far fa-check"></i> 1 bữa ăn một ngày</li>
                                    <li><i class="far fa-check"></i> Buổi tối trên du thuyền & Sự kiện âm nhạc</li>
                                    <li><i class="far fa-check"></i> Tham quan 7 địa điểm tuyệt vời nhất trong thành phố</li>
                                    <li><i class="far fa-check"></i> Nước đóng chai trên xe buýt</li>
                                    <li><i class="far fa-check"></i> Phương tiện di chuyển xe buýt du lịch hạng sang</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tour-include-exclude mt-30">
                                <h5>Không bao gồm</h5>
                                <ul class="list-style-one mt-25">
                                    <li><i class="far fa-times"></i> Tiền thưởng</li>
                                    <li><i class="far fa-times"></i> Đón và trả lại khách ở khách sạn</li>
                                    <li><i class="far fa-times"></i> Bữa trưa, Đồ ăn & Đồ uống</li>
                                    <li><i class="far fa-times"></i> Nâng cấp tùy chọn lên 1 ly</li>
                                    <li><i class="far fa-times"></i> Dịch vụ bổ sung</li>
                                    <li><i class="far fa-times"></i> Bảo hiểm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Lịch trình</h3>
                <div class="accordion-two mt-25 mb-60" id="faq-accordion-two">
                    @php
                        $day = 1;
                    @endphp
                    @foreach ($tourDetail->timeline as $item)
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo{{ $item->timeLineId }}">
                                    Ngày {{ $day++ }} - {{ $item->title }}
                                </button>
                            </h5>
                            <div id="collapseTwo{{ $item->timeLineId }}" class="accordion-collapse collapse"
                                data-bs-parent="#faq-accordion-two">
                                <div class="accordion-body">
                                    <p>
                                        {{ $item->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <h3>Câu hỏi thường gặp</h3>
                <div class="accordion-one mt-25 mb-60" id="faq-accordion">
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne">
                                01_Làm thế nào để đặt tour hoặc gói du lịch?
                            </button>
                        </h5>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>Để đặt tour hoặc gói du lịch, bạn có thể liên hệ với chúng tôi qua email hoặc số điện thoại được cung cấp.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                02_Gói du lịch bao gồm những gì?
                            </button>
                        </h5>
                        <div id="collapseTwo" class="accordion-collapse collapse show"
                            data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>Gói du lịch bao gồm các dịch vụ như đón và trả khách, bữa ăn, tham quan các địa điểm nổi tiếng và nhiều hơn nữa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree">
                                03_Chính sách hủy và hoàn tiền của bạn là gì?
                            </button>
                        </h5>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>Chính sách hủy và hoàn tiền sẽ được cung cấp chi tiết khi bạn đặt tour.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour">
                                04_Tôi có thể tùy chỉnh tour hoặc gói du lịch không?
                            </button>
                        </h5>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>Chúng tôi cung cấp các tùy chọn tùy chỉnh để đáp ứng nhu cầu của bạn.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive">
                                05_Tôi cần những giấy tờ gì để đi du lịch?
                            </button>
                        </h5>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>Bạn cần mang theo giấy tờ tùy thân, hộ chiếu và các giấy tờ liên quan khác.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-10 rmt-75">
                <div class="blog-sidebar tour-sidebar">
                    <div class="widget widget-booking" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h5 class="widget-title">Đặt Tour</h5>
                        <form action="#">
                            <div class="date mb-25">
                                <b>Ngày bắt đầu</b>
                                <input type="date" value="{{ date('Y-m-d', strtotime($tourDetail->startDate)) }}" disabled>
                            </div>
                            <hr>
                            <div class="date mb-25">
                                <b>Ngày kết thúc</b>
                                <input type="date" value="{{ date('Y-m-d', strtotime($tourDetail->endDate)) }}" disabled>
                            </div>
                            <div class="time py-5">
                                <b>Thời gian :</b>
                                <p> {{ $tourDetail->time }} </p>
                            </div>
                            <hr class="mb-25">
                            <h6>Vé:</h6>
                            <ul class="tickets clearfix">
                                <li>
                                    Trẻ em (18-) <span
                                        class="price">{{ number_format($tourDetail->priceChild, 0, ',', ',') }} VND
                                    </span>
                                </li>
                                <li>
                                    Người lớn (18+) <span
                                        class="price">{{ number_format($tourDetail->priceAdult, 0, ',', ',') }} VND
                                    </span>
                                </li>
                            </ul>
                            <hr class="mb-25">
                            <h6>Thêm :</h6>
                            <ul class="radio-filter pt-5">
                                <li>
                                    <input class="form-check-input" checked type="radio" name="AddExtra"
                                        id="add-extra1">
                                    <label for="add-extra1">Thêm dịch vụ theo đặt chỗ <span>$50</span></label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" name="AddExtra" id="add-extra2">
                                    <label for="add-extra2">Thêm dịch vụ theo cá nhân <span>$24</span></label>
                                </li>
                            </ul>
                            <hr>
                            <h6>Tổng thanh toán : <span class="price">$74</span></h6>
                            <button type="submit" class="theme-btn style-two w-100 mt-15 mb-5">
                                <span data-hover="Đặt ngay">Đặt ngay</span>
                                <i class="fal fa-arrow-right"></i>
                            </button>
                            <div class="text-center">
                                <a href={{ route('contact') }}>Bạn cần hỗ trợ?</a>
                            </div>
                        </form>
                    </div>

                    <div class="widget widget-contact" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h5 class="widget-title">Bạn cần trợ giúp?</h5>
                        <ul class="list-style-one">
                            <li><i class="far fa-envelope"></i> <a
                                    href="emilto:hongquang02082004@gmail.com">hongquang02082004@gmail.com</a></li>
                            <li><i class="far fa-phone-volume"></i> <a href="callto:+000(123)45688">+000 (123) 456
                                    88</a></li>
                        </ul>
                    </div>

                    <div class="widget widget-cta" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="content text-white">
                            <span class="h6">Khám phá thế giới</span>
                            <h3>Địa điểm du lịch tốt nhất</h3>
                            <a href="tour-grid.html" class="theme-btn style-two bgc-secondary">
                                <span data-hover="Khám phá ngay">Khám phá ngay</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="image">
                            <img src="{{ asset('clients/assets/images/widgets/cta-widget.png') }}" alt="CTA">
                        </div>
                        <div class="cta-shape"><img src="{{ asset('clients/assets/images/widgets/cta-shape3.png') }}" alt="Shape"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tour Details Area end -->

<!-- Newsletter Area start -->
<section class="newsletter-three bgc-primary py-100 rel z-1"
    style="background-image: url({{ asset('clients/assets/images/newsletter/newsletter-bg-lines.png') }});">
    <div class="container container-1500">
        <div class="row">
            <div class="col-lg-6">
                <div class="newsletter-content-part text-white rmb-55" data-aos="zoom-in-right"
                    data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title counter-text-wrap mb-45">
                        <h2>Đăng ký nhận bản tin của chúng tôi để nhận thêm ưu đãi & mẹo</h2>
                        <p>Một trang web <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> trải nghiệm phổ biến nhất bạn sẽ nhớ</p>
                    </div>
                    <form class="newsletter-form mb-15" action="#">
                        <input id="news-email" type="email" placeholder="Địa chỉ email" required>
                        <button type="submit" class="theme-btn bgc-secondary style-two">
                            <span data-hover="Đăng ký">Đăng ký</span>
                            <i class="fal fa-arrow-right"></i>
                        </button>
                    </form>
                    <p>Không yêu cầu thẻ tín dụng. Không cam kết</p>
                </div>
                <div class="newsletter-bg-image" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <img src="{{ asset('clients/assets/images/newsletter/newsletter-bg-image.png') }}" alt="Bản tin">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="newsletter-image-part bgs-cover"
                    style="background-image: url({{ asset('clients/assets/images/newsletter/newsletter-two-right.jpg') }});"
                    data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50"></div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Area end -->

@include('clients.blocks.footer')
