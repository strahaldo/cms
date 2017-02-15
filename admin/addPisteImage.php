<?php

require '../app/main.php';

if (isset($_GET['id'])) {
  $c_id = $_GET['id'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

for($i=0; $i<count($_FILES['file']['name']); $i++) {

  $tmpFilePath = $_FILES['file']['tmp_name'][$i];
  $image_type = $_FILES['file']['type'][$i];
  $image_name = $_FILES['file']['name'][$i];
  $c_id = $_POST['c_id'];

  if ($tmpFilePath != ""){

    $newFilePath = "../data/" . $_FILES['file']['name'][$i];
    $image_dir = BASE_URL . "data/" . $_FILES['file']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

        $insertImage = $db->prepare("
          INSERT INTO piste_images
          VALUES ('', :image_dir, :image_type, :c_id, :image_name)
          ");
  
        $insertImage->execute([
            'image_dir' => $image_dir,
            'image_type' => $image_type,
            'c_id' => $c_id,
            'image_name' => $image_name
          ]);

    };
  };
};


header('Location: ' . BASE_URL . 'admin/list.php');
};


$images = $db->prepare("
  SELECT *
  FROM piste_images
  WHERE c_id = :id
  ");

$images->execute(['id' => $_GET['id']]);

$images = $images->fetchAll(PDO::FETCH_ASSOC);



require VIEW_ROOT . '/admin/addPisteImage.php';