<?php
    include_once('connection.php');

    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password'])){

            $first_name = $_POST['firstname'];
            $last_name = $_POST['lastname'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);	
            
            $checkEmail = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

            if(mysqli_num_rows($checkEmail) > 0){
                echo json_encode(['status' => 'error', 'message' => 'Email not available']);
            } else {
                $sql = "INSERT INTO `user`(`first-name`, `last-name`, `email`, `password`) VALUES ('$first_name', '$last_name', '$email', '$password')";
                $result = mysqli_query($conn, $sql);
                if(!$result){
                    die("Database Error. " . mysqli_error($conn));
                } else {
                    $_SESSION['created'] = "Account Created Successfully.";
                    echo json_encode(['status' => 'success']);
                }		
            }
        }

// mysqli_close($conn);

?>