<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo"><a href="#" class="simple-text logo-normal">
      Circle of Influnce
    </a></div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item {{Request::is('dashboard') ? 'active':''}}">
        <a class="nav-link" href="{{url('/dashboard')}}">
          <i class="material-icons">dashboard</i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('tenants') ? 'active':''}}">
        <a class="nav-link" href="{{url('/tenants')}}">
          <i class="material-icons">article</i>
          <p>Tenants</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('users') ? 'active':''}}">
        <a class="nav-link" href="{{url('/users')}}">
          <i class="material-icons">perm_identity</i>
          <p>Users</p>
        </a>
      </li>
      <li class="nav-item {{Request::is('influencer-types') ? 'active':''}}">
        <a class="nav-link" href="{{url('/influencer-types')}}">
          <i class="material-icons">list</i>
          <p>Influencer Types</p>
        </a>
      </li>
      {{-- <li class="nav-item ">
        <a class="nav-link" href="./tables.html">
          <i class="material-icons">content_paste</i>
          <p>Table List</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./typography.html">
          <i class="material-icons">library_books</i>
          <p>Typography</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./icons.html">
          <i class="material-icons">bubble_chart</i>
          <p>Icons</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./map.html">
          <i class="material-icons">location_ons</i>
          <p>Maps</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./notifications.html">
          <i class="material-icons">notifications</i>
          <p>Notifications</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./rtl.html">
          <i class="material-icons">language</i>
          <p>RTL Support</p>
        </a>
      </li>
      <li class="nav-item active-pro ">
        <a class="nav-link" href="./upgrade.html">
          <i class="material-icons">unarchive</i>
          <p>Upgrade to PRO</p>
        </a>
      </li> --}}
    </ul>
  </div>
</div>