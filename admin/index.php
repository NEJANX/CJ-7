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

      <li class="menu-item active">
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
              <div class="row">
                <div class="col-lg-7 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">About CJ-7</h5>
                          <p class="mb-4">
                            CJ-7 is a <span class="fw-medium">Member Management System</span> for Clubs & Societies.
                          </p>

                          <a href="javascript:window.open('https://rccsonline.com');window.location.reload()" class="btn btn-sm btn-outline-primary">Learn More</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div id="1001" class="card-body pb-0 px-0 px-md-4">
                          <!-- <img
                            src="../assets/img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png" /> -->
                            <script>
        // Check if user's default theme is dark
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            // User's default theme is dark, add dark mode CSS files
            var darkimg1 = document.createElement('img');
            darkimg1.src = '../assets/img/illustrations/man-with-laptop-dark.png';
            darkimg1.height = '140';
            document.getElementById("1001").appendChild(darkimg1);
        }else{
          var lightimg1 = document.createElement('img');
            lightimg1.src = '../assets/img/illustrations/man-with-laptop-light.png';
            lightimg1.height = '140';
            document.getElementById("1001").appendChild(lightimg1);
        }
    </script>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php

                include("../assets/php/dbcon.php");

                // Initialize counters
                $clubs_count = 0;
                $members_count = 0;

                // SQL query to count rows
                $sql = "SELECT COUNT(*) FROM clubs";

                $result = mysqli_query($conn, $sql);

                // Get the count (assuming a single column is returned)
                $clubs_count = mysqli_fetch_row($result)[0];

                // // Close connection
                // mysqli_close($conn);

                ?>
                <?php

                // SQL query to count rows
                $sql = "SELECT COUNT(*) FROM members";

                $result = mysqli_query($conn, $sql);

                // Get the count (assuming a single column is returned)
                $members_count = mysqli_fetch_row($result)[0];

                // // Close connection
                // mysqli_close($conn);

                ?>
                <div class="col-lg-5 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/teacher-info.png"
                                alt="teacher"
                                class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="./manage_clubs.php">Manage Clubs</a>
                              </div>
                            </div>
                          </div>
                          <span>Total Clubs</span>
                          <br>
                          <h3 style="padding-top:20px" class="card-title mb-2"><?php echo $clubs_count ?></h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                      <div class="card">
                        <div class="card-body">
                          <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../assets/img/icons/unicons/student-info.png"
                                alt="student"
                                class="rounded" />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt3"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="./manage_members.php">Manage Members</a>
                              </div>
                            </div>
                          </div>
                          <span>Total Members</span>
                          <br>
                          <h3 style="padding-top:20px" class="card-title mb-2"><?php echo $members_count ?></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Recent Leave Requests -->
                <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-12">
                        <!-- <div style="padding-right:15px" class="d-flex flex-column flex-sm-row mt-2 mt-sm-3 justify-content-end">
                          <button style="position:absolute;" class="btn btn-primary btn-icon rounded-pill dropdown-toggle hide-arrow" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <ul class="dropdown-menu">
                            <li>
                              <h6 class="dropdown-header">Request Leave</h6>
                            </li>
                            <li><a class="dropdown-item" href="./new_teacher_leave.php">New Teacher Leave</a></li>
                            <li><a class="dropdown-item" href="./new_student_leave.php">New Student Leave</a></li>
                            <li>
                              <h6 class="dropdown-header">All Leaves</h6>
                            </li>
                            <li><a class="dropdown-item" href="./all_teacher_leaves.php">All Teacher Leaves</a></li>
                            <li><a class="dropdown-item" href="./all_student_leaves.php">All Student Leaves</a></li>
                          </ul>
                        </div> -->
                        <h5 align="left" class="card-header m-0 me-2 pb-3">Recent Memberships</h5>
                        <div style="" class="card-body">
                        <!-- <div style="height:300px; overflow:auto;" class="card-body"> -->
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Club / Society</th>
                                  <th>Member Name</th>
                                  <th>Date & Time</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                  // SQL query to get the last 7 memberships with member and club details (ORDER BY DESC)
                                  $sql = "SELECT m.full_name AS member_name, c.shortcode AS club_name, m.id AS member_id, c.id AS club_id, memberships.membership_timestamp
                                  FROM memberships
                                  INNER JOIN members m ON memberships.member_id = m.id
                                  INNER JOIN clubs c ON memberships.club_id = c.id
                                  ORDER BY memberships.membership_timestamp DESC
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
                                                  <td>'.$row['club_name'].'</td>
                                                  <td>'.$row["member_name"].'</td>
                                                  <td>'.$row['membership_timestamp'].'</td>
                                                </tr>
                                          ';
                                  }


                                  } else {
                                  echo "No recent memberships found.";
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
