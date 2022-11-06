<?php
 $conn = new mysqli('db403-mysql', 'root', 'P@ssword', 'northwind');
 if($conn ->connect_errno){
     die($conn->connect_error);
 }
?>