<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <!--  Custom Style CSS  -->
        <link rel="stylesheet" href="assets/css/main.css">

    </head>
    <body>
        <header>
            <?php include("./assets/html/header.php");?>
        </header>

        <div class="col-sm-4 shadow-lg p-3 mt-5 mx-auto  bg-white rounded">

            <h1 class="text-center border-bottom pb-3">Create your account</h1>
            <div>        
                <!-- SIGN UP FORM -->
                <!-- <form id="sign_up_form" method="post" action="./assets/php/sign_up.php" class="row g-3"> -->
                <form id="sign_up_form" method="POST" class="row g-3">
            
                    <!-- FIRST NAME -->
                    <div id="firstname-group" class="col-md-6">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control firstname" id="firstname" name="firstname" placeholder="First Name" required>
                        <!-- errors -->
                        <div class="invalid-feedback" style="font-size:16px;">Please enter First Name.</div>
                    </div>

                    <!-- LAST NAME -->
                    <div id="lastname-group" class="col-md-6">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control lastname" id="lastname"name="lastname" placeholder="Last Name" required>
                        <!-- errors -->
                        <div class="invalid-feedback" style="font-size:16px;">Please enter Last Name.</div>
                    </div>

                    <!-- EMAIL -->
                    <div id="email-group" class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control email" id="email" name="email" placeholder="your-name@gmail.com" required>
                        <!-- errors -->
                        <div class="invalid-feedback emailError" style="font-size:16px;">Please enter Email.</div>
                    </div>
            
                    <!-- PASSWORD -->
                    <div id="password-group" class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control password" id="password" name="password" placeholder="Password" required>
                        <!-- errors -->
                        <div class="invalid-feedback passwordError" style="font-size:16px;">Please enter Password</div>
                    </div>

                    <!-- SUBMIT BUTTON -->
                    <div class="d-grid col-8 mx-auto">
                        <button type="submit" class="btn btn-outline-primary btn-block" name="btn-signup" id="btn-signup">Sign Up<span class="fa fa-arrow-right"></span></button>
                    </div>
                </form>
            </div>
        </div>

        <footer>
            <?php include("./assets/html/footer.html");?>
        </footer>

        
        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        
        <!-- Javascript -->
        <script src="assets/js/sign_up_form.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>