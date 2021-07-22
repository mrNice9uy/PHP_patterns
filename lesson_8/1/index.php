<?php

require 'Explorer.php';

$page = new Explorer($_SERVER['DOCUMENT_ROOT']);
$page->showPath();

if ($_GET['folder']) {
    $path = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . $_GET['folder'];
    $page = new Explorer($path);
    $page->showPath();
}