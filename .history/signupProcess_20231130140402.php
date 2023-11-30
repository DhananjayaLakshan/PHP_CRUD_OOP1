<?php

// Check if the form is submitted
if (isset($_POST['submit'])) {

    // Include the signupConfig class file
    require_once("signupConfig.php");

    // Create a new object of the signupConfig class
    $sc = new signupConfig();

    // Assign values from the POST method to the object properties
    $sc->setFistName($_POST['firstName']);
    $sc->setLastName($_POST['lastName']);
    $sc->setAge($_POST['age']);

    // Call the insertData method to save data to the database
    $sc->insertData();

    // Display a JavaScript alert and redirect to 'index.php'
    echo "<script> alert('Data saved successfully'); document.location='index.php'</script>";
}

// End of the code
?>
