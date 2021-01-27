
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Navbar content -->
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Portal</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <?php if(isset($_SESSION['id']))
            {
            ?>
              <li class="nav-item nav-btn" id="logout">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
              <li class="nav-item nav-btn" id="user_profile">
                <a class="nav-link" href="user_profile.php">Profile</a>
              </li>
            <?php }else{ ?>
              <li class="nav-item nav-btn"  id="signup">
              <a class="nav-link" href="./assets/php/index.php">Sign Up</a>
              </li>
              <li class="nav-item nav-btn" id="signin">
              <a class="nav-link" href="./assets/php/sign_in.php">Sign In</a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
  </nav>