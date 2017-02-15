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
  $sql = "SELECT title, s_id FROM sabamestari";
  $isql = "SELECT * FROM cards";
  $result = mysql_query($sql) or die("Query error: " . mysql_error());
  $iresult = mysql_query($isql) or die("Query error: " . mysql_error());


  while($row = mysql_fetch_assoc($result)) {
    $records[] = $row;
  }
  while($irow = mysql_fetch_assoc($iresult)) {
    $irecords[] = $irow;
  }

  mysql_close($con);

  //--------Parse to json
  echo  json_encode(array("section" =>$records, "cards" => $irecords), JSON_NUMERIC_CHECK);