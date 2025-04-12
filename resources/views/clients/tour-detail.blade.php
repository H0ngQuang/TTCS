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
                        alt="Destination">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('clients/assets/images/gallery-tours/' . $tourDetail->images[1] . '') }}"
                        alt="Destination">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item gallery-between">
                    <img src="{{ asset('clients/assets/images/gallery-tours/' . $tourDetail->images[2] . '') }}"
                        alt="Destination">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('clients/assets/images/gallery-tours/' . $tourDetail->images[3] . '') }}"
                        alt="Destination">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('clients/assets/images/gallery-tours/' . $tourDetail->images[4] . '') }}"
                        alt="Destination">
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
                    <a href="#"><i class="far fa-share-alt"></i>Share tours</a>
                    <a href="#"><i class="fas fa-heart bgc-secondary"></i>Wish list</a>
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
                    <h3>Khám phá Tours</h3>
                    <p>{!! $tourDetail->description !!} </p>
                    <div class="row pb-55">
                        <div class="col-md-6">
                            <div class="tour-include-exclude mt-30">
                                <h5>Bao gồm và không bao gồm</h5>
                                <ul class="list-style-one check mt-25">
                                    <li><i class="far fa-check"></i> Dịch vụ đón và trả khách</li>
                                    <li><i class="far fa-check"></i> 1 bữa ăn một ngày</li>
                                    <li><i class="far fa-check"></i> Buỗi tối trên du thuyền & Sự kiện âm nhạc</li>
                                    <li><i class="far fa-check"></i> Tham quan 7 địa điểm tuyệt vời nhất trong thành phố
                                    </li>
                                    <li><i class="far fa-check"></i> Nước đóng trai trên xe bus</li>
                                    <li><i class="far fa-check"></i> Phương tiện du chuyển xe bus du lịch hạng sang</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tour-include-exclude mt-30">
                                <h5>Không bao gồm </h5>
                                <ul class="list-style-one mt-25">
                                    <li><i class="far fa-times"></i> Tiền bonus</li>
                                    <li><i class="far fa-times"></i> Đón và trả lại khách ở khách sạn</li>
                                    <li><i class="far fa-times"></i> Bữa trưa, Đồ ăn & Đồ uống</li>
                                    <li><i class="far fa-times"></i> Nâng cấp tuỳ chọn lên 1 ly</li>
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
                        $day =1;
                    @endphp
                    @foreach ($tourDetail->timeline as $item)
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo{{ $item->timeLineId }}">
                                    Ngày {{ $day++ }} - {{ $item ->title }}
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

                <h3>Frequently Asked Questions</h3>
                <div class="accordion-one mt-25 mb-60" id="faq-accordion">
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne">
                                01_How do I book a tour or travel package?
                            </button>
                        </h5>
                        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>To take a trivial example which undertakes laborious physical exercise except to
                                    obtain some advantage pleasure annoying consequences</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                02_What is included in the travel package?
                            </button>
                        </h5>
                        <div id="collapseTwo" class="accordion-collapse collapse show"
                            data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>The early start ensures you can fully immerse yourself in the tranquility of nature
                                    before the world fully awakens. As the morning light filters through the trees,
                                    you'll experience the crisp, fresh air and the peaceful sounds of the forest. The
                                    trail ahead offers both a physical challenge promise of breathtaking.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree">
                                03_What is your cancellation and refund policy?
                            </button>
                        </h5>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>To take a trivial example which undertakes laborious physical exercise except to
                                    obtain some advantage pleasure annoying consequences</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour">
                                04_Can I customize my tour or travel package?
                            </button>
                        </h5>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>To take a trivial example which undertakes laborious physical exercise except to
                                    obtain some advantage pleasure annoying consequences</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive">
                                05_What documents do I need to travel?
                            </button>
                        </h5>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                            <div class="accordion-body">
                                <p>To take a trivial example which undertakes laborious physical exercise except to
                                    obtain some advantage pleasure annoying consequences</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-10 rmt-75">
                <div class="blog-sidebar tour-sidebar">

                    <div class="widget widget-booking" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h5 class="widget-title">Tour Booking</h5>
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
                                    <label for="add-extra1">Add service per booking <span>$50</span></label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" name="AddExtra" id="add-extra2">
                                    <label for="add-extra2">Add service per personal <span>$24</span></label>
                                </li>
                            </ul>
                            <hr>
                            <h6>Tổng thanh toán : <span class="price">$74</span></h6>
                            <button type="submit" class="theme-btn style-two w-100 mt-15 mb-5">
                                <span data-hover="Book Now">Đặt ngay</span>
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
                            <span class="h6">Explore The World</span>
                            <h3>Best Tourist Place</h3>
                            <a href="tour-grid.html" class="theme-btn style-two bgc-secondary">
                                <span data-hover="Explore Now">Explore Now</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="image">
                            <img src="assets/images/widgets/cta-widget.png" alt="CTA">
                        </div>
                        <div class="cta-shape"><img src="assets/images/widgets/cta-shape3.png" alt="Shape"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tour Details Area end -->


<!-- Newsletter Area start -->
<section class="newsletter-three bgc-primary py-100 rel z-1"
    style="background-image: url(assets/images/newsletter/newsletter-bg-lines.png);">
    <div class="container container-1500">
        <div class="row">
            <div class="col-lg-6">
                <div class="newsletter-content-part text-white rmb-55" data-aos="zoom-in-right"
                    data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title counter-text-wrap mb-45">
                        <h2>Subscribe Our Newsletter to Get more offer & Tips</h2>
                        <p>One site <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> most
                            popular experience you’ll remember</p>
                    </div>
                    <form class="newsletter-form mb-15" action="#">
                        <input id="news-email" type="email" placeholder="Email Address" required>
                        <button type="submit" class="theme-btn bgc-secondary style-two">
                            <span data-hover="Subscribe">Subscribe</span>
                            <i class="fal fa-arrow-right"></i>
                        </button>
                    </form>
                    <p>No credit card requirement. No commitments</p>
                </div>
                <div class="newsletter-bg-image" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <img src="assets/images/newsletter/newsletter-bg-image.png" alt="Newsletter">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="newsletter-image-part bgs-cover"
                    style="background-image: url(assets/images/newsletter/newsletter-two-right.jpg);"
                    data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50"></div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Area end -->

@include('clients.blocks.footer')
