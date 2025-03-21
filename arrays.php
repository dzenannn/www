<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<h1>Recommended Books</h1>

<?php 
    $books = [
        "Haker, Trol, Uzbunjivač i Špijun",
        "Digitalni Minimalizam",
        "Atomske Navike"
    ];
?>

<!-- <ul>
    <?php foreach($books as $book) {
        echo "<li>{$book}™</li>";
    }

    ?>
</ul> -->

<ul>
    <?php foreach ($books as $book) : ?>
        <li><?= $book ?></li>
    <?php endforeach; ?>
</ul>



</body>
</html>