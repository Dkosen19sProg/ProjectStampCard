<?php

function console_log($data)
{
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}

$link = mysqli_connect('localhost', 'group6', 'd3pro2group6', 'stamp');

// 接続状況をチェックします
if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
} else {
    console_log("データベースの接続に成功しました。\n");
}

// $query = "UPDATE user SET id = 2, name = 'yamato' WHERE id = 1;";

// if (mysqli_query($link, $query)) {
//     console_log("UPDATE に成功しました \n");
// }

// $query = "INSERT INTO user (name) VALUES ('manekineko');";

// if (mysqli_query($link, $query)) {
//     console_log("INSERT に成功しました。\n");
// }

// $query = "DELETE FROM user WHERE id IS NULL;";

// if (mysqli_query($link, $query)) {
//     console_log("DELETE に成功しました。\n");
// }else {

// }
console_log("店舗出力");
$query = "SELECT id, shopName FROM RegisteredShops;";

if ($result = mysqli_query($link, $query)) {
    console_log("SELECT に成功しました。\n");
    foreach ($result as $row) {
        console_log($row);
    }
}
console_log("ユーザー出力");
$query = "SELECT id, name, pass, createdDate FROM RegisteredCustomers;";

if ($result = mysqli_query($link, $query)) {
    console_log("SELECT に成功しました。\n");
    foreach ($result as $row) {
        console_log($row);
    }
}
console_log("カード出力");
$query = "SELECT id, cardKey, stampCounts FROM StampCards;";

if ($result = mysqli_query($link, $query)) {
    console_log("SELECT に成功しました。\n");
    foreach ($result as $row) {
        console_log($row);
    }
}
console_log("inner join 出力");
$query = "select stampCards.id,shopName,name,stampCounts,stampGoal from StampCards inner join RegisteredShops on StampCards.cardStoreId = RegisteredShops.id inner join RegisteredCustomers on StampCards.cardOwnerId = RegisteredCustomers.id;";

if ($result = mysqli_query($link, $query)) {
    console_log("SELECT に成功しました。\n");
    foreach ($result as $row) {
        console_log($row);
    }
}


// 接続を閉じます
mysqli_close($link);
