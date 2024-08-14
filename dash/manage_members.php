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



    
    
    <!-- <link rel="stylesheet" href="../assets/css/core-dark.css" /> -->
    <!-- <link rel="stylesheet" href="../assets/css/theme-default-dark.css" /> -->

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
  <?php include("../assets/php/sessions.php") ?>  

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
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

      <li class="menu-item active">
        <a href="./manage_members.php" class="menu-link">
          <i class="menu-icon tf-icons bx bx-user"></i>
          <div data-i18n="Manage Members">Manage Members</div>
        </a>
      </li>

      <li class="menu-item ">
        <a href="./members.php" class="menu-link">
          <i class="menu-icon tf-icons bx bx-group"></i>
          <div data-i18n="View Members">View Members</div>
        </a>
      </li>

<li class="menu-header small text-uppercase">
        <span class="menu-header-text">Settings</span>
      </li>

      <li class="menu-item ">
        <a href="./profile.php" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-user-account"></i>
          <div data-i18n="Account">Account</div>
        </a>
      </li>
    </ul>
  </aside>

        <?php include("./nav.php"); ?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">Management / </span>Manage Members</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Add Members</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">

                    <div id="member-add-success" style="display:none;" class="alert alert-success alert-dismissible" role="alert">Member added successfully!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                    <div id="member-add-error" style="display:none;" class="alert alert-danger alert-dismissible" role="alert">Error adding member!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                    
                      <form method="post" action="./add_member.php" id="managerform" autocomplete="off">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Full Name</label>
                          <input name="name" type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Admission No.</label>
                          <input name="adno" type="text" class="form-control" id="basic-default-company"  maxlength="9" placeholder="XXXX/XXXX" />
                        </div>
                        <div class="mb-3">
                        <label for="html5-date-input" class="col-md-2 col-form-label">Birthday</label>
                        
                          <input name="bday" class="form-control" type="date" id="html5-date-input">
                      </div>
                        <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Whatsapp No.</label>
                        <input name="wano" type="text" class="form-control" id="exampleFormControlSelect1" placeholder="07XXXXXXXX" />
                      </div>
                        
                        <button type="submit" class="btn btn-primary">Add Member</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Remove Members</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">

                    <div id="member-remove-success" style="display:none;" class="alert alert-success alert-dismissible" role="alert">Member removed successfully!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                    <div id="member-remove-error" style="display:none;" class="alert alert-danger alert-dismissible" role="alert">Error removing member!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                    
                      <form action="./remove_member.php" method="post">
                      <div class="mb-3">
                        <label for="exampleFormCont" class="form-label">Member</label>
                        <select name="member" required class="form-select" id="exampleFormCont" aria-label="Default select example">
                          
                        <?php
                        include("../assets/php/dbcon.php");

                        // Prepare and execute the query
                        $query = 'SELECT memberships.id, members.full_name
                                  FROM memberships
                                  JOIN members ON memberships.member_id = members.id
                                  WHERE memberships.club_id = ?
                                  ORDER BY id DESC';

                        $stmt = $conn->prepare($query);
                        $stmt->bind_param('i', $_SESSION['userClubId']);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        // Generate the dropdown
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . htmlspecialchars($row['id']) . '">' . htmlspecialchars($row['full_name']) . '</option>';
                        }
                        ?>
                        </select>
                      </div>
                        <button type="submit" class="btn btn-primary">Remove Member</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                
                
              </div>
            </div>

            
            <!-- / Content -->

<?php include("../admin/footer.php") ?>

<script>
    document.getElementById('managerform').reset();
</script>

<script>
      // Function to get query parameters from the URL
      function getQueryParams() {
          const params = {};
          const queryString = window.location.search.substring(1);
          const queries = queryString.split("&");
          queries.forEach(query => {
              const [key, value] = query.split("=");
              params[key] = value;
          });
          return params;
      }

      // Get query parameters
      const params = getQueryParams();

      // Check if 'action' parameter is 'success'
      if (params.status === "member-add-success") {
          // Display the success message div
          document.getElementById("member-add-success").style.display = "block";
      }
      if (params.status === "member-add-error") {
          // Display the error message div
          document.getElementById("member-add-error").style.display = "block";
      }
      if (params.status === "member-remove-success") {
          // Display the success message div
          document.getElementById("member-remove-success").style.display = "block";
      }
      if (params.status === "member-remove-error") {
          // Display the error message div
          document.getElementById("member-remove-error").style.display = "block";
      }
    </script>

    <script>
        document.getElementById('basic-default-company').addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, ''); // Remove non-numeric characters
            if (value.length > 4) {
                value = value.slice(0, 4) + '/' + value.slice(4);
            }
            e.target.value = value;
        });
    </script>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
