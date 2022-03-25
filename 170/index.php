<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vragen toevoegen</title>
</head>
<body>
    
<div class="form">
    <form action="" method="post">
    <br><textarea id="vraag" name="vraag" placeholder="Vraag" rows="4" cols="50"></textarea>
    <br><textarea id="antwoord" name="antwoord" placeholder="Antwoord" rows="4" cols="50"></textarea>
    <br><br><br><input type="submit" class="btn btn-success" name="btn" value="Verzenden">
</div>

<div class="form-group">
  <input type="date" name="dateofbirth" placeholder="Dateofbirth" class="form-group" />
</div>


</form>

<?php


include 'functions.php';

session_start();

$con = mysqli_connect('localhost','root','','mat_servicedesk');  

if(isset($_POST['btn'])) {
  $vraag = $_POST['vraag'];
  $antwoord = $_POST['antwoord'];
  $dateofbirth = date('Y-m-d', strtotime( $_POST['dateofbirth']));

  $query = "INSERT INTO faq (name,dateofbirth) VALUES ('$vraag','$antwoord','$dateofbirth')";
  $query_run = mysql_query($con, $query);

  if($query_run) {
    $_SESSION['status'] = "Date values Inserted!";
    header("Location: index.php");
  }
  else {
    $_SESSION['status'] = "Date values Inserting failed :(";
    header("Location: index.php");
  }

}

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
