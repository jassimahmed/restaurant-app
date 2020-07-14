<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.landing-page')

@section('title')
    {{$settings['general']->site_title}} World's Greatest Burger in the History of Humanity
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
    				<img src="/img/chef-prep.jpg"  alt="...">
    			</div>
    			<div class="carousel-item">
    				<img src="/img/resto-interior.jpg"  alt="...">
    			</div>
    			<div class="carousel-item">
    				<img src="/img/bowls.jpg"  alt="...">
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
    <div class="col-12 mt-3">
        <h2> Slick. And Classy. <br>That's how we <span> roll. </span> </h2>
    </div>
    <div class="col-12 col-md-6">

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>
    <div class="col-12 col-md-6">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
    </div>
    <div class="col-12 find-more pt-3 pb-3 d-flex justify-content-end">
        <a href="#">
            <span> Find out what makes us a Montreal favorite </span>
            <div class="circle-right ml-1">
                <i class="fas fa-arrow-circle-right"></i>
            </div>
        </a>
    </div>
@endsection
