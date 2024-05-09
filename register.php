<?php

include './connection/connect.php';

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from pixelwibes.com/template/my-task/html/dist/ui-elements/auth-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2024 10:25:42 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Employee Management</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="./assets/css/my-task.style.min.css">
    <style>
        ::placeholder {
            color: rgb(86, 86, 86) !important;
        }

        #back {
            background-color: rgba(42, 26, 41, 0.928) !important;

        }
    </style>
</head>

<body data-mytask="theme-indigo">

    <div id="mytask-layout">

        <!-- main body area -->
        <div class="main p-2 py-3 p-xl-5">

            <!-- Body: Body -->
            <div class="body d-flex p-0 p-xl-5">
                <div class="container-xxl">

                    <div class="row g-0">
                        <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                            <div style="max-width: 25rem;">
                                <div class="text-center mb-5">
                                    <img src="./assets/images/management.gif" width="150px" alt="">
                                </div>
                                <div class="mb-5">
                                    <h2 class="color-900 text-center"><b>Employee Management</b></h2>
                                </div>
                                <!-- Image block -->
                                <div class="">
                                    <img src="./assets/images/18771.jpg" alt="login-img" style="width: 600px;position: relative;left: -100px;">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                            <div class="w-100 p-3 p-md-5 card border-0 bg-dark text-light" style="max-width: 32rem;" id="back">
                                <!-- Form -->
                                <form class="row g-1 p-3 p-md-4" method="post" enctype="multipart/form-data">
                                    <div class="col-12 text-center mb-1 mb-lg-5">
                                        <h1><b><span style="color: rgb(40, 129, 213);">Create</span> your account</b>
                                        </h1>
                                        <!-- <span>Free access to our dashboard.</span> -->
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" required class="form-control form-control-lg" placeholder="Full Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <label class="form-label">Mobile No</label>
                                            <input type="text" required class="form-control form-control-lg" pattern="[6789][0-9]{9}" maxlength="10" name="phone" minlength="10" placeholder="Mobile No">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <label class="form-label">Email address</label>
                                            <input type="email" class="form-control form-control-lg" placeholder="name@example.com" name="email" required pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <label class="form-label">Designation</label>
                                            <input type="text" required class="form-control form-control-lg" name="designation" placeholder="Designation">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">DOB</label>
                                            <input type="date" class="form-control form-control-lg" placeholder="8+ characters required" name="dob" required max="2005-01-10">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">Password</label>
                                            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control form-control-lg" placeholder="8+ characters required" name="password" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">Profile Image</label>
                                            <input type="file" class="form-control form-control-lg" placeholder="8+ characters required" name="file" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">Address</label>
                                            <textarea name="address" class="form-control form-control-lg" placeholder="Enter Address" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase" alt="SIGNUP" name="submit">SIGN UP</button>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <span class="text-muted">Already have an account? <a href="login.php" title="Sign in" class="text-secondary">Sign in here</a></span><br>
                                        <a href="index.php" title="Sign in" class="text-secondary">Go Home</a>
                                    </div>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>
                    </div> <!-- End Row -->
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="./assets/bundles/libscripts.bundle.js"></script>
    <!-- <img src="./assets/image/" alt=""> -->

</body>



<?php
if (isset($_POST['submit'])) {
    // Assuming $conn is your database connection
    $Name = $_POST['name'];
    $Phone = $_POST['phone'];
    $Address = $_POST['address'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $dob = $_POST['dob'];
    $designation = $_POST['designation'];

    $formatted_dob = date("F j, Y", strtotime($dob));

    echo $formatted_dob;

    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = './assets/image/' . $filename;


    // Generate a random salt using mt_rand() and uniqid()
    $salt = base64_encode(mt_rand() . uniqid());

    // Hash the password using crypt() with bcrypt algorithm
    $hashed_password = crypt($Password, '$2a$10$' . $salt);
    // echo $hashed_password;

    $qryCheck = "SELECT COUNT(*) AS cnt FROM `employee` WHERE `e_email` = '$Email' OR `ephone` = '$Phone'";
    $qryOut = mysqli_query($conn, $qryCheck);

    $fetchData = mysqli_fetch_array($qryOut);

    if ($fetchData['cnt'] > 0) {
        echo "<script>alert('Email or phone number already exists');
            window.location = 'register.php';
        </script>";
    } else {
        if ($filename) {
            if (move_uploaded_file($tempname, $folder)) {
                $qryReg = "INSERT INTO `employee`(`ename`,`e_email`,`ephone`,`eaddress`,`image`,`dob`,`designation`) VALUES('$Name','$Email','$Phone','$Address','$filename','$formatted_dob','$designation')";
                $qryLog = "INSERT INTO `login` (`rid`, `email`, `password`, `type`,`status`) VALUES((SELECT MAX(`eid`) FROM `employee`),'$Email', '$hashed_password','Employee','Registered')";

                if ($conn->query($qryReg) === TRUE && $conn->query($qryLog) === TRUE) {
                    echo "<script>alert('Regsitered As Employee Wait for Admin Approval'); window.location = './register.php';</script>";
                } else {
                    echo "<script>alert('Registration Failed'); window.location = './register.php';</script>";
                }
            }
        } else {
            $qryReg = "INSERT INTO `employee`(`ename`,`e_email`,`ephone`,`eaddress`,`dob`,`designation`) VALUES('$Name','$Email','$Phone','$Address','$formatted_dob','$designation')";
            $qryLog = "INSERT INTO `login` (`rid`, `email`, `password`, `type`,`status`) VALUES((SELECT MAX(`eid`) FROM `employee`),'$Email', '$hashed_password','Employee','Registered')";

            if ($conn->query($qryReg) === TRUE && $conn->query($qryLog) === TRUE) {
                echo "<script>alert('Regsitered As Employee Wait for Admin Approval'); window.location = './register.php';</script>";
            } else {
                echo "<script>alert('Registration Failed'); window.location = './register.php';</script>";
            }
        }
    }
}
?>

<script>
    // Get the input element
    var input = document.getElementById("dob");

    // Get the current date
    var today = new Date().toISOString().split('T')[0];

    // Set the max attribute to today's date
    input.setAttribute('max', today);
</script>

</html>