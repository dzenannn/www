<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Arrays</title>
</head>
<body>
    
<h1>Recommended Books</h1>

<?php 
    $books = [
            [
               'name' => "Haker, Trol, Uzbunjivač, Špijun", 
               'author' => "Gabrijela Kolman",
               'purchaseUrl' => "http://example.com"
            ],
            [
               'name' => "Digitalni Minimalizam", 
               'author' => "Kal Njuport",
               'purchaseUrl' => "http://example.com"
            ],
            [
               'name' => "Atomske Navike", 
               'author' => "Džejms Klir",
               'purchaseUrl' => "http://example.com"
            ],
    ];
?>

<ul>
    <?php foreach($books as $book) : ?>
        <li>
            <a href=<?= $book['purchaseUrl'] ?>>
                 <?= $book["name"]; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<!-- <ul>
    <?php foreach($books as $book) {
        echo "<li>{$book}™</li>";
    }

    ?>
</ul> -->

<!-- <ul>
    <?php foreach ($books as $book) : ?>
        <li><?= $book ?></li>
    <?php endforeach; ?>
</ul>

<p>
    <?= $books[1] ?>
</p> -->
</body>
</html>