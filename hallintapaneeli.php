<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hallintapaneeli</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <?php
                    if(isset($_SESSION['logged_in'])){
                        echo'<a class="btn btn-outline-danger" href="logout.php">Kirjaudu Ulos</a>';
                    }
                ?>       
    </nav>

    <div class="jumbotron">
        <h1>Viestiseinä</h1>
    </div>

</body>
</html>