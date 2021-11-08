<?php
define("TITLE", "Home");

include 'includes/header.php';
?>

<!-- section: hero -->
<section class="section_hero d-flex align-items-center">
    <div class="section_background_overlay"></div>
    <div class="container">
        <div class="hero_content">
            <h1>The vacation heaven</h1>
            <p></p>
            <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn_theme shadow-none">Make an enquiry <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- section: about_us -->
<section class="section_about">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 d-flex align-items-center">
                <div class="about_img">
                    <img src="imgs/about.jpg" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-6 d-flex align-items-center">
                <div class="about_content">
                    <h4 class="section_heading_title text_dark">luxury resort</h4>
                    <h2 class="section_subtitle text_dark mb_20">tradition of best hospitality</h2>
                    <p>Make memories at Mountinn, Amelia Island, where the southern charm, magnificent scenery and casually elegant surroundings exemplify the gentle ambience of this barrier island’s luxury beachfront resort.</p>
                    <p>Heavenhill is the perfect place to feed your spirit. With recently renovated rooms and a bolder focus on cuisine culture &amp; more.</p>
                    <a href="<?php echo BASE_URL; ?>about.php" class="btn btn_theme mt-2 shadow-none">know more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section: amenities -->
<section class="section_amenities">
    <div class="container">
        <h4 class="section_heading_title text_dark text-center">amenities</h4>
        <h2 class="section_subtitle text_dark text-center mb_60">Best place to stay</h2>
        <div class="row">
            <div class="col-lg-2 col-md-4 col-6">
                <div class="amenities_icon_box">
                    <img src="imgs/bar.png">
                    <p>home brewery</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="amenities_icon_box">
                    <img src="imgs/home-cafe.png">
                    <p>coffee bar</p>
                </div>
            </div><!-- column -->

            <div class="col-lg-2 col-md-4 col-6">
                <div class="amenities_icon_box">
                    <img src="imgs/room-service.png">
                    <p>room service</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="amenities_icon_box">
                    <img src="imgs/restaurant.png">
                    <p>restaurant</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="amenities_icon_box">
                    <img src="imgs/car-rental.png">
                    <p>car rental</p>
                </div>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <div class="amenities_icon_box">
                    <img src="imgs/wifi.png">
                    <p>secure wi-fi</p>
                </div>
            </div>
        </div><!-- first row -->

        <div class="row g-0 mt_50">
            <div class="col-lg-3 col-md-6">
                <div class="amenities_img_box" style="background-image: url(imgs/breakfast.jpg);">
                    <div class="background_overlay"></div>
                    <div class="text_box">
                        <h3>breakfast</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="amenities_img_box" style="background-image: url(imgs/spa.jpg);">
                    <div class="background_overlay"></div>
                    <div class="text_box">
                        <h3>wellness spa</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="amenities_img_box" style="background-image: url(imgs/pool.jpg);">
                    <div class="background_overlay"></div>
                    <div class="text_box">
                        <h3>swimming pool</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="amenities_img_box" style="background-image: url(imgs/banquet-hall.jpg);">
                    <div class="background_overlay"></div>
                    <div class="text_box">
                        <h3>banquet hall</h3>
                    </div>
                </div>
            </div>
        </div><!-- second row -->
    </div><!-- container -->
</section>

<!-- section: cta -->
<section class="section_cta">
    <div class="section_background_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 d-flex align-items-center">
                <div class="cta_content">
                    <h2 class="cta_heading_title text-white mb_20">enjoy the luxury experience this summer</h2>
                    <p class="cta_description text-white mb-0">If you chose to stay with us you will enjoy modern home comforts in a traditional setting. Whether you are looking for a short weekend break or a longer holiday, we offer a range of packages that we think cater for all.</p>
                </div>
            </div>

            <div class="col-lg-3 offset-lg-1 d-flex align-items-center">
                <div class="cta_btn">
                    <a href="<?php echo BASE_URL; ?>contact.php" class="btn btn_theme shadow-none">make an enquiry <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section: slideshow gallery -->
<section class="section_slideshow_gallery">
    <div class="container">
        <h4 class="section_heading_title text_dark text-center">gallery</h4>
        <h2 class="section_subtitle text_dark text-center mb_70">Peek into our world</h2>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="imgs/hotel-bar.jpg" class="img-fluid">
                </div>
                <div class="swiper-slide">
                    <img src="imgs/hotel-room.jpg" class="img-fluid">
                </div>
                <div class="swiper-slide">
                    <img src="imgs/hotel-spa.jpg" class="img-fluid">
                </div>
                <div class="swiper-slide">
                    <img src="imgs/hotel-dish.jpg" class="img-fluid">
                </div>
                <div class="swiper-slide">
                    <img src="imgs/hotel-gym.jpg" class="img-fluid">
                </div>
                <div class="swiper-slide">
                    <img src="imgs/hotel-restaurant.jpg" class="img-fluid">
                </div>
                <div class="swiper-slide">
                    <img src="imgs/hotel-bathroom.jpg" class="img-fluid">
                </div>
            </div>
            <!-- navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div><!-- swiper container -->
    </div><!-- container -->
</section>

<!-- section: packages -->
<section class="section_packages">
    <div class="container">
        <h4 class="section_heading_title text_dark text-center">packages</h4>
        <h2 class="section_subtitle text_dark text-center mb_70">a memorable stay</h2>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-lg-6 col-md-6 d-flex align-items-center" style="position: relative;">
                            <div class="card_overlay"></div>
                            <img src="imgs/hotel-single-room.jpg" class="img-fluid">
                            <div class="overlay_text">
                                <h6 class="text-white m-0">₹ 5,000 / Night</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex align-items-center">
                            <div class="card-body">
                                <h5 class="card-title text_dark">Single Room</h5>
                                <p class="class-text">This classic room is equipped with desk and chair, 1 single bed, TV with specially crafted furnishings.</p>
                                <img src="imgs/wifi.png" width="28" height="28">&nbsp;&nbsp;
                                <img src="imgs/room-service%20(1).png" width="28" height="28">&nbsp;&nbsp;
                                <img src="imgs/balcony.png" width="28" height="28">&nbsp;&nbsp;
                                <img src="imgs/beach-view.png" width="28" height="28">&nbsp;&nbsp;
                            </div>
                        </div>
                    </div>
                </div><!-- card -->
            </div><!-- column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-lg-6 col-md-6 d-flex align-items-center" style="position: relative;">
                            <div class="card_overlay"></div>
                            <img src="imgs/hotel-deluxe-room.jpg" class="img-fluid">
                            <div class="overlay_text">
                                <h6 class="text-white m-0">₹ 9,000 / Night</h6>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-flex align-items-center">
                            <div class="card-body">
                                <h5 class="card-title text_dark">Deluxe Suite</h5>
                                <p class="class-text">This deluxe room is equipped with desk and chair, 1 twin size bed, TV with specially crafted furnishings.</p>
                                <img src="imgs/wifi.png" width="28" height="28">&nbsp;&nbsp;
                                <img src="imgs/room-service%20(1).png" width="28" height="28">&nbsp;&nbsp;
                                <img src="imgs/balcony.png" width="28" height="28">&nbsp;&nbsp;
                                <img src="imgs/beach-view.png" width="28" height="28">&nbsp;&nbsp;
                            </div>
                        </div>
                    </div>
                </div><!-- card -->
            </div><!-- column -->
        </div><!-- row -->
        <p class="mt-5 mb-0 text-center"><a href="<?php echo BASE_URL; ?>rooms.php" class="btn btn_theme shadow-none">more rooms <i class="fas fa-arrow-right"></i></a></p>
    </div><!-- container -->
</section>

<!-- section: testimonials -->
<section class="section_testimonial">
    <div class="container">
        <h4 class="section_heading_title text_dark text-center">testimonials</h4>
        <h2 class="section_subtitle text_dark text-center mb_70">What our guests say</h2>
        <div class="row no-gutters">
            <div class="col-lg-4">
                <div class="testimonial_box">
                    <img src="imgs/booking.png">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="mb_20"><i class="fas fa-quote-left"></i> This was the perfect hotel with the perfect location, perfect room. We had an amazing experience at this hotel. Each member of the staff was incredibly friendly, welcoming, helpful and experienced.</p>
                    <div class="guest_info d-flex align-items-center">
                        <div class="guest_pic d-flex align-items-center">
                            <img class="rounded-circle" src="imgs/customer_1.jpg">
                        </div>
                        <div class="guest_text d-flex align-items-center ps-3">
                            <div class="guest_name">
                                <h6 class="text_dark">Jaydon Simmon</h6>
                                <span>Australia</span>
                            </div>
                        </div>
                    </div>
                </div><!-- testimonial_box -->
            </div><!-- column closed -->

            <div class="col-lg-4">
                <div class="testimonial_box">
                    <img src="imgs/tripadvisor.png">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="mb_20"><i class="fas fa-quote-left"></i> This was the perfect hotel with the perfect location, perfect room. We had an amazing experience at this hotel. Each member of the staff was incredibly friendly, welcoming, helpful and experienced.</p>
                    <div class="guest_info d-flex align-items-center">
                        <div class="guest_pic d-flex align-items-center">
                            <img class="rounded-circle" src="imgs/customer_2.jpg">
                        </div>
                        <div class="guest_text d-flex align-items-center ps-3">
                            <div class="guest_name">
                                <h6 class="text_dark">Mollie Griffin</h6>
                                <span>Netherlands</span>
                            </div>
                        </div>
                    </div>
                </div><!-- testimonial_box -->
            </div><!-- column closed -->

            <div class="col-lg-4">
                <div class="testimonial_box">
                    <img src="imgs/booking.png">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="mb_20"><i class="fas fa-quote-left"></i> This was the perfect hotel with the perfect location, perfect room. We had an amazing experience at this hotel. Each member of the staff was incredibly friendly, welcoming, helpful and experienced.</p>
                    <div class="guest_info d-flex align-items-center">
                        <div class="guest_pic d-flex align-items-center">
                            <img class="rounded-circle" src="imgs/customer_4.jpg">
                        </div>
                        <div class="guest_text d-flex align-items-center ps-3">
                            <div class="guest_name">
                                <h6 class="text_dark">Sara Johnson</h6>
                                <span>Italy</span>
                            </div>
                        </div>
                    </div>
                </div><!-- testimonial_box -->
            </div><!-- column closed -->
        </div><!-- row -->
    </div><!-- container -->
</section>

<?php
include 'includes/footer.php';
?>
