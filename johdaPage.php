<?php

require 'app/main.php';


$cards = $db->query("
  SELECT *
  FROM johda_cards
  ")->fetchAll(PDO::FETCH_ASSOC);


//check if the slug is empty
if (empty($_GET['j_id'])) {
  $page = false;
} else {
  $j_id = $_GET['j_id'];

  $page = $db->prepare("
    SELECT * 
    FROM johdanto
    WHERE j_id = :j_id
  ");



  $page->execute(['j_id' => $j_id]);

  $page = $page->fetch(PDO::FETCH_ASSOC);

}

require VIEW_ROOT . '/page/showJohda.php';