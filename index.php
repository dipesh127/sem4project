<?php
    ob_start();
    include('header.php');
    $conn= mysqli_connect('localhost','root','','ecommercepractice');
    if(!$conn){
        echo 'connection error: '.mysqli_connect_error();
    }

?>

<?php
include('contents.php'); 
?>

<?php
    include('footer.php');
?>