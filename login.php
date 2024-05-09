<?php
session_start();
include './connection/connect.php';

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from pixelwibes.com/template/my-task/html/dist/ui-elements/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2024 10:25:42 GMT -->

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
        <div class="main p-2 py-3 p-xl-5 ">

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
                                <form class="row g-1 p-3 p-md-4" method="post">
                                    <div class="col-12 text-center mb-1 mb-lg-5">
                                        <h1><b>Sign in</b></h1>
                                        <!-- <span>Free access to our dashboard.</span> -->
                                    </div>
                                    <div class="col-12 text-center mb-4">
                                        <a class="btn btn-lg btn-outline-secondary btn-block" href="#">
                                            <span class="d-flex justify-content-center align-items-center">
                                                <img class="avatar xs me-2" src="./assets/images/google.svg" alt="Image Description">
                                                Sign in with your Email
                                            </span>
                                        </a>
                                        <span class="dividers text-muted mt-4">OR</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <label class="form-label">Email address</label>
                                            <input type="email" class="form-control form-control-lg" placeholder="your@email.com" name="email" required pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">
                                            <div class="form-label">
                                                <span class="d-flex justify-content-between align-items-center">
                                                    Password

                                                </span>
                                            </div>
                                            <input type="password" name="password" class="form-control form-control-lg" placeholder="***************" required>
                                        </div>
                                    </div>

                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase" alt="SIGNUP" name="submit">SIGN UP</button>
                                    </div>
                                    <div class="col-12 text-center mt-4">
                                        <span class="text-muted">Don't have an account yet? <a href="register.php" class="text-secondary">Sign up here</a></span><br>
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

</body>

<?php
if (isset($_REQUEST['submit'])) {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    echo $email + "Email";

    // Fetch the hashed password from the database
    $qry = "SELECT * FROM `login` WHERE `email` = '$email'";
    $result = mysqli_query($conn, $qry);

    if ($result && $result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $hashed_password = $data['password'];

        // Verify the provided password against the hashed password
        if (crypt($password, $hashed_password) === $hashed_password) {
            $uid = $data['rid'];
            $type = $data['type'];
            $status = $data['status'];

            $_SESSION['uid'] = $uid;
            $_SESSION['type'] = $type;

            if ($type == 'Admin') {
                echo "<script>alert('Welcome to AdminHome '); window.location = 'Admin/index.php'</script>";
            } else if ($type == 'Employee') {
                if ($status == 'Approved') {
                    echo "<script>alert('Welcome User'); window.location = 'Employee/index.php'</script>";
                } else {
                    echo "<script>alert('Your account is not approved'); window.location = 'login.php'</script>";
                }
            } else {
                echo "<script>alert('Invalid user type'); window.location = 'login.php'</script>";
            }
        } else {
            echo "<script>alert('Invalid Email / Password'); window.location = 'login.php'</script>";
        }
    } else {
        echo "<script>alert('Email not found'); window.location = 'login.php'</script>";
    }
}
?>


</html>