<?php
    // Include the required class file
    require_once('signupConfig.php');

    // Create an instance of the signupConfig class
    $data = new signupConfig();

    // Fetch all records from the database
    $all = $data->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OOP</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Custom JavaScript -->
    <script src="script.js"></script>
</head>

<body>

    <h1 style="text-align: center;">OOP CRUD</h1>

    <!-- Add button for navigating to signup.php -->
    <a href="signup.php"><button class="btn btn-primary addButton" id="addButton">Add</button></a>

    <!-- Display records in a table -->
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Age</th>
                <th scope="col" style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through each record and display it in a table row
            foreach ($all as $key => $val) {
            ?>
                <tr>
                    <!-- Display first name, last name, and age -->
                    <th><?= $val['firstName'] ?></th>
                    <td><?= $val['lastName'] ?></td>
                    <td><?= $val['age'] ?></td>
                    <td style="width: 25%; text-align: center;">
                        <!-- Edit button with a link to edit.php -->
                        <a href="edit.php?id=<?= $val['id'] ?>"><button class="btn btn-success">EDIT</button></a>
                        <!-- Delete button with a link to delete.php -->
                        <a href="delete.php?id=<?= $val['id'] ?>&req=delete"><button class="btn btn-danger">DELETE</button></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>

</html>
