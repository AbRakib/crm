<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <span class="icon-bg">
            <i class="mdi mdi-cube menu-icon"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('customer.index') }}">
          <span class="icon-bg">
            <i class="mdi mdi-chart-bar menu-icon"></i>
          </span>
          <span class="menu-title">Customers</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
          <span class="menu-title">Marketing</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Personal</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Offerings</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Bills</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Payments</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Credit items</a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Templates</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.lead.index') }}">
          <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
          <span class="menu-title">Leads</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
          <span class="menu-title">Projects</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
          <span class="menu-title">Users</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('user.index') }}"> Users </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> User Role </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> User Registration </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item documentation-link">
        <a class="nav-link" href="" target="_blank">
          <span class="icon-bg">
            <i class="mdi mdi-file-document-box menu-icon"></i>
          </span>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
      <li class="nav-item sidebar-user-actions">
        <div class="user-details">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <div class="d-flex align-items-center">
                <div class="sidebar-profile-img">
                  <img class="img-fluid" src="{{ asset('assets/images/faces/face28.png') }}" alt="image">
                </div>
                <div class="sidebar-profile-text">
                  <p class="mb-1">Henry Klein</p>
                </div>
              </div>
            </div>
            <div class="badge badge-danger">3</div>
          </div>
        </div>
      </li>
      <li class="nav-item sidebar-user-actions">
        <div class="sidebar-user-menu">
          <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
            <span class="menu-title">Settings</span>
          </a>
        </div>
      </li>
      <li class="nav-item sidebar-user-actions">
        <div class="sidebar-user-menu">
          <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>
            <span class="menu-title">Take Tour</span></a>
        </div>
      </li>
      <li class="nav-item sidebar-user-actions">
        <div class="sidebar-user-menu">
          <a href="{{ route('logout') }}" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
            <span class="menu-title">Log Out</span></a>
        </div>
      </li>
    </ul>
  </nav>