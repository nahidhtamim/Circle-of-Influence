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
		  {{-- <span>Web Designer</span> --}}
		</div>
		<nav class="main-nav" role="navigation">
		  <ul class="main-menu">
			<li><a href="{{url('/')}}">Home</a></li>
			<li><a href="{{url('/pick-influencers')}}">Pick Influencers</a></li>
			<li><a href="#section3">See History</a></li>
			<li><a href="#section2">Select Influencer</a></li>
			<li><a href="#section4">Contact</a></li>

			<li><div class="btn-group" role="group" aria-label="Basic example">
				{{-- <a  class="btn btn-light">Account</a>
				<a type="button" class="btn btn-light">Signin</a>
				<a type="button" class="btn btn-light">Signup</a> --}}
				@if (Route::has('login'))
                {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                    @auth
                        <a href="{{ url('/') }}"  class=" btn btn-light">Profile</a>
						<a href="{{ url('/logout') }}" class="text-sm btn btn-light">LogOut</a>
                    @else
                        <a href="{{ route('login') }}" type="button" class="text-sm btn btn-light">LogIn</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" type="button" class="text-sm btn btn-light">Register</a>
                        @endif
                    @endauth
                {{-- </div> --}}
            @endif
			  </div></li>
		  </ul>
		</nav>
		<div class="social-network">
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
		</div>
		<div class="copyright-text">
		  <p>Copyright 2019 Reflux Design</p>
		</div>
	  </div>
	</div>
  </div>