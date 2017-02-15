<?php

require '../app/main.php';

if (!empty($_POST)) {

  $s_id = $_POST['s_id'];
  $title = $_POST['title'];

  $dir = "../data/";
  $image_name = basename($_FILES['files']['name']);
  $image_dir = BASE_URL . "data/" . $image_name;
  $target_file = $dir . basename($_FILES['files']['name']);

if (move_uploaded_file($_FILES['files']['tmp_name'], $target_file)) {

  $editSec = $db->prepare("
      UPDATE sabamestari
      SET
        title = :title,
        image_dir = :image_dir,
        image_name = :image_name
      WHERE s_id = :s_id;
    ");

  $editSec->execute([
    's_id' => $s_id,
    'title' => $title,
    'image_dir' => $image_dir,
    'image_name' => $image_name
    ]);


  header('Location: ' . BASE_URL . 'admin/list.php');

} else {

    $editSec = $db->prepare("
      UPDATE sabamestari
      SET
        title = :title
      WHERE s_id = :s_id;
    ");

  $editSec->execute([
    's_id' => $s_id,
    'title' => $title
    ]);

  header('Location: ' . BASE_URL . 'admin/list.php');
}

}

if (!isset($_GET['s_id'])) {
  header('Location: ' . BASE_URL . 'admin/list.php');
  die();
}

$s = $db->prepare("
  SELECT *
  FROM sabamestari
  WHERE s_id = :s_id;
  ");

$s->execute(['s_id' => $_GET['s_id']]);

$s = $s->fetch(PDO::FETCH_ASSOC);



require VIEW_ROOT . '/admin/editSabaSec.php';