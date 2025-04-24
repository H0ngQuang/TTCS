@include('clients.blocks.header')
@include('clients.blocks.banner_search')

<!-- Popular Destinations Area start -->
<section class="popular-destinations-area pt-100 pb-90 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center counter-text-wrap mb-40" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <h2>Khám phá các điểm đến phổ biến</h2>
                    <p>Một trang web <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> trải nghiệm phổ biến nhất</p>
                    <ul class="destinations-nav mt-30">
                        <li data-filter="*" class="active">Show All</li>
                        <li data-filter=".features">Features</li>
                        <li data-filter=".recent">Recent</li>
                        <li data-filter=".city">City</li>
                        <li data-filter=".rating">Rating</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row gap-10 destinations-active justify-content-center">
                <div class="col-xl-3 col-md-6 item recent rating">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{ asset('clients/assets/images/destinations/destination1.jpg') }}" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Bãi biển Thái Lan</a></h6>
                            <span class="time">5352+ chuyến tham quan & 856+ hoạt động</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 item features">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{ asset('clients/assets/images/destinations/destination2.jpg') }}" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Parga, Hy Lạp</a></h6>
                            <span class="time">5352+ tours & 856+ Activity</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 item recent city rating">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{ asset('clients/assets/images/destinations/destination3.jpg') }}" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Castellammare del Golfo, Ý</a></h6>
                            <span class="time">5352+ tours & 856+ Activity</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 item city features">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{ asset('clients/assets/images/destinations/destination4.jpg') }}" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Khu bảo tồn Canada, Canada</a></h6>
                            <span class="time">5352+ tours & 856+ Activity</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 item recent">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="100"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{ asset('clients/assets/images/destinations/destination5.jpg') }}" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Dubai, Hoa Kỳ</a></h6>
                            <span class="time">5352+ tours & 856+ Activity</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 item features rating">
                    <div class="destination-item style-two" data-aos="flip-up" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                            <img src="{{ asset('clients/assets/images/destinations/destination6.jpg') }}" alt="Destination">
                        </div>
                        <div class="content">
                            <h6><a href="destination-details.html">Milos, Hy Lạp</a></h6>
                            <span class="time">5352+ tours & 856+ Activity</span>
                            <a href="#" class="more"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Popular Destinations Area end -->


<!-- Hotel Area start -->
<section class="hotel-area bgc-black pt-100 pb-70 rel z-1">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="destination-left-content mb-35">
                    <div class="section-title text-white counter-text-wrap mb-45" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Khám phá các khách sạn hàng đầu trên thế giới</h2>
                        <p>Một trang web <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> trải nghiệm phổ biến nhất bạn sẽ nhớ</p>
                    </div>
                    <a href="destination1.html" class="theme-btn style-four mb-15">
                        <span data-hover="Explore More Hotel">Explore More Hotel</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="destination-item style-three" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{ asset('clients/assets/images/destinations/hotel1.jpg') }}" alt="Hotel">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Ao Nang, Thailand</span>
                        <h5><a href="tour-details.html">Khách sạn gần hồ bơi</a></h5>
                        <ul class="list-style-one">
                            <li><i class="fal fa-bed-alt"></i> 2 Bed room</li>
                            <li><i class="fal fa-hat-chef"></i> 1 kitchen</li>
                            <li><i class="fal fa-bath"></i> 2 Wash room</li>
                            <li><i class="fal fa-router"></i> Internet</li>
                        </ul>
                        <div class="destination-footer">
                            <span class="price"><span>$85.00</span>/per night</span>
                            <a href="tour-details.html" class="read-more">Book Now <i
                                    class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="destination-item style-three" data-aos="fade-up" data-aos-delay="50"
                    data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{ asset('clients/assets/images/destinations/hotel2.jpg') }}" alt="Hotel">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Kigali, Rwanda</span>
                        <h5><a href="tour-details.html">Khách sạn Marriott, Kigali</a></h5>
                        <ul class="list-style-one">
                            <li><i class="fal fa-bed-alt"></i> 2 Bed room</li>
                            <li><i class="fal fa-hat-chef"></i> 1 kitchen</li>
                            <li><i class="fal fa-bath"></i> 2 Wash room</li>
                            <li><i class="fal fa-router"></i> Internet</li>
                        </ul>
                        <div class="destination-footer">
                            <span class="price"><span>$85.00</span>/per night</span>
                            <a href="tour-details.html" class="read-more">Book Now <i
                                    class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="destination-item style-three" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{ asset('clients/assets/images/destinations/hotel3.jpg') }}" alt="Hotel">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Ao Nang, Thailand</span>
                        <h5><a href="tour-details.html">Khách sạn nhà sơn gần cây xanh</a></h5>
                        <ul class="list-style-one">
                            <li><i class="fal fa-bed-alt"></i> 2 Bed room</li>
                            <li><i class="fal fa-hat-chef"></i> 1 kitchen</li>
                            <li><i class="fal fa-bath"></i> 2 Wash room</li>
                            <li><i class="fal fa-router"></i> Internet</li>
                        </ul>
                        <div class="destination-footer">
                            <span class="price"><span>$85.00</span>/per night</span>
                            <a href="tour-details.html" class="read-more">Book Now <i
                                    class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="destination-item style-three" data-aos="fade-up" data-aos-delay="50"
                    data-aos-duration="1500" data-aos-offset="50">
                    <div class="image">
                        <div class="ratting"><i class="fas fa-star"></i> 4.8</div>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{ asset('clients/assets/images/destinations/hotel4.jpg') }}" alt="Hotel">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Ao Nang, Thailand</span>
                        <h5><a href="tour-details.html">Khách sạn Jungle Pool, Indonesia</a></h5>
                        <ul class="list-style-one">
                            <li><i class="fal fa-bed-alt"></i> 2 Bed room</li>
                            <li><i class="fal fa-hat-chef"></i> 1 kitchen</li>
                            <li><i class="fal fa-bath"></i> 2 Wash room</li>
                            <li><i class="fal fa-router"></i> Internet</li>
                        </ul>
                        <div class="destination-footer">
                            <span class="price"><span>$85.00</span>/per night</span>
                            <a href="tour-details.html" class="read-more">Book Now <i
                                    class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hotel Area end -->


<!-- Hot Deals Area start -->
<section class="hot-deals-area pt-70 pb-50 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center counter-text-wrap mb-50" data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="50">
                    <h2>Khám phá các ưu đãi hấp dẫn</h2>
                    <p>Một trang web <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> trải nghiệm phổ biến nhất bạn sẽ nhớ</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="image">
                        <span class="badge">10% Off</span>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{ asset('clients/assets/images/destinations/hot-deal1.jpg') }}" alt="Hot Deal">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> City of Venice, Italy</span>
                        <h5><a href="tour-details.html">Kênh đào Venice, Ý</a></h5>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$58.00</span>/person</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <a href="destination-details.html" class="theme-btn style-three">
                        <span data-hover="Explore">Explore</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="image">
                        <span class="badge">10% Off</span>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{ asset('clients/assets/images/destinations/hot-deal2.jpg') }}" alt="Hot Deal">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Kyoto, Japan</span>
                        <h5><a href="tour-details.html">Kyoto, Nhật Bản</a></h5>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$58.00</span>/person</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <a href="destination-details.html" class="theme-btn style-three">
                        <span data-hover="Explore">Explore</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="destination-item style-four no-border" data-aos="flip-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="image">
                        <span class="badge">10% Off</span>
                        <a href="#" class="heart"><i class="fas fa-heart"></i></a>
                        <img src="{{ asset('clients/assets/images/destinations/hot-deal3.jpg') }}" alt="Hot Deal">
                    </div>
                    <div class="content">
                        <span class="location"><i class="fal fa-map-marker-alt"></i> Tamnougalt, Morocco</span>
                        <h5><a href="tour-details.html">Sa mạc Sahara, Morocco</a></h5>
                    </div>
                    <div class="destination-footer">
                        <span class="price"><span>$58.00</span>/person</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <a href="destination-details.html" class="theme-btn style-three">
                        <span data-hover="Explore">Explore</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hot Deals Area end -->


<!-- Newsletter Area start -->
<section class="newsletter-three bgc-primary py-100 rel z-1"
    style="background-image: url(assets/images/newsletter/newsletter-bg-lines.png);">
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
                    <img src="{{ asset('clients/assets/images/newsletter/newsletter-bg-image.png') }}" alt="Newsletter">
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
