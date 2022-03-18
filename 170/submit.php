<?php

$con = mysqli_connect('localhost','root','','mat_servicedesk');  

if($con){
  echo "";
}
else{
  echo "connect failed";
}

if(isset($_POST['btn'])){
   $vraag = $_POST['vraag'];
   $antwoord = $_POST['antwoord'];

   $sql = "INSERT INTO faq(vragen,antwoorden) 
   values('$vraag','$antwoord')" or die();

   if ($con->query($sql)===TRUE) {
     echo "<div class='submit'>
     <h4>Vraag toegevoegd!</h4>
     <br>Je vraag en antwoord is succesvol toegevoegd.
     <br>vraag: $vraag
     <br>antwoord: $antwoord
     </div>";
   }
   else{
     echo "Error: " . $sql . "<br>" . $con->error;
   }
 }

 $con->close();
?>