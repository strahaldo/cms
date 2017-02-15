<?php

require 'app/main.php';

$cards = $db->query("
  SELECT *
  FROM johda_cards
  ")->fetchAll(PDO::FETCH_ASSOC);


  if (empty($_GET['c_id']) && empty($_GET['j_id'])) {
    $card = false;
    echo "No card";
  } else {
    $j_id = $_GET['j_id'];
    $c_id = $_GET['c_id'];

      $card = $db->prepare("
        SELECT *
        FROM johda_cards
        WHERE c_id = :c_id
        AND j_id = :j_id
      ");
      $images = $db->prepare("
        SELECT *
        FROM johda_images
        WHERE c_id = :c_id
      ");


      $card->execute(['c_id' => $c_id, 'j_id' => $j_id]);
      $images->execute(['c_id' => $c_id]);

      $card = $card->fetch(PDO::FETCH_ASSOC);
      $images = $images->fetchAll(PDO::FETCH_ASSOC);


  }


require VIEW_ROOT . '/page/showJohdaCard.php';