<?php
    require "connection.php";
    $id = $_POST['id'];
    $name = $_POST['name'];
    $sport = $_POST['sport'];

    $sql = "UPDATE names SET name = '$name', sport = '$sport' WHERE id = $id";
    $query = mysqli_query($db, $sql);
    header('Location: index.php');
?>