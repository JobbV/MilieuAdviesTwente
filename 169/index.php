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



// als het continent leeg is voer die de code hier onder uit
// als continent niet gevuld is pakt die de if 
if (empty($_GET["vragen"])) {

    toonAllevragen();
} 

// als het niet lukt gebruikt die de code hier onder 
// hier voert die een sql statement uit
// als continent wel gevuld is pakt die deze code
else 
{
$vragen = $_GET["vragen"];
   toonVragem($vragen);
}
    ?>
</body>
</html>