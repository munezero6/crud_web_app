<?php
include 'db.php';

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $hobbies = $_POST['hobbies'];
    $conn->query("INSERT INTO users (name, hobbies) VALUES ('$name', '$hobbies')");
} elseif (isset($_POST['update']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $hobbies = $_POST['hobbies'];
    $conn->query("UPDATE users SET name='$name', hobbies='$hobbies' WHERE id=$id");
}

header("Location: index.php");
?>
