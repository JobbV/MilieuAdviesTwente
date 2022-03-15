<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Admin - vragen</title>
</head>
<body>
    
<?php

include '../database/console.php';


// Functie om vragen weer te geven
echo "
<div class='styled-table'>        
<table align='center' height='100%' width='100%'>
<tr>
<thead>
<th>ID</th>
<th>username</th>
<th>onderwerp</th>
<th>Tekstbericht</th>
<th>Actie</th>
</thead>
</tr>";

// Toon gegevens
function toongegevens($gegevens){
    foreach ($gegevens as $key=>$rij) {
        $id  = $rij["id"];
        $username       = $rij["username"];
        $onderwerp      = $rij["onderwerp"];
        $tekstbericht      = $rij["tekstbericht"];
        echo "
        <tr>
        <td>$id</td>
        <td>$username</td>
        <td>$onderwerp</td>
        <td>$tekstbericht</td>
        <td>
        <a href='view.php'><i class='fa fa-eye'></i></a>
        <a href='answer.php'><i class='fa fa-edit'></i></a>
        <a href='delete.php'><i class='fa fa-trash'></i></a>
        </td>
        </tr>";

    
    }
    echo "    </table></div>";
}

// Toon alle gegevens SQL
function toonAllegegevens($pdo){
    $sql        = "SELECT username, tekstbericht, onderwerp, id
                FROM users ";

// hier maakt hij rijen aan
$result     = $pdo->query($sql);

$gegevens = $result->fetchAll();

    toongegevens($gegevens);

}

if (empty($_GET["username"])) {
    toonallegegevens($pdo);
} 

?>

</body>
</html>