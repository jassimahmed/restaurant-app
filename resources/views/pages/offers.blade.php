@extends('layouts.app')

@section('content')
	<div id="offers-page">
		<div class="content-box">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<h1> Sign up to get the best deals </h1>
					<form method="POST" action="/offers">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstnameinput">First name</label>
									<input id="firstnameinput" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname"  required autocomplete="fname" autofocus >

										@error('fname')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="lastinputname">Last name</label>
									<input id="lastinputname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname"  required autocomplete="lname" autofocus >

										@error('lname')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="emailinput">Email address</label>
									<input id="emailinput" type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus >

										@error('email')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="phoneinput">Phone number</label>
									<input id="phoneinput" type="text" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number"  required autocomplete="phone_number" autofocus >

										@error('phone_number')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<p>
									Ackolwedge our terms you bad motherfucker.
								</p>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Confirm</button>
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
