<?php

require 'config.php';

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$sql = 'SELECT * FROM users';

$data = mysqli_query($connect, $sql);

$users = [];

while ($row = mysqli_fetch_assoc($data)){
    $users[] = $row;
}



?>
