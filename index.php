<?php
require "./functions.php";
// require "./router.php";
require "./Database.php";

$config = require('config.php');

$db = new Database($config['database']);

$id = $_GET['id'];
$query = "select * from posts where id = :id"; // id = ?  //* id = :id

$post = $db->query($query, ['id' => $id])->fetch(); // [$id] //* ['id' => $id]

dd($post);