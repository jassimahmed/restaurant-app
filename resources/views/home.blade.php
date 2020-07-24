<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.landing-page')

@section('title')
    {{$settings['general']->site_title}}
@endsection

@section('carousel')
    <div class="col-12 bs_carousel_col h-md-100 p-0">
    	<div id="bs_carousel" class="carousel slide h-md-100" data-ride="carousel" >
    		<ol class="carousel-indicators pt-4 pb-4">
    			<li  data-target="#bs_carousel" data-slide-to="0" class="active"></li>
    			<li  data-target="#bs_carousel" data-slide-to="1"></li>
    			<li  data-target="#bs_carousel" data-slide-to="2"></li>
    		</ol>
    		<div class="carousel-inner h-md-100">
    			<div class="carousel-item active">
    				<img src="/img/chef-male.jpg"  alt="...">
    			</div>
    			<div class="carousel-item">
    				<img src="/img/craftsy.jpg"  alt="...">
    			</div>
    			<div class="carousel-item">
    				<img src="/img/fancy-interior.jpg"  alt="...">
    			</div>
    		</div>
    	</div>
    </div>
@endsection


@section('content')
    {{-- restaurant-image --}}
    <div class="col-12 restaurant-image p-0 d-none">
        <img src="img/top-down.jpg">
    </div>
    <div class="col-12 mt-3 mt-4">
        <h1> Slick. And Classy. <br>That's how we <span> roll. </span> </h1>
    </div>
    <div class="col-12 col-md-6 mb-4 mb-md-0">
        <p>
           Chef Francois-Blanch introduces a casually elegant restaurant ensconced in the picturesque town of Verdun, Montreal. Here, Francois-Blanch cultivates a truly seasonal, farm-to-table cuisine, with ingredients sourced from the Hudson Valley and New England, whenever possible. Constructed in 1833 as a residence and serving later as an inn, the building has been painstakingly renovated to preserve as many of the original materials as possible, including four working fireplaces. Thomas Juul-Hansen designed the restaurant’s interior with a modern yet rustic sensibility; zinc and marble accent stone and reclaimed wood. The restaurant’s lighting, artfully conceived by Hervé Descottes, employs paper shades and Edison fixtures to create warmth throughout.
        </p>
    </div>
    <div class="col-12 col-md-6">
        <p>
            The down-to-earth food and contemporary country feel makes the Inn at Pound Ridge a convivial, family friendly restaurant frequented by neighbors and tourists alike. Stop in for a glass of wine and a pizza, or come out for a special occasion dinner. With two dining rooms, two full bars, and a candle only illuminated wine cellar for private dining, we are equipped to accommodate events of all sizes, from intimate dinner parties to full-scale weddings. Francois-Blanch welcomes you, to the Inn at Pound Ridge and looks forward to providing you with a thoroughly enjoyable culinary experience.
        </p>
    </div>
    <div class="col-12 find-more pt-3 pb-3 d-flex justify-content-end">
        <a href="/about">
            <span> Find out what makes us a Montreal favorite </span>
            <div class="circle-right ml-1">
                <i class="fas fa-arrow-circle-right"></i>
            </div>
        </a>
    </div>
@endsection
