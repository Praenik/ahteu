<?php
include_once 'php/db_connect.php';

$test_q = $db->query('SELECT interview.*, vacancy.title FROM interview INNER JOIN vacancy ON interview.post = vacancy.id');
$test = $test_q->fetchAll(PDO::FETCH_ASSOC);
var_dump($test);