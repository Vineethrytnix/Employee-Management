<?php

include '../connection/connect.php';
include 'header.php';
$tid = $_REQUEST['tid'];
$pname = $_REQUEST['pname'];
$eid = $_REQUEST['eid'];

?>


<div class="body d-flex py-3">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Add Project Rating</h3>
                </div>
            </div>
        </div> <!-- Row end  -->

        <div class="row align-item-center">
            <div class="col-md-3"></div>
            <div class="col-md-7">
                <div class="card mb-3">
                    <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold ">Project Rating</h6>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label for="admitdate" class="form-label">Project</label>
                                    <input type="text" name="date" value="<?php echo $pname ?>" readonly class="form-control" id="admitdate" required>

                                </div>
                                <div class="col-md-6">
                                    <label for="firstname" class="form-label">Select Rating</label>
                                    <select name="rating" class="form-control" id="">
                                        <option selected disabled>Select Rating</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
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
if (isset($_POST['submit'])) {
    // Assuming $conn is your database connection
    $rating = $_POST['rating'];
    // $eid = $_POST['eid']; // Assuming you're getting eid from the form

    // Execute count query to get the number of ratings
    $count_query = "SELECT COUNT(*) FROM rating WHERE `eid`='$eid'";
    $count_result = mysqli_query($conn, $count_query);
    
    if ($count_result) {
        $row = mysqli_fetch_row($count_result);
        $count = $row[0];

        if ($count >= 0) {
            // Execute sum query to get the sum of ratings
            $sum_query = "SELECT SUM(rating) FROM rating WHERE `eid`='$eid'";
            $sum_result = mysqli_query($conn, $sum_query);
            
            if ($sum_result) {
                $row = mysqli_fetch_row($sum_result);
                $sum = $row[0];
                
                $avg_rating = $sum / $count;
                echo "Average rating: $avg_rating";

                $set_query = "INSERT INTO `rating` (`eid`, `rating`) VALUES ('$eid', '$rating')";
                $update_query = "UPDATE `employee` SET `rating`='$avg_rating' WHERE `eid`='$eid'";

                if (mysqli_query($conn, $set_query) && mysqli_query($conn, $update_query)) {
                    echo "<script>alert('Rating Added'); window.location = 'add_works.php';</script>";
                } else {
                    echo "<script>alert('Failed'); window.location = 'add_works.php';</script>";
                }
            } else {
                echo "<script>alert('Failed to get sum'); window.location = 'add_works.php';</script>";
            }
        } else {
            echo "<script>alert('No ratings found'); window.location = 'add_works.php';</script>";
        }
    } else {
        echo "<script>alert('Failed to get count'); window.location = 'add_works.php';</script>";
    }
}
?>
