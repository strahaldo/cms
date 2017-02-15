<?php 

require '../app/main.php';

if (!empty($_POST)) {

  $title = $_POST['title'];
  $icon = $_POST['icon'];

  if (empty($_POST['body'])) {
    $body = "";
  } else {
    $body = $_POST['body'];
  };

  $insertSec = $db->prepare("
    INSERT INTO johdanto
    VALUES ('', :title, :icon, :body)
    ");

  $insertSec->execute([
      'title' => $title,
      'icon' => $icon,
      'body' => $body
    ]);

  header('Location: ' . BASE_URL . 'admin/list.php');

}

require VIEW_ROOT . '/admin/addJohdaSec.php';