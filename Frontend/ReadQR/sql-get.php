<?php

$userid = 1;

function console_log($data)
{
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}

$link = mysqli_connect('localhost', 'group6', 'd3pro2group6', 'stamp');

if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
} else {
    console_log("データベースの接続に成功しました。\n");
}

$query = "SELECT * FROM RegisteredCustomers WHERE id = 1;";
$key = "";

if ($result = mysqli_query($link, $query)) {
    console_log("SELECT userid = 1 に成功しました。\n");
    foreach ($result as $row) {
        console_log($row);
        $key = $row['customerKey'];
    }
}

console_log($key);

