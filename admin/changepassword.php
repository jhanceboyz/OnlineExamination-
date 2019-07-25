
<?php
include "header.php";
?>

                <!--banner-->
                <div class="banner">
                    <h2>
                        <a href="index.php">Home</a>
                        <i class="fa fa-angle-right"></i>
                        <span>Password</span>
                    </h2>
                </div>

                <!-- Add Form -->
                <div class="grid-form">
                    <div class="grid-form1">
                        <div class="alert alert-dismissible alert-success">
                            <strong>Update Password</strong>
                        </div>

                        <div class="tab-content">
                            <form class="form-horizontal" id="frmInvoices" action="changepasswordcode.php" method="post">

                                <!--New Password-->
                                <div class="form-group">
                                    <label for="Password" class="col-sm-2 control-label">New Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="Password" name="Password" placeholder="Password" data-rule-required="true" />
                                    </div>
                                </div>

                                <!--Confirm Password-->
                                <div class="form-group">
                                    <label for="password_confirm" class="col-sm-2 control-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Password" data-rule-required="true" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" name="submit" class="btn btn-raised btn-primary">Update Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



<?php
include "footer.php";
?>