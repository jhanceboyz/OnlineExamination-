<?php
include"header.php";
?>
<?php session_start(); ?>

<?php

if(!isset($_SESSION['userid']))
{
    header('Location: ../login.php');
}else
{
    echo '<script> DisplaySuccess("Welcome Admin"); </script>';
}


?>
<header class="inner">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 id="homeHeading"><a href="index.php">Home</a> / <span>English Quiz Section</span></h1>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p>Please fully complete this quiz.</p>
            </div>
        </div>
        <div class="row">
            <!-- Contact Form-->
            <div class="col-sm-1">
            </div>
            <div class="col-sm-10 template-form">
                <h2 class="contact-heading">Questions for <span>English Quiz:</span></h2>
                <div class="template-space"></div>
                <div  id="contactForm">
                <form action="englishcode.php" method="post">
                    <?php
                    include "connect.php";

                    $sql="Select * from quiztable where categoryid=1";
                    $query=MySqli_query($conn, $sql);
                    $i=1;
                    While($row=MySqli_Fetch_Array($query))
                    {

                        echo'
					<p>'.$i.') '.$row[2].'</p>
					<p class="col-sm-6"> a) '.$row[3].'</p>
					<p class="col-sm-6"> b) '.$row[4].'</p>
					<p class="col-sm-6"> c) '.$row[5].'</p>
					<p class="col-sm-6"> d) '.$row[5].'</p>
					<p class="col-sm-12"> Answer) <select name="question'.$i.'">
					    <option>a</option>
					    <option>b</option>
					    <option>c</option>
					    <option>d</option>
					</select></p>';
                        $i=$i+1;
                    }
                    ?>
                    <input type="submit" value="Submit" class="service-box-button"/>
                    <input type="reset" value="Reset" class="service-box-button"/>
                </form>
                </div>
            </div>
            <div class="col-sm-1">
            </div>
        </div>
    </div>
</section>

<?php
include"footer.php";
?>
