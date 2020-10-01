<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viestin Lähettäminen</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="btn btn-outline-success" onclick="myFunction()">Palaa Etusivulle</button>
    </nav>

    <div class="jumbotron">
        <h1>Viestiseinä</h1>
    </div>

    <?php
       if(isset($_GET['error?empty'])){
        echo'<div class="alert alert-dismissible alert-danger">
             <strong>Täytä Kaikki Tyhjät Kentät!</strong>
            </div>';
        }

        if(isset($_GET['success'])){
            echo'<div class="alert alert-dismissible alert-success">
                <strong>Viestin Lähettäminen Onnistui</strong>
                </div>';
        }
    ?>

    <form action="tallennus.php" method="post">

        <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Viesti</div>
                <div class="card-body">
                <label for="nimi">Nimi:</label>
                <input type="text" id="nimi" name="nimi"><br>
                    
                <label for="viesti">Viesti:</label>
                <textarea name="viesti" cols="30" rows="3" style="resize:none"></textarea><br>

                <input type="submit" name="submit" value="Lähetä Viesti" class="btn btn-secondary">
        </div>
    </form>

    <script>
        function myFunction(){
            window.location.replace("index.php");
        }
    </script>
</body>
</html>