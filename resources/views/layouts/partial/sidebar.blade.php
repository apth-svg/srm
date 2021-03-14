  <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
        <h4>SRM</h4>
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="{{ Request::is('admin/dashboard') ? 'active':'' }}">
            <a class="nav-link" href="{{ url('admin/dashboard') }}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{ Request::is('admin/slider') ? 'active':'' }}">
            <a class="nav-link" href="{{ url('admin/slider') }}">
            <i class="fab fa-slideshare"></i>
              <p>Sliders</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>