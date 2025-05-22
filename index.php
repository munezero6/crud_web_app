<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h2>User Registration</h2>
    <form action="process.php" method="POST">
        <input type="hidden" name="id" id="userId">
        <label for="name">Name:</label>
        <input type="text" name="name" id="userName" required>

        <label for="hobbies">Hobbies:</label>
        <input type="text" name="hobbies" id="userHobbies" required>

        <button type="submit" name="save">Save</button>
        <button type="submit" name="update">Update</button>
    </form>

    <h2>User List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Hobbies</th>
            <th>Actions</th>
        </tr>
        <?php include 'fetch.php'; ?>
    </table>

    <script>
        function editUser(id, name, hobbies) {
            document.getElementById("userId").value = id;
            document.getElementById("userName").value = name;
            document.getElementById("userHobbies").value = hobbies;
        }
    </script>
</body>
</html>
