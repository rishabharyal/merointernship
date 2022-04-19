@extends('layouts.app')

@section('content')
    <section class="mi-section mi-section-subhero  p-5">
		<div class="mi-container mi-container-subhero p-5">
			<div class="mi-bdy mi-bdy-subhero">
				<h1 class="mi-subhero-h1">
					Information Technology Jobs
				</h1>
				<p class="mi-p">
					Here is a list of Information Technology jobs (IT Jobs) posted in Jobs Nepal. The list shows the latest online job vacancy in Information Technology with job details. Click on the job title to view the job description including the hiring company’s overview as well as additional job requirements, benefits provided for the position. If the job requirement matches your skills and experience, click on the “Click here to Apply” button to send your job application.
				</p>
			</div>
		</div>
	</section>
	<section class="mi-section mi-section-listing m-5">
		<div class="mi-container mi-container-listing ">
			<div class="mi-bdy mi-bdy-listing my-5">
				<div class="mi-header-div text-center">
					<h2 class="mi-header">
						List Of All Internships
					</h2>
				</div>
			</div>
			<div class="mi-listing">
				<div class="row">
					<div class="col-md-8 my-4">
						<div class="mi-listing-row row">
                            @foreach ($internships as $internship)
                            <div class="mi-card mi-listing-card col-md-6">
								<div class="mi-card-container m-2">
									<div class="mi-card-bdy p-3">
										<div class="mi-card-logo">
											<img src="images/cardlg.png">
										</div>
										<div class="mi-card-loc text-end">
											<label class="mi-card-loc-label">{{ $internship->city }}<span><i class="fa-solid fa-location-dot"></i></span> </label>
											<label class="mi-card-loc-label-cmp"> {{ $internship->organization->title }} </label>
										</div>
										<div class="mi-card-content p-3">
											<h4 class="mi-card-content-header">
												{{ $internship->title }}
											</h4>
											<div class="p-3 mi-card-detail-container">
												<div class="mi-card-detail p">
													<span>
														<img src="images/cal.png">
														DURATION
													</span>
													<label>{{ $internship->duration }} Months</label>
												</div>
												<div class="mi-card-detail">
													<span>
														<img src="images/time.png">
														TIME
													</span>
													<label>{{ $internship->time_from }} - {{ $internship->time_to}}</label>
												</div>
											</div>
											<div class="p-3 mi-card-detail-container">
												<div class="mi-card-detail">
													<span>
														<img src="images/sal.png">
														SALARY
													</span>
													<label>Nogotiable</label>
												</div>
												<div class="mi-card-detail">
													<span>
														<img src="images/date.png">
														DATELINE
													</span>
													<label>{{ $internship->deadline }}</label>
												</div>
											</div>
											<label class="mi-card-badge">
												{{ $internship->type }}
											</label>
											<div class="mi-card-btn text-end">
												<a href="#" class="mi-sec-btn"> View Details >></a>
											</div>
										</div>
									</div>
								</div>
							</div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12">
                                {!! $internships->links() !!}
                            </div>
                        </div>
				    </div>
					<div class="col-md-4">
						<div class="mi-filter-container p-3">
							<div class="mi-filter-bdy">
								<h3 class="mi-header">
									<i class="fa-solid fa-filter"></i>
									Filter
								</h3>
								<form id="filter" action="{{ action('InternshipController@index') }}" method="get">
									<div class="mi-filter-content">
										<div class="filter-input">
											<label>Type</label>
											<select name="type">
												<option selected disabled>Please select a type</option>
												<option value="Internship">Internship</option>
												<option value="Fresher Job">Fresher Job</option>
											</select>
										</div>
										<div class="filter-input">
											<label>Category</label>
											<select name="industry">
												<option selected disabled>Please select a category</option>
												@foreach ($industries as $industry)
												<option>{{ $industry }}</option>
												@endforeach
											</select>
										</div>
										<div class="filter-input">
											<label>Location</label>
											<select name="city">
												<option selected disabled>Please select a city</option>
												@foreach ($cities as $city)
												<option>{{ $city }}</option>
												@endforeach
											</select>
										</div>
										<div class="filter-input filter-slider">
											<label>Include work from home also</label>
											<label class="switch">
												<input type="checkbox" name="is_wfh" value="1">
												<span class="slider round"></span>
											</label>
										</div>
										<div class="filter-input filter-slider">
											<label>Part-time</label>
											<label class="switch">
												<input type="checkbox" name="is_parttime" value="1">
												<span class="slider round"></span>
											</label>
										</div>
										<div class="filter-input filter-slider filter-range">
											<label>Desired minimum monthly salary</label>
												<!-- <div class="slidecontainer">
												<input type="range" min="0" max="1000" value="50" class="range-slider " id="myRange">
												</div> -->
										</div>
										<div class="filter-input">
											<label>Max. duration (months)</label>
											<input type="text" name="duration" placeholder="Choose Duration" class="w-75 d-block my-2 mx-0  ">
										</div>

										<div class="filter-input filter-slider">
											<label>Internships for women </label>
											<label class="switch">
												<input type="checkbox" name="is_for_women" value="1">
												<span class="slider round"></span>
											</label>
										</div>
										<div class="filter-input filter-slider">
											<label>Internships with job offer</label>
											<label class="switch">
												<input type="checkbox" name="is_with_joboffer" value="1">
												<span class="slider round"></span>
											</label>

										</div>
										<div class="filter-clear text-end ">
											<a href="#" class="mi-filter-btn">Clear all</a>
										</div>
										<div class="mi-form-submit text-center my-5">
											<a href="#" class="mi-pmy-btn mi-pmy-btn-in " onclick="document.getElementById('filter').submit()">
												<span> <i class="fa-solid fa-magnifying-glass"></i></span>
												Search
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
