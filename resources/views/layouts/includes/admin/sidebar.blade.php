<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo text-center"><a href="#" class="simple-text logo-normal">
            <img src="{{asset('frontend/images/author-image.png')}}" alt="">
            <a href="{{url('/dashboard')}} ">
                <h3 style="font-family: 'Courgette', cursive;">
                    <u>
                        <b>Hello, {{ Auth::user()->username }}</b> 
                    </u>
                </h3>
            </a>
            <br>
            <a href="{{url('/view-admin/'.Auth::id())}}" data-toggle="tooltip" data-placement="top" title="Profile" style="font-size: 30px;">
                <i class="fa fa-user"></i>
            </a>
            &nbsp;
            <a href="{{ route('logout') }}" data-toggle="tooltip" data-placement="top" title="SignOut"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="font-size: 30px;">
                <i class="fa fa-sign-out"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </a></div>

    <div class="sidebar-wrapper">
        <ul class="nav">

            </li>
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
        </ul>
    </div>
</div>
