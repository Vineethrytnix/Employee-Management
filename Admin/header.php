<!doctype html>
<html class="no-js" lang="en" dir="ltr">


<!-- Mirrored from pixelwibes.com/template/my-task/html/dist/members.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2024 10:25:05 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Employee Management</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="../assets/css/my-task.style.min.css">
    <style>
        table {
            text-align: center;
        }

        .tawk-min-container {
            display: none !important;
        }
    </style>
</head>

<body data-mytask="theme-indigo">

    <div id="mytask-layout">

        <!-- sidebar -->
        <div class="sidebar px-4 py-4 py-md-5 me-0">
            <div class="d-flex flex-column h-100">
                <a href="index.php" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <img src="../assets/images/management.gif" width="40px" alt="">
                    </span>
                    <span class="logo-text">Employee Management</span>
                </a>
                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1 mt-3">
                    <li><a class="m-link" href="index.php"><i class="icofont-ui-home"></i><span>Home</span></a>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" href="view_employee.php"><i class="icofont-ui-user"></i> <span>Employees</span></a>
                    </li>
                    <li><a class="m-link" href="add_works.php"><i class="icofont-law-document"></i>
                            <span>Assign Task</span></a></li>
                    <li><a class="m-link" href="add_attendance.php"><i class="icofont-users"></i>
                            <span>Add Attendance</span></a></li>
                    <li><a class="m-link" href="view_leave_request.php"><i class="icofont-chair"></i>
                            <span>Leave Request</span></a></li>

                    <li><a class="m-link" href="add_salary.php"><i class="icofont-money"></i>
                            <span>Add Salary</span></a></li>
                    <li><a class="m-link" href="view_payments.php"><i class="icofont-coins"></i>
                            <span>Payment Details</span></a></li>
                </ul>


                <!-- Menu: menu collepce btn -->
                <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                    <span class="ms-2"><i class="icofont-bubble-right"></i></span>
                </button>
            </div>
        </div>

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4">

            <!-- Body: Header -->
            <div class="header">
                <nav class="navbar py-4">
                    <div class="container-xxl">

                        <!-- header rightbar icon -->
                        <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                            <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center">
                                <div class="u-info me-2">
                                    <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Admin</span></p>
                                    <small>Admin@gmail.com</small>
                                </div>
                                <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                    <img class="avatar lg rounded-circle img-thumbnail" src="../assets/images/profile_av.png" alt="profile">
                                </a>
                                <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                    <div class="card border-0 w280">
                                        <div class="card-body pb-0">
                                            <div class="d-flex py-1">
                                                <img class="avatar rounded-circle" src="../assets/images/profile_av.png" alt="profile">
                                                <div class="flex-fill ms-3">
                                                    <p class="mb-0"><span class="font-weight-bold">Admin</span></p>
                                                    <small class="">admin@gmail.com</small>
                                                </div>
                                            </div>

                                            <div>
                                                <hr class="dropdown-divider border-dark">
                                            </div>
                                        </div>
                                        <div class="list-group m-2 ">

                                            <a href="../login.php" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-6 me-3"></i>Signout</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-md-1">
                                <a href="#offcanvas_setting" data-bs-toggle="offcanvas" aria-expanded="false" title="template setting">
                                    <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- menu toggler -->
                        <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                            <span class="fa fa-bars"></span>
                        </button>

                        <!-- main menu Search-->
                        <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                            <div class="input-group flex-nowrap input-group-lg">
                                <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                                <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                                <button type="button" class="input-group-text add-member-top" id="addon-wrappingone" data-bs-toggle="modal" data-bs-target="#addUser"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>