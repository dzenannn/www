<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Functions and Filter</title>
</head>
<body>

<?php 
$library = [
            [
               'name' => "Haker, Trol, Uzbunjivač, Špijun", 
               'author' => "Gabrijela Kolman",
               'purchaseUrl' => "http://google.com"
            ],
            [
               'name' => "Digitalni Minimalizam", 
               'author' => "Kal Njuport",
               'purchaseUrl' => "http://google.com"
            ],
            [
               'name' => "Selam Alejkum", 
               'author' => "Kal Njuport",
               'purchaseUrl' => "http://google.com"
            ],
            [
               'name' => "Atomske Navike", 
               'author' => "Džejms Klir",
               'purchaseUrl' => "http://google.com"
            ],
    ];

    function filterByAuthor($books, $author) {
        $filteredBooks = [];
        
        foreach($books as $book) {
            if($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    }

    filterByAuthor($library, 'Kal Njuport');
    ?>

    <ul>
        <?php foreach(filterByAuthor($library, 'Kal Njuport') as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>" > 
                    <?= $book['name']; ?> (<?=$book['author'];?>)
                </a>
                </li>
                <?php endforeach; ?>
    </ul>

</body>
</html>