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
			<li>Waitlist</li>
			<li>Offers</li>
			<li>About</li>
			<li >Contact</li>
		</ul>
	</div>
	{{-- Social Media Links --}}
	<div class="col-12 pl-0 col-md-4 pt-4 pt-md-0">
		<h3>Social Media</h3>
		<ul>
			<li><a href="{{$settings['social']->facebook_url}}" class="cdn-icons">
				<i class="fab fa-facebook mr-1"></i> Facebook
			</a></li>
			<li>
				<a href="{{$settings['social']->twitter_url}}" class="cdn-icons">
					<i class="fab fa-twitter mr-1" aria-hidden="true"></i> Twitter
				</a>
			</li>
			<li>
				<a href="{{$settings['social']->instagram_url}}" class="cdn-icons">
					<i class="fab fa-instagram mr-1" aria-hidden="true"></i> Instagram
				</a>
			</li>
			<li>
				<a href="#" class="cdn-icons">
					<i class="fab fa-youtube mr-1" aria-hidden="true"></i> YouTube
				</a>
			</li>
		</ul>
	</div>
</div>

{{-- Menubar --}}
{{-- <div class="row pt-4"> --}}
	{{-- Menuitems --}}
	{{-- <div class="col-6 pl-0">
		<h3>Menu options</h3>
		<ul>
			@foreach ($categories as $category)
				<li>
					<a class="-cat" href="/menu/{{$category->title}}">{{$category->title}}</a>
				</li>
			@endforeach
		</ul>
	</div> --}}
	{{-- Navigation items --}}
	{{-- <div class="col-6"> --}}
		{{-- <h3>More</h3>
		<ul>
			<li>Waitlist</li>
			<li>Offers</li>
			<li>About</li>
			<li >Contact</li>
		</ul>
	</div> --}}
{{-- </div> --}}

{{-- Social Media Links --}}
{{-- <div class="row pt-4"> --}}
	{{-- <div class="col-12 pl-0"> --}}
		{{-- <h3>Social Media</h3> --}}
		{{-- <ul>
			<li><a href="{{$settings['social']->facebook_url}}" class="cdn-icons">
				<i class="fab fa-facebook mr-1"></i> Facebook
			</a></li>
			<li>
				<a href="{{$settings['social']->twitter_url}}" class="cdn-icons">
					<i class="fab fa-twitter mr-1" aria-hidden="true"></i> Twitter
				</a>
			</li>
			<li>
				<a href="{{$settings['social']->instagram_url}}" class="cdn-icons">
					<i class="fab fa-instagram mr-1" aria-hidden="true"></i> Instagram
				</a>
			</li>
			<li>
				<a href="#" class="cdn-icons">
					<i class="fab fa-youtube mr-1" aria-hidden="true"></i> YouTube
				</a>
			</li>
		</ul>
	</div> --}}
{{-- </div> --}}

{{-- Site developer --}}
<div class="row pt-4">
	<div class="col-12 pl-0">
		<h3>Web developer</h3>
		<ul>
			<li><a href="/admin">Admin Home.</a></li>
			<li> <a href="/admin/login">Login.</a> </li>
		</ul>
	</div>
</div>

{{-- Site information --}}
<div class="row pt-4">
	<p>This site is a template for any restaurant. It features admin management, dynamic content modification, backend support and robust database connection. <br> <br>
	Made using Laravel, Bootstrap, Fontawesome CDN. Hosted on Heroku. For more information visit Jassim Ahmed.</p>
</div>

{{-- Copyright info --}}
<div class="row pt-4 pb-4">
	<p class="copyright"> <img src="{{$settings['general']->logo_img_url}}"> Copyright © 2020 {{$settings['general']->site_title}}. </p>
</div>

{{-- <div class="container-fluid">
	<div class="">
		<div class="row webframe p-3 no-gutters">
			<div class="col">
				<p>This site is a template for any restaurant. It features admin management, dynamic content modification, backend support and robust database connection. </p>
				<p><a href="/admin">Admin Home.</a> <a href="/admin/login">Login.</a> </p>
			</div>
			<div class="col ml-2 copyright text-right d-flex justify-content-end align-items-center">
				<p> <img src="{{$settings['general']->logo_img_url}}"> Copyright © 2020 {{$settings['general']->site_title}}. </p>
			</div>
		</div>
	</div>
</div> --}}
