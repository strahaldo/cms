<?php

//list out the cards that we have
require '../app/main.php';

$cards = $db->query("
		SELECT *
		FROM cards
	")->fetchAll(PDO::FETCH_ASSOC);

$s_images = $db->query("
  SELECT *
  FROM images
  ")->fetchAll(PDO::FETCH_ASSOC);

$piste_cards = $db->query("
  SELECT *
  FROM piste_cards
  ")->fetchAll(PDO::FETCH_ASSOC);

$sec = $db->query("
    SELECT *
    FROM sabamestari
  ")->fetchAll(PDO::FETCH_ASSOC);

$pSec = $db->query("
    SELECT *
    FROM pistemestari
  ")->fetchAll(PDO::FETCH_ASSOC);

$jSec = $db->query("
  SELECT *
  FROM johdanto
  ")->fetchAll(PDO::FETCH_ASSOC);

$jCards = $db->query("
  SELECT *
  FROM johda_cards
  ")->fetchAll(PDO::FETCH_ASSOC);



require VIEW_ROOT . '/admin/list.php';