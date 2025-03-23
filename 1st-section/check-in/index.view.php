<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>
        <?= $business['name'] ?>
    </h1>
    <br/>
    <i><?= $name. ": €" .$money ?></i>
    <br/>
   <ul>
    <?php foreach($business['services'] as $service) : ?>
        <li>
            <?= $service; ?>
        </li>
    <?php endforeach; ?>
   </ul>
</body>
</html>