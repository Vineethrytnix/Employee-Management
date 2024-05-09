<?php
session_start();
$uid = $_SESSION['uid'];
include '../connection/connect.php';
include 'header.php';


?>


<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">

        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0 py-3 pb-2">Salary</h3>
                    <div class="col-auto py-2 w-sm-100">
                        <ul class="nav nav-tabs tab-body-header rounded invoice-set" role="tablist">
                            <!-- <li class="nav-item"><a class="nav-link" href="#Invoice-Email" role="tab">Email invoice</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->

        <div class="row justify-content-center">

            <div class="col-lg-12 col-md-12">
                <div class="tab-content">
                    <div class="row justify-content-center">
                        <?php
                        $qry = "SELECT `salary`.*,`employee`.* FROM `employee`,`salary` WHERE `salary`.`eid`=`employee`.`eid` ";
                        $exe = mysqli_query($conn, $qry);
                        while ($row = mysqli_fetch_assoc($exe)) {
                            // $status = $row['status']

                        ?>
                            <div class="col-lg-6 col-md-12">
                                <div class="d-flex justify-content-center">
                                    <table class="card p-5">

                                        <tr>
                                            <td></td>
                                            <td class="text-center">
                                                <table>
                                                    <tr>
                                                        <td class="text-center">
                                                            <h2>Rs. <span style="color :green"><?php echo $row['total_balance'] ?>/-</span> Received</h2>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="pt-2 pb-4">
                                                            <center>
                                                                <table>
                                                                    <tr>
                                                                        <td>
                                                                            Name : <strong><?php echo $row['ename'] ?></strong> <?php echo $row['designation'] ?><br>
                                                                            Email: <?php echo $row['e_email'] ?><br>
                                                                            Phone: <?php echo $row['ephone'] ?><br>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="pt-2">
                                                                            <table class="table table-bordered">
                                                                                <tr>
                                                                                    <th colspan="2" class="text-start">
                                                                                        <center>Date : <?php echo $row['date'] ?></center>
                                                                                    </th>

                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-start">Basic</td>
                                                                                    <td class="text-center">&#8377; <?php echo $row['emp_salary'] ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-start">Leave Deduction</td>
                                                                                    <td class="text-center">&#8377; <?php echo $row['leave_deduction'] ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-start">Tax</td>
                                                                                    <td class="text-center">&#8377; <?php echo $row['tax'] ?></td>
                                                                                </tr>
                                                                                <!-- <tr>
                                                                                <td class="text-start">Instalation and Customization</td>
                                                                                <td class="text-end">&#8377; 8.00</td>
                                                                            </tr> -->
                                                                                <tr>
                                                                                    <td class="text-start w-80"><strong>Total</strong></td>
                                                                                    <td class="text-center fw-bold">&#8377; <?php echo $row['total_balance'] ?> /-</td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </center>
                                                        </td>
                                                    </tr>

                                                </table>

                                            </td>
                                            <td></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        <?php } ?>
                    </div> <!-- Row end  -->
                </div>
            </div>
        </div>
    </div><!-- Row End -->
</div>
</div>


<?php

include 'footer.php'

?>