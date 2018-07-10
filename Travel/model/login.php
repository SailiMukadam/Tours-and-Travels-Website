<?php
    var_dump($_GET);
    session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['login']=$_GET['name'];
        var_dump($_SESSION);
    }

    /*CUSTOMER DATABASE
        customer_id int not null auto_increment primary key,
        name varchar(20) not null,
        password varchar(20) not null
    */
    else{
        unset($_SESSION['login']);
    }
    header('Location: /travel/');
    exit();
?>
