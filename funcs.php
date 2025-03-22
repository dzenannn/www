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
               'purchaseUrl' => "http://google.com",
               'year' => 2015,
            ],
            [
               'name' => "Digitalni Minimalizam", 
               'author' => "Kal Njuport",
               'purchaseUrl' => "http://google.com",
               'year' => 2016,
            ],
            [
               'name' => "Selam Alejkum", 
               'author' => "Kal Njuport",
               'purchaseUrl' => "http://google.com",
               'year' => 2017,
            ],
            [
               'name' => "Atomske Navike", 
               'author' => "Džejms Klir",
               'purchaseUrl' => "http://google.com",
               'year' => 2018,
            ],
    ];

    $filterByAuthor = function ($books, $author) {
        $filteredBooks = [];
        
        foreach($books as $book) {
            if($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    };

    // function filter($array, $key, $value) { // bez callback-a
        
    //     $filteredItems = [];
        
    //     foreach($array as $item) {
    //         if($item[$key] === $value) {
    //             $filteredItems[] = $item;
    //         }
    //     }

    //     return $filteredItems;
    // };


    function filter($array, $callback) { // sa callback-om
        
        $filteredItems = [];
        
        foreach($array as $item) {
            if($callback($item)) {
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    };

    // filterByAuthor($library, 'Kal Njuport'); // Undefined function
     
    $filteredBooks = array_filter($library, function ($book) {  
        return $book['author'] === 'Kal Njuport';
    }); 

    ?>

    <ul>
        <?php foreach($filteredBooks as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>" > 
                    <?= $book['name']; ?> (<?=$book['author'];?>)
                </a>
                </li>
                <?php endforeach; ?>
    </ul>

</body>
</html>