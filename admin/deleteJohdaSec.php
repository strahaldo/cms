<?php

require '../app/main.php';

if (isset($_GET['j_id'])) {

  $deleteCard = $db->prepare("
      DELETE FROM johdanto
      WHERE j_id = :j_id;
    ");

  $deleteCard->execute(['j_id' => $_GET['j_id']]);
}

header('Location: ' . BASE_URL . 'admin/list.php');