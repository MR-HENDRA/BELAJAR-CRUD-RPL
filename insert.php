<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Insert</title>
</head>

<body>
    <form method="POST" action="insert.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Input Username" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Input Email" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Input Password" required>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    // CEK DATA
    include("connection.php");
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "INSERT INTO form_tb (name, email, password) VALUES ('$name', '$email', '$password')";
        if (mysqli_query($conn, $sql)) {
            echo "<br>";
            echo "--- Success Insert Data! ---";
            echo "<script>window.location='index.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>
</body>

</html>