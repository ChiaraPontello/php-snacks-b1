<?php
    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];

    if (strlen($name) > 3 && str_contains($email, "@") && str_contains($email, ".") && is_numeric($age))
    {
    echo "Accesso eseguito";
    } else {
    echo "Accesso negato";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Snack 2</title>
</head>
<body>
        <form action="index.php" method="GET">
                
                <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">

                <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email">

                <label for="age" class="form-label">Age</label>
                    <input type="text" class="form-control" id="age" name="age">

                <button>Submit</button>

        </form>
       
</body>
</html>