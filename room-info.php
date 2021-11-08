<?php
define("TITLE", "Luxury Rooms");

include "includes/header.php";

include "includes/titlebox.php";

if (isset($_GET['id'])) {
    $room_type = trim($_GET['id']);
    // get the specific key name from array.
    $room = $rooms[$room_type];
}
?>

<!-- section: room details -->
<section class="section_room_details">
    <div class="container">
        <h4 class="section_heading_title text_dark text-center">best rooms</h4>
        <h2 class="section_subtitle text_dark text-center mb_70">a memorable stay</h2>
        <div class="row">
            <div class="col-lg-5">
                <div class="room_content border-bottom">
                    <h4 class="text_dark room_title"><?php echo $room['room_title']; ?></h4>
                    <p><?php echo $room['room_description']; ?></p>
                </div>

                <div class="room_amenities">
                    <div class="ra_icon_box">
                        <i class="fas fa-bath"></i>
                        <p>hot &amp; cold shower</p>
                    </div>
                    <div class="ra_icon_box">
                        <i class="fas fa-wifi"></i>
                        <p>wi-fi complimentary</p>
                    </div>
                    <div class="ra_icon_box">
                        <i class="fas fa-utensils"></i>
                        <p>in-room dining facility</p>
                    </div>
                    <div class="ra_icon_box">
                        <i class="fas fa-tv"></i>
                        <p>led tv</p>
                    </div>
                    <div class="ra_icon_box">
                        <i class="fas fa-dumbbell"></i>
                        <p>gym access</p>
                    </div>
                </div>
            </div><!-- column closed -->

            <div class="col-lg-7">
                <div class="room_img">
                    <img src="imgs/<?php echo $room['room_full_img']; ?>.jpg" class="img-fluid">
                </div>

                <div class="room_details">
                    <h4 class="text_dark">room details</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 text_dark">
                            Guests:
                            <span><?php echo $room['guests']; ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 text_dark">
                            Children:
                            <span><?php echo $room['children']; ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 text_dark">
                            Room size:
                            <span><?php echo $room['room_size']; ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 text_dark">
                            Smoking:
                            <span><?php echo $room['smoking']; ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0 text_dark">
                            Drinking:
                            <span><?php echo $room['drinking']; ?></span>
                        </li>
                    </ul>
                </div>

                <div class="room_price_box p-3 d-flex justify-content-between align-items-center" style="background: #f6f6f9;">
                    <span class="text_dark"><?php echo $room['room_price']; ?></span>
                    <a href="<?php echo BASE_URL; ?>reservation.php$" class="btn btn_theme">book now <i class="fas fa-arrow-right"></i></a>
                </div>
            </div><!-- column closed -->
        </div><!-- row -->
    </div><!-- container -->
</section>

<?php
include "includes/footer.php";
?>