<?php

require '../app/main.php';

if (!empty($_POST)) {

  $p_id = $_POST['p_id'];
  $title = $_POST['title'];

  $dir = "../data/";
  $image_name = basename($_FILES['files']['name']);
  $image_dir = BASE_URL . "data/" . $image_name;
  $target_file = $dir . basename($_FILES['files']['name']);

if (move_uploaded_file($_FILES['files']['tmp_name'], $target_file)) {

  $editSec = $db->prepare("
      UPDATE pistemestari
      SET
        title = :title,
        image_dir = :image_dir,
        image_name = :image_name
      WHERE p_id = :p_id;
    ");

  $editSec->execute([
    'p_id' => $p_id,
    'title' => $title,
    'image_dir' => $image_dir,
    'image_name' => $image_name
    ]);


  header('Location: ' . BASE_URL . 'admin/list.php');

} else {

    $editSec = $db->prepare("
      UPDATE pistemestari
      SET
        title = :title
      WHERE p_id = :p_id;
    ");

  $editSec->execute([
    'p_id' => $p_id,
    'title' => $title
    ]);

  header('Location: ' . BASE_URL . 'admin/list.php');

}

}

if (!isset($_GET['p_id'])) {
  header('Location: ' . BASE_URL . 'admin/list.php');
  die();
}

$s = $db->prepare("
  SELECT *
  FROM pistemestari
  WHERE p_id = :p_id;
  ");

$s->execute(['p_id' => $_GET['p_id']]);

$s = $s->fetch(PDO::FETCH_ASSOC);



require VIEW_ROOT . '/admin/editPisteSec.php';