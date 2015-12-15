<nav class="navbar-top">
    <div class="nav-wrapper">

      <!-- Sidebar toggle -->
      <a href="#" class="yay-toggle">
        <div class="burg1"></div>
        <div class="burg2"></div>
        <div class="burg3"></div>
      </a>
      <!-- Sidebar toggle -->

      <!-- Logo -->
      <a href="#!" class="brand-logo">
        <!-- <img src="/theme/admin/assets/_con/images/logo.png" alt="Con"> -->
      </a>
      <!-- /Logo -->

      <!-- Menu -->
      <ul>
        <li><a href="#!" class="search-bar-toggle"><i class="mdi-action-search"></i></a>
        </li>
        <li class="user">
          <a class="dropdown-button" href="#!" data-activates="user-dropdown">
            
            <img src="{{Auth::user()->thumb_url}}" alt="{{Auth::user()->name}}" class="circle">
            {{Auth::user()->name}}
            
            <i class="mdi-navigation-expand-more right"></i>
          </a>

          <ul id="user-dropdown" class="dropdown-content">
            <li><a href="/admin/profile"><i class="fa fa-user"></i> Profile</a>
            </li>
            <!-- <li><a href="mail-inbox.html"><i class="fa fa-envelope"></i> Messages <span class="badge new">2</span></a>
            </li> -->
            <li><a href="/admin/settings"><i class="fa fa-cogs"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li><a href="/auth/logout"><i class="fa fa-sign-out"></i> Logout</a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- /Menu -->

    </div>
</nav>