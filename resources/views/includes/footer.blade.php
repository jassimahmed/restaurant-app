<div class="row pt-4">
	{{-- Menuitems --}}
	<div class="col-6 pl-0 col-md-4">
		<h3>Menu options</h3>
		<ul>
			@foreach ($categories as $category)
				<li>
					<a class="-cat" href="/menu/{{$category->title}}">{{$category->title}}</a>
				</li>
			@endforeach
		</ul>
	</div>
	{{-- Navigation items --}}
	<div class="col-6 col-md-4">
		<h3>More</h3>
		<ul>
			<li>
				<a href="/reservations">Waitlist</a>
			</li>
			<li>
				<a href="/offers">Offers</a>
			</li>
			<li>
				<a href="/about">About</a>
			</li>
			<li>
				<a href="/contact">Contact</a>
			</li>
		</ul>
	</div>
	{{-- Social Media Links --}}
	<div class="col-12 pl-0 col-md-4 pt-4 pt-md-0">
		<h3>Social Media</h3>
		<ul>
			<li><a href="https://www.facebook.com/" target="_blank"  class="cdn-icons">
				<i class="fab fa-facebook mr-1"></i> Facebook
			</a></li>
			<li>
				<a href="http://twitter.com/" target="_blank"  class="cdn-icons">
					<i class="fab fa-twitter mr-1" aria-hidden="true"></i> Twitter
				</a>
			</li>
			<li>
				<a href="http://instragram.com/" target="_blank"  class="cdn-icons">
					<i class="fab fa-instagram mr-1" aria-hidden="true"></i> Instagram
				</a>
			</li>
			<li>
				<a href="http://youtube.com/" target="_blank"  class="cdn-icons">
					<i class="fab fa-youtube mr-1" aria-hidden="true"></i> YouTube
				</a>
			</li>
		</ul>
	</div>
</div>

{{-- Site developer --}}
<div class="row pt-4">
	<div class="col-12 pl-0">
		<h3>Web developer</h3>
		<ul>
			<li><a href="/admin">Admin Home</a></li>
			<li> <a href="/admin/login">Login</a> </li>
		</ul>
	</div>
</div>

{{-- Site information --}}
<div class="row pt-4">
	<p>This site is a template for any restaurant. It features admin management, dynamic content modification, backend support and robust database connection. None of the information on this website is accurate.
	</p>
	<br>
	<p>
	Made using Laravel, Bootstrap, Fontawesome CDN. Royalty-free images from Pexels. Hosted on Heroku. Logo from <a href='https://pngtree.com/so/floral-alphabet'>pngtree.com</a>. For more information visit <a href="https://jassimahmed.com/" class="font-weight-bold" target="_blank" > Jassim Ahmed. </a></p>
</div>

{{-- Copyright info --}}
<div class="row pt-4 pb-4">
	<p class="copyright"> <a href="/"> <img src="{{$settings['general']->logo_img_url}}"> </a> Copyright © 2020 {{$settings['general']->site_title}}. </p>
</div>
