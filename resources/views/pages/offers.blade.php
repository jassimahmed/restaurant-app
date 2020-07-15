@extends('layouts.page')

@section('title')
	Offers - {{$settings['general']->site_title}}
@endsection

@section('content')
	<div id="offers-page" class="col-12">
		<div class="content-box">
			<div class="row">
				<div class="col-12">
					<h1> Join our email list to get the best deals! </h1>
					<p class="mb-4">
						We believe in a spam-free world. Therefore, we will only email you when it is worth your while.
					</p>
					<form class="offers-form" method="POST" action="/offers">
						@csrf
						<div class="form-group">
							<label for="firstnameinput">First name</label>
							<input id="firstnameinput" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname"  required autocomplete="fname" autofocus >

							@error('fname')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="lastinputname">Last name</label>
							<input id="lastinputname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname"  required autocomplete="lname" autofocus >

								@error('lname')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						<div class="form-group">
							<label for="emailinput">Email address</label>
							<input id="emailinput" type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus >

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						<div class="form-group">
							<label for="phoneinput">Phone number</label>
							<input id="phoneinput" type="text" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number"  required autocomplete="phone_number" autofocus >

								@error('phone_number')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						<p class="mb-3">
							By clicking confirm you accept our terms and conditions.
						</p>
						<button type="submit" class="btn btn-primary">Confirm</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
