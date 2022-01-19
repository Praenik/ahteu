<?php session_start(); ?>
<!doctype html>
<html lang="ru">
<head>
    <title>Recruitment</title>
    <?php include_once 'templates/head.php'; ?>
    <link rel="stylesheet" href="style/interview.css">
</head>
<body>

<?php include_once 'templates/header.php'?>

<form class="form" action="php/add_interview.php" method="post">
    <div class="form_item">
        <label for="name">Имя</label>
        <input class="form_input" type="text" name="name" id="name" placeholder="Имя">
    </div>
    <div class="form_item">
        <label for="surname">Фамилия</label>
        <input class="form_input" type="text" name="surname" id="surname" placeholder="Фамилия">
    </div>
    <div class="form_item">
        <label for="patronymic">Отчество</label>
        <input class="form_input" type="text" name="patronymic" id="patronymic" placeholder="Отчество">
    </div>
    <div class="form_item">
        <label for="birthday">Дата рождения</label>
        <input class="form_input" type="date" name="birthday" id="birthday" placeholder="Дата рождения">
    </div>
    <div class="form_item">
        <label for="phone">Телефон</label>
        <input class="form_input" type="tel" name="phone" id="phone" placeholder="Телефон">
    </div>
    <div class="form_item">
        <label for="email">Электронная почта</label>
        <input class="form_input" type="email" name="email" id="email" placeholder="E-mail">
    </div>
    <div class="form_item">
        <label for="country">Страна</label>
        <input class="form_input" type="text" name="country" id="country" placeholder="Страна">
    </div>
    <div class="form_item">
        <label for="city">Город</label>
        <input class="form_input" type="text" name="city" id="city" placeholder="Город">
    </div>
    <div class="form_item">
        <label>Гражданство</label>
        <div class="radio_group">
            <div class="radio_group_item">
                <input class="form_input" type="radio" name="citizenship" id="citizens" value="1">
                <label for="citizens">Гражданин</label>
            </div>
            <div class="radio_group_item">
                <input class="form_input" type="radio" name="citizenship" id="not_citizen" value="0">
                <label for="not_citizen">Иностранный гражданин</label>
            </div>
        </div>
    </div>
    <div class="form_item">
        <label for="timetable">Занятость</label>
        <select class="form_select" name="timetable" id="timetable">
            <option value="Полная занятость">Полная занятость</option>
            <option value="Гибкий график">Гибкий график</option>
            <option value="Удаленная работа">Удаленная работа</option>
        </select>
    </div>
    <div class="form_item">
        <label for="post">Вакансия</label>
        <select class="form_select" name="post" id="post">
            <option value="0" selected disabled>Выбрать</option>
            <?php
            include_once 'php/db_connect.php';
            $post_q = $db->query('SELECT id, title FROM vacancy');
            $posts = $post_q->fetchAll(PDO::FETCH_ASSOC);
            foreach ($posts as $post):
            ?>
            <option value="<?=$post['id'];?>"><?=$post['title'];?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form_item">
        <label for="education">Образование</label>
        <select class="form_select" name="education" id="education">
            <option value="Высшее">Высшее</option>
            <option value="Среднее">Среднее</option>
            <option value="Студент">Студент</option>
        </select>
    </div>
    <div class="form_item">
        <label for="salary">Заработная плата</label>
        <input class="form_input" type="text" name="salary" id="salary" placeholder="Заработная плата">
    </div>
    <div class="form_item">
        <label for="eng">Знание английского</label>
        <select class="form_select" name="eng" id="eng">
            <option value="Нет знаний" selected="selected">Нет знаний</option>
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="C1">C1</option>
            <option value="C2">C2</option>
        </select>
    </div>
    <div class="form_item">
        <label for="drive_license">Водительские права</label>
        <select class="form_select" name="drive_license" id="drive_license">
            <option value="Нет прав" selected="selected">Нет прав</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="M">M</option>
        </select>
    </div>
    <button class="btn" type="submit" name="submit" id="submit" value="submit">Внести кандидата</button>
</form>

<?php include_once 'templates/footer.php'?>

</body>
</html>