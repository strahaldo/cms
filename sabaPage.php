<?php

require 'app/main.php';


$cards = $db->query("
  SELECT *
  FROM cards
  ")->fetchAll(PDO::FETCH_ASSOC);


//check if the slug is empty
if (empty($_GET['s_id'])) {
	$page = false;
} else {
	$s_id = $_GET['s_id'];

	$page = $db->prepare("
		SELECT * 
		FROM sabamestari
		WHERE s_id = :s_id
	");



	$page->execute(['s_id' => $s_id]);

	$page = $page->fetch(PDO::FETCH_ASSOC);

}

require VIEW_ROOT . '/page/showSaba.php';