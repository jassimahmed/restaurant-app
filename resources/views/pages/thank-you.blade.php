@extends('layouts.app')

@section('title')
Thank You - {{$settings['general']->site_title}}
@endsection

@section('content')
	<div id="offers-page">
		<div class="content-box">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<h1> Thank you.</h1>
					<p>
						You will be first to recieve all new exciting offers.
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection
