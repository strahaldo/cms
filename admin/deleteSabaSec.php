<?php

require '../app/main.php';

if (isset($_GET['s_id'])) {

  $deleteSec = $db->prepare("
      DELETE FROM sabamestari
      WHERE s_id = :s_id
    ");

  $deleteSec->execute(['s_id' => $_GET['s_id']]);
}

header('Location: ' . BASE_URL . 'admin/list.php');