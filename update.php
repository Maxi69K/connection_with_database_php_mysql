<?php
    require "connection.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM names WHERE id='$id'";
    $query = mysqli_query($db, $sql);
    $result = mysqli_fetch_assoc($query);
    // var_dump($result);
    require "update.view.php";
?>