<?php

include '../connection/connect.php';
include 'header.php';


?>

<div class="body d-flex py-lg-3 py-md-2">
    <div class="container-xxl">

        <div class="row align-items-center">
            <div class="border-0 mb-4">
                <div class="card-header no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                    <h3 class="fw-bold mb-0 py-3 pb-2">Provide Salary</h3>
                    <div class="col-auto py-2 w-sm-100">
                        <ul class="nav nav-tabs tab-body-header rounded invoice-set" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Invoice-list" role="tab">Invoice List</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Invoice-Simple" role="tab">Simple invoice</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Invoice-Email" role="tab">Email invoice</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- Row end  -->

        <div class="row justify-content-center">

            <div class="col-lg-12 col-md-12">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Invoice-list">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-12">
                                <?php

                                $qry = "SELECT `login`.*,`employee`.* FROM `employee`,`login` WHERE `employee`.`eid`=`login`.`rid` AND `login`.`type`='Employee' AND `login`.`status`='Approved' ";
                                $exe = mysqli_query($conn, $qry);
                                while ($row = mysqli_fetch_assoc($exe)) {
                                    $status = $row["status"]

                                ?>
                                    <div class="card mb-3">
                                        <div class="card-body d-sm-flex justify-content-between">
                                            <a href="javascript:void(0);" class="d-flex">
                                                <img class="avatar rounded-circle" src="../assets/image/<?php echo $row['image'] ?>" alt="">
                                                <div class="flex-fill ms-3 text-truncate">
                                                    <h6 class="d-flex justify-content-between mb-0"><span><?php echo $row['ename'] ?></span></h6>
                                                    <span class="text-muted"><?php echo $row['designation'] ?></span>
                                                </div>
                                            </a>
                                            <div class="text-end d-none d-md-block">
                                                <p class="mb-1"><i class="icofont-location-pin ps-1"></i> <?php echo $row['eaddress'] ?></p>
                                                <span class="text-muted"><i class="icofont-ui-call ps-1"></i> <?php echo $row['ephone'] ?></span>
                                            </div>
                                        </div>
                                        <div class="card-footer justify-content-between d-flex align-items-center">
                                            <div class="d-none d-md-block">
                                                <strong>Date of Birth : </strong>
                                                <span><?php echo $row['dob'] ?></span>
                                            </div>
                                            <div class="card-hover-show">
                                                <a class="btn btn-sm btn-white border lift" href="salary.php?eid=<?php echo $row['eid'] ?>">Add Salary</a>
                                                <!-- <a class="btn btn-sm btn-white border lift" href="#">Send</a>
                                                <a class="btn btn-sm btn-white border lift" href="#">Delete</a> -->
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div> <!-- Row end  -->
                    </div> <!-- tab end  -->
                    <div class="tab-pane fade" id="Invoice-Simple">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-12">
                                <div class="card p-xl-5 p-lg-4 p-0">
                                    <div class="card-body">
                                        <div class="mb-3 pb-3 border-bottom">
                                            Invoice
                                            <strong>01/Nov/2020</strong>
                                            <span class="float-end"> <strong>Status:</strong> Pending</span>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-sm-6">
                                                <h6 class="mb-3">From:</h6>
                                                <div><strong>Deo web</strong></div>
                                                <div>111 Berkeley Rd</div>
                                                <div>STREET ON THE FOSSE, Poland</div>
                                                <div>Email: info@deoweb.com</div>
                                                <div>Phone: +44 888 666 3333</div>
                                            </div>

                                            <div class="col-sm-6">
                                                <h6 class="mb-3">To:</h6>
                                                <div><strong> Colin Web</strong></div>
                                                <div>45 Larissa Court</div>
                                                <div>Victoria, BIRDWOODTON</div>
                                                <div>Email: ColinWeb@gmail.com</div>
                                                <div>Phone: +66 243 456 789</div>
                                            </div>
                                        </div> <!-- Row end  -->

                                        <div class="table-responsive-sm">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th>Project</th>
                                                        <th>Description</th>
                                                        <th class="text-end">Project Cost</th>
                                                        <th class="text-center">Members</th>
                                                        <th class="text-end">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td>Box of Crayons</td>
                                                        <td>Extended License</td>
                                                        <td class="text-end">$1999,00</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-end">$1999,00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">2</td>
                                                        <td>Fast Cad</td>
                                                        <td>Instalation and Customization (cost per hour)</td>
                                                        <td class="text-end">$50,00</td>
                                                        <td class="text-center">2</td>
                                                        <td class="text-end">$100,00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">3</td>
                                                        <td>Hosting</td>
                                                        <td>1 year subcription</td>
                                                        <td class="text-end">$499,00</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-end">$499,00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">4</td>
                                                        <td>Platinum Support</td>
                                                        <td>1 year subcription 24/7</td>
                                                        <td class="text-end">$3.999,00</td>
                                                        <td class="text-center">1</td>
                                                        <td class="text-end">$3.999,00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-sm-5">

                                            </div>

                                            <div class="col-lg-4 col-sm-5 ms-auto">
                                                <table class="table table-clear">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>Subtotal</strong></td>
                                                            <td class="text-end">$6.597,00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>VAT (10%)</strong></td>
                                                            <td class="text-end">$659,7</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Total</strong></td>
                                                            <td class="text-end"><strong>$7.256,7</strong></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div> <!-- Row end  -->

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h6>Terms &amp; Condition</h6>
                                                <p class="text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over</p>
                                            </div>
                                            <div class="col-lg-12 text-end">
                                                <button type="button" class="btn btn-outline-secondary btn-lg my-1"><i class="fa fa-print"></i> Print</button>
                                                <button type="button" class="btn btn-primary btn-lg my-1"><i class="fa fa-paper-plane-o"></i> Send Invoice</button>
                                            </div>
                                        </div> <!-- Row end  -->
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Row end  -->
                    </div> <!-- tab end  -->
                    <div class="tab-pane fade" id="Invoice-Email">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 col-md-12">
                                <div class="d-flex justify-content-center">
                                    <table class="card p-5">
                                        <tr>
                                            <td></td>
                                            <td class="text-center">
                                                <table>
                                                    <tr>
                                                        <td class="text-center">
                                                            <h2>$48.98 Paid</h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center py-2">
                                                            <h4 class="mb-0">Thanks for using PXL Inc.</h4>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-2 pb-4">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        Attn: <strong>Ryan MacLeod</strong> Winston Salem FL 27107<br>
                                                                        Email: RyanmacLeod@gmail.com<br>
                                                                        Phone: +88 123 456 789<br>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pt-2">
                                                                        <table class="table table-bordered">
                                                                            <tr>
                                                                                <td class="text-start">Extended License</td>
                                                                                <td class="text-end">$ 20.99</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-start">1 year subcription</td>
                                                                                <td class="text-end">$ 19.99</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-start">Instalation and Customization</td>
                                                                                <td class="text-end">$ 8.00</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-start w-80"><strong>Total</strong></td>
                                                                                <td class="text-end fw-bold">$ 48.98</td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-2 pb-2 text-center">
                                                            <a href="#">View in browser</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="p-0 text-center">
                                                            PXL Inc. 47 Aurora St. South West, CT 06074
                                                        </td>
                                                    </tr>
                                                </table>
                                                <table class="mt-3 text-center w-100">
                                                    <tr>
                                                        <td class="aligncenter content-block">Questions? Email <a href="mailto:">info@pixelwibes.com</a></td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- Row end  -->
                    </div> <!-- tab end  -->
                </div>
            </div>

        </div> <!-- Row end  -->
    </div>
</div>

<?php

include 'footer.php'

?>