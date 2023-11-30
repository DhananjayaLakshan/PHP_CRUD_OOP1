<?php

if (isset($_POST['submit'])) {
    require_once("signupConfig.php");

    //create new object
    $sc = new signupConfig();

    //assign values from POST method
    $sc->setFistName($_POST['firstName']);
    $sc->setLastName($_POST['lastName']);
    $sc->setAge($_POST['age']);


}