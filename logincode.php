<?php
include("connect.php");
if (isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $username = stripslashes($username);
    $password = stripslashes($password);

    $sql="Select * from logintable where username='".$username."' and password = '".$password."'";
    $query=MySqli_query($conn, $sql);

    if($rows=MySqli_Fetch_Array($query))
    {

        echo '<script> Login Passed("Username or Password is incorrect"); </script>';
        session_start();
        $_SESSION['user']=$username;
        Header("location:admin/index.php");
    }else{
        echo '<script> DisplayError("Username or Password is incorrect"); </script>';
    }
}
?>