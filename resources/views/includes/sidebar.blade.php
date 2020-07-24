<nav id="sidebar">
	<div class="top">
		<div class="logo d-none d-md-flex justify-content-center mt-5">
			<a href="/">
				<img height="70" src="{{$settings['general']->logo_img_url}}">
			</a>
		</div>
		<ul class="list-unstyled components">
			<p class="site_title text-center mb-3 mt-1"> {{$settings['general']->site_title}}</p>
			{{-- <li class="active"> --}}
			<li class="mb-2">
				<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Menu</a>
				<ul class="collapse list-unstyled" id="homeSubmenu">
					@foreach ($categories as $category)
						<li>
							<a class="-cat" href="/menu/{{$category->title}}">{{$category->title}}</a>
						</li>
					@endforeach
				</ul>
			</li>
			<li class="mb-2">
				<a href="/reservations">Waitlist</a>
			</li>
			<li class="mb-2">
				<a href="/offers">Offers</a>
			</li>
			<li class="mb-2">
				<a href="/about">More</a>
			</li>
			<li class="mb-2">
				<a href="/contact">Contact</a>
			</li>
		</ul>
	</div>
	{{-- <div class="bottom container-fluid p-2 d-none d-sm-block">
		<div class="location col-12 p-0">
			<div class="address">
				{{$settings['general']->address_1}} {{$settings['general']->address_2}} <br>
				{{$settings['general']->postalcode}} {{$settings['general']->city}}, {{$settings['general']->province}}, Canada.
			</div>
			<div class="phone-number mt-2">
				<a href="tel:{{$settings['general']->phone_number}}" >{{$settings['general']->phone_number}}</a>
			</div>
		</div>
		<div class="delivery-options col-12 p-0 mt-2">
			Livraison • Pick-Up
		</div>
		<div class="social-icons col-12 p-0 mt-2">
			<a href="{{$settings['social']->facebook_url}}" class="cdn-icons">
				<i class="fab fa-facebook"></i>
			</a>
			<a href="{{$settings['social']->twitter_url}}" class="cdn-icons">
				<i class="fab fa-twitter" aria-hidden="true"></i>
			</a>
			<a href="{{$settings['social']->instagram_url}}" class="cdn-icons">
				<i class="fab fa-instagram" aria-hidden="true"></i>
			</a>
			<a href="#" class="cdn-icons">
				<i class="fab fa-youtube" aria-hidden="true"></i>
			</a>
		</div>
	</div> --}}
</nav>
