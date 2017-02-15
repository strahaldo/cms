<?php

require '../app/main.php';


if (!empty($_POST)) {

  $title = $_POST['title'];

  $dir = "../data/";
  $image_name = basename($_FILES['files']['name']);
  $image_dir = BASE_URL . "data/" . $image_name;
  $target_file = $dir . basename($_FILES['files']['name']);

if (move_uploaded_file($_FILES['files']['tmp_name'], $target_file)) {


  $insertSect = $db->prepare("
      INSERT INTO pistemestari
      VALUES ('', :title, :image_dir, :image_name)
    ");

  $insertSect->execute([
      'title' => $title,
      'image_dir' => $image_dir,
      'image_name' => $image_name
    ]);

  header('Location: ' . BASE_URL . 'admin/list.php');
} else {

  $insertSect = $db->prepare("
      INSERT INTO pistemestari
      VALUES ('', :title, '', '')
    ");

  $insertSect->execute([
      'title' => $title
    ]);

    header('Location: ' . BASE_URL . 'admin/list.php');

};

}


require VIEW_ROOT . '/admin/addPisteSec.php';