<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title></title>
</head>
<body>
  
<?php
include('functions.php');



if (empty($_GET["vragen"])) {
    toonAllevragen();
} 

else 
{
$vragen = $_GET["vragen"];
   toonVragen($vragen);
}
    ?>
</body>
</html>