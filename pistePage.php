<?php

require 'app/main.php';


$cards = $db->query("
  SELECT *
  FROM piste_cards
  ")->fetchAll(PDO::FETCH_ASSOC);


//check if the slug is empty
if (empty($_GET['p_id'])) {
  $page = false;
} else {
  $p_id = $_GET['p_id'];

  $page = $db->prepare("
    SELECT * 
    FROM pistemestari
    WHERE p_id = :p_id;
  ");



  $page->execute(['p_id' => $p_id]);

  $page = $page->fetch(PDO::FETCH_ASSOC);

}

require VIEW_ROOT . '/page/showPiste.php';