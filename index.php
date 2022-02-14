<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Dicee</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster" rel="stylesheet">
</head>

<body>

  <div class="container">
    <?php

    // Giocatore 1

    for ($d = 0; $d <= 6; $d++) {
      $dadi[] = "immagini/dado" . $d . ".png";
    }
    $dado1 = rand(1, 6);
    $dado2 = rand(1, 6);

    // Giocatore 2
    $dado3 = rand(1, 6);
    $dado4 = rand(1, 6);

    $totale1 = $dado1 + $dado2;
    $totale2 = $dado3 + $dado4;


    ?>
    <div class="dadi" style="margin-right: 30px;">
      <p>Giocatore 1</p>
      <img class="small-dado" src="<?php echo $dadi[$dado1]; ?>">
      <img class="small-dado" src="<?php echo $dadi[$dado2]; ?>">
    </div>

    <div class="dadi">
      <p>Giocatore 2</p>
      <img class="small-dado" src="<?php echo $dadi[$dado3]; ?>">
      <img class="small-dado" src="<?php echo $dadi[$dado4]; ?>">
    </div>
    </div>
    <div class="container">
      <?php
if($totale1 < $totale2) {
?> <h1>Vince il Giocatore 2!</h1><?php 
} elseif($totale1 > $totale2) {?> 
    <h1>Vince il Giocatore 1!</h1> <?php
  } else {?> 
      <h1>Pareggio!</h1> <?php } ?>
  </div>

</body>

</html>