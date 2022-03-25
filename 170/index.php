<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Voorpagina</title>
</head>
<body>
    
<div class="form">
    <form action="" method="post">
    <br><textarea id="vraag" name="vraag" placeholder="Vraag" rows="4" cols="50"></textarea>
    <br><textarea id="antwoord" name="antwoord" placeholder="Antwoord" rows="4" cols="50"></textarea>
    <br><input type="submit" class="btn btn-success" name="btn" value="Verzenden">
</div>

<div class="form-group">
  <label for="">Date of Birth</label>
  <input type="date" name="dateofbirth" class="form-control" />
</div>


</form>

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
     echo "<script>alert('Vraag succesvol toegevoegd!');</script>";
   }
   else{
     echo "Error: " . $sql . "<br>" . $con->error;
   }
 }




 
 $con->close();
?>

</body>
</html>