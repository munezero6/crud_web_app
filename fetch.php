<?php
include 'db.php';

$result = $conn->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['hobbies']}</td>
            <td>
                <button onclick='editUser({$row['id']}, \"{$row['name']}\", \"{$row['hobbies']}\")'>Edit</button>
                <a href='delete.php?id={$row['id']}'>Delete</a>
            </td>
          </tr>";
}
?>
