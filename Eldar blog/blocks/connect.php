<?php
    $mysql = new mysqli('localhost','root','root','blog');
    if ($mysql->connect_error) {
        die("Connection failed: " . $mysql->connect_error);
      }
?>