<?php

require 'app/main.php';

//load all sections into $pages
$sabaSec = $db->query("
  SELECT s_id, title
  FROM sabamestari
  ")->fetchAll(PDO::FETCH_ASSOC);

$pisteSec = $db->query("
  SELECT p_id, title
  FROM pistemestari
  ")->fetchAll(PDO::FETCH_ASSOC);


require VIEW_ROOT . '/home.php';