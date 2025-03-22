<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zadaci</title>
</head>
<body>
<h3>1. zadatak &rightarrow; echo every element</h3>  
<!-- 
Napravi niz sa imenima pet različitih voća.
Ispiši svaki element niza koristeći echo.
-->

<?php 
    $voce = [ [
        'name' => 'Jabuka', 'cena' => 60
    ], [
        'name' => 'Banana', 'cena' => 100
    ], [
        'name' => 'Jagoda', 'cena' => 70
    ], [
        'name' => 'Narandža', 'cena' => 80
    ]]
?>

<?php
    foreach($voce as $vocka) {
        echo "<p>{$vocka['name']}, cena: {$vocka['cena']}</p>";
    }
?>

<p>_____________________</p>

    <?php foreach($voce as $vocka) : ?>
        <p>
            <?= $vocka['name'] . ' = '; ?>
            <?= $vocka['cena'] . ' din/kg'; ?>
        </p>
    <?php endforeach; ?>

<hr>    
<hr>    
<hr>
<h3>2. zadatak &rightarrow; 18+ check</h3>

<!-- 
Definiši varijablu $godine i postavi joj vrednost koja predstavlja tvoje godine.
Koristeći if kondicional, proveri da li si punoletan (pretpostavimo da je punoletstvo sa 18 godina).
Ispiši odgovarajuću poruku koristeći echo.
-->

<?php 
    $godine = 17;
        echo "Godine: $godine <br>";
    if($godine >= 18){
         echo "Punoletan si";
    }
    else {
?> 
    <p style="background-color: black;color:antiquewhite;width:max-content">
        <?= "Maloletan si"; ?>
    </p>
<?php }; ?>

<hr>    
<hr>    
<hr>
<h3>3. zadatak &rightarrow; enough money check</h3>
<!--
Definiši dve boolean varijable: $imaKarticu i $imaDovoljnoNovca.
Koristeći logičke operatore (&&, ||), proveri da li korisnik može da kupi proizvod (mora imati karticu i dovoljno novca).
Ispiši odgovarajuću poruku koristeći echo.
-->

<?php 
    $hasCreditCard = true;
    $hasEnoughMoney = false;

    $canBuyProduct = "";
    
    if($hasCreditCard && $hasEnoughMoney) {
        $canBuyProduct = "You can buy a product.";
    } else {
        $canBuyProduct = "You can NOT buy a product.";
    }
?>

<p>
    <?= $canBuyProduct ?>
</p>
</body>
</html>