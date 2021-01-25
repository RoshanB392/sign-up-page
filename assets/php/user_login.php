<?php
    include_once('connection.php');

    if(isset($_POST['email']) && isset($_POST['password'])){

            $email = $_POST['email'];
            $password = $_POST['password'];	
            
            $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

            if(mysqli_num_rows($result) > 0){
                $db_password = $query['password'];
            }
                $row = mysqli_fetch_row($result);
                
            if(password_verify($password, $db_password)){
                $_SESSION['id'] = $id;
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['dob'] = $row['dob'];
                $_SESSION['phone'] = $row['phone'];
                $_SESSION['profession'] = $row['profession'];
                $_SESSION['bio'] = $row['bio'];
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'passwordError', 'message' => 'Your Password is incorrect']);
            }
            } else {
                echo json_encode(['status' => 'emailError', 'message' => 'Your Email is incorrect']);
            }

?>