<link rel="stylesheet" href="styles.css">
<?php
include('database.php');


function toonResultaat(){

while ($rij = $result->fetch()) {
    $id  = $rij["Id"];
    $vraag      = $rij["Vragen"];
    $antwoorden     = $rij["antwoorden"];

    echo "
    $id
    $vragen
    $antwoorden
      <br>";    
}
}

function toonVragen($vragen){

foreach ($vragen as $key=>$rij) {
    $id  = $rij["id"];
    $vragen       = $rij["vragen"];
    $antwoorden    = $rij["antwoorden"];
    echo "
    
    $id
    $vragen
    $antwoorden
      <br>";
}
echo "</table>";
}


function toonAllevragen()
{
$sql        = "SELECT vragen, antwoorden, id
FROM faq 
ORDER BY vragen, antwoorden, id";

// hier maakt hij rijen aan
$pdo = maakVragenpdo();
$result     = $pdo->query($sql);



$vragen = $result->fetchAll();

toonVragen($vragen);


}


function toonVraag($vragen)
{
    //Filter - gebruik  prepare
 
    $sql = "SELECT vragen, antwoorden, id 
        FROM faq
        WHERE Vragen=:vragen
        ORDER BY Vragen, antwoorden, Id";
    $pdo = maakVragenpdo();
    $statement = $pdo->prepare($sql);
    $statement->bindParam(":vragen", $param_vraag);
    $param_vragen = $vragen;
    $statement->execute();


    $vragen = $statement->fetchAll();

    toonVragen($vragen);
 
 
}

function menu(){
    
}