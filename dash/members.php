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

      <li class="menu-item ">
        <a href="./manage_members.php" class="menu-link">
          <i class="menu-icon tf-icons bx bx-user"></i>
          <div data-i18n="Manage Members">Manage Members</div>
        </a>
      </li>

      <li class="menu-item active">
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
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">Management / </span>View Members</h4>

              <!-- Basic Layout -->
              
              <div class="row">
                
                <!-- Recent Leave Requests -->
                <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-12">
                        
                        <h5 align="left" class="card-header m-0 me-2 pb-3">All Members of <?php echo $_SESSION['club_name'] ?></h5>
                        <div style="" class="card-body">
                        <!-- <div style="height:300px; overflow:auto;" class="card-body"> -->
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Full Name</th>
                                  <th>Admission No.</th>
                                  <th>Birthday</th>
                                  <th>Whatsapp No.</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                include("../assets/php/dbcon.php");
                                // Prepare the SQL statement
                                $sql = $conn->prepare("SELECT members.id, members.full_name, members.admission_no, members.birthday, members.whatsapp_no, memberships.membership_timestamp 
                                FROM memberships 
                                JOIN members ON memberships.member_id = members.id 
                                WHERE memberships.club_id = ?
                                ORDER BY id DESC");
                                $sql->bind_param("i", $_SESSION['userClubId']);
                                $sql->execute();
                                $result = $sql->get_result();

                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>#<span class='fw-medium'>" . $row['id'] . "</span></td>";
                                    echo "<td>" . $row['full_name'] . "</td>";
                                    echo "<td>" . $row['admission_no'] . "</td>";
                                    echo "<td>" . $row['birthday'] . "</td>";
                                    echo "<td>" . $row['whatsapp_no'] . "</td>";
                                    echo "</tr>";
                                }                                  

                                ?>
                                
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Recent Leave Requests -->
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
