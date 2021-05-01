<?php

$mysqli = new mysqli('localhost', 'root' ,'','portfolio') or die(mysqli_error($mysqli));
if(isset($_POST['submit'])){
    $namee=$_POST['namee'];
    $email=$_POST['email'];
    $describe=$_POST['describe'];
   

    $mysqli->query("INSERT INTO `mydata`(`namee`, `email`, `describee`) VALUES ('$namee','$email','$describe')") or
    die($mysqli->error);
    echo '<script>alert("Thanks for getting in touch! 😃 I will get back to you by email as soon as I can."); window.location.href="index.php";</script>';
}


?>