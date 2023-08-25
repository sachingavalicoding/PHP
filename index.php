<?php

if( isset( $_POST['name'])){


  $server = 'localhost';
  $username ="root";
  $password ="";
  

  $con = mysqli_connect($server,$username,$password);

  if(!$con){
    echo " server disconnected ";
  }
  else{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $textarea = $_POST['textarea'];

   
    $sql = "  INSERT INTO `sign-in`. `sign-in` ( `name`, `email`, `password`, `textarea`, `date`) VALUES ( '$name', '$email', '$pass', '$textarea ', current_timestamp())";
    

    if($con->query($sql)==true){
        echo"inserted ";
    }
    else{
        echo "ERROR";
    }

    $con->close();
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <form class="container" action="index.php" method="post">
        <input type="text" name="name" placeholder="NAME" id="name" >
        <input type="email" name ="email" placeholder="email" id="email" >
        <input type="password" name="pass" id="password" placeholder="password" >
        <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="enter text" ></textarea>
        <button type="submit"> submit</button>
    </form>
</body>
</html>

