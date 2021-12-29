<?php

// $pdo = new PDO('mysql:host=localhost;dbname=foo_db', 'user', 'pass');

// $pdo->query('CREATE TABLE foo_table (id INT, name VARCHAR(20))');

// $pdo->query('INSERT INTO foo_table (id, name) VALUES (1,"yamada")');

// $result_rows = $pdo->query('SELECT * FROM foo_table');

// foreach ( $result_rows as $row ) {
//     // テーブルの1行ごとに1つの配列として格納されている（$row）
//     // その1行ごとの配列内で、列名をキーにした連想配列でデータが格納されている。
//     echo "id: {$row['id']}"; // id列
//     echo "name: {$row['name']}"; // name列
// }


$link = mysqli_connect('localhost', 'root', 'd3pro2group6', 'shop');

// 接続状況をチェックします
if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
} else {
    echo "データベースの接続に成功しました。\n";
}
?>