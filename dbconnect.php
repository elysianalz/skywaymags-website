<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbName = "skywaymags";

  $conn = new mysqli($servername,$username,$password,$dbName);

  // Check connection
  if ($conn -> connect_errno)
  {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
  }

  $sql = "SELECT * FROM Songs";
  $songs = $conn->query($sql);
  $sql = "SELECT * FROM Notes";
  $notes = $conn->query($sql);
  $sql = "SELECT * FROM Videos";
  $videos = $conn->query($sql);
  $sql = "SELECT * FROM Albums";
  $albums = $conn->query($sql);
?>
