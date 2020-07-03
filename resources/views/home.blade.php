<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.landing-page')

@section('title')
{{$settings['general']->site_title}} World's Greatest Burger in the History of Humanity
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
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
      </a>
    </div>
  </section>
    @include('includes/food-categories-slider')
  </section>
@endsection
