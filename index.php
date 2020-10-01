<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viestiseinä</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <li>
            <?php
                if(!isset($_SESSION['logged_in'])){
                    echo '<a class="btn btn-outline-success" href="loginform.php">Kirjaudu Sisään</a>';
                }else{
                    echo'<a class="btn btn-outline-danger" href="logout.php">Kirjaudu Ulos</a>';
                }
            ?>
            <a  class="btn btn-outline-success" href="laheta-viesti.php">Viestin Lähettäminen</a>
        </li>
    </nav>

    <div class="jumbotron">
        <h1>Viestiseinä</h1>
    </div>

    <?php

            $xml = simplexml_load_file("viestit.xml");
    
            foreach($xml->viestit as $viestit){
                echo'<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                    <div class="card-header">' .$viestit->paivamaara. '</div>
                    <div class="card-body">
                        <h3 class="card-title">' .htmlspecialchars($viestit->viesti). '</h3>
                        <p class="card-text">' .htmlspecialchars($viestit->nimi). '</p>
                    </div>
                </div>';
            }
    
            //header("Refresh:120");
    ?>

</body>
</html>