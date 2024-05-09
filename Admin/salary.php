<?php

include '../connection/connect.php';
include 'header.php';
$eid = $_REQUEST['eid'];

?>

<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">
        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0">Create Invoice</h3>
                </div>
            </div>
        </div> <!-- Row end  -->
        <form action="" method="post">
            <div class="row g-3">

                <?php
                $qry = "SELECT `login`.*,`employee`.* FROM `employee`,`login` WHERE `employee`.`eid`=`login`.`rid` AND `login`.`type`='Employee' AND `login`.`status`='Approved' AND `employee`.`eid`='$eid' ";
                $exe = mysqli_query($conn, $qry);
                while ($row = mysqli_fetch_assoc($exe)) {
                    $status = $row["status"];
                ?>
                    <div class="col-12">
                        <div class="card print_invoice">
                            <div class="card-header border-bottom fs-4">
                                <h5 class="card-title mb-0 fw-bold">SALARY INVOICE</h5>
                            </div>
                            <div class="card-body">
                                <div class="card p-3">
                                    <div class="border-bottom pb-2">
                                        <textarea class="form-control address"><?php echo $row['ename'] ?>,
                                <?php echo $row['eaddress'] ?> 66833
                                Phone : <?php echo $row['ephone'] ?>
                            </textarea>
                                        <div id="logo">
                                            <div id="logoctr">
                                                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                                                <a href="javascript:;" id="save-logo" title="Save changes">Save</a> |
                                                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                                                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
                                            </div>
                                            <div id="logohelp">
                                                <input id="imageloc" type="text" size="50" value=""><br> (max width: 540px, max height: 100px)
                                            </div>
                                            <img id="image" src="../assets/images/salary.png" width="100px" alt="logo">
                                        </div>
                                    </div>
                                    <div style="clear:both"></div>
                                    <div class="customer mt-4">
                                        <textarea class="form-control customer-title">Widget Catalog</textarea>
                                        <table class="meta">
                                            <tbody>
                                                <tr>
                                                    <td class="meta-head">Invoice #</td>
                                                    <td><textarea class="form-control">000123</textarea></td>
                                                </tr>
                                                <tr>
                                                    <td class="meta-head">Date</td>
                                                    <td><input class="form-control" name="date" id="date" type="date"></td>
                                                </tr>
                                                <tr>
                                                    <td class="meta-head">Basic Salary</td>
                                                    <td>
                                                        <input type="text" placeholder="Amount" class="form-control" name="basic_salary" id="basic_salary">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="clear:both">Add Other </div>
                                    <table class="items">
                                        <tbody>
                                            <tr>
                                                <th>Item</th>
                                                <th>Description</th>
                                                <th style="width: 140px;">Cost/Leave</th>
                                                <th style="width: 70px;">No Of Leave</th>
                                                <th style="width: 140px;">Price</th>
                                            </tr>
                                            <tr class="item-row">
                                                <td class="item-name">
                                                    <div class="delete-wpr"><input class='form-control' id="form" placeholder="leave" name="item"></div>
                                                </td>
                                                <td class="description">
                                                    <input type="text" name="desc" class="form-control" placeholder="description">
                                                </td>
                                                <td><input type="text" name="cut_per_day" class="form-control" placeholder="per day salary" id="cut_per_day" onkeyup="calculateSubtotal()" value=""></td>
                                                <td><input type="text" class="form-control" name="no_of_leaves" placeholder="no of leaves" id="no_of_leaves" onkeyup="calculateSubtotal()"></td>
                                                <td><input type="text" class="form-control" name="damount" placeholder="amount" id="damount"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="blank"> </td>
                                                <td colspan="2" class="total-line">Tax Deducted at Source (T.D.S.)</td>
                                                <td class="total-value">
                                                    <div id="tax_div"><input type="text" class="form-control" name="tax" id="tax" onkeyup="calculateSubtotal()"></div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td colspan="2" class="blank"> </td>
                                                <td colspan="2" class="total-line">Subtotal</td>
                                                <td class="total-value">
                                                    <div id="subtotal_div"><input type="text" name="tamount" class="form-control" id="subtotal" readonly></div>
                                                </td>
                                            </tr>

                                            <!-- <tr>
                                    <td colspan="2" class="blank"> </td>
                                    <td colspan="2" class="total-line balance">Balance Due</td>
                                    <td class="total-value balance">
                                        <div class="due">$875.00</div>
                                    </td>
                                </tr> -->
                                        </tbody>
                                    </table>
                                    <div style="clear:both"></div>
                                    <div class="footer-note mt-5">
                                        <h5>Terms</h5>
                                        <textarea class="form-control bg-light">Employees have one paid leave day each month.</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>

                <div class="col-12 text-center text-md-end">
                    <button type="button" class="btn btn-lg btn-primary" onclick="window.print();return false"><i class="fa fa-print me-2"></i>Print Invoice</button>
                    <button type="submit" name="submit" class="btn btn-lg btn-secondary"><i class="fa fa-envelope me-2"></i>Send PDF</button>
                </div>
            </div>
        </form>

    </div><!-- Row end  -->
</div>

<script>
    function calculateSubtotal() {
        var basicSalary = parseFloat(document.getElementById('basic_salary').value);
        var cutPerDay = parseFloat(document.getElementById('cut_per_day').value);
        var noOfLeaves = parseInt(document.getElementById('no_of_leaves').value);
        var tax = parseFloat(document.getElementById('tax').value);

        var leaveAmount = cutPerDay * noOfLeaves;
        var subtotal = basicSalary - leaveAmount - tax;
        
        document.getElementById('damount').value = leaveAmount.toFixed(2);
        document.getElementById('subtotal').value = subtotal.toFixed(2);
    }
</script>


<?php

include 'footer.php'

?>


<?php

if (isset($_POST['submit'])) {

    $date = $_POST['date'];
    $basic_salary = $_POST['basic_salary'];
    $item = $_POST['item'];
    $desc = $_POST['desc'];
    $leave_cost_per_day = $_POST['cut_per_day'];
    $no_of_leave = $_POST['no_of_leaves'];
    $leave_amt = $_POST['damount'];
    $tax = $_POST['tax'];
    $t_amount = $_POST['tamount'];


    $qry = "INSERT INTO `salary`(`eid`,`emp_salary`,`date`,`leave_deduction`,`tax`,`per_day_l_cost`,`total_balance`)VALUES('$eid','$basic_salary','$date','$leave_amt','$tax','$leave_cost_per_day','$t_amount')";

    if ($conn->query($qry) == TRUE) {
        echo "<script>alert('Salary Added Successfully'); window.location = 'add_salary.php';</script>";
    } else {
        echo "<script>alert('Failed'); window.location = 'add_salary.php';</script>";
    }
}
?>