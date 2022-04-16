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
								<form action="{{ action('OrganizationController@store') }}" method="post">
                                @csrf
									<div class="mi-filter-content">
										<div class="filter-input">
											<label>Name of Your Company</label>
											<input type="text" name="title" placeholder="Eg. ABC Compnay">
										</div>
										<div class="filter-input">
											<label>Address</label>
											<input type="text" name="address">
										</div>
										<div class="filter-input">
                                        <label>City</label>
											<input type="text" name="city">
										</div>
										<div class="filter-input">
											<label>Description</label>
											<input type="text" name="description" placeholder="Tell us about your company">
										</div>
                                        <div class="filter-input">
                                            <label>Upload Logo of Your Company</label>
											<input type="file" name="logo">
                                        </div>
										<div class="mi-form-submit text-center my-5">
												<button type="submit">Submit</button>
											</a>
										</div>
									</div>
								</form>		
							</div>
						</div>
					</div>
				</div>
	</section>

@endsection