<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e11dcd3a63.js" crossorigin="anonymous"></script>
    <style>
        #div-utama {
            box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }
    </style>
    <title>Index Form</title>
</head>

<body>
    <div class="container pt-4 px-4 border border-1 mt-3 mb-3" id="div-utama">
        <table class="table table-bordered border-primary">
            <h5 style="text-align: center" class="text-primary">DATA USER</h5>
            <a href=" insert.php" class="btn btn-primary mb-3"><i class="fa-solid fa-user-plus" style="color: #ffffff;"></i></a>
            <tr style="text-align: center;">
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
                    <td style="text-align: center;"><?php echo $i; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["password"]; ?></td>
                    <td>
                        <div>
                            <div style="text-align: center;">
                                <a href="update.php? id= <?php echo $row["id"]; ?>"><i class="fa-solid fa-pen-to-square" style="color: #0055ff;"></i></a>
                                <a href="delete.php? id= <?php echo $row["id"]; ?>"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>

            <?php $i++;
            endwhile;
            ?>
        </table>
    </div>

</body>

</html>