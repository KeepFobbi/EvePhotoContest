<?php
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
    $ConfirmPass = filter_var(trim($_POST['ConfirmPass']),FILTER_SANITIZE_STRING);

    if ($pass != $ConfirmPass){
        echo 'Password error';
        exit();
    }
    else{
        $pass =md5($pass."Fobbi243412HQ");
    }

    $mysql = new mysqli('localhost', 'root', 'root', 'eve-contest');
    $mysql->query("INSERT INTO `users` (`login`, `email`, `pass`) VALUES('$login', '$email', '$pass')");

    $mysql->close();
    header('Location: /');
    exit();

