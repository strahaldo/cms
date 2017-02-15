<?php

require '../app/main.php';

if (isset($_GET['id'])) {

  $deleteCard = $db->prepare("
      DELETE FROM cards
      WHERE c_id = :id;
    ");

  $deleteImages = $db->prepare("
      DELETE FROM images
      WHERE c_id = :id;
    ");

  $deleteCard->execute(['id' => $_GET['id']]);
  $deleteImages->execute(['id' => $_GET['id']]);
}

header('Location: ' . BASE_URL . 'admin/list.php');