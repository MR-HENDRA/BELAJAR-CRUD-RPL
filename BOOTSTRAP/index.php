<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <title>Index Form</title>
</head>

<body>
    <!-- Link -->
    <a href="insert.php">Insert Data</a>

    <!-- Table -->

    <?php
    include("connection.php");
    $sql = "SELECT * FROM form_tb";
    $result = mysqli_query($conn, $sql);
    $i = 1;
    while ($row = mysqli_fetch_assoc($result)) :
    ?>
    <div class="container pt-4 px-4 border border-1 mt-3 mb-3">
        <table class="table table-bordered border-primary">
            <h4>Data User</h4>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
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
        </table>
    </div>

    <?php $i++;
    endwhile;
    ?>
    </table>
</body>

</html>