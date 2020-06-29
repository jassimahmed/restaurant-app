@extends('layouts.admin')

@section('content')
	<div class="container-fluid  dashboard-content">
		<!-- ============================================================== -->
		<!-- pageheader -->
		<!-- ============================================================== -->
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="page-header">
					<h2 class="pageheader-title">New Food Category </h2>
					<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
					<div class="page-breadcrumb">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="/admin/food-categories" class="breadcrumb-link">All Food Categories</a></li>
								<li class="breadcrumb-item active" aria-current="page">New Food Category</li>
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
					<h5 class="card-header">Create a new catgory</h5>
					<div class="card-body">
						<form method="POST" action="/admin/food-categories">
							@csrf
							<div class="form-group">
								<label for="inputtitle">Title</label>
								<input id="inputtitle" type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" name="title" value="" placeholder="Give category a title" required autocomplete="title" autofocus >

									@error('title')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label for="inputdescription">Description</label>
									<textarea id="inputdescription" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description" placeholder="Write a description{{old('description')}}" required autofocus ></textarea>

										@error('description')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="form-group">
										<label for="inputimageurl">Image URL</label>
										<input id="inputimageurl" type="text" class="form-control form-control-lg @error('image_url') is-invalid @enderror" name="image_url" placeholder="Add image url" required autofocus>

											@error('image_url')
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
						<!-- ============================================================== -->
						<!-- end basic form -->
						<!-- ============================================================== -->

					</div>

				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- end basic form -->
		<!-- ============================================================== -->

	</div>


</div>
@endsection
