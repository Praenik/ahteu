<?php
session_start();
include_once 'db_connect.php';
$db_table = 'vacancy';

$data = [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'timetable' => $_POST['timetable'],
    'education' => $_POST['education'],
    'salary' => $_POST['salary'],
    'eng' => $_POST['eng'],
    'drive_license' => $_POST['drive_license'],
];

$prep = $db->prepare("INSERT INTO $db_table (title, description, timetable, education, salary, eng, drive_license) VALUES (:title, :description, :timetable, :education, :salary, :eng, :drive_license)");
$query = $prep->execute($data);

header("HTTP/1.1 301 Moved Permanently");
header("Location: ".$address_site."/vacancy.php");
exit();