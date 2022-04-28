<?php
include("./connect.php");
if(isset($_GET["entrez"])){
    $nom=$_GET["nom"];
    $pre=$_GET["prenom"];
    $mail=$_GET["mail"];
    $tel=$_GET["tel"];
    
  $sign= "INSERT INTO `user_table`(nom,prenom,email,telephone) value('$nom', '$pre', '$mail', '$tel')";
  $resulta= mysqli_query($conn, $sign);
  if($resulta){
     header("Location:sign.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
<section>
    <div class="texte">
        <h1>AUF</h1>
        <h3>Inscription</h3>
    </div>
    <form method="get">
        <fieldset>
            <legend>Nom</legend>
            <input type="text" name="nom">
        </fieldset>
        <fieldset>
            <legend>Prenom</legend>
            <input type="text" name="prenom">
        </fieldset>
        <fieldset>
            <legend>Email</legend>
            <input type="text" name="mail">
        </fieldset>
        <fieldset>
            <legend>Telephone</legend>
            <input type="text" name="tel">
        </fieldset>
        <fieldset>
            <input type="submit" name="entrez" value="Sign-up" class="buttun">
            <a href="./index.php"><input type="" value="Sign" class="buttun"></a>
        </fieldset>
    </form>
</section>

<style>
    body{
        background-color: rgba(135, 103, 7, 0.355);
        padding: 0px auto;
        margin: 0px auto;
    }
    form{
    font-size: 1em;
    color: #000;
}
input{
    border: 1px solid;
    height: 20px;
    border-radius: 5px;
}
.buttun{
    background: rgb(102, 16, 16);
    width: 20%;
    padding: 5px;
    height: auto !important;
    border: 2px solid rgb(102, 16, 16);
    color: #fff;
    text-align:center;
    cursor: pointer;
}
fieldset{
    border: none;
}
section{
    width: 30% !important;
    margin: 0px auto;
    display: block;
    justify-content: center;
    border: 1px solid;
    text-align: center;
    padding: 0px auto;
    background-color: #fff;
    padding-bottom: 1%;
    box-shadow: 2px 3px 4px;
}
.texte{
    font-size: 2em;
    background:rgb(102, 16, 16);
    color: white;
    padding: 1%;
    margin-bottom: 8%;
}
h1,h3{
   
    padding: 0px auto;
}
</style>

</body>
</html>