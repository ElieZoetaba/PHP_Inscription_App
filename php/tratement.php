<?php
include("connect.php");
if(isset($_POST["submit,user,pass"])){
    $user=$_POST["user"];
    $pass=$_POST["pass"];

    $sql = "INSERT INTO `batabase`(user,pass) value('$user','$pass')";
    $result= mysqli_query($conn, $sql);
    if($result){
        header("Location: index.php");
        echo "Succes connection";
    }else{
        echo "error";
    }
}else{
    echo "error submit";
}
?>
<?php

require './index.php';

if(isset($_FILES['file'])){
    $file = $uniqueName.".".$extension;
    //$file = 5f586bf96dcd38.73540086.jpg
    
    move_uploaded_file($tmpName, './upload/'.$file);
    
    $req = $db->prepare('INSERT INTO file (name) VALUES (?)');
    $req->execute([$file]);
    
    echo "Image enregistrée";
    ?>
<?php 
    if(isset($_POST["img"])){
        $req = $db->query('SELECT name FROM file');
        while($data = $req->fetch()){
            var_dump($data);
        }
    }else{
        echo"error";
    }
?>
