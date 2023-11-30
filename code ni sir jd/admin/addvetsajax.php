<?php

    require_once '../classes/vets.class.php';
    require_once '../tools/functions.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect data from the AJAX request
        $vetName = htmlentities($_POST['vetName']);
        $email = htmlentities($_POST['email']);
        $almaMater = htmlentities($_POST['almaMater']);
        $degree = htmlentities($_POST['degree']);
        // //if status is a radio button
        // if(isset($_POST['status'])){
        //     $status = htmlentities($_POST['status']);
        // }else{
        //     $status = '';
        // }

        // Initialize an error array to store validation errors
        $error_array = [];

        // Validate
        if (!validate_field($vetName)) {
            $error_array['vetName'] = "Please enter a valid name";
        }

        if (!validate_email($email)) {
            $error_array['email'] = "Please enter a valid email";
        }

        if (!validate_field($almaMater)) {
            $error_array['almaMater'] = "Please select Alma Mater";
        }

        if (!validate_field($degree)) {
            $error_array['degree'] = "Please enter a valid degree";
        }

        // if (!validate_field($password)) {
        //     $error_array['password'] = "Please enter a valid password";
        // }

        // if (!validate_field($status)) {
        //     $error_array['status'] = "Please select staff status";
        // }

        header('Content-Type: application/json');
        
        if (empty($error_array)) {
            // No validation errors, proceed to add staff
            $vets = new Vets();
            $vets->vetName = $vetName;
            $vets->email = $email;
            $vets->almaMater = $almaMater;
            $vets->degree = $degree;

            if ($vets->add()) {
                $message = 'success';
                echo json_encode($message);
            } else {
                $message = 'Failed adding to the database';
                echo json_encode($message);
            }
        }else{
            // Validation errors occurred, send error messages to JavaScript
            echo json_encode($error_array);
        }
    }

?>