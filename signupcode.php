<?php
include "connect.php";
if (isset($_POST['submit'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $password=$_POST['password'];

    $sql="INSERT INTO usertable( firstname, lastname, emailid, phoneno, address, password) VALUES ('$fname','$lname','$email','$phone','$address', '$password')";

    echo $sql;

    $query = MySqli_query($conn, $sql);


    Header("location:index.php");
}
?>