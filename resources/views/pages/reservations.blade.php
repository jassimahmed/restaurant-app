@extends('layouts.page')

@section('title')
Reservations - {{$settings['general']->site_title}}
@endsection

@section('content')
	<div id="waitlist-page" class="col-12">
		<div class="content-box">
			<div class="row">
				<div class="col-md-6">
					<h1 class="mb-4"> Join the waitlist for your friends and family. </h1>
					<h2 class="mb-2">How does it work?</h2>
					<p class="mb-4">
						Since our restaurant is at full-booking capacity most of the year, our customers get to book space early on. Once you have submitted your request, we will put you in line and contact you immediately of our availabiliy. You can cancel your order anytime by contacting us!
					</p>
					<form method="POST" action="/reservations">
						@csrf
						<div class="form-group">
							<label for="phoneinput">First Name</label>
							<input type="text" class="form-control" name="fname" id="firstnameinput" placeholder="Joe">
						</div>
						<div class="form-group">
							<label for="phoneinput">Last Name</label>
							<input type="text" class="form-control" name="lname" id="lastnameinput" placeholder="Cunnings">
						</div>
						<div class="form-group">
							<label for="emailinput">Email address</label>
							<input type="email" class="form-control" name="email" id="emailinput" placeholder="name@example.com">
						</div>
						<div class="form-group">
							<label for="phoneinput">Phone number</label>
							<input type="text" class="form-control" name="phone" id="phoneinput" placeholder="Enter your nine digit phone number">
						</div>
						<div class="form-group">
							<label for="guestinput">How many guests?</label>
							<select name="guests" class="form-control" id="guestinput">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<div class="form-group">
							<label for="timeinput">Select time</label>
							<select name="time" class="form-control" id="timeinput">
								<option value="6">6:00 PM</option>
								<option value="7">7:00 PM</option>
								<option value="8">8:00 PM</option>
								<option value="9">9:00 PM</option>
								<option value="10">10:00 PM</option>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Confirm</button>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<p>
						There are only limited time slots available at the moment. We will update our options as we have more openings. Join <a href="/offers" class="exclusive-email"> the exclusive email list </a> to recieve our offers first.
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection
