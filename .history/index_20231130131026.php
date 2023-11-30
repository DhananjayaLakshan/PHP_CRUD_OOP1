<?php
    require_once('signupConfig.php');
    $data = new signupConfig();
    $all = $data->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OOP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>

    <h1 style="text-align: center;">OOP CRUD</h1>

    <a href="signup.php"><button class="btn btn-primary addButton" id="addButton">Add</button></a>


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
<?
        foreach($all as $key => $val){
            
            ?>

        <tr>
            <th><?=$val['firstName']?></th>
            <td><?=$val['lastName']?></td>
            <td><?=$val['age']?></td>
            
            <td style="width: 25%; text-align: center;">
                <button class="btn btn-success">UPDATE</button>
                <button class="btn btn-danger">DELETE</button>
            </td>
        </tr>
<?
}
?>
        </tbody>
    </table>
















    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>

</html>