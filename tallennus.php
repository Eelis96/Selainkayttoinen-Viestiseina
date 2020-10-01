<?php

if(isset($_POST['submit'])){
    date_default_timezone_set("Europe/Helsinki");
    $nimi = $_POST['nimi'];
    $viesti = $_POST['viesti'];
    $paivamaara = date("H:i d-m-Y");

    if(empty($nimi) || empty($viesti)) {
        header('location:laheta-viesti.php?error?empty');
    }else{
        include_once('functions.php');

        saveToXml($nimi, $viesti, $paivamaara);

        header('location:index.php?success');
    }
}