<?php

include '../connection/connect.php';
include 'header.php';


?>


<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Expenses</h3>
                    <div class="col-auto d-flex w-sm-100">
                        <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#expadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add Expenses</button>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->
        <div class="row clearfix g-3">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-body">
                        <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Emp Id</th>
                                    <th>Designation</th>
                                    <th>Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Reason</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $qry = "SELECT `login`.*,`employee`.*,`leave`.* FROM `employee`,`login`,`leave` WHERE `employee`.`eid`=`login`.`rid` AND `login`.`type`='Employee' AND `login`.`status`='Approved' AND `leave`.`eid`=`employee`.`eid`";
                                $exe = mysqli_query($conn, $qry);
                                while ($row = mysqli_fetch_assoc($exe)) {
                                    $status = $row["status"]

                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['lid'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['designation'] ?>
                                        </td>
                                        <td>
                                            <img class="avatar rounded-circle" src="../assets/image/<?php echo $row['image'] ?>" alt="">
                                            <span class="fw-bold ms-1"><?php echo $row['ename'] ?></span>
                                        </td>
                                        <td>
                                            <?php echo $row['sdate'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['edate'] ?>
                                        </td>
                                        <td><?php echo $row['reason'] ?></td>
                                        <td>
                                            <?php if ($status == "Requested") { ?>
                                                <span class="badge bg-dark"><?php echo $row['status'] ?></span>

                                            <?php } else if ($status == "Approved") { ?>

                                                <span class="badge bg-success"><?php echo $row['status'] ?></span>

                                            <?php } else if ($status == "Rejected") { ?>

                                                <span class="badge bg-danger"><?php echo $row['status'] ?></span>

                                            <?php } else { ?>

                                                <span class="badge bg-warning"><?php echo $row['status'] ?></span>

                                            <?php } ?>
                                        </td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- Row End -->
    </div>
</div>


<?php

include 'footer.php'

?>