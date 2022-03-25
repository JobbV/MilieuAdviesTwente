<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>FAQ</title>
</head>
<body>
    
<?php

include 'database.php';

// Toon faq
function toonfaq($faq){
    foreach ($faq as $key=>$rij) {
        $id  = $rij["id"];
        $vragen       = $rij["vragen"];
        $antwoorden      = $rij["antwoorden"];
        echo "
        <tr>
        <button class='accordion'>$vragen</button>
        <div class='panel'>
        <p>$antwoorden</p>
      </div>
        <td>
        </td>
        </tr>";

    
    }
}

// Toon alle faq SQL
function toonAllefaq($pdo){
    $sql        = "SELECT vragen, antwoorden, id
                FROM faq
                ORDER BY id, antwoorden, vragen ";
    
// hier maakt hij rijen aan
$result     = $pdo->query($sql);

$faq = $result->fetchAll();

    toonfaq($faq);

}

if (empty($_GET["vragen"])) {
    toonallefaq($pdo);
} 

?>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

<div class="navbar">
    
</body>
</html>