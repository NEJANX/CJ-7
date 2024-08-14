<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>CJ-7 - Member Management System for Clubs & Societies</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

<script>
    // Function to detect the preferred color scheme
    function isDarkMode() {
        return window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
    }

    // Example usage
    if (isDarkMode()) {
        <?php $darkmode = "true" ?>
        console.log('Dark mode is enabled.');
    } else {
        document.body.style.backgroundColor = '#fff'; // Light mode styling
        console.log('Light mode is enabled.');
    }
</script>

<?php
  if ($darkmode == "true") {
    echo '<link rel="stylesheet" href="../assets/css/core-dark.css" />
    <link rel="stylesheet" href="../assets/css/theme-default-dark.css" />';
  }
?>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
  <?php include("../assets/php/sessions_admin.php") ?>  
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo justify-content-center">
      <a href="index.php" class="app-brand-link">
        <span class="app-brand-logo demo">
          <img height="35px" src="../assets/img/logo.png" alt="">
        </span>
        <!-- <span class="app-brand-text demo menu-text fw-bold ms-2">CJ-7</span> -->
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">General</span>
      </li>

      <li class="menu-item">
        <a href="./" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Dashboard">Dashboard</div>
        </a>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Management</span>
      </li>

      <li class="menu-item ">
        <a href="./manage_clubs.php" class="menu-link">
          <i class="menu-icon tf-icons bx bx-pencil"></i>
          <div data-i18n="Clubs & Societies">Clubs & Societies</div>
        </a>
      </li>

<li class="menu-item ">
  <a href="./manage_club_managers.php" class="menu-link">
    <i class="menu-icon tf-icons bx bx-pencil"></i>
    <div data-i18n="Club Managers">Club Managers</div>
  </a>
</li>



<li class="menu-header small text-uppercase">
        <span class="menu-header-text">Settings</span>
      </li>

      <li class="menu-item active">
        <a href="./profile.php" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-user-account"></i>
          <div data-i18n="Account">Account</div>
        </a>
      </li>
    </ul>
  </aside>

        <?php include("./nav.php"); ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">Settings /</span> Account</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                          src="<?php echo $user_avatar; ?>"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar" />
                        <div class="button-wrapper">
                        <table>
                          <tr>
                            <td><strong>User ID:</strong></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><?php echo "#CJ7-".$user_id; ?></td>
                          </tr>
                          <tr>
                            <td><strong>Name:</strong></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><?php echo $name; ?></td>
                          </tr>
                          <tr>
                            <td><strong>Username:</strong></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><?php echo $user_name; ?></td>
                          </tr>
                          <tr>
                            <td><strong>User type:</strong></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><?php echo $userRole; ?></td>
                          </tr>
                        </table>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                    <form id="formAccountSettings" method="POST">
                        <div class="row">
                          <h5>Change Password</h5>

                          <?php

                          require('../assets/php/dbcon.php');

                          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                              $password = $_POST['password'];
                              $password2 = $_POST['password2'];

                              if ($password == $password2) {
                                $hashedPassword = password_hash($password2, PASSWORD_DEFAULT);
                            
                                // SQL statement with placeholders
                                $sql = "UPDATE users SET password = ? WHERE id = ?";
                            
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param("si", $hashedPassword, $user_id);
                            
                                // Execute the statement
                                if ($stmt->execute()) {
                                    echo '<div style="width:100%; padding-left:10px">
                                          <div class="alert alert-success" role="alert">
                                            Password changed successfully!
                                          </div></div>
                                        <div class="mt-2">
                                          <a href="./" class="btn btn-primary me-2">Back to Home</a>
                                        </div>';
                                } else {
                                    echo '<div style="width:100%; padding-left:10px">
                                          <div class="alert alert-danger" role="alert">
                                            Error changing password!
                                          </div></div>
                                          <div class="mt-2">
                                            <a href="./profile.php" class="btn btn-primary me-2">Try Again</a>
                                          </div>';
                                }
                            
                                // Close the statement and the database connection
                                $stmt->closeCursor();
                                $conn = null;
                            
                            } else {
                                echo '<div style="width:100%; padding-left:10px">
                                      <div class="alert alert-danger" role="alert">
                                        Passwords do not match!
                                      </div></div>';
                            }

                              
                          }

                          ?>
                          <div class="mb-3 col-md-6">
                            <label for="password" class="form-label">New Password</label>
                            <input class="form-control" type="password" name="password" id="password"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="password2" class="form-label">Confirm New Password</label>
                            <input class="form-control" type="password" name="password2" id="password2"/>
                          </div>
                        </div>
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Save changes</button>
                          <button type="reset" class="btn btn-outline-secondary" onclick="window.location.reload();">Cancel</button>
                        </div>
                      </form>
                    </div>
                    
                    <!-- /Account -->
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <?php include("./footer.php") ?>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/pages-account-settings-account.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
