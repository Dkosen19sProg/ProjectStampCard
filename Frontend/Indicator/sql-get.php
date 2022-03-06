<?php

$userid = 1;
$key = 'qawsedrftgyhujikolp';
$q = false;

$num = 0;
$goal_num = 0;

$shopid = 2;

$counts = 0;

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

$query = "SELECT * FROM RegisteredCustomers WHERE customerKey ='" . $key . "';";

if ($result = mysqli_query($link, $query)) {
    console_log("SELECT WHERE key に成功しました。\n");
    $q = true;
    foreach ($result as $row) {
        console_log($row);
    }
}

if ($q){

    $query = "SELECT * FROM StampCards WHERE cardStoreId =" . $shopid . " AND cardOwnerId =" . $userid . ";";
    
    if ($result = mysqli_query($link, $query)) {
        console_log("SELECT WHERE id に成功しました。\n");
        foreach ($result as $row) {
            console_log($row);
            $counts = $row['stampCounts'];
        }
    }
}

console_log($counts);

