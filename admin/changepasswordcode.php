<?php
include "../connect.php";
if (isset($_POST['submit'])) {

    $sql = "update logintable set password ='" . $_POST['Password'] . "' where username='Admin'";
    echo $sql;
    $query = MySqli_query($conn, $sql);

    Header("location:../logout.php");
}
?>