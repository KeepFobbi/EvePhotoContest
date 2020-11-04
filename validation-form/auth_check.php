<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    $pass = md5($pass."Fobbi243412HQ");

    $mysql = new mysqli('localhost', 'root', 'root', 'eve-contest');

    $resualt = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = $resualt->fetch_assoc();
    if (count($user) == 0){
        echo 'User not found';
        exit;
    }

    if (isset($_POST['remPass']) == 'Yes'){
        setcookie('user', '1', time() + 3600*24*30*365, '/');
    }
    else{
        setcookie('user', '1', time() + 3600, '/');
    }


    $mysql->close();

    header('Location: /');