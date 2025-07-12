<?php

header('Content-Type: text/html; charset=UTF-8');

    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(trim($name) == "") {
        echo "Вы не ввели имя пользователя";
    } else if(strlen(trim($name)) <= 1) {
        echo "Такого имени не существует";
    } else if(trim($email) == "" || trim($pass) == "" || trim($_POST['message']) == "") {
        echo "Введите все данные";
    } else {
       # $pass = md5($pass);
       # echo "<h1>Bce данные</h1><p>$name</p><p>$email</p><p>$pass</p><p>$_POST[message]</p>";

       header('Location: /about.php');
       exit;
    }
?>ЫЫ