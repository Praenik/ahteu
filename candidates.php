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
    <div class="profile_table">
        <div class="profile_table_left">
            <div class="profile_table_row">
                <div class="profile_table_cell b" id="col1">Фамилия</div>
                <div class="profile_table_cell b" id="col2">Имя</div>
                <div class="profile_table_cell b" id="col3">Отчество</div>
            </div>
            <?php
            $query = $db->query("SELECT interview.*, vacancy.title FROM interview INNER JOIN vacancy ON interview.post = vacancy.id");
            $interviews = $query->fetchAll(PDO::FETCH_BOTH);
            foreach ($interviews as $interview):
            ?>
                <div class="profile_table_row">
                    <div class="profile_table_cell" id="col1"><?=$interview[3];?></div>
                    <div class="profile_table_cell" id="col2"><?=$interview[2];?></div>
                    <div class="profile_table_cell" id="col3"><?=$interview[4];?></div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="profile_table_right">
            <div class="profile_table_row">
                <div class="profile_table_cell b" id="col4">Вакансия</div>
                <div class="profile_table_cell b" id="col5">Дата рождения</div>
                <div class="profile_table_cell b" id="col6">Телефон</div>
                <div class="profile_table_cell b" id="col7">Электронная почта</div>
                <div class="profile_table_cell b" id="col8">Страна</div>
                <div class="profile_table_cell b" id="col9">Город</div>
                <div class="profile_table_cell b" id="col10">Гражданство</div>
                <div class="profile_table_cell b" id="col11">График</div>
                <div class="profile_table_cell b" id="col12">Образование</div>
                <div class="profile_table_cell b" id="col13">Заработная плата</div>
                <div class="profile_table_cell b" id="col14">Английский язык</div>
                <div class="profile_table_cell b" id="col15">Водительские права</div>
            </div>
            <?php foreach ($interviews as $interview): ?>
                <div class="profile_table_row">
                    <div class="profile_table_cell" id="col4"><?=$interview['title'];?></div>
                    <?php for ($i = 6; $i < count($interview)/2-1; $i++): ?>
                    <div class="profile_table_cell" id="<?='col'.($i-1);?>">
                        <?php
                        if ($i == 11)
                            if ($i)
                                echo 'Гражданин России';
                            else
                                echo 'Иностранный гражданин';
                        else
                            echo $interview[$i];
                        ?>
                    </div>
                    <?php endfor; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php include_once 'templates/footer.php'; ?>
<script src="js/table.js"></script>
</body>
</html>