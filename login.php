<?php
include "header.php";
?>

    <header class="inner">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 id="homeHeading"><a href="index.php">Home</a> / <span>Admin Login to Create Online Quiz!</span></h1>
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
                    <h2 class="contact-heading">Give Detail <span>to Login</span> for Admin Panel</h2>
                    <div class="template-space"></div>
                    <form action="logincode.php" method="post">
                        <div id="contactForm">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>UserName <span style="color:Red">*</span></p>
                                    <input type="text" name="username" placeholder="UserName" class="form-control" required/>
                                </div>
                                <div class="col-sm-6">
                                    <p>Password <span style="color:Red">*</span></p>
                                    <input type="password" name="password" placeholder="Password" class="form-control" required/>
                                </div>
                            </div>
                            <input type="submit" name="submit" class="service-box-button" value="Login" />
                            <input type="reset" class="service-box-button" value="Reset" />
                        </div>
                    </form>
                </div>

                <div class="col-sm-1">

                </div>

                </div>
            </div>
        </div>
    </section>

<?php
include "footer.php";
?>