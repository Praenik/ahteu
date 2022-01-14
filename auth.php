<!doctype html>
<html lang="ru">
<head>
    <?php include_once 'templates/head.php'; ?>
    <link rel="stylesheet" href="./style/reg.css">
    <title>Register</title>
</head>
<body>
<?php include_once 'templates/header.php'; ?>
<h2 class="reg_title">авторизация</h2>
<form class="reg_form" action="php/authorize.php" method="post">
    <input class="reg_form_input" type="email" name="email" id="email" placeholder="E-mail">
    <input class="reg_form_input" type="password" name="password" id="password" placeholder="Пароль">
    <button class="reg_btn" type="submit" name="submit_auth" id="submit_auth" value="submit_reg">Войти</button>
</form>
<?php include_once 'templates/footer.php'; ?>
</body>
</html>