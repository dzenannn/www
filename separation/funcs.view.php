<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <title>Functions and Filter</title>
</head>
<body>
    <ul>
        <?php foreach($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>" > 
                    <?= $book['name']; ?> (<?=$book['author'];?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
    <hr style="color: white;width:99%;">
    <h1><i>funcs.view.php</i></h1>
</body>
</html>