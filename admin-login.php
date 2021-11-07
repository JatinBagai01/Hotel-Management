<?php
define('TITLE', 'Admin Login');

include 'includes/header.php';

include 'includes/titlebox.php';
?>

<?php
// include connection
include 'includes/connection.php';

// declare variables and intialize with empty values
$loginIDErr = $passwordErr = "";
$loginID = $password = "";

// processing form data on submit form
if (isset($_POST["submit"]) && !empty($_POST["submit"])) {
    if ($_POST["loginID"] != "encoded") {
        $loginIDErr = "*Incorrect";
    } else if (empty($_POST["loginID"])) {
        $loginIDErr = "*This field is required";
    } else {
        $loginID = test_input($_POST["loginID"]);
    }

    if ($_POST["password"] != "encoded") {
        $passwordErr = "*Incorrect";
    } else if (empty($_POST["password"])) {
        $passwordErr = "*This field is required";
    } else {
        $password = test_input($_POST["password"]);
    }

    if ($_POST["password"] == "encoded" && $_POST["loginID"] == "encoded") {
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

<section class="section_contact">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-8">
                <div class="contact_form">
                <?php
                    $myfile = fopen("bin.txt", "r") or die("Unable to open file!");
                    if (fread($myfile, filesize("bin.txt")) == "0") {
                        ?>
                        <form method="POST" action="<?php echo htmlspecialchars(basename($_SERVER["PHP_SELF"])); ?>#" id="form">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mb-4">
                                        <input type="text" name="loginID" class="form-control" placeholder="Login ID*" value="<?php echo $loginID; ?>">
                                        <small class="text-danger"><?php echo $loginIDErr; ?></small>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="mb-4">
                                        <input type="password" name="password" class="form-control" placeholder="Password*" value="<?php echo $password; ?>">
                                        <small class="text-danger"><?php echo $passwordErr; ?></small>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type="submit" name="submit" value="Submit" class="btn btn_theme shadow-none">
                                </div>
                            </div><!-- inner row -->
                        </form><!-- form closed -->
                    <?php
                    } else { ?>
                        <input type="submit" name="submit" value="Enquiries" class="btn btn_theme shadow-none" onclick="on()">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Firstname</th>
                                <th scope="col">Lastname</th>
                                <th scope="col">Email ID</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Messages</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>fname from db</td>
                                    <td>lname from db</td>
                                    <td>email from db</td>
                                    <td>contact from db</td>
                                    <td>message from db</td>
                                </tr>
                            </tbody>
                        </table>
                        <input type="submit" name="submit" value="Reservations" class="btn btn_theme shadow-none" style="margin-top:30px;" onclick="on()">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">Firstname</th>
                                <th scope="col">Lastname</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Age</th>
                                <th scope="col">Alternate Number</th>
                                <th scope="col">No. of Adults</th>
                                <th scope="col">No. of Children</th>
                                <th scope="col">Check In Date</th>
                                <th scope="col">Check Out Date</th>
                                <th scope="col">Type of Room</th>
                                <th scope="col">No. of Rooms</th>
                                <th scope="col">Special Request</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>fname from db</td>
                                    <td>lname from db</td>
                                    <td>email from db</td>
                                    <td>contact from db</td>
                                    <td>age from db</td>
                                    <td>alternate from db</td>
                                    <td>no of adults from db</tb>
                                    <td>no of children from db</tb>
                                    <td>checkin date from db</td>
                                    <td>checkout date from db</td>
                                    <td>typeofroom from db</tb>
                                    <td>no of room from db</tb>
                                    <td>request from db</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="<?php echo BASE_URL; ?>logout.php"><input type="submit" name="submit" value="Logout" class="btn btn_theme shadow-none"></a>
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