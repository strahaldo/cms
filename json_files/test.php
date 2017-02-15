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
  $sql = "SELECT * FROM johdanto";
  $isql = "SELECT * FROM johda_images";
  $result = mysql_query($sql) or die("Query error: " . mysql_error());
  $iresult = mysql_query($isql) or die("Query error: " . mysql_error());


  while($row = mysql_fetch_assoc($result)) {
    $records[] = $row;
  }
  while($irow = mysql_fetch_assoc($iresult)) {
    $irecords[] = $irow;
  }

  mysql_close($con);

  $checkArray = array_merge($records, $irecords);

  $checksum = md5(json_encode($checkArray));

  //--------Parse to json
  echo  json_encode(array(($records), ($irecords), ($checksum)), JSON_NUMERIC_CHECK);