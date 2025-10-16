<?php

$language = substr($_GET['language'], 0, 2);

if (strpos($language, 'es') === false) {
    $file = include 'english.php';
}

header('Content-Type: application/json');
echo json_encode($file);
