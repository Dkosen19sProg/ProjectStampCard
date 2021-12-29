<?php

function console_log($data)
{
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}

$link = mysqli_connect('localhost', 'root', 'd3pro2group6', 'shop');

// 接続状況をチェックします
if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
} else {
    echo "console.log('データベースの接続に成功しました。\n')";
}

// $query = "UPDATE user SET id = 2, name = 'yamato' WHERE id = 1;";

// if (mysqli_query($link, $query)) {
//     console_log("UPDATE に成功しました \n");
// }

$query = "INSERT INTO user (name) VALUES ('manekineko');";

if (mysqli_query($link, $query)) {
    console_log("INSERT に成功しました。\n");
}

$query = "DELETE FROM user WHERE id IS NULL;";

if (mysqli_query($link, $query)) {
    console_log("DELETE に成功しました。\n");
}else {

}

$query = "SELECT id, name FROM user;";

if ($result = mysqli_query($link, $query)) {
    console_log("SELECT に成功しました。\n");
    foreach ($result as $row) {
        var_dump($row);
    }
}


// 接続を閉じます
mysqli_close($link);
