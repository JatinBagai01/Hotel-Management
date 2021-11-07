<?php
define('TITLE', 'Admin Login');

include 'includes/header.php';

include 'includes/titlebox.php';
?>

<?php
// include connection
include 'includes/connection.php';

// declare variables and intialize with empty values
$fnameErr = $lnameErr = "";
$fname = $lname = "";

// processing form data on submit form
if (isset($_POST["submit"]) && !empty($_POST["submit"])) {
    if ($_POST["fname"] != "encoded") {
        $fnameErr = "*Incorrect";
    } else if (empty($_POST["fname"])) {
        $fnameErr = "*This field is required";
    } else {
        $fname = test_input($_POST["fname"]);
    }

    if ($_POST["lname"] != "encoded") {
        $fnameErr = "*Incorrect";
    } else if (empty($_POST["lname"])) {
        $lnameErr = "*This field is required";
    } else {
        $lname = test_input($_POST["lname"]);
    }

    if ($_POST["lname"] == "encoded" && $_POST["fname"] == "encoded") {
        // $myfilebin = fopen("bin.txt", "r") or die("Unable to open file!");
        // $txt;
        // if (fread($myfilebin, filesize("bin.txt")) == "0") {
            $txt = "1";
        // }
        $myfile = fopen("bin.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $txt);
        fclose($myfile);
        // fclose($myfilebin);
        // header('Location: index.php');
        //                     exit;
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    // echo $data;
    return $data;
}

?>

<!-- section: contact_us -->
<section class="section_contact">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-4">
                <div class="contact_info">
                    <div class="card mb-sm-3">
                        <div class="card-body text-center">
                            <i class="far fa-envelope fa-2x mb-2"></i>
                            <h4 class="card-title">Ask Your Queries</h4>
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
                                Thank You!, We will contact you soon
                                <span class="closeBtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            </div>
                        <?php
                            // $myfilebin = fopen("bin.txt", "r") or die("Unable to open file!");
                            // if (fread($myfilebin, filesize("bin.txt")) == "0") {
                            //     $txt = "1";
                            // }
                            // $myfile = fopen("bin.txt", "w") or die("Unable to open file!");
                            // fwrite($myfile, $txt);
                            // fclose($myfile);
                            // fclose($myfilebin);
                            // header('Location: admin-login.php');
                            // exit;
                        }
                    }
                    $myfile = fopen("bin.txt", "r") or die("Unable to open file!");
                    if (fread($myfile, filesize("bin.txt")) == "0") {
                        ?>
                        <form method="POST" action="<?php echo htmlspecialchars(basename($_SERVER["PHP_SELF"])); ?>#" id="form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" name="fname" class="form-control" placeholder="Login Id*" value="<?php echo $fname; ?>">
                                        <small class="text-danger"><?php echo $fnameErr; ?></small>
                                    </div>
                                </div>
                                <!-- <br><br><br> -->
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" name="lname" class="form-control" placeholder="Password*" value="<?php echo $lname; ?>">
                                        <small class="text-danger"><?php echo $lnameErr; ?></small>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="E-mail Address*" value="<?php //echo $email; 
                                                                                                                                ?>">
                                    <small class="text-danger"><?php //echo $emailErr; 
                                                                ?></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" name="mobile" class="form-control" placeholder="Mobile*" value="<?php //echo $mobile; 
                                                                                                                        ?>">
                                    <small class="text-danger"><?php //echo $mobErr; 
                                                                ?></small>
                                </div>
                            </div> -->
                                <div class="col-lg-12">
                                    <!-- <div class="mb-3">
                                    <textarea name="message" class="form-control" placeholder="Your Message*" rows="5"></textarea>
                                </div> -->
                                    <input type="submit" name="submit" value="Submit" class="btn btn_theme shadow-none">
                                </div>
                            </div><!-- inner row -->
                        </form><!-- form closed -->
                    <?php
                    } else { ?>
                        <div class="col-lg-6">
                            <!-- <div class="mb-3">
                                    <input type="text" name="lname" class="form-control" placeholder="Password*" value="<?php //echo $lname; ?>">
                                    <small class="text-danger"><?php //echo $lnameErr; ?></small>
                                </div> -->
                            <h3>You're Logged In!</h3>
                            <button></button>
                        </div>
                    <?php
                    }
                    fclose($myfile);
                    ?>
                </div>
            </div><!-- column closed -->
        </div><!-- row -->
    </div><!-- container -->
</section>


<?php
include 'includes/footer.php';
?>