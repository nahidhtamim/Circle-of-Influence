<!-- Sidebar Menu -->
<div class="responsive-nav">
    <i class="fa fa-bars" id="menu-toggle"></i>
    <div id="menu" class="menu">
        <i class="fa fa-times" id="menu-close"></i>
        <div class="container">
            <div class="image">
                <a href="#"><img src="{{asset('frontend/images/author-image.jpg')}}" alt="" /></a>
            </div>
            <div class="author-content">
                <h4>Circle of Influence</h4>
                <!-- {{-- <span>Web Designer</span> --}} -->
            </div>
            @guest
            @if (Route::has('login'))
            <div class="social-network">
                <ul class="soial-icons">
                    <li>
                        <a href="{{ route('login') }}" data-toggle="tooltip" data-placement="top" title="SignIn"><i
                                class="fa fa-sign-in"></i></a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}" data-toggle="tooltip" data-placement="top" title="SignUp"><i
                                class="fa fa-user-plus"></i></a>
                    </li>
                    @endif

                </ul>
                <br>
                <br>
            </div>
			
			<nav class="main-nav" role="navigation">
                <ul class="main-menu">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
            </nav>
            @else
            <div class="social-network">
                <ul class="soial-icons">
                    <li style="font-family: 'Courgette', cursive;">
                        <h4 class="text-light">
                            Hello, {{ Auth::user()->username }}
                        </h4>

                    </li>
                    <br>

                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Profile"><i
                                class="fa fa-user"></i></a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" data-toggle="tooltip" data-placement="top" title="SignOut"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="fa fa-sign-out"></i></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
                <br>
                <br>
            </div>
			<nav class="main-nav" role="navigation">
                <ul class="main-menu">
					<li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/pick-influencers')}}">Pick Influencers</a></li>
                    <li><a href="{{url('/influencer-history')}}">See History</a></li>
					<li><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
            </nav>
            @endguest

            <!-- <div class="social-network">
		  <ul class="soial-icons">
			<li>
			  <a href="https://fb.com/templatemo"
				><i class="fa fa-facebook"></i
			  ></a>
			</li>
			<li>
			  <a href="#"><i class="fa fa-twitter"></i></a>
			</li>
			<li>
			  <a href="#"><i class="fa fa-linkedin"></i></a>
			</li>
			<li>
			  <a href="#"><i class="fa fa-dribbble"></i></a>
			</li>
			<li>
			  <a href="#"><i class="fa fa-rss"></i></a>
			</li>
		  </ul>
		</div> -->
            <div class="copyright-text">
                <p>Copyright 2022 Circle of Influence</p>
            </div>
        </div>
    </div>
</div>