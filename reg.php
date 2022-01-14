<!doctype html>
<html lang="ru">
<head>
    <?php include_once 'templates/head.php'; ?>
    <link rel="stylesheet" href="./style/reg.css">
    <title>Register</title>
</head>
<body>
    <?php include_once 'templates/header.php'; ?>
    <h2 class="reg_title">регистрация</h2>
    <form class="form" action="php/register.php" method="post">
        <input class="form_input" type="email" name="email" id="email" placeholder="E-mail">
        <input class="form_input" type="password" name="password" id="password" placeholder="Пароль">
        <input class="form_input" type="password" name="password2" id="password2" placeholder="Повторите пароль">
        <button class="btn" type="submit" name="submit_reg" id="submit_reg" value="submit_reg">Зарегистрироваться</button>
    </form>
    <?php include_once 'templates/footer.php'; ?>
</body>
</html>