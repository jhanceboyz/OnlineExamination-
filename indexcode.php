<?php
include("connect.php");
if (isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $email = stripslashes($username);
    $password = stripslashes($password);

    $sql="Select * from usertable where emailid='".$email."' and password = '".$password."'";
    $query=MySqli_query($conn, $sql);

    if($rows=MySqli_Fetch_Array($query))
    {

        echo '<script> Login Passed("Username or Password is incorrect"); </script>';
        session_start();
        $_SESSION['userid']=$rows[0];
        Header("location:english.php");
    }else{
        echo '<script> DisplayError("Username or Password is incorrect"); </script>';
    }
}
?>