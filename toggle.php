<?php
/*
if(isset($_GET['action']) && isset($_GET['id'])){
    include_once 'functions.php';
    $id = intval($_GET['id']);

    toggleVisibility($id);
}
*/

if(isset($_POST['id'])){
    include_once 'functions.php';
    $id = intval($_POST['id']);
    toggleVisibility($id);
}

header('location:hallintapaneeli.php');