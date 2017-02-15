<?php

require '../app/main.php';

if (isset($_GET['p_id'])) {

  $deleteSec = $db->prepare("
      DELETE FROM pistemestari
      WHERE p_id = :p_id
    ");

  $deleteSec->execute(['p_id' => $_GET['p_id']]);
}

header('Location: ' . BASE_URL . 'admin/list.php');