<?php

require '../app/main.php';

if (isset($_GET['id']) && isset($_GET['i_id'])) {

  $c_id = $_GET['id'];

  $deleteImage = $db->prepare("
      DELETE FROM images
      WHERE c_id = :id
      AND image_id = :i_id;
    ");

  $deleteImage->execute([
    'id' => $_GET['id'],
    'i_id' => $_GET['i_id']
    ]);
}

header('Location: ' . BASE_URL . 'admin/addSabaImage.php?id=' . $c_id);