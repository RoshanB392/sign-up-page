<?php

$errors = array();      // array to hold validation errors
$data = array();        // array to pass back data

// validate the variables 
if (empty($_POST['username']))
    $errors['username'] = 'Please enter the User Name.';

if (empty($_POST['email']))
    $errors['email'] = 'Please enter Email.';

if (empty($_POST['password']))
    $errors['password'] = 'Please enter Password.';


// return a response 
if (!empty($errors)) {

    // if errors, return those errors
    $data['success'] = false;
    $data['errors']  = $errors;
} else {

    // if no errors process form, then return a message

    // DO ALL YOUR FORM PROCESSING HERE
    // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

    $data['success'] = true;
    $data['message'] = 'Success!';
}

// return all our data to an AJAX call
echo json_encode($data);