<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP</title>
   <style>
      li{
         color: blue;
         list-style: none;
      }
   </style>
</head>
<body>
    <?php
    /*  adding simple tags 
    echo "Hello <br>";
    echo " <h1> Im  Sachin </h1>  "; */
   ?> 
   <?php
   $name = array("Sachin","Nayan","mayur","karan","Su","off");
    ?>
   <h1> Names </h1>
   <ul>
      <?php foreach($name as $value){  ?>
         <li> <?php 
            if(strlen($value) >= 5){
               echo $value;
            }
            ?> </li>
         <?php } ?>
   </ul>
   
</body>
</html>