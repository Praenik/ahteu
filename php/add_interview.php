<?php
session_start();
include_once 'db_connect.php';
$db_table = 'interview';

$data = [
    'hr_id' => $_SESSION['hr_id'],
    'name' => $_POST['name'],
    'surname' => $_POST['surname'],
    'patronymic' => $_POST['patronymic'],
    'post' => $_POST['post'],
    'birthday' => $_POST['birthday'],
    'phone' => $_POST['phone'],
    'email' => $_POST['email'],
    'country' => $_POST['country'],
    'city' => $_POST['city'],
    'citizenship' => $_POST['citizenship'],
    'timetable' => $_POST['timetable'],
    'education' => $_POST['education'],
    'salary' => $_POST['salary'],
    'eng' => $_POST['eng'],
    'drive_license' => $_POST['drive_license'],
];

$prep = $db->prepare("INSERT INTO $db_table (hr_id, name, surname, patronymic, post, birthday, phone, email, country, city, citizenship, timetable, education, salary, eng, drive_license) VALUES (:hr_id, :name, :surname, :patronymic, :post, :birthday, :phone, :email, :country, :city, :citizenship, :timetable, :education, :salary, :eng, :drive_license)");
$query = $prep->execute($data);

header("HTTP/1.1 301 Moved Permanently");
header("Location: ".$address_site."/candidates.php");
exit();