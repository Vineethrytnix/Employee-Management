<?php

include '../connection/connect.php';
include 'header.php'

?>
<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card border-0 mb-4 no-bg">
                    <div class="card-header py-3 px-0 d-sm-flex align-items-center  justify-content-between border-bottom">
                        <h3 class=" fw-bold flex-fill mb-0 mt-sm-0">Employee</h3>
                        <button type="button" class="btn btn-dark me-1 mt-1 w-sm-100" data-bs-toggle="modal" data-bs-target="#createemp"><i class="icofont-plus-circle me-2 fs-6"></i>Add Employee</button>
                        <!-- <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle mt-1  w-sm-100" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                Status
                            </button>
                            <ul class="dropdown-menu  dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item" href="#">All</a></li>
                                <li><a class="dropdown-item" href="#">Task Assign Members</a></li>
                                <li><a class="dropdown-item" href="#">Not Assign Members</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div><!-- Row End -->
        <div class="row g-3 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2 row-deck py-1 pb-4">
            <?php

            $qry = "SELECT `login`.*,`employee`.* FROM `employee`,`login` WHERE `employee`.`eid`=`login`.`rid` AND `login`.`type`='Employee'";
            $exe = mysqli_query($conn, $qry);
            while ($row = mysqli_fetch_assoc($exe)) {
                $status=$row['status']

            ?>
                <div class="col">
                    <div class="card teacher-card">
                        <div class="card-body d-flex">
                            <div class="profile-av pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                                <img src="../assets/image/<?php echo $row['image'] ?>" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                    <!-- <div class="followers me-2">
                                        <i class="icofont-tasks color-careys-pink fs-4"></i>
                                        <span class="">04</span>
                                    </div> -->
                                    <div class="star me-2">
                                    <span class=""><b><?php echo $row['designation'] ?></b></span><br>
                                        <i class="icofont-star text-warning fs-4"></i>
                                        
                                        <span class=""><?php echo $row['rating'] ?></span>
                                    </div>
                                    <!-- <div class="own-video">
                                        <i class="icofont-data color-light-orange fs-4"></i>
                                        <span class="">04</span>
                                    </div> -->
                                </div>
                            </div>
                            <div class="teacher-info border-start ps-xl-4 ps-md-3 ps-sm-4 ps-4 w-100">
                                <h6 class="mb-0 mt-2  fw-bold d-block fs-6"><?php echo $row['ename'] ?></h6>
                                <span class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1"><?php echo $row['designation'] ?></span>
                                <div class="video-setting-icon mt-3 pt-3 border-top">
                                    <p>Email : <?php echo $row['e_email'] ?> <br>
                                       Phone : <?php echo $row['ephone'] ?> <br>
                                       DOB : <?php echo $row['dob'] ?> <br>
                                       Address : <?php echo $row['eaddress'] ?> <br></p>
                                </div>

                                <?php if ($status == 'Registered') {?>

                                <a href="update_employee_status.php?eid=<?php echo $row['eid'] ?>&status=approve" class="btn btn-success btn-sm mt-1" style='color:white;'>✔&nbsp;&nbsp; Approve </a>
                                <a href="update_employee_status.php?eid=<?php echo $row['eid'] ?>&status=reject" class="btn btn-dark btn-sm mt-1">❌&nbsp;&nbsp; Reject</a>

                                <?php } else if ($status == 'Approved') {?>
                                    <a class="btn btn-primary btn-sm mt-1" style='color:white;'>✔&nbsp;&nbsp; Approved </a>
                                    <a href="update_employee_status.php?eid=<?php echo $row['eid'] ?>&status=delete" class="btn btn-danger btn-sm mt-1" style='color:white;'>❌&nbsp;&nbsp; Delete</a>

                                <?php } else if ($status == 'Rejected') {?>
                                    <a class="btn btn-dark btn-sm mt-1">❌&nbsp;&nbsp; Rejected</a>
                                    
                                <?php } else {?>
                                    <a href="update_employee_status.php?eid=<?php echo $row['eid'] ?>&status=delete" class="btn btn-danger btn-sm mt-1" style='color:white;'>❌&nbsp;&nbsp; Reject</a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</div>

<?php

include 'footer.php'

?>