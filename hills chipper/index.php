<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie.edge" />
  <title>Material Design for Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url(https://mdbootstrap.com/img/new/fluid/city/018.jpg);
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>

    <ul class="navbar-nav d-flex flex-row">
      <!-- Icons -->
      <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow" target="_blank">
          <i class="fab fa-youtube"></i>
        </a>
      </li>
      <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
          <i class="fab fa-github"></i>
        </a>
      </li>
    </ul>
    </div>
    </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <form method="post" action="fungsi_login.php" class="bg-white rounded shadow-5-strong p-5">
                <h2 align="center">Login</h2>
                <!-- Username input -->
                <div class="form-outline mb-4">
                  <input type="text" name="username" id="username" required class="form-control" />
                  <label class="form-label" for="username">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4 position-relative"> <!-- Tambahkan class "position-relative" -->
                  <input type="password" name="password" id="password" required class="form-control pr-5" /> <!-- Tambahkan class "pr-5" -->
                  <label class="form-label" for="password">Password</label>
                  <i id="password-toggle-icon" class="fas fa-eye-slash position-absolute end-0 top-50 translate-middle-y" onclick="togglePasswordVisibility()" style="cursor: pointer;"></i> <!-- Tambahkan class dan style untuk ikon mata -->
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                      <label class="form-check-label" for="form1Example3">
                        Remember me
                      </label>
                    </div>
                  </div>
                </div>

                <!-- Submit button -->
                <button type="submit" name="login" value="Login" class="btn btn-primary btn-block">Sign in</button>
                <p>Belum punya akun? <a href="register.php">Registrasi</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--Main Navigation-->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
  </footer>
  <!--Footer-->
  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="js/script.js"></script>

  <script>
    function togglePasswordVisibility() {
      var passwordInput = document.getElementById('password');
      var passwordIcon = document.getElementById('password-toggle-icon');

      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passwordIcon.classList.remove('fa-eye-slash');
        passwordIcon.classList.add('fa-eye');
      } else {
        passwordInput.type = 'password';
        passwordIcon.classList.remove('fa-eye');
        passwordIcon.classList.add('fa-eye-slash');
      }
    }
  </script>
</body>

</html>