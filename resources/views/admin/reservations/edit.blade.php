@extends('layouts.admin')

@section('content')
	<div class="container-fluid  dashboard-content">
		<!-- ============================================================== -->
		<!-- pageheader -->
		<!-- ============================================================== -->
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="page-header">
					<h2 class="pageheader-title">Edit Reservations</h2>
					<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
					<div class="page-breadcrumb">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="/admin/users" class="breadcrumb-link">All Reservations</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Reservation</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end pageheader -->
		<!-- ============================================================== -->


		<div class="row">
			<!-- ============================================================== -->
			<!-- basic form -->
			<!-- ============================================================== -->
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
				<div class="card">
					<h5 class="card-header">Edit reservation</h5>
					<div class="card-body">
						<form method="POST" action="/admin/reservations/{{$reservation->id}}">
							@csrf
							@method('PUT')
							<div class="form-group">
								<label for="inputfirstname">First Name</label>
								<input id="inputfirstname" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname', $reservation->fname) }}" placeholder="First Name" required autocomplete="fname" autofocus>
									@error('fname')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label for="inputlastname">Last Name</label>
									<input id="inputlastname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname', $reservation->lname) }}" placeholder="Last Name" required autocomplete="lname" autofocus>

										@error('lname')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="form-group">
										<label for="inputemail">Email</label>
										<input id="inputemail" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email', $reservation->email) }}" placeholder="Email" required autocomplete="email">

											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										<div class="form-group">
											<label for="inputguest">Guests</label>
											<input id="inputguest" type="text" class="form-control form-control-lg @error('guests') is-invalid @enderror" name="guests" value="{{ old('guests', $reservation->guests) }}" placeholder="Guest" required autocomplete="guests">

												@error('guests')
													<span class="invalid-feedback" role="alert">
														<strong>{{ $message }}</strong>
													</span>
												@enderror
											</div>
											<div class="form-group">
												<label for="inputphone">Phone Number</label>
												<input id="inputphone" type="number" class="form-control form-control-lg @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone', $reservation->phone) }}" placeholder="Phone" required autocomplete="phone">

													@error('phone')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
												</div>
												<div class="form-group">
													<label for="inputtime">Time</label>
													<select name="time" class="form-control" id="inputtime">
														<option value="6">6:00 PM</option>
														<option value="7">7:00 PM</option>
														<option value="8">8:00 PM</option>
														<option value="9">9:00 PM</option>
														<option value="10">10:00 PM</option>
													</select>
												</div>
												<div class="col-sm-12 pl-0">
													<p class="text-right">
														<button type="submit" class="btn btn-space btn-primary">Submit</button>
													</p>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
@endsection
