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

<form class="form" action="php/add_vacancy.php" method="post">
    <div class="form_item">
        <label for="title">Название: </label>
        <input class="form_input" type="text" name="title" id="title" placeholder="Название">
    </div>
    <div class="form_item">
        <label for="description">Описание: </label>
        <textarea class="form_textarea" name="description" id="description"></textarea>
    </div>
    <div class="form_item">
        <label for="timetable">Занятость: </label>
        <select class="form_select" name="timetable" id="timetable">
            <option value="Полная занятость">Полная занятость</option>
            <option value="Гибкий график">Гибкий график</option>
            <option value="Удаленная работа">Удаленная работа</option>
        </select>
    </div>
    <div class="form_item">
        <label for="education">Образование: </label>
        <select class="form_select" name="education" id="education">
            <option value="Высшее">Высшее</option>
            <option value="Среднее">Среднее</option>
            <option value="Студент">Студент</option>
        </select>
    </div>
    <div class="form_item">
        <label for="salary">Заработная плата: </label>
        <input class="form_input" type="text" name="salary" id="salary" placeholder="Заработная плата">
    </div>
    <div class="form_item">
        <label for="eng">Знание английского: </label>
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
        <label for="drive_license">Водительские права: </label>
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