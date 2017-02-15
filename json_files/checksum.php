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
  $sql = "SELECT * FROM cards";
  $result = mysql_query($sql) or die("Query error: " . mysql_error());

  $sql2 = "SELECT * FROM piste_cards";
  $result2 = mysql_query($sql2) or die("Query error: " . mysql_error());

  $sql3 = "SELECT * FROM sabamestari";
  $result3 = mysql_query($sql3) or die("Query error: " . mysql_error());

  $sql4 = "SELECT * FROM pistemestari";
  $result4 = mysql_query($sql4) or die("Query error: " . mysql_error());

  $sql5 = "SELECT DISTINCT cards.c_id, cards.body, cards.title, cards.variations, cards.diff, cards.s_id, images.image_dir, images.image_name 
	FROM cards, images 
	WHERE cards.c_id = images.c_id 
	GROUP BY cards.c_id;";
  $result5 = mysql_query($sql5) or die("Query error: " . mysql_error());

  $sql6 = "SELECT * FROM images";
  $result6 = mysql_query($sql6) or die("Query error: " . mysql_error());

  $sql7 = "SELECT DISTINCT piste_cards.c_id, piste_cards.body, piste_cards.title, piste_cards.variations, piste_cards.diff, piste_cards.p_id, piste_images.image_dir, piste_images.image_name 
	FROM piste_cards, piste_images
	WHERE piste_cards.c_id = piste_images.c_id 
	GROUP BY piste_cards.c_id;";
  $result7 = mysql_query($sql7) or die("Query error: " . mysql_error());

  $sql8 = "SELECT * FROM piste_images";
  $result8 = mysql_query($sql8) or die("Query error: " . mysql_error());

  $sql9 = "SELECT * FROM johdanto"; 
  $result9 = mysql_query($sql9) or die("Query error: " . mysql_error());

  $sql10 = "SELECT * FROM johda_cards";
  $result10 = mysql_query($sql10) or die("Query error: " . mysql_error());

  $sql11 = "SELECT DISTINCT johda_cards.c_id, johda_cards.body, johda_cards.title, johda_cards.j_id, johda_images.image_dir, johda_images.image_name 
	FROM johda_cards, johda_images
	WHERE johda_cards.c_id = johda_images.c_id 
	GROUP BY johda_cards.c_id;";
  $result11 = mysql_query($sql11) or die("Query error: " . mysql_error());

  $sql12 = "SELECT * FROM johda_images";
  $result12 = mysql_query($sql12) or die("Query error: " . mysql_error());



  $records = array();
  $records2 = array();
  $records3 = array();
  $records4 = array();
  $records5 = array();
  $records6 = array();
  $records7 = array();
  $records8 = array();
  $records9 = array();
  $records10 = array();
  $records11 = array();
  $records12 = array();

  while($row = mysql_fetch_assoc($result)) {
    $records[] = $row;
  }
  while($row2 = mysql_fetch_assoc($result2)) {
    $records2[] = $row2;
  }
  while($row3 = mysql_fetch_assoc($result3)) {
    $records3[] = $row3;
  }

  while($row4 = mysql_fetch_assoc($result4)) {
    $records4[] = $row4;
  }
  while($row5 = mysql_fetch_assoc($result5)) {
    $records5[] = $row5;
  }
  while($row6 = mysql_fetch_assoc($result6)) {
    $records6[] = $row6;
  }
  while($row7 = mysql_fetch_assoc($result7)) {
    $records7[] = $row7;
  }
  while($row8 = mysql_fetch_assoc($result8)) {
    $records8[] = $row8;
  }
  while($row9 = mysql_fetch_assoc($result9)) {
    $records9[] = $row9;
  }
  while($row10 = mysql_fetch_assoc($result10)) {
    $records10[] = $row10;
  }
  while($row11 = mysql_fetch_assoc($result11)) {
    $records11[] = $row11;
  }
  while($row12 = mysql_fetch_assoc($result12)) {
    $records12[] = $row12;
  }

  $checkArray = array_merge($records);
  $checkArray2 = array_merge($records2);
  $checkArray3 = array_merge($records3);
  $checkArray4 = array_merge($records4);
  $checkArray5 = array_merge($records5);
  $checkArray6 = array_merge($records6);
  $checkArray7 = array_merge($records7);
  $checkArray8 = array_merge($records8);
  $checkArray9 = array_merge($records9);
  $checkArray10 = array_merge($records10);
  $checkArray11 = array_merge($records11);
  $checkArray12 = array_merge($records12);

  $checksum = md5(json_encode($checkArray));
  $checksum2 = md5(json_encode($checkArray2));
  $checksum3 = md5(json_encode($checkArray3));
  $checksum4 = md5(json_encode($checkArray4));
  $checksum5 = md5(json_encode($checkArray5));
  $checksum6 = md5(json_encode($checkArray6));
  $checksum7 = md5(json_encode($checkArray7));
  $checksum8 = md5(json_encode($checkArray8));
  $checksum9 = md5(json_encode($checkArray9));
  $checksum10 = md5(json_encode($checkArray10));
  $checksum11 = md5(json_encode($checkArray11));
  $checksum12 = md5(json_encode($checkArray12));

  mysql_close($con);

  //--------Parse to json
  echo  json_encode(array("sabamestari" => $checksum3, "pistemestari" => $checksum4, "saba_cards" => $checksum, "saba_cards_images" => $checksum5, "saba_images" => $checksum6, "piste_cards" => $checksum2, "piste_cards_images" => $checksum7, "piste_images" => $checksum8, "johdanto" => $checksum9, "johda_cards" => $checksum10, "johda_cards_images" => $checksum11, "johda_images" => $checksum12), JSON_NUMERIC_CHECK);