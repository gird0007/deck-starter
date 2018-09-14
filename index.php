<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Deck</title>
  <link href="https://fonts.googleapis.com/css?family=BioRhyme:300" rel="stylesheet">
  <link rel="stylesheet" href="deck.css">
</head>
<body>
  <!-- 
  Task 1
  create two arrays one decks(suits) and numbers(ranks)
  create a nested loop inside the deck div element -->

  <?php $decks = ['clubs', 'hearts', 'diamonds', 'spades'];
  $numbers = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
  ?>
  <div id="deck" class="deck">
    <?php 
    foreach ($decks as $deck) {
      foreach ($numbers as $number) { ?>
    <div class="card">
      <div class="<?php echo $number ?> <?php echo $deck ?>"><?php echo $number ?></div>
      <div class="suit"><img src="images/<?php echo $deck ?>.png"></div>
      <div class="<?php echo $number ?> <?php echo $deck ?>"><?php echo $number ?></div>
    </div>
    <?php 
  }
}
?>
  </div>

  <!-- Task 2
  Loop 52 Times
    Get random suit 
    Get random rank
      Create card from suit and rank  -->

  <div id="deck" class="deck">
    <?php for ($i = 0; $i < 52; $i++) { ?>
    <?php
    $deck = $decks[rand(0, count($decks) - 1)];
    $number = $numbers[rand(0, count($numbers) - 1)];
    ?>
    <div class="card">
      <div class="<?php echo $number ?> <?php echo $deck ?>"><?php echo $number ?></div>
      <div class="suit"><img src="images/<?php echo $deck ?>.png"></div>
      <div class="<?php echo $number ?> <?php echo $deck ?>"><?php echo $number ?></div>
    </div>
    <?php 
  } ?>
  </div>

</body>
</html>