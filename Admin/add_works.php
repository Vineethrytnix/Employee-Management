<?php

include '../connection/connect.php';
include 'header.php'

?>

<style>
    table {
        text-align: center;
    }

    .tawk-min-container {
        display: none !important;
    }
</style>

<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Task Management</h3>
                    <div class="col-auto d-flex w-sm-100">
                        <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#createtask"><i class="icofont-plus-circle me-2 fs-6"></i>Create Task</button>
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
                                    <th>Employee</th>
                                    <th>Project</th>
                                    <th>Last Date</th>
                                    <th>Email</th>
                                    <th>Category</th>
                                    <th>File</th>
                                    <th>Add Rating</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $qry = "SELECT `login`.*,`employee`.*,`task`.* FROM `employee`,`login`,`task` WHERE `employee`.`eid`=`login`.`rid` AND `login`.`type`='Employee' AND `login`.`status`='Approved' AND `task`.`eid`=`employee`.`eid`";
                                $exe = mysqli_query($conn, $qry);
                                while ($row = mysqli_fetch_assoc($exe)) {
                                    $status = $row['status']

                                ?>
                                    <tr>
                                        <td>
                                            <img class="avatar rounded-circle" src="../assets/image/<?php echo $row['image'] ?>" alt="">
                                            <span class="fw-bold ms-1"><?php echo $row['ename'] ?></span>
                                        </td>
                                        <td>
                                            <a href=""><?php echo $row['pname'] ?></a>
                                        </td>
                                        <td>
                                            <a href=""><?php echo $row['edate'] ?></a>
                                        </td>
                                        <td>
                                            <a href=""><?php echo $row['email'] ?></a>
                                        </td>
                                        <td>
                                            <a href=""><?php echo $row['category'] ?></a>
                                        </td>
                                        <td>
                                            <a href="../assets/image/<?php echo $row['file'] ?>">View file</a>
                                        </td>
                                        <td>
                                            <a href="add_rating.php?tid=<?php echo $row['tid'] ?>&eid=<?php echo $row['eid'] ?>&pname=<?php echo $row['pname'] ?>">Add Rating ⭐</a>
                                        </td>
                                        <td>
                                            <?php if ($status == "Assigned") { ?>
                                                <span class="badge bg-success"><?php echo $row['status'] ?></span>
                                            <?php } else if ($status == "In Progress") { ?>
                                                <span class="badge bg-warning"><?php echo $row['status'] ?></span>
                                            <?php } else { ?>
                                                <span class="badge bg-primary"><?php echo $row['status'] ?></span>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                <!-- <button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button> -->
                                                <a href="delete_work.php?tid=<?php echo $row['tid'] ?>" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></a>
                                            </div>
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
<div class="modal fade" id="createtask" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="createprojectlLabel"> Create Task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Project Name</label>
                        <input type="text" class="form-control" placeholder="Enter Project name" name="name" required id="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Task Category</label>
                        <select class="form-select" required name="task_category" aria-label="Default select Project Category">
                            <option selected>UI/UX Design</option>
                            <option value="Website Design">Website Design</option>
                            <option value="App Development">App Development</option>
                            <option value="Quality Assurance">Quality Assurance</option>
                            <option value="Development">Development</option>
                            <option value="Backend Development">Backend Development</option>
                            <option value="Software Testing">Software Testing</option>
                            <option value="Website Design">Website Design</option>
                            <option value="Marketing">Marketing</option>
                            <option value="SEO">SEO</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultipleone" class="form-label">Task Images & Document</label>
                        <input class="form-control" type="file" name="file" id="formFileMultipleone" multiple>
                    </div>
                    <div class="deadline-form mb-3">

                        <div class="row">
                            <div class="col">
                                <label for="datepickerded" class="form-label">Task Start Date</label>
                                <input type="date" name="sdate" required class="form-control" id="datepickerded">
                            </div>
                            <div class="col">
                                <label for="datepickerdedone" class="form-label">Task End Date</label>
                                <input type="date" name="edate" required class="form-control" id="datepickerdedone">
                            </div>
                        </div>

                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-sm">
                            <label class="form-label">Task Assign Person</label>
                            <select class="form-select" name="eid" required multiple aria-label="Default select Priority">
                                <?php

                                $qry = "SELECT `login`.*,`employee`.* FROM `employee`,`login` WHERE `employee`.`eid`=`login`.`rid` AND `login`.`type`='Employee' AND `login`.`status`='Approved'";
                                $exe = mysqli_query($conn, $qry);
                                while ($row = mysqli_fetch_assoc($exe)) {
                                    $status = $row['status']

                                ?>
                                    <option value="<?php echo $row['eid'] ?>"><?php echo $row['ename'] ?></option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-sm">
                            <label class="form-label">Task Priority</label>
                            <select class="form-select" name="complexity" aria-label="Default select Priority" required>
                                <option value="Highest">Highest</option>
                                <option value="Medium">Medium</option>
                                <option value="Low">Low</option>
                                <option value="Lowest">Lowest</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea786" class="form-label">Description (optional)</label>
                        <textarea class="form-control" name="desc" id="exampleFormControlTextarea786" rows="3" placeholder="Add any extra details about the request"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                    <button type="submit" class="btn btn-primary" name="submit">Create</button>
                </div>

            </div>
        </form>
    </div>
</div>

<!-- <img src="" alt=""> -->

<?php

include 'footer.php'

?>



<?php
if (isset($_POST['submit'])) {
    // Assuming $conn is your database connection
    $Name = $_POST['name'];
    $category = $_POST['task_category'];
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];
    $eid = $_POST['eid'];
    $complexity = $_POST['complexity'];
    $desc = $_POST['desc'];

    $formatted_dob = date("F j, Y", strtotime($dob));

    echo $formatted_dob;

    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = '../assets/image/' . $filename;


    if ($filename) {
        if (move_uploaded_file($tempname, $folder)) {
            $qryReg = "INSERT INTO `task`(`eid`,`pname`,`category`,`sdate`,`edate`,`complexity`,`desc`,`file`,`status`)VALUES('$eid','$Name','$category','$sdate','$edate','$complexity','$desc','$filename','Assigned')";

            if ($conn->query($qryReg) === TRUE) {
                echo "<script>alert('New Task Assigned'); window.location = './add_works.php';</script>";
            } else {
                echo "<script>alert('Failed'); window.location = './add_works.php';</script>";
            }
        } else {
            echo "<script>alert('Failed to move file'); window.location = './add_works.php';</script>";
        }
    } else {
        $qryReg = "INSERT INTO `task`(`eid`,`pname`,`category`,`sdate`,`edate`,`complexity`,`desc`,`file`,`status`)VALUES()('$eid','$Name','$category','$sdate','$edate','$complexity','$desc','$filename','Assigned')";

        if ($conn->query($qryReg) === TRUE) {
            echo "<script>alert('New Task Assigned'); window.location = './add_works.php';</script>";
        } else {
            echo "<script>alert('Failed'); window.location = './add_works.php';</script>";
        }
    }
}

?>