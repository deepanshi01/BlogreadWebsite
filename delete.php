<?php

include 'logic.php';


$id = $_REQUEST['id'];

$sql= "DELETE FROM `data1` WHERE id = $id " ;

mysqli_query($conn, $sql);

header('location: index.php');

?>