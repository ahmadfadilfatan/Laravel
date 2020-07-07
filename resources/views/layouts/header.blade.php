<!-- Logo -->
<a href="../../index2.html" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>A</b>LT</span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><b>{{ \Auth::user()->name }}</b></span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </a>

  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- Messages: style can be found in dropdown.less-->
      <!-- Tasks: style can be found in dropdown.less -->
      
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <!-- <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
          <span class="hidden-xs">{{\Auth::user()->name}}</span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <!-- <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->

            <p>
              {{\Auth::user()->name}}
              <small>{{\Auth::user()->created_at}}</small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <!-- <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div> -->
            <div class="pull-right">
            <a href="{{ url('keluar') }}" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
      <!-- Control Sidebar Toggle Button -->
      <!-- <li>
        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
      </li> -->
    </ul>
  </div>

</nav>