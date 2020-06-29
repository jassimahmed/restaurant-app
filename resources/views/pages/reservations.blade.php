@extends('layouts.app')

@section('content')
	<div id="waitlist-page">
		<div class="content-box">
			<div class="row">
				<div class="col-md-6">
					<h1> Get on the list. </h1>
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
						Here comes the instruction for the dumb customers on our page. If you do happen to read this, you are not necessarily dumb, but if you are our client then you probably are.
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection
