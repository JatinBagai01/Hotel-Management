<?php
define("TITLE", "About Us",);

include 'includes/header.php';

include 'includes/titlebox.php';
?>

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
                    <p>Make memories at Crown Inn, Amelia Island, where the southern charm, magnificent scenery and casually elegant surroundings exemplify the gentle ambience of this barrier island’s luxury beachfront resort.</p>
                    <p>Crown Inn is the perfect place to feed your spirit. With recently renovated rooms and a bolder focus on cuisine culture &amp; more.</p>
                    <a href="<?php echo BASE_URL; ?>rooms" class="btn btn_theme shadow-none mt-2">view rooms <i class="fas fa-arrow-right"></i></a>
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
            </div><!-- column -->

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
            </div><!-- column -->

            <div class="col-lg-2 col-md-4 col-6">
                <div class="amenities_icon_box">
                    <img src="imgs/restaurant.png">
                    <p>restaurant</p>
                </div>
            </div><!-- column -->

            <div class="col-lg-2 col-md-4 col-6">
                <div class="amenities_icon_box">
                    <img src="imgs/car-rental.png">
                    <p>car rental</p>
                </div>
            </div><!-- column -->

            <div class="col-lg-2 col-md-4 col-6">
                <div class="amenities_icon_box">
                    <img src="imgs/wifi.png">
                    <p>secure wi-fi</p>
                </div>
            </div><!-- column -->
        </div><!-- first row -->

        <div class="row g-0 mt_50">
            <div class="col-lg-3 col-md-6">
                <div class="amenities_img_box" style="background-image: url(imgs/breakfast.jpg);">
                    <div class="background_overlay"></div>
                    <div class="text_box">
                        <h3>breakfast</h3>
                    </div>
                </div>
            </div><!-- column -->

            <div class="col-lg-3 col-md-6">
                <div class="amenities_img_box" style="background-image: url(imgs/spa.jpg);">
                    <div class="background_overlay"></div>
                    <div class="text_box">
                        <h3>wellness spa</h3>
                    </div>
                </div>
            </div><!-- column -->

            <div class="col-lg-3 col-md-6">
                <div class="amenities_img_box" style="background-image: url(imgs/pool.jpg);">
                    <div class="background_overlay"></div>
                    <div class="text_box">
                        <h3>swimming pool</h3>
                    </div>
                </div>
            </div><!-- column -->

            <div class="col-lg-3 col-md-6">
                <div class="amenities_img_box" style="background-image: url(imgs/banquet-hall.jpg);">
                    <div class="background_overlay"></div>
                    <div class="text_box">
                        <h3>banquet hall</h3>
                    </div>
                </div>
            </div><!-- column -->
        </div><!-- second row -->
    </div><!-- container -->
</section>

<!-- section: counter -->
<section class="section_counter">
    <div class="section_background_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="counter_box d-flex justify-content-center">
                    <div class="counter_num">
                        <span>40+</span>
                    </div>
                    <div class="counter_txt">
                        <h3>luxury suites</h3>
                        <p>from $399</p>
                    </div>
                </div>
            </div><!-- column closed -->

            <div class="col-lg-4 col-md-4">
                <div class="counter_box d-flex justify-content-center">
                    <div class="counter_num">
                        <span>35k</span>
                    </div>
                    <div class="counter_txt">
                        <h3>happy guests</h3>
                        <p>all over the world</p>
                    </div>
                </div>
            </div><!-- column closed -->

            <div class="col-lg-4 col-md-4">
                <div class="counter_box d-flex justify-content-center">
                    <div class="counter_num">
                        <span>365</span>
                    </div>
                    <div class="counter_txt">
                        <h3>days / year</h3>
                        <p>all year long</p>
                    </div>
                </div>
            </div><!-- column closed -->
        </div><!-- row -->
    </div><!-- container -->
</section>

<!-- section: testimonials -->
<section class="section_testimonial">
    <div class="container">
        <h4 class="section_heading_title text_dark text-center">testimonial</h4>
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
                        <i class="fas fa-star"></i>
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
                        <i class="fas fa-star"></i>
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