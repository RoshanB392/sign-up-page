<?php
    include_once('connection.php');

    if(isset($_POST['email']) && isset($_POST['password'])){

            $email = $_POST['email'];
            $password = $_POST['password'];	
            
            $sql = "SELECT * FROM user WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_array($result);
            $db_password = $row["password"];
                
            if(password_verify($password, $db_password)){
                $_SESSION['id'] = $row['id'];
                $_SESSION['firstname'] = $row['first-name'];
                $_SESSION['lastname'] = $row['last-name'];
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