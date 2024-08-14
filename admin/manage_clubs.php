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
  <?php include("../assets/php/sessions_admin.php") ?>  

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

      <li class="menu-item">
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
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">Management / </span>Clubs & Societies</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Add Clubs / Societies</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                    
                    <div id="club-add-success" style="display:none;" class="alert alert-success alert-dismissible" role="alert">Club / Society added successfully!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                    <div id="club-add-error" style="display:none;" class="alert alert-danger alert-dismissible" role="alert">Error adding Club / Society!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                    
                      <form method="post" action="add_club.php">
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">Club Name</label>
                          <input name="club_name" required type="text" class="form-control" id="basic-default-fullname" placeholder="Royal College Computer Society" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Club Shortcode</label>
                          <input name="club_shortcode" required type="text" class="form-control" id="basic-default-company" placeholder="RCCS" />
                        </div>
                        <p style="padding-top:0px"></p>
                        
                        <button type="submit" class="btn btn-primary">Add Club</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Remove Clubs / Societies</h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
                    <div id="club-remove-success" style="display:none;" class="alert alert-success alert-dismissible" role="alert">Club / Society removed successfully!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                    <div id="club-remove-error" style="display:none;" class="alert alert-danger alert-dismissible" role="alert">Error removing Club / Society!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
                      <form method="post" action="./remove_club.php">
                      <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Club / Society</label>
                        <select name="club" required class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          
                        <?php
                        include("../assets/php/dbcon.php");
                            $sql = "SELECT * FROM clubs";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // Output data of each row
                                while($row = $result->fetch_assoc()) {
                                    echo "<option value=\"" . $row["id"] . "\">" . $row["name"] . "</option>";
                                }
                            } else {
                                echo "<option value=\"\">No clubs available</option>";
                            }

                            $conn->close();
                        ?>
                        </select>
                      </div>
                        <div class="mb-3">
                          <label class="form-label" for="default-company">Warning: Deleting a club will also delete all member details and club manager accounts that are associated with the club!</label>
                        </div>
                        <p style="padding-top:8px"></p>
                        <button type="submit" class="btn btn-primary">Remove Club</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                
                <!-- Recent Leave Requests -->
                <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-12">
                        
                        <h5 align="left" class="card-header m-0 me-2 pb-3">Recently added Clubs & Societies</h5>
                        <div style="" class="card-body">
                        <!-- <div style="height:300px; overflow:auto;" class="card-body"> -->
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Club / Society</th>
                                  <th>Date & Time</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                include("../assets/php/dbcon.php");
                                  $sql = "SELECT * FROM clubs
                                  ORDER BY clubs.id DESC
                                  LIMIT 7";

                                  $result = mysqli_query($conn, $sql);

                                  // Check for query errors
                                  if (!$result) {
                                  die("Error: " . mysqli_error($conn));
                                  }

                                  // Check if there are any results
                                  if (mysqli_num_rows($result) > 0) {

                                  // Loop through results (ordered by DESC, so latest is first)
                                  while ($row = mysqli_fetch_assoc($result)) {
                                  // echo "<tr>";
                                  // echo "<td>" . $row['member_name'] . "</td>";
                                  // echo "<td>" . $row['club_name'] . "</td>";
                                  // echo "<td>" . $row['member_id'] . "</td>";
                                  // echo "<td>" . $row['club_id'] . "</td>";
                                  // echo "<td>" . $row['membership_timestamp'] . "</td>";
                                  // echo "</tr>";
                                  echo '
                                                <tr>
                                                  <td>#<span class="fw-medium">'.$row["id"].'</span></td>
                                                  <td>'.$row['shortcode'].'</td>
                                                  <td>'.$row['timestamp'].'</td>
                                                </tr>
                                          ';
                                  }


                                  } else {
                                  echo "No data.";
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

<?php include("./footer.php") ?>

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
      if (params.status === "club-add-success") {
          // Display the success message div
          document.getElementById("club-add-success").style.display = "block";
      }
      if (params.status === "club-add-error") {
          // Display the error message div
          document.getElementById("club-add-error").style.display = "block";
      }
      if (params.status === "club-remove-success") {
          // Display the success message div
          document.getElementById("club-remove-success").style.display = "block";
      }
      if (params.status === "club-remove-error") {
          // Display the error message div
          document.getElementById("club-remove-error").style.display = "block";
      }
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
