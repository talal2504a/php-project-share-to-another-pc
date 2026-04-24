<?php 
include "connection.php";

if(isset($_POST["submit"])){
    $id = $_POST ['id'];
    $first_name = $_POST["first_name"];
    $last_name = $_POST ["last_name"];
    $city = $_POST ["city"];

    $sybu = "INSERT INTO `data`(`id`, `first_name`, `last_name`, `city`) 
    VALUES ('$id','$first_name','$last_name','$city')";


$run = mysqli_query($yo , $sybu);

if($run == true){
    echo " done";
}else{
    echo "not done";
}





}

?>