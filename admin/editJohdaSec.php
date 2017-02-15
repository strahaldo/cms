<?php

require '../app/main.php';

if (!empty($_POST)) {

  $j_id = $_POST['j_id'];
  $title = $_POST['title'];
  $icon = $_POST['icon'];
  $body = $_POST['body'];


  $updateCard = $db->prepare("
      UPDATE johdanto
      SET
        title = :title,
        icon = :icon,
        body = :body
      WHERE j_id = :j_id;
    ");

  $updateCard->execute([
      'title' => $title,
      'icon' => $icon,
      'body' => $body,
      'j_id' => $j_id
    ]);

  header('Location: ' . BASE_URL . 'admin/list.php');

}

if (empty($_GET['j_id'])) {
    header('Location: ' . BASE_URL . 'admin/list.php');
  die();
}

$sec = $db->prepare("
  SELECT j_id, title, icon, body
  FROM johdanto
  WHERE j_id = :j_id;
  ");

$sec->execute(['j_id' => $_GET['j_id']]);

$sec = $sec->fetch(PDO::FETCH_ASSOC);


require VIEW_ROOT . '/admin/editJohdaSec.php';