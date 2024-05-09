<?php

include '../connection/connect.php';
include 'header.php';
$tid=$_REQUEST['tid'];

?>


<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Update Project Status</h3>
                </div>
            </div>
        </div> <!-- Row end  -->

        <div class="row align-item-center">
            <div class="col-md-3"></div>
            <div class="col-md-7">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Project Status</h6>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="firstname" class="form-label">Select Status</label>
                                    <select name="status" class="form-control" id="">
                                        <option selected disabled>Select Status</option>
                                        <option value="In Progress">In Progress</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="admitdate" class="form-label">Date</label>
                                    <input type="date" name="date" class="form-control" id="admitdate" required>
                                    <input type="hidden" name="tid" value="<?php echo $tid ?>" class="form-control" id="admitdate" required>
                                </div>
                                
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary mt-4">Submit</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div><!-- Row end  -->

    </div>
</div>


<?php

include 'footer.php'

?>



<?php 
if (isset($_POST['submit'])){
    $status = $_POST['status'];
    $date = $_POST['date'];
    
    // Assuming $conn is your database connection and $tid is defined somewhere in your code
    // $tid = $_POST['tid']; // Assuming $tid is coming from a hidden input field in your form

    $update = "UPDATE `task` SET `status`='$status', `status_date`='$date' WHERE `tid`='$tid'";
    if ($conn->query($update) === TRUE) {
        echo "<script>alert('Work Status Updated'); window.location = 'view_assigned_work.php';</script>";
    } else {
        echo "<script>alert('Failed'); window.location = 'view_assigned_work.php';</script>";
    }
}
?>
