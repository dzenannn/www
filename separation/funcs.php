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

    function filter($array, $key, $value) { // bez callback-a
        
        $filteredItems = [];
        
        foreach($array as $item) {
            if($item[$key] === $value) {
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    };


    function callbackFilter($array, $callback) { // sa callback-om
        
        $filteredItems = [];
        
        foreach($array as $item) {
            if($callback($item)) {
                $filteredItems[] = $item;
            }
        }

        return $filteredItems;
    };
     
    $filteredBooks = array_filter($library, function ($book) {  
        return $book['year'] >= 2010 && $book['year'] <= 2020;
    });

    require "funcs.view.php";
?>