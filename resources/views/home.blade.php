<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.landing-page')

@section('title')
    {{$settings['general']->site_title}} World's Greatest Burger in the History of Humanity
@endsection

@section('carousel')
    <div class="col-12 bs_carousel_col h-100 p-0">
    	<div id="bs_carousel" class="carousel slide h-100" data-ride="carousel" data-touch="true">
    		<ol class="carousel-indicators pt-4 pb-4">
    			<li  data-target="#bs_carousel" data-slide-to="0" class="active"></li>
    			<li  data-target="#bs_carousel" data-slide-to="1"></li>
    			<li  data-target="#bs_carousel" data-slide-to="2"></li>
    		</ol>
    		<div class="carousel-inner h-100">
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
    <section id="information">
        <div class="restaurant-image">
            <img src="img/top-down.jpg">
        </div>
        <div class="info">
            <h2> Slick. And Classy. That's how we <span> roll. </span> </h2>
            <div class="paragraph">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <a href="#" class="about-link">
                <span> Find out what makes us a Montreal favorite </span>
                <div class="circle-right">
                    <i class="fas fa-arrow-circle-right"></i>
                </div>
            </a>
        </div>
    </section>
    <footer>
        <div id="footer-jassim" class="container-fluid">
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
        </div>
    </footer>
@endsection
