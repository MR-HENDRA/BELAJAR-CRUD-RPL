<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Form</title>
</head>

<body>
    <!-- Link -->
    <a href="insert.php">Insert Data</a>

    <!-- Table -->
    <h2>Data User</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php
        include("connection.php");
        $sql = "SELECT * FROM form_tb";
        $result = mysqli_query($conn, $sql);
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) :
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["password"]; ?></td>
                <td>
                    <a href="update.php? id= <?php echo $row["id"]; ?>">Edit</a>
                    <a href="delete.php? id= <?php echo $row["id"]; ?>">Delete</a>
                </td>
            </tr>
        <?php $i++;
        endwhile;
        ?>
    </table>
</body>

</html>