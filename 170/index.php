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
    <form action="submit.php" method="post">
    <br><textarea id="vraag" name="vraag" placeholder="Vraag" rows="4" cols="50"></textarea>
    <br><textarea id="antwoord" name="antwoord" placeholder="Antwoord" rows="4" cols="50"></textarea>
    <br><input type="submit" class="btn btn-success" name="btn" value="Verzenden">
</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>