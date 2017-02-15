<?php

require '../app/main.php';

if (!empty($_POST)) {

  $c_id = $_POST['c_id'];
  $p_id = $_POST['p_id'];
  $title = $_POST['title'];
  $body = $_POST['body'];
  $variations = $_POST['variations'];

  $dir = "../data/";
  $image_name = basename($_FILES['file']['name']);
  $image_dir = BASE_URL . "data/" . $image_name;
  $target_file = $dir . basename($_FILES['file']['name']);


  if (empty($_POST['diff'])) {
    $diff = "";
  } else if ($diff == "Easy") {
      $diff = 1;
    } else if ($diff == "Medium") {
      $diff = 2;
    } else if ($diff == "Hard") {
      $diff = 3;
    }
  $part = $_POST['part']; 


if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {

  $updateCard = $db->prepare("
      UPDATE piste_cards
      SET
        p_id = :p_id,
        title = :title,
        body = :body,
        variations = :variations,
        part = :part,
        diff = :diff,
        image_name = :image_name,
        image_dir = :image_dir
      WHERE c_id = :c_id;
    ");

  $updateCard->execute([
      'c_id' => $c_id,
      'p_id' => $p_id,
      'title' => $title,
      'body' => $body,
      'variations' => $variations,
      'part' => $part,
      'diff' => $diff,
      'image_name' => $image_name,
      'image_dir' => $image_dir
    ]);


  header('Location: ' . BASE_URL . 'admin/list.php');

} else {

  $updateCard = $db->prepare("
      UPDATE piste_cards
      SET
        p_id = :p_id,
        title = :title,
        body = :body,
        variations = :variations,
        part = :part,
        diff = :diff
      WHERE c_id = :c_id;
    ");

  $updateCard->execute([
      'c_id' => $c_id,
      'p_id' => $p_id,
      'title' => $title,
      'body' => $body,
      'variations' => $variations,
      'part' => $part,
      'diff' => $diff
    ]);

  header('Location: ' . BASE_URL . 'admin/list.php');
}
}

if (empty($_GET['id'])) {
  header('Location: ' . BASE_URL . 'admin/list.php');
  die();
}

$card = $db->prepare("
  SELECT *
  FROM piste_cards
  WHERE c_id = :id;
  ");

$card->execute(['id' => $_GET['id']]);

$card = $card->fetch(PDO::FETCH_ASSOC);

$sections = $db->query("
    SELECT *
    FROM pistemestari
  ")->fetchAll(PDO::FETCH_ASSOC);


require VIEW_ROOT . '/admin/editPisteCard.php';