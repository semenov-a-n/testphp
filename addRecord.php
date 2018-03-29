<?php
require_once __DIR__ . '/autoload.php';

$a = new App\Models\AddRecord();
$a->record($_GET['txt']);
header('Location: http://test/index.php');