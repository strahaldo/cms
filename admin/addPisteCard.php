<?php

require '../app/main.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $p_id = $_POST['p_id'];
  $title = $_POST['title'];

  $dir = "../data/";
  $image_name = basename($_FILES['files']['name']);
  $image_dir = BASE_URL . "data/" . $image_name;
  $target_file = $dir . basename($_FILES['files']['name']);

  if (empty($_POST['variations'])) {
    $variations = "";
  } else {
    $variations = $_POST['variations'];
  };
  if (empty($_POST['diff'])) {
    $diff = "";
  } else if ($_POST['diff'] == "Easy") {
      $diff = 1;
  } else if ($_POST['diff'] == "Medium") {
    $diff = 2;
  } else if ($_POST['diff'] == "Hard") {
    $diff = 3;
  };
  
  if (empty($_POST['body'])) {
    $body = "";
  } else {
    $body = $_POST['body'];
  };
  

if (move_uploaded_file($_FILES['files']['tmp_name'], $target_file)) {


  $insertCard = $db->prepare("
    INSERT INTO piste_cards
    VALUES (:c_id, :p_id, :title, :body, :variations, 'Pistemestari', :diff, :image_name, :image_dir)
  ");

  $insertCard->execute([
      'c_id' => $c_id,
      'p_id'  => $p_id,
      'title' => $title,
      'body'  => $body,
      'variations' => $variations,
      'diff' => $diff,
      'image_name' => $image_name,
      'image_dir' => $image_dir
    ]);

  header('Location: ' . BASE_URL . 'admin/list.php');

} else {
  $insertCard = $db->prepare("
    INSERT INTO piste_cards
    VALUES (:c_id, :p_id, :title, :body, :variations, 'Pistemestari', :diff, '', '')
  ");

  $insertCard->execute([
      'c_id' => $c_id,
      'p_id'  => $p_id,
      'title' => $title,
      'body'  => $body,
      'variations' => $variations,
      'diff' => $diff
    ]);

  header('Location: ' . BASE_URL . 'admin/list.php');
}

};


$sections = $db->query("
    SELECT *
    FROM pistemestari
  ")->fetchAll(PDO::FETCH_ASSOC);

$cards = $db->query("
    SELECT *
    FROM cards
  ")->fetchAll(PDO::FETCH_ASSOC);


require VIEW_ROOT . '/admin/addPisteCard.php';