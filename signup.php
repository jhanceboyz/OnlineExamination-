<?php
include "header.php";
?>

    <header class="inner">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 id="homeHeading"><a href="index.php">Home</a> / <span>Sign up for Online Quiz!</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-1">

                </div>

                <div class="col-sm-10 template-form">
                    <h2 class="contact-heading">Fill Your <span>Personal Detail</span> for register</h2>
                    <div class="template-space"></div>
                        <form action="signupcode.php" method="post">
                            <div id="contactForm">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>First Name <span style="color:Red">*</span></p>
                                        <input type="text" name="fname" placeholder="First Name" class="form-control" required/>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Last Name <span style="color:Red">*</span></p>
                                        <input type="text" name="lname" placeholder="Last Name" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Email Id <span style="color:Red">*</span></p>
                                        <input type="email" name="email" placeholder="Email Id" class="form-control" required/>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Phone No <span style="color:Red">*</span></p>
                                        <input type="number" name="phone" placeholder="Phone No" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>Password <span style="color:Red">*</span></p>
                                        <input type="password" name="password" placeholder="Password" class="form-control" required/>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>ReEnter Password <span style="color:Red">*</span></p>
                                        <input type="password" name="reenter" placeholder="ReEnter Password" class="form-control" required/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>Address <span style="color:Red">*</span></p>
                                        <input type="text" name="address" placeholder="Address" class="form-control" required/>
                                    </div>
                                </div>
                                <input type="submit" name="submit" class="service-box-button" value="Sign Up" />
                                <input type="reset" class="service-box-button" value="Reset" />
                            </div>
                        </form>
                </div>

                <div class="col-sm-1">

                </div>
            </div>
        </div>
    </section>

<?php
include "footer.php";
?>