
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="about" target="_blank" class="logo">
              <img
                src="assets/img/site/asezelogowhite.png"
                alt="navbar brand"
                class="navbar-brand"
                height="60"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section" style="color: #1a2035;">Com</h4>
              </li>
              
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#base">
                  <i class="fas icon-people"></i>
                  <p>Attendants</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="base">
                  <ul class="nav nav-collapse">
                    <?php   $sel = "SELECT DISTINCT year FROM aseze_attendants";
                            $les = mysqli_query($conn, $sel);
                            while ($row = mysqli_fetch_assoc($les)) {
                                $year = $row['year'];
                                echo '<li>
                                         <a href="profile?enc='.$enc.'&year='.$year.'">
                                            <span class="sub-item">Aseze '.$year.'</span>
                                         </a>
                                      </li>';
                            }
                    ?>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts">
                  <i class="fas fa-store"></i>
                  <p>Exhibitors</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                  <ul class="nav nav-collapse">
                    <?php   $sel = "SELECT DISTINCT year FROM aseze_partners";
                            $les = mysqli_query($conn, $sel);
                            while ($row = mysqli_fetch_assoc($les)) {
                                $year = $row['year'];
                                echo '<li>
                                         <a href="vendors?enc='.$enc.'&year='.$year.'">
                                            <span class="sub-item">Aseze '.$year.'</span>
                                         </a>
                                      </li>';
                            }
                    ?>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#forms">
                  <i class="fas fa-medal"></i>
                  <p>Sponsors</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="forms">
                  <ul class="nav nav-collapse">
                    <?php   $sel = "SELECT DISTINCT year FROM aseze_sponsorship";
                            $les = mysqli_query($conn, $sel);
                            while ($row = mysqli_fetch_assoc($les)) {
                                $year = $row['year'];
                                echo '<li>
                                          <a href="partners?enc='.$enc.'&year='.$year.'">
                                            <span class="sub-item">Aseze '.$year.'</span>
                                          </a>
                                      </li>';
                            }
                    ?>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->