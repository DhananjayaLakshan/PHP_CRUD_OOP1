<?php

    require_once('signupConfig.php');
    $record = new signupConfig();

    $id = $_GET['id'];
    $record->setId($id);

    if(isset($_POST['submit'])){
        $record->setFistName($_POST['firstName']);
        $record->setLastName($_POST['lastName']);
        $record->setAge($_POST['age']);

        echo $record->update();
        echo "<script>alert('Data updated successfully'); document.location='index.php'</script>";

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>



    <form action="" method="post" style="width: 25%; margin: 10% 35%; border: 1px solid black; padding : 15px;">
    <h1 style="text-align: center; font-weight: 500;">SIGNUP</h1>

        <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="text" name="firstName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Last Name</label>
            <input type="text" name="lastName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Age</label>
            <input type="number" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>
    




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>