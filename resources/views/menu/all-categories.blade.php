@extends('layouts.page')

@section('title')
Food Menu - {{$settings['general']->site_title}}
@endsection

@section('content')
	<div id="menu-page" class="col-12">
		@include('includes/food-categories-slider')
	</div>
@endsection
