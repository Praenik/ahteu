<?php session_start(); ?>
<!doctype html>
<html lang="ru">
<head>
    <title>Recruitment</title>
    <?php include_once 'templates/head.php'; ?>
    <link rel="stylesheet" href="style/interview.css">
</head>
<body>

<?php
include_once 'templates/header.php';
$interview_id = $_GET['interview_id'];
$vacancy_id = $_GET['vacancy_id'];
?>

<form class="form" action="php/add_hardskill.php?interview_id=<?=$interview_id?>&vacancy_id=<?=$vacancy_id?>" method="post">
    <?php
    include_once 'php/db_connect.php';
    $query = $db->query("SELECT name, surname FROM interview WHERE id = $interview_id");
    $person = $query->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="form_item">
        <label for="name">Имя</label>
        <input class="form_input" type="text" name="name" id="name" value="<?=$person['name'];?>" disabled>
    </div>
    <div class="form_item">
        <label for="name">Фамилия</label>
        <input class="form_input" type="text" name="surname" id="surname" value="<?=$person['surname'];?>" disabled>
    </div>
    <?php
    $query = $db->query("SELECT description FROM vacancy WHERE id = $vacancy_id");
    $vacancy_arr = $query->fetch(PDO::FETCH_NUM);
    $vacancy_desc = (string)$vacancy_arr[0];
    $hardskills = explode("-- ", $vacancy_desc);
    for ($i = 1; $i < count($hardskills); $i++):
    ?>
    <div class="form_item">
        <label for="<?='hardskill_'.$i;?>"><?=$hardskills[$i];?></label>
        <input class="form_input" type="text" name="<?='hardskill_'.$i;?>" id="<?=$hardskills.'_'.$i;?>" placeholder="Оценка">
    </div>
    <?php endfor; ?>
    <button class="btn" type="submit" name="submit" id="submit" value="submit">Внести кандидата</button>
</form>

<?php include_once 'templates/footer.php'?>

</body>
</html>