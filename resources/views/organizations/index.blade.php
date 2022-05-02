@extends('layouts.app')

@section('content')

<section class="mi-section mi-section-listing m-5">
		<div class="mi-container mi-container-listing ">
			<div class="mi-listing">
				<div class="row">
					<div class="col-md-6">
						<div class="mi-filter-container p-3">
							<div class="mi-filter-bdy">
								<h3 class="mi-header">
									Add your company details here:
								</h3>
								<form action="{{ action('OrganizationController@store') }}" method="post" enctype="multipart/form-data">
                                @csrf
									<div class="mi-filter-content">
										<div class="filter-input">
											<label>Name of Your Company</label>
											<input type="text" name="title" placeholder="Eg. ABC Company" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

										<div class="filter-input">
											<label>Address</label>
											<input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" required autocomplete="address" autofocus>
                                            @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
										<div class="filter-input">
                                        <label>City</label>
											<input type="text" name="city" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}" required autocomplete="city" autofocus>
                                            @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
										</div>
										<div class="filter-input">
											<label>Description</label>
											<input type="text" name="description" placeholder="Tell us about your company" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" required autocomplete="description" autofocus>
                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
										</div>
                                        <div class="filter-input">
                                            <label>Upload Logo of Your Company</label>
											<input type="file" name="logo">
                                        </div>
										<div class="mi-form-submit text-center my-5">
												<button type="submit">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
	</section>

@endsection
