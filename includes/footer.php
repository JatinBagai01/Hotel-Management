<!-- footer -->
<footer class="page_footer">
    <div class="container">
        <div class="footer_logo text-center">
            <a href="./">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <h1>THE ENCODED<h1>
            </a>
        </div>

        <div class="footer_address">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4">
                    <div class="address_icon_box d-flex justify-content-center align-items-center">
                        <div class="address_icon">
                            <span>
                                <i class="fas fa-phone-alt"></i>
                            </span>
                        </div>
                        <div class="address_text">
                            <h6>+91-123-4567-890</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="address_icon_box d-flex justify-content-center align-items-center">
                        <div class="address_icon">
                            <span>
                                <i class="far fa-envelope"></i>
                            </span>
                        </div>
                        <div class="address_text">
                            <h6>info@example.com</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="address_icon_box d-flex justify-content-center align-items-center">
                        <div class="address_icon">
                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                            </span>
                        </div>
                        <div class="address_text">
                            <h6>34-D, Delhi, IN</h6>
                        </div>
                    </div>
                </div><!-- cloumn closed -->
            </div><!-- row -->
        </div><!-- footer address -->

        <div class="footer_social_icons">
            <ul class="list-unstyled d-flex justify-content-center">
                <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </li>
            </ul>
        </div>
    </div><!-- container closed -->

    <div class="footer_copyright text-capitalize text-center text-white">
        Copyright &copy; <?php echo date("Y"); ?> | All rights reserved
    </div>
</footer>
<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- swiper slider js -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- custom js -->
<script>
    var mySwiper = new Swiper('.swiper', {
        loop: true,
        grabCursor: true,
        slidesPerView: 4,
        spaceBetween: 20,
        speed: 800,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 5000,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            640: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            780: {
                slidesPerView: 4,
                spaceBetween: 20
            }
        }
    });
</script>
</body>

</html>