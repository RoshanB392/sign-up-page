<?php
require_once("connection.php");

if(!isset($_SESSION['id'])){
  header("location: sign_in.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Profile Edit</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <!--  Custom Style CSS  -->
        <!-- <link rel="stylesheet" href="assets/css/main.css"> -->

        
    </head>
    <body>

    <?php

        $id = $_SESSION['id']; // get id through query string
        $sql = "SELECT * FROM user WHERE id='$id'";
        $result = mysqli_query($conn, $sql); 

        $row = mysqli_fetch_array($result); 

    ?>
        <header>
            <?php include("../html/header.php");?>
        </header>

        <div class="col-lg-6 p-3 mt-5 mb-5 mx-auto shadow-lg bg-white rounded">

            <h1 class="text-center border-bottom pb-3">Profile Edit</h1>
            <div>        
                <!-- SIGN UP FORM -->
                <form method="POST" action="/" class="row g-3">
            
                    <!-- FIRST NAME -->
                    <div id="name-group" class="col-md-6">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo($row['first-name']);?>" placeholder="First Name" required>
                        <!-- errors -->
                        <div class="invalid-feedback" style="font-size:16px;">Please enter First Name.</div>
                    </div>
                    <!-- LAST NAME -->
                    <div id="name-group" class="col-md-6">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo($row['last-name']);?>" placeholder="Last Name" required>
                        <!-- errors -->
                        <div class="invalid-feedback" style="font-size:16px;">Please enter Last Name.</div>
                    </div>

                    <!-- EMAIL -->
                    <div id="email-group" class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo($row['email']);?>" placeholder="your-name@gmail.com" required>
                        <!-- errors -->
                        <div class="invalid-feedback emailError" style="font-size:16px;">Please enter Email.</div>
                    </div>

                    <!-- PASSWORD -->
                    <div id="password-group" class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <!-- errors -->
                        <div class="invalid-feedback passwordError" style="font-size:16px;">Please enter Password</div>                        
                    </div>

                    <!-- PROFESSION -->
                    <div id="profession-group" class="col-12">
                        <label for="profession" class="form-label">Profession</label>
                        <input type="text" class="form-control" id="profession" name="profession" value="<?php echo($row['profession']);?>" placeholder="Designation">
                    </div>
                    
                    <!-- BIO DATA-->
                    <div id="bio-group" class="col-12">
                        <label for="bio" class="form-label">Your Bio</label>
                        <input type="text" class="form-control" id="bio" name="bio" value="<?php echo($row['bio']);?>" placeholder="Your detail description"></textarea>
                    </div>
                    
                    <!-- DATE OF BIRTH -->
                    <div id="dob-group" class="col-12">
                        <label for="dob" class="form-label">Date Of Birth</label>
                        <input type="date" min="1921-01-01" max="2021-12-31" id="dob" class="form-control" name="dob" value="<?php echo($row['dob']);?>" placeholder="YYYY/MM/DD">
                    </div>

                    <!-- MOBILE NUMBER -->
                    <div id="mobileno-group" class="col-12">
                        <label for="mobileno" class="form-label">Mobile Number</label>
                        <input type="tel" class="form-control" minlength="10" maxlength="10" pattern="[6-9]{1}[0-9]{9}" id="phone" name="phone" value="<?php echo($row['phone']);?>" placeholder="XXXXXXXXXX">
                    </div>
                    
                    <!-- ID -->
                    <input type="text" name="uid" id="uid" value="<?php echo($row['id']);?>" hidden />
                    
                    <!-- SUBMIT BUTTON -->
                    <div class="d-grid col-6 mx-auto">
                        <button type="submit" class="btn btn-outline-info btn-block" id="btn-update-profile">Update Profile<span class="fa fa-arrow-right"></span></button>
                    </div>
                </form>
            </div>
        </div>

        <footer>
            <?php include("../html/footer.html");?>
        </footer>

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        
        <!-- Javascript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="../js/edit_profile.js"></script>
        <script src="../js/main.js"></script>
    </body>
</html>