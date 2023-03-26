<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <?php
    include("connection.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM form_tb WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) :
    ?>
        <form method="POST" action="#">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>
            <br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
            <br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo $row['password']; ?>" required>
            <br><br>

            <input type="submit" name="submit" value="Submit">
        </form>
    <?php
    endwhile
    ?>

    <!-- CEK DATA -->
    <?php
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "UPDATE form_tb SET name = '$name', email = '$email', password = '$password' WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "--- Success Update Data! ---";
            echo "<script>window.location='index.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>

</body>

</html>