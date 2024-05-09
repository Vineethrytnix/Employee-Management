<?php
include '../connection/connect.php';
$eid = $_REQUEST['eid'];
$status = $_REQUEST['status'];

?>


<?php

if ($status == 'approve') {

    $del = "UPDATE `login` SET `status`='Approved' WHERE `rid`='$eid' AND `type`='Employee'";
    if ($conn->query($del) == TRUE) {
        echo "<script>alert('Employee Approved Successfully'); window.location = 'view_employee.php';</script>";
    } else {
        echo "<script>alert('Failed'); window.location = 'view_employee.php';</script>";
    }
} else if ($status == 'reject') {
    $del = "UPDATE `login` SET `status`='Rejected' WHERE `rid`='$eid' AND `type`='Employee'";

    if ($conn->query($del) == TRUE) {
        echo "<script>alert('Employee Rejected'); window.location = 'view_employee.php';</script>";
    } else {
        echo "<script>alert('Failed'); window.location = 'view_employee.php';</script>";
    }
} else {
    $del = "DELETE FROM `employee` WHERE `eid`='$eid'";
    $dell = "DELETE FROM `login` WHERE `rid`='$eid' and `type`='Employee'";

    if ($conn->query($del) == TRUE && $conn->query($dell) == TRUE) {
        echo "<script>alert('Employee Deleted'); window.location = 'view_patients.php';</script>";
    } else {
        echo "<script>alert('Failed'); window.location = 'view_patients.php';</script>";
    }
}


?>