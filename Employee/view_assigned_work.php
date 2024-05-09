<?php

include '../connection/connect.php';
include 'header.php'

?>


<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Task Management</h3>
                    <div class="col-auto d-flex w-sm-100">
                        <!-- <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#createtask"><i class="icofont-plus-circle me-2 fs-6"></i>Create Task</button> -->
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row clearfix  g-3">

            <div class="col-lg-12 col-md-12 flex-column">
                <div class="row taskboard g-3 py-xxl-4">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-4 mt-sm-4 mt-4">
                        <h6 class="fw-bold py-3 mb-0">Assigned</h6>
                        <?php
                        $qry = "SELECT `employee`.*,`task`.* FROM `employee`,`task` WHERE `employee`.`eid`=`task`.`eid` AND `task`.`status`='Assigned'";
                        $exe = mysqli_query($conn, $qry);
                        while ($row = mysqli_fetch_assoc($exe)) {
                            $status = $row['status']

                        ?>
                            <div class="progress_task">
                                <div class="dd" data-plugin="nestable">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="1">
                                            <div class="dd-handle">
                                                <div class="task-info d-flex align-items-center justify-content-between">
                                                    <h6 class="light-success-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0"><?php echo $row['category'] ?>
                                                    </h6>
                                                    <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                        <div class="avatar-list avatar-list-stacked m-0">
                                                            <img class="avatar rounded-circle small-avt" src="../assets/images/folder.png" alt="">

                                                        </div>
                                                        <span class="badge bg-warning text-end mt-2"><?php echo $row['complexity'] ?></span>
                                                    </div>
                                                </div>
                                                <h4 class="py-2 mb-0"><b><?php echo $row['pname'] ?></b></h4>
                                                <p class="py-2 mb-0"><?php echo $row['desc'] ?></p>
                                                <div class="tikit-info row g-3 align-items-center">
                                                    <div class="col-sm">
                                                        <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                            <li class="me-2">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="icofont-flag"></i>
                                                                    <span class="ms-1"><?php echo $row['edate'] ?></span>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="icofont-paper-clip"></i>
                                                                    <!-- <span class="ms-1">File</span> -->
                                                                    <a href="../assets/image/<?php echo $row['file'] ?>" target="_blank">File</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm text-end">
                                                        <a href="update_work_status.php?tid=<?php echo $row['tid'] ?>">
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Update Status </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>

                                    </ol>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-0 mt-sm-0 mt-0">
                        <h6 class="fw-bold py-3 mb-0">In Progress</h6>
                        <?php
                        $qry = "SELECT `employee`.*,`task`.* FROM `employee`,`task` WHERE `employee`.`eid`=`task`.`eid` AND `task`.`status`='In Progress'";
                        $exe = mysqli_query($conn, $qry);
                        while ($row = mysqli_fetch_assoc($exe)) {
                            $status = $row['status']

                        ?>
                            <div class="review_task">
                                <div class="dd" data-plugin="nestable">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="1">
                                            <div class="dd-handle">
                                                <div class="task-info d-flex align-items-center justify-content-between">
                                                    <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0"><?php echo $row['category'] ?></h6>
                                                    <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                        <div class="avatar-list avatar-list-stacked m-0">
                                                            <img class="avatar rounded-circle small-avt" src="../assets/images/folder.png" alt="">

                                                        </div>
                                                        <span class="badge bg-warning text-end mt-2"><?php echo $row['complexity'] ?></span>
                                                    </div>
                                                </div>
                                                <h4 class="py-2 mb-0"><b><?php echo $row['pname'] ?></b></h4>
                                                <p class="py-2 mb-0"><?php echo $row['desc'] ?></p>
                                                <div class="tikit-info row g-3 align-items-center">
                                                    <div class="col-sm">
                                                        <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                            <li class="me-2">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="icofont-flag"></i>
                                                                    <span class="ms-1"><?php echo $row['edate'] ?></span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="icofont-paper-clip"></i>
                                                                    <!-- <span class="ms-1">File</span> -->
                                                                    <a href="../assets/image/<?php echo $row['file'] ?>" target="_blank"> File</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm text-end">

                                                        <a href="update_work_status.php?tid=<?php echo $row['tid'] ?>">
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Update Status </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>

                                    </ol>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 mt-xxl-4 mt-xl-4 mt-lg-4 mt-md-0 mt-sm-0 mt-0">
                        <h6 class="fw-bold py-3 mb-0">Completed</h6>
                        <?php
                        $qry = "SELECT `employee`.*,`task`.* FROM `employee`,`task` WHERE `employee`.`eid`=`task`.`eid` AND `task`.`status`='Completed'";
                        $exe = mysqli_query($conn, $qry);
                        while ($row = mysqli_fetch_assoc($exe)) {
                            $status = $row['status']

                        ?>
                            <div class="completed_task">
                                <div class="dd" data-plugin="nestable">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="1">
                                            <div class="dd-handle">
                                                <div class="task-info d-flex align-items-center justify-content-between">
                                                    <h6 class="light-info-bg py-1 px-2 rounded-1 d-inline-block fw-bold small-14 mb-0"><?php echo $row['category'] ?></h6>
                                                    <div class="task-priority d-flex flex-column align-items-center justify-content-center">
                                                        <div class="avatar-list avatar-list-stacked m-0">
                                                            <img class="avatar rounded-circle small-avt" src="../assets/images/folder.png" alt="">

                                                        </div>
                                                        <span class="badge bg-warning text-end mt-2"><?php echo $row['complexity'] ?></span>
                                                    </div>
                                                </div>
                                                <h4 class="py-2 mb-0"><b><?php echo $row['pname'] ?></b></h4>
                                                <p class="py-2 mb-0"><?php echo $row['desc'] ?></p>
                                                <div class="tikit-info row g-3 align-items-center">
                                                    <div class="col-sm">
                                                        <ul class="d-flex list-unstyled align-items-center flex-wrap">
                                                            <li class="me-2">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="icofont-flag"></i>
                                                                    <span class="ms-1"><?php echo $row['edate'] ?></span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="icofont-paper-clip"></i>
                                                                    <!-- <span class="ms-1">File</span> -->
                                                                    <a href="../assets/image/<?php echo $row['file'] ?>" target="_blank"> File</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm text-end">

                                                        <a href="update_work_status.php?tid=<?php echo $row['tid'] ?>">
                                                            <div class="small text-truncate light-danger-bg py-1 px-2 rounded-1 d-inline-block fw-bold small"> Update Status </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>

                                    </ol>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include 'footer.php'

?>