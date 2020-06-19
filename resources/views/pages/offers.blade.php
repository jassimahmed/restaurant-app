@extends('layouts.app')

@section('content')
	<div id="offers-page">
		<div class="content-box">
			<div class="row">
				<div class="col-md-8 offset-md-2">
					<h1> Sign up to get the best deals </h1>
					<form>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="firstnameinput">First name</label>
									<input type="text" class="form-control" name="fname" id="firstnameinput" placeholder="Joe">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="lastinputname">Last name</label>
									<input type="text" class="form-control" name="lname" id="lastinputname" placeholder="Dickinson">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="emailinput">Email address</label>
									<input type="email" class="form-control" name="email" id="emailinput" placeholder="name@example.com">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="phoneinput">Phone number</label>
									<input type="text" class="form-control" name="phone" id="phoneinput" placeholder="Enter your nine digit phone number">
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
