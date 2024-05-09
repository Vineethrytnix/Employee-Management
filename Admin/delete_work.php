<?php
include '../connection/connect.php';
$tid = $_REQUEST['tid'];


?>


<?php

$qry="DELETE FROM `task` WHERE `tid`='$tid'";
if ($conn->query($qry) == TRUE) {
    echo "<script>alert('Work Deleted'); window.location = 'add_works.php';</script>";
} else {
    echo "<script>alert('Failed'); window.location = 'add_works.php';</script>";
}


?>