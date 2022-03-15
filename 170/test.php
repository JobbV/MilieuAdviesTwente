<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
<title>Read voorbeeld</title>
</head>
<body>
    
<?php

include 'functions.php';

if (empty($_GET["continent"])) {
    toonalleLanden($pdo);
} 

else 
{
    $continent = $_GET["continent"];
    toonContinent($pdo, $continent);
}

?>

</body>
</html>