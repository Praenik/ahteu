<?php session_start(); ?>
<!doctype html>
<html lang="ru">
<head>
    <?php include_once 'templates/head.php'; ?>
    <link rel="stylesheet" href="style/profile.css">
    <title>Profile</title>
</head>
<body>
<?php
include_once 'templates/header.php';
include_once 'php/db_connect.php';
?>
<a href="new_vacancy.php" class="btn btn_vacancy">Добавить вакансию</a>
<div class="profile_table">
    <div class="profile_table_left">
        <div class="profile_table_row">
            <div class="profile_table_cell b" id="col1">Название</div>
            <div class="profile_table_cell b" id="col2">Описание</div>
        </div>
        <?php
        $query_left = $db->query('SELECT * FROM vacancy');
        $vacancies = $query_left->fetchAll(PDO::FETCH_NUM);
        foreach ($vacancies as $vacancy):
        ?>
            <div class="profile_table_row">
                <div class="profile_table_cell" id="col1"><?=$vacancy[1];?></div>
                <div class="profile_table_cell" id="col2"><?=$vacancy[2];?></div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="profile_table_right">
        <div class="profile_table_row">
            <div class="profile_table_cell b" id="col3">График</div>
            <div class="profile_table_cell b" id="col4">Образование</div>
            <div class="profile_table_cell b" id="col5">Заработная плата</div>
            <div class="profile_table_cell b" id="col6">Английский урок</div>
            <div class="profile_table_cell b" id="col7">Водительские права</div>
        </div>
        <?php foreach ($vacancies as $vacancy): ?>
            <div class="profile_table_row">
                <?php for ($i = 3; $i < count($vacancy); $i++): ?>
                    <div class="profile_table_cell" id="<?='col'.($i);?>"><?=$vacancy[$i];?></div>
                <?php endfor; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include_once 'templates/footer.php'; ?>
<script src="js/table.js"></script>
</body>
</html>