<?php
include("./connect.php");
if(isset($_POST["submit"])){
    $user=$_POST["user"];
    $pass=$_POST["pass"];

    $sql = "INSERT INTO `batabase`(user,pass) value('$user','$pass')";
    $result= mysqli_query($conn, $sql);
    if($result){
        header("Location: index.php");
    }else{
        echo "error";
    }
}else{
    echo "error submit";
}
?>