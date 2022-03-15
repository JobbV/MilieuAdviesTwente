<?php

include 'database.php';

function toonResultaat()
{
    while ($rij = $result->fetch()) {
        $werelddeel  = $rij["Continent"];
        $land       = $rij["Name"];
        $regio      = $rij["Region"];
        echo "$werelddeel - $regio -  $land  <br>";
          }
}

function toonLanden($landen){
    foreach ($landen as $key=>$rij) {
        $werelddeel  = $rij["Continent"];
        $land       = $rij["Name"];
        $regio      = $rij["Region"];
        echo "$werelddeel - $regio -  $land  <br>";
    
    }
}

function toonAllelanden($pdo){
    $sql        = "SELECT Continent, Region, Name 
    FROM country 
    ORDER BY Continent, Region, Name";

// hier maakt hij rijen aan
$result     = $pdo->query($sql);



$landen = $result->fetchAll();

    toonLanden($landen);

}


function toonContinent($pdo, $continent){
    //Filter - gebruik  prepare
 
    $sql = "SELECT Continent, Region, Name  
        FROM country 
        WHERE Continent=:continent 
        ORDER BY Continent, Region, Name";
 
    $statement = $pdo->prepare($sql);
    $statement->bindParam(":continent", $param_continent);
    $param_continent = $continent;
    $statement->execute();

    $landen = $statement->fetchAll();

    toonLanden($landen);

}
?>
