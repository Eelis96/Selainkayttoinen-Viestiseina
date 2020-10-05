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

    <?php
    $xml = simplexml_load_file("viestit.xml");
    ?>

    <?php 
        $id = 0;

        foreach($xml->viestit as $viestit){
            if($viestit->attributes()['piilossa'] == 'false'){
                echo '<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">' .$viestit->paivamaara. '</div>
                <div class="card-body">
                    <h3 class="card-title">' .htmlspecialchars($viestit->viesti). '</h3>
                    <p class="card-text">' .htmlspecialchars($viestit->nimi). '</p>
                </div>
                <div class="card-footer">
                    <form action="toggle.php" method="POST">
                        <input type="hidden" name="id" value="' .$id. '">
                        <input type="submit" value="Piilota" class="btn btn-outline-warning">
                    </form>
                </div>
            </div>';
            }else if($viestit->attributes()['piilossa'] == 'true'){
                echo '<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">' .$viestit->paivamaara. '</div>
                <div class="card-body">
                    <h3 class="card-title">' .htmlspecialchars($viestit->viesti). '</h3>
                    <p class="card-text">' .htmlspecialchars($viestit->nimi). '</p>
                </div>
                <div class="card-footer">
                    <form action="toggle.php" method="POST">
                        <input type="hidden" name="id" value="' .$id. '">
                        <input type="submit" value="Näytä" class="btn btn-outline-info">
                    </form>
                </div>
            </div>';
            }
            $id++;   
        }
    ?>  

</body>
</html>