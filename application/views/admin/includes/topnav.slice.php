<header class="main-header">
    <!-- Logo -->
    <a href="{{ base_url('ci-admin/dashboard') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>I</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>{{ APPLICATION_NAME }}</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i> <span class="hidden-xs">{{ $this->session->userdata('user_name') }}</span> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu">
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div>
                  <a href="{{ base_url('auth/logout') }}" class="btn btn-default btn-block btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                </div>
              </li>

            </ul>

          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>