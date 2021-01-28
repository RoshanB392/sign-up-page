<?php
    include_once('connection.php');

    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])){
            
        $id = $_POST['uid'];
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $email = $_POST['email'];
        $profession = $_POST['profession'];
        $bio = $_POST['bio'];
        $phone = $_POST['phone'];	
        
        $rawdate = htmlentities($_POST['dob']);
        $dob = date('Y-m-d', strtotime($rawdate));


        if(isset($_POST['password']) && $_POST['password'] != ""){
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);	
            $sql = "UPDATE `user` SET `first-name`='$first_name', `last-name`='$last_name', `email`='$email', `profession`='$profession', `bio`='$bio', `dob`='$dob', `phone`='$phone', `password`='$password' WHERE id='$id'";
        } else {
            $sql = "UPDATE `user` SET `first-name`='$first_name', `last-name`='$last_name', `email`='$email', `profession`='$profession', `bio`='$bio', `dob`='$dob', `phone`='$phone' WHERE id='$id'";
        }
        $result = mysqli_query($conn, $sql);
            
        if(!$result){
            die("Database Error. " . mysqli_error($conn));
        } else {
            $_SESSION['created'] = "Account Edited Successfully.";
            echo json_encode(['status' => 'success']);
        }		
    }
        

// mysqli_close($conn);

?>