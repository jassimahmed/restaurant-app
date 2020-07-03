@extends('layouts.admin')

@section('content')
	<div class="container-fluid  dashboard-content">
		<div class="row"> {{-- Page Header  --}}
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="page-header">
					<h2 class="pageheader-title">Edit Social Settings</h2>
					<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
					<div class="page-breadcrumb">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Social Settings</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="row"> {{-- Form  --}}
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
				<div class="card">
					<h5 class="card-header">Edit Social Settings</h5>
					<div class="card-body">
						<form method="POST" action="/admin/settings/social-accounts">
							@csrf
							@method('PUT')
							<div class="form-group">
								<label for="inputfacebook_url">Facebook URL</label>
								<input id="inputfacebook_url" type="text" class="form-control form-control-lg @error('facebook_url') is-invalid @enderror" name="facebook_url" value="{{ old('facebook_url', $social_settings->facebook_url) }}" placeholder="Enter facebook url" required autocomplete="facebook_url" autofocus onfocus="this.select()">
									@error('facebook_url')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
							</div>
							<div class="form-group">
								<label for="inputtwitter_url">Twitter URL</label>
								<input id="inputtwitter_url" type="text" class="form-control form-control-lg @error('twitter_url') is-invalid @enderror" name="twitter_url" value="{{ old('twitter_url', $social_settings->twitter_url) }}" placeholder="Enter twitter url" required autocomplete="twitter_url" autofocus onfocus="this.select()">
									@error('twitter_url')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
							</div>
							<div class="form-group">
								<label for="inputinstagram_url">Instagram URL</label>
								<input id="inputinstagram_url" type="text" class="form-control form-control-lg @error('instagram_url') is-invalid @enderror" name="instagram_url" value="{{ old('instagram_url', $social_settings->instagram_url) }}" placeholder="Enter instagram url" required autocomplete="instagram_url" autofocus onfocus="this.select()">
									@error('instagram_url')
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
