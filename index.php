<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Recruitment</title>
    <?php include_once 'templates/head.php'; ?>
</head>
<body>

<?php include_once 'templates/header.php'?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/banner-1.jpg" class="d-block w-100 banner" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="banner_title">Мы автоматизируем Ваш процесс</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/banner-2.jpg" class="d-block w-100 banner" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="banner_title">Удобство и комфорт</h5>
                <p class="banner_sub">Самое лучшее онлайн-АРМ по мнению мамы главного разработика</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/banner-3.jpg" class="d-block w-100 banner" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="banner_title">Поможем с контролем поставленных задач</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/banner-4.jpg" class="d-block w-100 banner" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="banner_title">Множество клиентов</h5>
                <p class="banner_sub">Даже сын маминой подруги рекомендует</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container leaders">
    <h2 class="leaders_title">Основатели</h2>
    <div class="leaders_text">Команда, создавшая это АРМ намного больше, но основателями по праву считаются эти люди. Что же их сподвигло создать проект "Ahteu"? Этот вопрос остается без ответа уже долгое время...</div>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg leader_item">
                <img class="leader_photo" src="img/leader-1.jpg" alt="">
                <div class="leader_name">Арина Дашко</div>
                <div class="leader_desc">Юрист-информатик, который работает SEO-оптимизатором, чтобы заработать на свадебное платье.</div>
            </div>
            <div class="col col-lg leader_item">
                <img class="leader_photo" src="img/leader-2.jpg" alt="">
                <div class="leader_name">Николай Гомзов</div>
                <div class="leader_desc">Без диплома отработал пару дней программистом и ушел работать учителем информатики в лучшую школу Тамбовской области. Подался в наупоп блогеры. "Работать можно кем угодно с каким угодно образованием".</div>
            </div>
        </div>
    </div>
</div>

<div class="container statistic">
    <div class="row justify-content-md-center">
        <div class="col col-xl stat_item">
            <div class="stat_number">
                <?php
                $prep = $db->query('SELECT COUNT(*) FROM users');
                $users_count = $prep->fetch(PDO::FETCH_NUM);
                echo $users_count[0];
                ?>
            </div>
            <div class="stat_desc">
                <?php
                $users_number = $users_count[0] % 100;
                if ($users_number >= 11 && $users_number <= 19)
                    echo 'Зарегистрированных пользователей';
                else {
                    $i = $users_number % 10;
                    switch ($i) {
                        case 1:
                            echo 'Зарегистрированный пользователь'; break;
                        case 2:
                        case 3:
                        case 4:
                            echo 'Зарегистрированных пользователя'; break;
                        default:
                            echo 'Зарегистрированных пользователей'; break;
                    }
                }
                ?>
            </div>
        </div>
        <div class="col col-xl stat_item">
            <div class="stat_number">
                <?php
                $prep = $db->query('SELECT COUNT(*) FROM interview');
                $interview_count = $prep->fetch(PDO::FETCH_NUM);
                echo $interview_count[0];
                ?>
            </div>
            <div class="stat_desc">
                <?php
                $interview_count = $interview_count[0] % 100;
                if ($interview_count >= 11 && $interview_count <= 19)
                    echo 'Проведенных интервью';
                else {
                    $i = $interview_count % 10;
                    switch ($i) {
                        case 1:
                            echo 'Проведенное интервью'; break;
                        default:
                            echo 'Проведенных интервью'; break;
                    }
                }
                ?>
            </div>
        </div>
        <div class="col col-xl stat_item">
            <div class="stat_number">
                <?php
                $prep = $db->query('SELECT COUNT(*) FROM vacancy');
                $users_count = $prep->fetch(PDO::FETCH_NUM);
                echo $users_count[0];
                ?>
            </div>
            <div class="stat_desc">
                <?php
                $users_number = $users_count[0] % 100;
                if ($users_number >= 11 && $users_number <= 19)
                    echo 'Активных вакансий';
                else {
                    $i = $users_number % 10;
                    switch ($i) {
                        case 1:
                            echo 'Активная вакансия'; break;
                        case 2:
                        case 3:
                        case 4:
                            echo 'Активных вакансии'; break;
                        default:
                            echo 'Активных вакансий'; break;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include_once 'templates/footer.php'; ?>

</body>
</html>