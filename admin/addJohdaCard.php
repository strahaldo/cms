<?php

require '../app/main.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $part = $_POST['part'];
  $title = $_POST['title'];
  $body = $_POST['body'];


  if (empty($_POST['body'])) {
    $body = "";
  } else {
    $body = $_POST['body'];
  };
  

  $insertCard = $db->prepare("
    INSERT INTO johda_cards
    VALUES ('', :part, :title, :body)
  ");

  $insertCard->execute([
      'part' => $part,
      'title' => $title,
      'body'  => $body
    ]);


  header('Location: ' . BASE_URL . 'johdanto.php');

};


$cards = $db->query("
    SELECT *
    FROM johda_cards
  ")->fetchAll(PDO::FETCH_ASSOC);



require VIEW_ROOT . '/admin/addJohdaCard.php';