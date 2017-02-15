<?php

require 'app/main.php';

//load all sections into $pages
$cards = $db->query("
    SELECT *
    FROM johda_cards
  ")->fetchAll(PDO::FETCH_ASSOC);


require VIEW_ROOT . '/johdantoHome.php';