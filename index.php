<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="./assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>CJ-7 - RC Clubs & Societies Member Management System</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="./assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="./assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="./assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="./assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="./assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./assets/js/config.js"></script>
    <script>
        // Check if user's default theme is dark
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            // User's default theme is dark, add dark mode CSS files
            var darkCSS1 = document.createElement('link');
            darkCSS1.rel = 'stylesheet';
            darkCSS1.href = './assets/css/core-dark.css';
            document.head.appendChild(darkCSS1);

            var darkCSS2 = document.createElement('link');
            darkCSS2.rel = 'stylesheet';
            darkCSS2.href = './assets/css/theme-default-dark.css';
            document.head.appendChild(darkCSS2);
        }
    </script>
  </head>

  <body>
    <!-- Content -->
<?php

session_start();

if (isset($_SESSION['ADMIN']) && $_SESSION['ADMIN'] == "ADMIN") {
  header("Location: ./admin");
}
if (isset($_SESSION['club_manager']) && $_SESSION['club_manager'] == "club_manager") {
  header("Location: ./dash");
}

?>
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <img height="60px" src="./assets/img/logo.png" alt="">
                  </span>
                    <!-- <span class="app-brand-text demo text-body fw-bold">CJ-7</span> -->
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Welcome to CJ-7!</h4>
              <p class="mb-4">Please sign-in to your account</p>

              <?php

              require('./assets/php/dbcon.php');

              if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $stmt = $conn->prepare("SELECT id, password, name, avatar, club_id, role FROM users WHERE username = ?");
                  $stmt->bind_param("s", $username);
                  $stmt->execute();
                  $stmt->bind_result($userId, $hashedPassword, $name, $userAvatar, $userClubId, $userRole);
                  $stmt->fetch();

                  if ($hashedPassword && password_verify($password, $hashedPassword)) {
                    $_SESSION['user_id'] = $userId;
                    $_SESSION['username'] = $username;
                    $_SESSION['name'] = $name;
                    $_SESSION['userAvatar'] = $userAvatar;
                    $_SESSION['userClubId'] = $userClubId;
                    $_SESSION['userRole'] = $userRole;
                  } else {
                    echo '<div class="alert alert-danger" role="alert">
                      Invalid username or password
                    </div>';
                  }

                  $stmt->close();
              }

              if ($_SESSION['userRole'] == "admin") {
                  $_SESSION['ADMIN'] = "ADMIN";
                  header("Location: ./admin");
              }
              if ($_SESSION['userRole'] == "club_manager") {
                  $_SESSION['club_manager'] = "club_manager";
                  header("Location: ./dash");
              }

              ?>

              <form id="formAuthentication" class="mb-3" action="./" method="post">
                <div class="mb-3">
                  <label for="email" class="form-label">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="username"
                    placeholder="Username"
                    autofocus />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="Password"
                      aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>

              <!-- <div class="container-xxl d-flex flex-wrap center-content-between py-2 flex-md-row flex-column text-center"> -->
                <!-- <div class="mb-2 mb-md-0  text-center"> -->
                  <center>Made by <a href="https://nejan.serendibytes.com" class="footer-link fw-bolder text-primary">NEJAN</a></center>
                <!-- </div> -->
              <!-- <div> -->
              
            </div>
          </div>

            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="./assets/vendor/libs/jquery/jquery.js"></script>
    <script src="./assets/vendor/libs/popper/popper.js"></script>
    <script src="./assets/vendor/js/bootstrap.js"></script>
    <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="./assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
