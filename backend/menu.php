<?php
require_once 'connect.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];} else
    $id = 1;

$query = "select * from menu where type_of_dish_id = $id";
$result = pg_query($dbconnect, $query);
$result = pg_fetch_all($result);



?>