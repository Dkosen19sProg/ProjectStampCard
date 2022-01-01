<?php
function console_log($data)
{
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}

try {
    $db = new PDO('mysql:dbname=stamp;host=localhost;charset=utf8mb4', 'group6', 'd3pro2group6');
}   catch (PDOException $e) {
    console_log("データベース接続エラー　：".$e->getMessage());
}
?>