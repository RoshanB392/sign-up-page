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
        <title>User Profile</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <!--  Custom Style CSS  -->
        <!-- <link rel="stylesheet" href="assets/css/main.css"> -->

        
    </head>
    <body>
        <header>
            <?php include("../html/header.html");?>
        </header>

        <div class="col-sm-4 border border-1 p-3 mx-auto">

            <h1 class="text-center border-bottom pb-3">Profile</h1>
            <div>        
                <!-- SIGN UP FORM -->
                <form method="GET" action="/" class="row g-3">
            
                    <!-- FIRST NAME -->
                    <div id="name-group" class="col-md-6">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstname" value="<?php echo($_SESSION['firstname'])?>" placeholder="First Name" disabled>
                        <!-- errors -->
                    </div>
                    <!-- LAST NAME -->
                    <div id="name-group" class="col-md-6">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastname" value="<?php echo($_SESSION['lastname'])?>" placeholder="Last Name" disabled>
                        <!-- errors -->
                    </div>

                    <!-- EMAIL -->
                    <div id="email-group" class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo($_SESSION['email'])?>" placeholder="your-name@gmail.com" disabled>
                        <!-- errors -->
                    </div>

                    <!-- PROFESSION -->
                    <div id="profession-group" class="col-12">
                        <label for="profession" class="form-label">Profession</label>
                        <input type="text" class="form-control" name="profession" placeholder="Designation" value="<?php echo($_SESSION['profession'])?>" disabled>
                        <!-- errors -->
                    </div>
                    
                    <!-- BIO DATA-->
                    <div id="bio-group" class="col-12">
                        <label for="bio" class="form-label">Your Bio</label>
                        <textarea class="form-control" name="bio" placeholder="Your detail description" value="<?php echo($_SESSION['bio'])?>" disabled></textarea>
                        <!-- errors -->
                    </div>
                    
                    <!-- DATE OF BIRTH -->
                    <div id="dob-group" class="col-12">
                        <label for="dob" class="form-label">Date Of Birth</label>
                        <input type="date" min="1900-01-01" max="2021-12-31" pattern="\d{4}-\d{2}-\d{2}" id="dob" class="form-control" name="dob" value="<?php echo($_SESSION['dob'])?>" placeholder="YYYY/MM/DD" disabled>
                        <!-- errors -->
                    </div>

                    <!-- MOBILE NUMBER -->
                    <div id="mobileno-group" class="col-12">
                        <label for="mobileno" class="form-label">Mobile Number</label>
                        <input type="tel" class="form-control" minlength="10" maxlength="10" name="mobileno" value="<?php echo($_SESSION['phone'])?>" placeholder="XXXXXXXXXX" disabled>
                        <!-- errors -->
                    </div>

                    <!-- PASSWORD -->
                    <div id="password-group" class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" disabled>
                        <!-- errors -->
                    </div>
                    
                    <!-- SUBMIT BUTTON -->
                    <div class="d-grid col-6 mx-auto">
                        <button type="submit" class="btn btn-outline-info btn-block" id="btn-edit-profile">Edit Profile<span class="fa fa-arrow-right"></span></button>
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
        <script src="../js/edit_profile.js"></script>
        <script src="../js/main.js"></script>
    </body>
</html>