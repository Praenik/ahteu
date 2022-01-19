<?php
session_start();
include_once 'db_connect.php';
$db_table = 'hardskill';

$data = [
    'interview_id' => $_GET['interview_id'],
    'vacancy_id' => $_GET['vacancy_id']
];
for ($i = 0; $i < count($_POST)-1; $i++){
    $data['hardskill_'.($i+1)] = $_POST['hardskill_'.($i+1)];
}
if (count($data) != 7) {
    for ($i = 7-count($data); $i < 6; $i++)
        $data['hardskill_'.$i] = NULL;
}

$prep = $db->prepare("INSERT INTO $db_table (interview_id, vacancy_id, hardskill_1, hardskill_2, hardskill_3, hardskill_4, hardskill_5) VALUES (:interview_id, :vacancy_id, :hardskill_1, :hardskill_2, :hardskill_3, :hardskill_4, :hardskill_5)");
$query = $prep->execute($data);

header("HTTP/1.1 301 Moved Permanently");
header("Location: ".$address_site."/candidates.php");
exit();