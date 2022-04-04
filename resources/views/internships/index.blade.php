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
													<label>3 Months</label>
												</div>
												<div class="mi-card-detail">
													<span>
														<img src="images/time.png">
														TIME
													</span>
													<label>11am-5pm</label>
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
													<label>26 Oct’ 21</label>
												</div>
											</div>
											<label class="mi-card-badge">
												Internship
											</label>
											<div class="mi-card-btn text-end">
												<a href="#" class="mi-sec-btn"> View Details >></a>
											</div>
										</div>
									</div>
								</div>
							</div>
                            @endforeach
                            {!! $internships->links() !!}
                    </div>
					<div class="col-md-4">
						<div class="mi-filter-container p-3">
							<div class="mi-filter-bdy">
								<h3 class="mi-header">
									<i class="fa-solid fa-filter"></i>
									Filter
								</h3>
								<div class="mi-filter-content">
									<div class="filter-input">
										<label>Category</label>
										<input type="text" name="Category" placeholder="e.g Marketing" >
									</div>
									<div class="filter-input">
										<label>Location</label>
										<select>
											<option>Select Location</option>
											<option>Hetauda</option>
											<option>Kathmandu</option>
											<option>Chitwan</option>
										</select>
									</div>
									<div class="filter-input filter-slider">
										<label>Include work from home also</label>
										<label class="switch">
											<input type="checkbox" name="Checkbox">
											<span class="slider round"></span>
										</label>
									</div>
									<div class="filter-input filter-slider">
										<label>Part-time</label>
										<label class="switch">
											<input type="checkbox" name="Checkbox">
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
										<input type="text" name="Category" placeholder="Choose Duration" class="w-75 d-block my-2 mx-0  ">
									</div>

									<div class="filter-input filter-slider">
										<label>Internships for women </label>
										<label class="switch">
											<input type="checkbox" name="Checkbox">
											<span class="slider round"></span>
										</label>
									</div>
									<div class="filter-input filter-slider">
										<label>Internships with job offer</label>
										<label class="switch">
											<input type="checkbox" name="Checkbox">
											<span class="slider round"></span>
										</label>
										
									</div> 
									<div class="filter-clear text-end ">
										<a href="#" class="mi-filter-btn">Clear all</a>
									</div>
								</div>
								<label class="mi-seperator">
									OR
								</label>
								<div class="mi-filter-search">
									<div class="mi-search-input py-2">
										<label class="px-3">I am looking for </label>
										<select class="mi-select mi-select-hero ">
											<option>Internship</option>
											<option>Online Traning</option>
											<option>Fresher Job</option>
										</select>
									</div>
									<div class="mi-search-input py-2 ">
										<label class="px-3">in </label>
										<select class="  mi-select-hero">
											<option>Kathmandu </option>
											<option>Hetauda</option>
											<option>Lalitpur</option>
										</select>
									</div>
									<div class="mi-search-input py-2">
										<label class="px-3">on category of </label>
										<select class="mi-select-hero">
											<option>Graphic designing</option>
											<option>Graphic designing</option>
											<option>Developer</option>
										</select>
									</div>
									<div class="mi-form-submit text-center my-5">
										<a href="#" class="mi-pmy-btn mi-pmy-btn-in ">
											<span> <i class="fa-solid fa-magnifying-glass"></i></span>
											Search
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</section>
@endsection
