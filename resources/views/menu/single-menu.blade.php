@extends('layouts.page')

@section('title')
{{$food_item_name}} - {{$settings['general']->site_title}}
@endsection

@section('content')
	<div id="single-menu-page">
		<div class="row">
			<div class="col-sm-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8">
				<div class="content-box">
					<div class="row">
						<div class="col-md-12">
							<h1>{{$food_item_name}}</h1>
						</div>
						@foreach ($food_items as $item)
							<div class="col-md-6">
								<div class="item">
									<div class="title">
										<h4>{{$item->title}}</h4>
										<span class="price">${{$item->price}}</span>
									</div>
									<div class="description">
										<p>{{$item->description}}</p>
									</div>
								</div>
							</div>
						@endforeach
						<div class="col-md-12">
							<p class="font-italic">
								*All prices are in Canadian Dollars. All the items and ingredients are generated automatically.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
