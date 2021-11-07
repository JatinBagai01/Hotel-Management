<?php
define("TITLE", "Rooms");

include 'includes/header.php';

include 'includes/titlebox.php';
?>

<!-- section: rooms_list -->
<section class="section_rooms">
    <div class="container">
        <h4 class="section_heading_title text_dark text-center">packages</h4>
        <h2 class="section_subtitle text_dark text-center mb_70">a memorable stay</h2>
        <div class="row">
            <?php
            foreach ($rooms as $room => $room_info) {
            ?>
                <div class="col-lg-12 col-md-6">
                    <div class="row align-items-center room_info_box">
                        <div class="col-lg-5">
                            <img src="assets/<?php echo $room_info['room_img']; ?>.jpg" class="room_img img-fluid">
                        </div>
                        <div class="col-lg-4">
                            <h4 class="room_title text_dark"><?php echo $room_info['room_title']; ?></h4>
                            <p><?php echo $room_info['room_description']; ?></p>
                            <div class="room_info_1">
                                <img src="assets/wifi.png" width="28" height="28">&nbsp;&nbsp;
                                <img src="assets/room-service%20(1).png" width="28" height="28">&nbsp;&nbsp;
                                <img src="assets/balcony.png" width="28" height="28">&nbsp;&nbsp;
                                <img src="assets/beach-view.png" width="28" height="28">&nbsp;&nbsp;
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="room_info_2 text-center">
                                <span class="d-block range">from</span>
                                <span class="d-block text_dark value"><?php echo $room_info['room_price']; ?></span>
                                <a href="<?php echo BASE_URL; ?>room-info.php?id=<?php echo $room; ?>" class="btn btn_theme shadow-none">more info <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- column closed -->
            <?php
            }
            ?>
        </div><!-- row -->
    </div><!-- container -->
</section>

<?php
include 'includes/footer.php';
?>