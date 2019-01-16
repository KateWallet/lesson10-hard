<?php
if ($_POST['login'] && $_POST['password']) {

    $connection = new PDO('mysql:host=localhost; dbname=academy; charset=utf8', 'root', '');
    $connection->query('SELECT * FROM `usersinfo`');

    $userLogin = $_POST['login'];
    $userPassword = $_POST['password'];
    $connection->query("INSERT INTO `usersinfo` (`login` , `password`) VALUES ('$userLogin', '$userPassword')");
    header('Location: content.php');
}


?>

<form method="POST">
    <p>Зарегистрируйтесь</p>
    <p><input type="text" name="login" placeholder="Логин" required></p>
    <input type="password" name="password" placeholder="Пароль" required><br>
    <p><input type="submit" placeholder="Регистрация"></p>
</form>