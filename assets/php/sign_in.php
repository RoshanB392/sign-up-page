<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign In</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        <!--  Custom Style CSS  -->
        <link rel="stylesheet" href="../css/main.css">

    </head>
    <body>
        <header>
            <?php include('../html/header.php'); ?>
        </header>

        <div class="col-sm-3 p-3 mt-5 mx-auto shadow-lg bg-white rounded">

            <h2 class="text-center border-bottom pb-3">Sign in to Portal</h2>
            
            <div>
                <form class="form" method="POST" action="/" class="row g-3">
                    <div class="col-12">
                        <label for="Email" class="form-label">Email address</label>
                        <input type="email" class="form-control email" id="email" name="email" placeholder="Email address" required>
                        <!-- errors -->
                        <div class="invalid-feedback emailError" style="font-size:16px;">Please enter Email.</div>
                    </div>
                    <div class="col-12">
                        <label for="Password" clas="form-label">Password</label>
                        <input type="password" class="form-control password" id="password" name="password" placeholder="Password" required>
                        <!-- errors -->
                        <div class="invalid-feedback passwordError" style="font-size:16px;">Please enter Password.</div>
                        <div class="form-label"><a href="">Forget password ?</a></div>
                    </div>
                    <div class="d-grid col-8 mx-auto"></div>
                        <button type="submit" class="btn btn-outline-success" id="btn-signin">Sign in</button>
                    </div>
                </form>
            </div>

            <div class="col-sm-3 text-center p-3 mb-5 mx-auto shadow-sm bg-white">
                New to Portal ? <a href="../../index.php"><b>Create an Account.</b></a>
            </div>

        </div>

        <footer>
            <?php include('../html/footer.html'); ?>
        </footer>
        
        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        
        <!-- Javascript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="../js/sign_in_form.js"></script>
        <script src="../js/main.js"></script>

    </body>
</html>