@extends('layouts.page')

@section('title')
Thank You - {{$settings['general']->site_title}}
@endsection

@section('content')
	<div id="about-page" class="col-12">
		<div class="content-box">
			<div class="row">
				<div class="col">
					<h1>Thank You!</h1>
					<p>
						You will recieve a confirmation email shortly! 
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection
