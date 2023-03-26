<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <title>Form Insert</title>
</head>

<body>
    <div class="container pt-4 px-4 border border-1 mt-3 mb-3">
        <form method="POST" action="insert.php">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Input you're name" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Input you're email" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Input you're password" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
    </div>
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