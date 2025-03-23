<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>WWW</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- <h1>
      <?php 
        $greeting = "Hello Universe. ";
        $name = "My name is Dženan.";
        echo $greeting.$name; //? echo = print
        echo "$greeting This is second line of code.";
        //! Ako koristimo vrednost varijable unutar stringa koristi se double quote (")
        //! A ako zelimo da se ispiše IME VARIJABLE koristi se single quote (')
      ?>
    </h1> -->

<?php 
  $name = "'Dobro Razmisli' by Cobain";
  $read = true;

  if($read) {
    // $read = "have read";
    $message = "You have read $name";
  }
  
  // else {
  //   // $read = "have not read";
  //   $message = "You have not read $name";
  // }
?>

    <h1>
      <!-- <?php echo $message; ?>  -->
      <?= $message ?> <!-- shortcut -->
      <br/>
      <br/>
      <?= "PHP Verzija: " . phpversion() ?>
    </h1>
  </body>
</html>
