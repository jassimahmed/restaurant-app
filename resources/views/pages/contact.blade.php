@extends('layouts.page')

@section('title')
Contact - {{$settings['general']->site_title}}
@endsection

@section('content')
	<div id="contact-page" class="col-12">
		<div class="content-box h-100">
			<div class="row h-100">
				<div class="col-12 d-flex flex-column text-right">
					<h1 class="text-left">Contact us</h1>
					<p><a href="tel:{{$settings['general']->phone_number}}" >{{$settings['general']->phone_number}}</a></p>
					<p class="mb-4">
						{{$settings['general']->address_1}} {{$settings['general']->address_2}} <br>
						{{$settings['general']->postalcode}} {{$settings['general']->city}}, {{$settings['general']->province}}, Canada.
					</p>
					<iframe class="glex-grow-1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2798.3443961164944!2d-73.56895294907675!3d45.462865878998265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc910643fb28aa1%3A0xe2a585c89c113b8!2s4094%20Wellington%20St%2C%20Verdun%2C%20QC%20H4G%203M6!5e0!3m2!1sen!2sca!4v1594776433245!5m2!1sen!2sca" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
	</div>
@endsection

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
