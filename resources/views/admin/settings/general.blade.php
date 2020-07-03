@extends('layouts.admin')

@section('content')
	<div class="container-fluid  dashboard-content">
		<div class="row"> {{-- Page Header  --}}
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="page-header">
					<h2 class="pageheader-title">Edit General Settings</h2>
					<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
					<div class="page-breadcrumb">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit General Settings</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="row"> {{-- Form  --}}
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
				<div class="card">
					<h5 class="card-header">Edit General Settings</h5>
					<div class="card-body">
						<form method="POST" action="/admin/settings/general">
							@csrf
							@method('PUT')
							<div class="form-group">
								<label for="inputsite_title">Site Title</label>
								<input id="inputsite_title" type="text" class="form-control form-control-lg @error('site_title') is-invalid @enderror" name="site_title" value="{{ old('site_title', $general_settings->site_title) }}" placeholder="Enter site title" required autocomplete="site_title" autofocus onfocus="this.select()">
								@error('site_title')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<div class="form-group">
								<label for="inputimgurl">Logo Image URL</label>
								<input id="inputimgurl" type="text" class="form-control form-control-lg @error('logo_img_url') is-invalid @enderror" name="logo_img_url" value="{{ old('logo_img_url', $general_settings->logo_img_url) }}" placeholder="Enter logo image url" required autocomplete="logo_img_url" autofocus onfocus="this.select()">
								@error('logo_img_url')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<div class="form-group">
								<label for="inputaddrone">Address 1</label>
								<input id="inputaddrone" type="text" class="form-control form-control-lg @error('address_1') is-invalid @enderror" name="address_1" value="{{ old('address_1', $general_settings->address_1) }}" placeholder="Enter address one" required autocomplete="address_1" autofocus onfocus="this.select()">
								@error('address_1')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<div class="form-group">
								<label for="inputaddrtwo">Address 2</label>
								<input id="inputaddrtwo" type="text" class="form-control form-control-lg @error('address_2') is-invalid @enderror" name="address_2" value="{{ old('address_2', $general_settings->address_2) }}" placeholder="Enter address two"  autocomplete="address_2" autofocus onfocus="this.select()">
								@error('address_2')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<div class="form-group">
								<label for="inputcity">City</label>
								<input id="inputcity" type="text" class="form-control form-control-lg @error('city') is-invalid @enderror" name="city" value="{{ old('city', $general_settings->city) }}" placeholder="Enter city" required autocomplete="city" autofocus onfocus="this.select()">
								@error('city')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<div class="form-group">
								<label for="inputprovince">Province</label>
								<input id="inputprovince" type="text" class="form-control form-control-lg @error('province') is-invalid @enderror" name="province" value="{{ old('province', $general_settings->province) }}" placeholder="Enter province" required autocomplete="province" autofocus onfocus="this.select()">
								@error('province')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<div class="form-group">
								<label for="inputpostal">Postal Code</label>
								<input id="inputpostal" type="text" class="form-control form-control-lg @error('postalcode') is-invalid @enderror" name="postalcode" value="{{ old('postalcode', $general_settings->postalcode) }}" placeholder="Enter postal code" required autocomplete="postalcode" autofocus onfocus="this.select()">
								@error('postalcode')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
							<div class="form-group">
								<label for="inputphone">Phone Number</label>
								<input id="inputphone" type="text" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', $general_settings->phone_number) }}" placeholder="Enter Phone Number" required autocomplete="phone_number" autofocus onfocus="this.select()">
								@error('phone_number')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
								<div class="row">
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
			</div>
	

@endsection
