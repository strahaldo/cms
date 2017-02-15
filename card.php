<?php

require 'app/main.php';

$cards = $db->query("
  SELECT *
  FROM cards
  ")->fetchAll(PDO::FETCH_ASSOC);


  if (empty($_GET['c_id']) && empty($_GET['s_id'])) {
    $card = false;
    echo "No card";
  } else {
    $s_id = $_GET['s_id'];
    $c_id = $_GET['c_id'];

      $card = $db->prepare("
        SELECT *
        FROM cards
        WHERE c_id = :c_id
        AND s_id = :s_id
      ");
      $images = $db->prepare("
        SELECT *
        FROM images
        WHERE c_id = :c_id
      ");


      $card->execute(['c_id' => $c_id, 's_id' => $s_id]);
      $images->execute(['c_id' => $c_id]);

      $card = $card->fetch(PDO::FETCH_ASSOC);
      $images = $images->fetchAll(PDO::FETCH_ASSOC);


  }


require VIEW_ROOT . '/page/showSabaCard.php';