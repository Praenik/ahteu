<?php
session_start();
include_once 'db_connect.php';
session_unset();

header("HTTP/1.1 301 Moved Permanently");
header("Location: ".$address_site);