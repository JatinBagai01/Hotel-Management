<?php
define('TITLE', 'Book Your Stay');

include 'includes/header.php';

include 'includes/titlebox.php';
?>

<?php
// include connection
include 'includes/connection.php';

// declare variables and intialize with empty values
$fnameErr = $lnameErr = $emailErr = $mobErr = $ageErr = $alternateErr = $adultsErr = $childErr = $checkinErr = $checkoutErr = $roomtypeErr = $roomErr = "";
$fname = $lname = $email = $mobile = $age = $alternate = $adults = $child = $checkin = $checkout = $roomtype = $roomm = $message = "";

// processing form data on submit form
if (isset($_POST["submit"]) && !empty($_POST["submit"])) {
    if (empty($_POST["fname"])) {
        $fnameErr = "*This field is required";
    } else {
        $fname = test_input($_POST["fname"]);
    }

    if (empty($_POST["lname"])) {
        $lnameErr = "*This field is required";
    } else {
        $lname = test_input($_POST["lname"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "*This field is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email address";
        }
    }

    if (empty($_POST["mobile"])) {
        $mobErr = "*This field is required";
    } else {
        $mobile = test_input($_POST["mobile"]);
        if (strlen($mobile) != 10) {
            $mobErr = "Mobile must contain 10 digits";
        }
        if (!is_numeric($mobile)) {
            $mobErr = "Only numeric value is allowed";
        }
    }

    if (empty($_POST["age"])) {
        $ageErr = "*This field is required";
    } else {
        $age = test_input($_POST["age"]);
        if (!is_numeric($age)) {
            $ageErr = "Only numeric value is allowed";
        }
    }

    if (empty($_POST["alternate"])) {
        $alternateErr = "*This field is required";
    } else {
        $alternate = test_input($_POST["alternate"]);
        if (strlen($mobile) != 10) {
            $mobErr = "Mobile must contain 10 digits";
        }
        if (!is_numeric($alternate)) {
            $alternateErr = "Only numeric value is allowed";
        }
    }

    if (empty($_POST["adults"])) {
        $adultsErr = "*This field is required";
    } else {
        $adults = test_input($_POST["adults"]);
        if (!is_numeric($adults)) {
            $adultsErr = "Only numeric value is allowed";
        }
    }

    if (empty($_POST["child"])) {
        $childErr = "*This field is required";
    } else {
        $child = test_input($_POST["child"]);
        if (!is_numeric($child)) {
            $childErr = "Only numeric value is allowed";
        }
    }

    if (empty($_POST["checkin"])) {
        $checkinErr = "*This field is required";
    } else {
        $checkin = test_input($_POST["checkin"]);
    }

    if (empty($_POST["checkout"])) {
        $checkoutErr = "*This field is required";
    } else {
        $checkout = test_input($_POST["checkout"]);
    }

    if (empty($_POST["roomtype"])) {
        $roomtypeErr = "*This field is required";
    } else {
        $roomtype = test_input($_POST["roomtype"]);
    }

    if (empty($_POST["roomm"])) {
        $roomErr = "*This field is required";
    } else {
        $roomm = test_input($_POST["roomm"]);
        if (!is_numeric($roomm)) {
            $roomErr = "Only numeric value is allowed";
        }
    }

    if (empty($_POST["message"])) {
        // $message = "";
    } else {
        $message = test_input($_POST["message"]);
    }

    // if no errors then submit form data into database
    if (empty($fnameErr) && empty($lnameErr) &&  empty($emailErr) && empty($mobErr) && empty($childErr) && empty($alternateErr) && empty($ageErr) && empty($checkinErr) && empty($checkoutErr) && empty($adultsErr) && empty($roomErr) && empty($roomtypeErr)) {

        $sql = "INSERT INTO reservation (firstname, lastname, email, mobile, age, alternate, adults, children, checkin, checkout, roomtype, room, message) VALUES ('$fname', '$lname', '$email', '$mobile', '$age', '$alternate', '$adults', '$child', '$checkin', '$checkout', '$roomtype', '$roomm', '$message')";

        if (mysqli_query($conn, $sql)) {
            header("Location: http://localhost/Hotel/contact.php?success=1#form");
        }
    }
    mysqli_close($conn);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<section class="section_contact">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-4">
                <div class="contact_info">
                    <div class="card mb-sm-3">
                        <div class="card-body text-center">
                            <h4 class="card-title">Book Your Stay</h4>
                            <p class="card-text">Book your stay online and get upto 15% instant discount on checkout.</p>
                        </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">34-D, Delhi, IN</li>
                        <li class="list-group-item">+91-123-4567-890</li>
                        <li class="list-group-item">info@example.com</li>
                        <li class="list-group-item">Everyday: 06:00 - 22:00</li>
                    </ul>
                </div>
            </div><!-- column closed -->

            <div class="col-lg-8">
                <div class="contact_form">
                    <?php
                    if (isset($_GET["success"]) && !empty($_GET["success"])) {
                        if ($_GET["success"] == 1) { ?>
                            <div class="alert alert-success">
                                Thank You! Your reservation has been confirmed.
                                <span class="closeBtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <form method="POST" action="<?php echo htmlspecialchars(basename($_SERVER["PHP_SELF"])); ?>#form" id="form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" name="fname" class="form-control" placeholder="Firstname*" value="<?php echo $fname; ?>">
                                    <small class="text-danger"><?php echo $fnameErr; ?></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" name="lname" class="form-control" placeholder="Lastname*" value="<?php echo $lname; ?>">
                                    <small class="text-danger"><?php echo $lnameErr; ?></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="E-mail Address*" value="<?php echo $email; ?>">
                                    <small class="text-danger"><?php echo $emailErr; ?></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" name="mobile" class="form-control" placeholder="Mobile*" value="<?php echo $mobile; ?>">
                                    <small class="text-danger"><?php echo $mobErr; ?></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" name="age" class="form-control" placeholder="Age*" value="<?php echo $age; ?>">
                                    <small class="text-danger"><?php echo $ageErr; ?></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" name="alternate" class="form-control" placeholder="Alternate Contact Number*" value="<?php echo $alternate; ?>">
                                    <small class="text-danger"><?php echo $alternateErr; ?></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" name="adults" class="form-control" placeholder="Number of Adults*" value="<?php echo $adults; ?>">
                                    <small class="text-danger"><?php echo $adultsErr; ?></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" name="child" class="form-control" placeholder="Number of Children*" value="<?php echo $child; ?>">
                                    <small class="text-danger"><?php echo $childErr; ?></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" name="checkin" class="form-control" placeholder="Check In Date (dd/mm/yyyy)*" onfocus="(this.type='date')" value="<?php echo $checkin; ?>">
                                    <small class="text-danger"><?php echo $checkinErr; ?></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" name="checkout" class="form-control" placeholder="Check Out Date (dd/mm/yyyy)*" onfocus="(this.type='date')" value="<?php echo $checkout; ?>">
                                    <small class="text-danger"><?php echo $checkoutErr; ?></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <!-- Add select code here -->
                                    <select name="roomtype" class="form-control" value="<?php echo $roomtype; ?>">
                                        <option disabled selected>Select Types of Room</option>
                                        <?php
                                        foreach ($rooms as $room => $room_info) {
                                            echo "<option value='". $room_info['room_title'] ."'>" . $room_info['room_title'] ."</option>";
                                        }

                                        ?>
                                    </select>

                                    <!-- <input type="text" name="checkout" class="form-control" placeholder="Types of Room*" value="<?php //echo $checkout; ?>"> -->
                                    <small class="text-danger"><?php echo $roomtypeErr; ?></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" name="roomm" class="form-control" placeholder="Number of Rooms*" value="<?php echo $roomm; ?>">
                                    <small class="text-danger"><?php echo $roomErr; ?></small>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <textarea name="message" class="form-control" placeholder="Any special requests?" rows="5"></textarea>
                                </div>
                                <input type="submit" name="submit" value="Submit" class="btn btn_theme shadow-none">
                            </div>
                        </div><!-- inner row -->
                    </form><!-- form closed -->
                </div>
            </div><!-- column closed -->
        </div><!-- row -->
    </div><!-- container -->
</section>


<?php
include 'includes/footer.php';
?>