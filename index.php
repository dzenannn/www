<?php
require "./functions.php";
// require "./router.php";

# I was working with a MySQL Database today :)
# connect to our MySQL database.

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

class Person {
    public $name;
    public $age;

    public function breathe() { #method
        echo $this->name . " is breathing!";
    }
}

$dzeno = new Person();

$dzeno->name = 'Dzenan Mecinovic';
$dzeno->age = 21;

// $dzeno->breathe();

// dd($posts);

foreach($posts as $post) {
    echo "<h3>" . $post['id'] . ". " . $post['title'] . "</h3>";
}