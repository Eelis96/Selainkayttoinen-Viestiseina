<?php
session_start();
if (isset($_SESSION['logged_in'])) {
    header('Location: ./');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kirjautuminen</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="btn btn-primary" onclick="myFunction()">Palaa Etusivulle</button>
    </nav>

    <div class="jumbotron">
    <h1>Kirjaudu Sisään</h1>
    </div>

    <div class="container">
        <?php
            if(isset($_GET['invalidpassword'])){
                echo'<div class="alert alert-dismissible alert-danger">
                <strong>Väärä Salasana!</strong></div>';
            }
        
            if(isset($_GET['invalidusername'])){
                echo'<div class="alert alert-dismissible alert-danger">
                <strong>Väärä Käyttäjänimi!</strong></div>';
            }
        ?>
    </div>

    <div class="container">
        <form action="checklogin.php" method="post">
            <div class="form-group">
                <label for="code">Käyttäjänimi</label>
                <input class="form-control" type="text" name="username">
                
                <label for="code">Salasana</label>
                <input class="form-control" type="password" name="passwd">
            </div>
            <input class="btn btn-outline-primary" type="submit" value="Kirjaudu Sisään">
        </form>
    </div>  

    <script>
        function myFunction(){
            window.location.replace("index.php");
        }
    </script> 
</body>
</html>