<?php
include("../connect.php");
if (isset($_POST['submit']))
{
    $category=$_POST['category'];
    $question=$_POST['question'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
    $option4=$_POST['option4'];
    $answer=$_POST['answer'];

    $sql="INSERT INTO quiztable( categoryid, question, option1, option2, option3, option4, answer) VALUES ('$category','$question','$option1','$option2','$option3', '$option4', '$answer')";

    echo $sql;

    $query = MySqli_query($conn, $sql);


    Header("location:addquestion.php");
}
?>