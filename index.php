<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form</title>
</head>
<body>


<form action="" method="post">
  Example value: <input name="example" type="text" />
  Example value 2: <input name="example2" type="text" />
  <input name="submit" type="submit" />
</form>
   <div>
      <h1> Ans </h1>
      <?php
  if (isset($_POST['submit'])) {
     $example = $_POST['example'];
     $example2 = $_POST['example2'];
     echo $example + $example2;
   }
   ?>
   </div>
</body>
</html>