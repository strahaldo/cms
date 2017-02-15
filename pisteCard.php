<?php

require 'app/main.php';

$cards = $db->query("
  SELECT *
  FROM piste_cards
  ")->fetchAll(PDO::FETCH_ASSOC);

  if (empty($_GET['c_id']) && empty($_GET['p_id'])) {
    $card = false;
  } else {
    $c_id = $_GET['c_id'];
    $p_id = $_GET['p_id'];

      $card = $db->prepare("
        SELECT *
        FROM piste_cards
        WHERE c_id = :c_id
        AND p_id = :p_id
      ");
      $images = $db->prepare("
        SELECT *
        FROM piste_images
        WHERE c_id = :c_id
      ");


      $card->execute(['p_id' => $p_id, 'c_id' => $c_id]);
      $images->execute(['c_id' => $c_id]);

      $card = $card->fetch(PDO::FETCH_ASSOC);
      $images = $images->fetchAll(PDO::FETCH_ASSOC);


  }


require VIEW_ROOT . '/page/showPisteCard.php';