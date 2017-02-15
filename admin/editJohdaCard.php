<?php

require '../app/main.php';

if (!empty($_POST)) {

  $c_id = $_POST['c_id'];
  $part = $_POST['part'];
  $title = $_POST['title'];
  $body = $_POST['body'];


  $updateCard = $db->prepare("
      UPDATE johda_cards
      SET
        part = :part,
        title = :title,
        body = :body
      WHERE c_id = :c_id;
    ");

  $updateCard->execute([
      'c_id' => $c_id,
      'part' => $part,
      'title' => $title,
      'body' => $body
    ]);


  header('Location: ' . BASE_URL . 'johdanto.php');
}

if (empty($_GET['c_id'])) {
  header('Location: ' . BASE_URL . 'johdanto.php');
  die();
}

$card = $db->prepare("
  SELECT *
  FROM johda_cards
  WHERE c_id = :c_id;
  ");

$card->execute(['c_id' => $_GET['c_id']]);

$card = $card->fetch(PDO::FETCH_ASSOC);


require VIEW_ROOT . '/admin/editJohdaCard.php';