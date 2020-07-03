<div class="side-menu">
	<div class="logo">
		<a href="/">
			<img src="{{$settings['general']->logo_img_url}}">
		</a>
	</div>
	<div class="menu">
		<!-- <div class="menu-title">
		Menu
	</div> -->
	<ul class="links">
		<li>
			<a href="/about">About</a>
		</li>
		<li>
			<a href="/menu">Complete Menu</a>
		</li>
		<li>
			<a href="/reservations">Waitlist</a>
		</li>
		<li>
			<a href="/offers">Offers</a>
		</li>
		<li>
			<a href="/contact">Contact</a>
		</li>
	</ul>
</div>
	<div class="bottom">
	<div class="location">
		<div class="address">
			{{$settings['general']->address_1}} {{$settings['general']->address_2}} <br>
			{{$settings['general']->postalcode}} {{$settings['general']->city}}, {{$settings['general']->province}}, Canada.
		</div>
		<div class="phone-number">
			<a href="tel:{{$settings['general']->phone_number}}">{{$settings['general']->phone_number}}</a>
		</div>
	</div>
	<div class="delivery-options">
		Livraison • Pick-Up
	</div>
	<div class="social-icons">
		<a href="{{$settings['social']->facebook_url}}" class="cdn-icons">
			<i class="fa fa-facebook" aria-hidden="true"></i>
		</a>
		<a href="{{$settings['social']->twitter_url}}" class="cdn-icons">
			<i class="fa fa-twitter" aria-hidden="true"></i>
		</a>
		<a href="{{$settings['social']->instagram_url}}" class="cdn-icons">
			<i class="fa fa-instagram" aria-hidden="true"></i>
		</a>
		<a href="#" class="cdn-icons">
			<i class="fa fa-youtube-play" aria-hidden="true"></i>
		</a>
	</div>
</div>
</div>
