<?php
/*
    Name: Scott Alton
    Date: October 2, 2020
    File: db.php
    Description: This file contains the functions used to connect to the site's postgres database, and makes use of constants imported from constants.php to do
  */

// db_connect function - connects to the PostGreSQL database based on set constant values
function db_connect()
{
  return pg_connect("host=" . DB_HOST . " port=" . DB_PORT . " dbname=" . DATABASE . " user=" . DB_ADMIN . " password=" . DB_PASSWORD);
}

function select($query)
{
  $conn = db_connect();
  $result = pg_query($conn, $query);
  $resultsArr = array();
  if (pg_num_rows($result) > 0) {

    while ($row = pg_fetch_assoc($result)) {

      array_push($resultsArr, $row);
    }
    return $resultsArr;
  } else {
    return false;
  }
}

function insert($query)
{
  $conn = db_connect();
  $insertRow = pg_query($conn, $query);

  if ($insertRow) {
    header('Location: index.php?message=' . urldecode("New Record Successfully Created"));
  }
}

function update($query)
{
  $conn = db_connect();
  $updateRow = pg_query($conn, $query);

  if ($updateRow) {
    header('Location: index.php?message=' . urldecode("Record Successfully Updated"));
  }
}

function delete($query)
{
  $conn = db_connect();
  $deleteRow = pg_query($conn, $query);

  if ($deleteRow) {
    header('Location: index.php?message=' . urldecode("Record Successfully Deleted"));
  }
}
