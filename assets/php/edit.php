<?php
    include_once('connection.php');

    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password'])){
            
        $id = $_SESSION['id'];
            $first_name = $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);	
            $profession = $_POST['profession'];
            $bio = $_POST['bio'];
            $dob = $_POST['dob'];
            $phone = $_POST['mobileno'];	
            
            $sql = "UPDATE `user` SET `first-name`='$first_name', `last-name`=$last_name, `email`='$email', `profession`='$profession', `bio`='$bio', `dob`='$dob', `phone`='$phone', `password`='$password' WHERE id='$id'";
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