<?php

require '../app/main.php';

if (isset($_GET['c_id'])) {

  $deleteCard = $db->prepare("
      DELETE FROM johda_cards
      WHERE c_id = :c_id;
    ");

  $deleteCard->execute(['c_id' => $_GET['c_id']]);
}

header('Location: ' . BASE_URL . 'johdanto.php');