<?php

// Include the required class file
require_once('signupConfig.php');

// Create an instance of the signupConfig class
$record = new signupConfig();

// Uncommented lines for debugging
// echo($_GET['id']);
// echo($_GET['req']);

// Check if 'id' and 'req' parameters are set in the URL
if (isset($_GET['id']) && isset($_GET['req'])) {

    // Check if the requested operation is 'delete'
    if ($_GET['req'] == 'delete') {
        
        // Set the 'id' parameter in the signupConfig instance
        $record->setId($_GET['id']);
        
        // Call the delete method to delete the record
        $record->delete();
        
        // Display an alert and redirect to index.php after deletion
        echo "<script> alert('Data deleted successfully'); document.location='index.php'</script>";

    }
}

