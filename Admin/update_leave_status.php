<?php
include '../connection/connect.php';
$lid = $_REQUEST['lid'];
$status = $_REQUEST['status'];

?>


<?php

if ($status == 'approve') {

    $del ="UPDATE `leave` SET `status`='Approved' WHERE `lid`='$lid'";
    if ($conn->query($del) == TRUE) {
        echo "<script>alert('Leave Request Approved'); window.location = 'view_leave_request.php';</script>";
    } else {
        echo "<script>alert('Failed'); window.location = 'view_leave_request.php';</script>";
    }
} else {
    $del ="UPDATE `leave` SET `status`='Rejected' WHERE `lid`='$lid'";

    if ($conn->query($del) == TRUE) {
        echo "<script>alert('Leave Request Rejected'); window.location = 'view_employee.php';</script>";
    } else {
        echo "<script>alert('Failed'); window.location = 'view_employee.php';</script>";
    }
}


?>
