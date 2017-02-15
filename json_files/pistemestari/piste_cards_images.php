<?php

  header('Access-Control-Allow-Origin: *');
  header('Content-type: application/json');


  $host = 'localhost';
  $dbname = 'floorball';
  $user = 'floorball';
  $pass = '!lv09fkDO';


  //--------Connect to the database
  $con = mysql_connect($host, $user, $pass) or die("Could not connect: "
    . mysql_error());
  mysql_select_db($dbname, $con);

  //--------Store * in array
  $sql = "SELECT DISTINCT piste_cards.c_id, piste_cards.body, piste_cards.title, piste_cards.variations, piste_cards.diff, piste_cards.p_id, piste_images.image_dir, piste_images.image_name 
	FROM piste_cards, piste_images
	WHERE piste_cards.c_id = piste_images.c_id 
	GROUP BY piste_cards.c_id;";

  $result = mysql_query($sql) or die("Query error: " . mysql_error());

  $records = array();

  while($row = mysql_fetch_assoc($result)) {
    $records[] = $row;
  }

  mysql_close($con);

  //--------Parse to json
  echo  json_encode($records, JSON_NUMERIC_CHECK);