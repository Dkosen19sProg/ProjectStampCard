<?php

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

$query = "SELECT id, name, pass, createdDate FROM RegisteredCustomers;";

if ($result = mysqli_query($link, $query)) {
    console_log("SELECT に成功しました。\n");
    foreach ($result as $row) {
        console_log($row);
    }
}