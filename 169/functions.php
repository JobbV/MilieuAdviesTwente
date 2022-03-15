<link rel="stylesheet" href="styles.css">
<?php
include('database.php');

echo "        
<table>
<tr>
<th>Id</th>
<th>Vraag</th>
<th>Antwoord</th>
</tr>";


function toonResultaat(){

while ($rij = $result->fetch()) {
    $id  = $rij["Id"];
    $vraag      = $rij["Vraag"];
    $antwoord     = $rij["Antwoord"];
    echo "
    <tr>
    <td>$id</td>
    <td>$vraag</td>
    <td>$antwoord</td>
    </tr></table>
      <br>";
      
      
}
}

function toonVragen($vragen){

foreach ($vragen as $key=>$rij) {
    $id  = $rij["id"];
    $vraag       = $rij["vraag"];
    $antwoord      = $rij["antwoord"];
    echo "
    <tr>
    <td>$id</td>
    <td>$vraag</td>
    <td>$antwoord</td>
    </tr>
      <br>";
      

}
echo "</table>";
}


function toonAllevragen()
{
$sql        = "SELECT vraag, antwoord, id
FROM faq 
ORDER BY vraag, antwoord, id";

// hier maakt hij rijen aan
$pdo = maakVraagpdo();
$result     = $pdo->query($sql);



$vragen = $result->fetchAll();

toonVragen($vragen);


}


function toonVraag($vraag)
{
    //Filter - gebruik  prepare
 
    $sql = "SELECT vraag, antwoord, id 
        FROM faq
        WHERE Vraag=:vraag 
        ORDER BY Vraag, Antwoord, Id";
    $pdo = maakVraagpdo();
    $statement = $pdo->prepare($sql);
    $statement->bindParam(":vraag", $param_vraag);
    $param_vraag = $vraag;
    $statement->execute();


    $vragen = $statement->fetchAll();

    toonVragen($vragen);
 
 
}

function menu(){
    
}