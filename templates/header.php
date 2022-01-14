<?php include_once './php/db_connect.php'; ?>
<div class="company_name">
    <h1>Ahteu</h1>
    <div>
        Светлая тема
        <div class="switch-btn"></div>
        Темная тема
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto">
                <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
                <a class="nav-link" href="#">О сервисе</a>
            </div>
            <div class="navbar-nav">
                <?php if ($_SESSION['role'] == 'hr'): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Профиль</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="candidates.php">Кандидаты</a></li>
                        <li><a class="dropdown-item" href="vacancy.php">Вакансии</a></li>
                        <li><a class="dropdown-item" href="interview.php">Интервью</a></li>
                    </ul>
                </li>
                <a class="nav-link" href="php/logout.php">Выйти</a>
                <?php else: ?>
                <a class="nav-link" href="auth.php">Войти</a>
                <a class="nav-link" href="reg.php">Зарегистрироваться</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
