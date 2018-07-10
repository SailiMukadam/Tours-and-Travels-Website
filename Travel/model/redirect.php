<?php
    var_dump($_GET);
    if(!isset($_SESSION['login'])){
        header('Location: /travel/');
        exit();
    }else{
        header('Location: /travel/packages.php');
        exit();
    }
 ?>
