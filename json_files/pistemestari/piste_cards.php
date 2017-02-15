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
  $sql = "SELECT * FROM piste_cards";
  $result = mysql_query($sql) or die("Query error: " . mysql_error());

  $records = array();

  while($row = mysql_fetch_assoc($result)) {
    $records[] = $row;
  }

  mysql_close($con);

  //--------Parse to json
  echo  json_encode($records, JSON_NUMERIC_CHECK);