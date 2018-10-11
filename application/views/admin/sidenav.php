<nav class="sidebar sidebar-offcanvas sidebar-dark" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <img src="<?= base_url();?>assets/vendor/images/faces/face1.jpg" alt="profile image">
            <p class="text-center font-weight-medium">ADMIN</p>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="menu-icon icon-diamond"></i>
              <span class="menu-title">Dashboard</span>
              <div class="badge badge-success"></div>
            </a>
          </li>
                   
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="menu-icon icon-equalizer"></i>
              <span class="menu-title">Registration</span>
              <div class="badge badge-success">1</div>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/dragula.html">Restaurant</a>
                </li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon icon-pie-chart"></i>
              <span class="menu-title">Sign Out</span>
            </a>
          </li>
        </ul>
      </nav>