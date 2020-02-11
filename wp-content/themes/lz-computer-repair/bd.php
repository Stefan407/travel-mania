<?php
define("HOST", "localhost");
define("USER", "stefan");
define("PASS", "******");
define("DB", "travelmania");

$db = @mysqli_connect(HOST, USER, PASS, DB) or die('Нет соединения с БД');
mysqli_set_charset($db, 'utf8') or die('Не установлена кодирока соединения');