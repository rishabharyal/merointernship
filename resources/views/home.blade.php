@extends('layouts.app')

@section('content')
    <section class="mi-section mx-5 ">
        <div class="mi-container py-5">
            <div class="mi-bdy">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mi-hero-section">
                            <div class="mi-hero-container">
                                <div class="mi-hero-bdy text-center">
                                    <img src="images/slide1.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="" method="get">
                            @csrf
                                <div class="mi-search-container text-center">
                                    <div class="mi-search-form text-end w-75 mx-auto my-5">
                                        <div class="mi-search-input py-2">
                                            <label class="px-3">I am looking for </label>
                                            <select class="py-3 px-4 mi-select mi-select-hero ">
                                                <option>Internship</option>
                                                <option>Online Traning</option>
                                                <option>Fresher Job</option>
                                            </select>
                                        </div>
                                        <div class="mi-search-input py-2 ">
                                            <label class="px-3">in </label>
                                            <select class="py-3 px-4 w-50 mi-select-hero">
                                                @foreach ($cities as $city)
                                                <option>{{ $city->city }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mi-search-input py-2">
                                            <label class="px-3">on category of </label>
                                            <select class="py-3 px-4 mi-select-hero">
                                                @foreach ($industries as $industry)
                                                <option>{{ $industry->industry }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mi-form-submit">
                                            <a href="#" class="mi-pmy-btn mi-pmy-btn-in ">
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
    <section class="mi-section mx-5 mi-cat-section">
        <div class="mi-container py-3">
            <div class="mi-bdy">
                <div class="row">
                    <div class="mi-header-div col-md-12 text-center my-5">
                        <h2 class="mi-header">
                            Categories
                        </h2>
                    </div>
                    <div class="col-md-12">
                        <div class="mi-inside-container ">
                            <div class="row">
                                <div class="col-md-4 mi-cat-row">
                                    <div class="mi-row-container text-center">
                                        <div class="mi-row-bdy">
                                            <div class="mi-row-img py-3">
                                                <a href="{{ action('InternshipController@index') }}" ><img src="images/internship.png"></a>
                                            </div>
                                            <h3>
                                                Internship
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mi-cat-row">
                                    <div class="mi-row-container text-center">
                                        <div class="mi-row-bdy">
                                            <div class="mi-row-img py-3">
                                                <img src="images/onlinetraining.png">
                                            </div>
                                            <h3>
                                                Online Training
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mi-cat-row">
                                    <div class="mi-row-container text-center">
                                        <div class="mi-row-bdy">
                                            <div class="mi-row-img py-3">
                                                <img src="images/fresherjob.png">
                                            </div>
                                            <h3>
                                                Fresher Job
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mi-section mx-5 mi-int-section">
        <div class="mi-container py-3">
            <div class="mi-bdy">
                <div class="row">
                    <div class="mi-header-div col-md-12 text-center my-5">
                        <h2 class="mi-header">
                            Mero Internship Certification
                        </h2>
                    </div>
                    <div class="col-md-6">
                        <div class="mi-inside-container">
                            <div class="row">
                                <div class="col-md-6 my-5">
                                    <div class="mi-inter-row text-center">
                                        <div class="mi-inter-img py-3">
                                            <img src="images/reg.png">
                                        </div>
                                        <h3>
                                            Registration
                                        </h3>
                                    </div>
                                </div>
                                <div class="mi-arrow1">
                                    <img src="images/arrow.png">
                                </div>
                                <div class="col-md-6 my-5">
                                    <div class="mi-inter-row text-center">
                                        <div class="mi-inter-img py-3">
                                            <img src="images/tra.png">
                                        </div>
                                        <h3>
                                            Training
                                        </h3>
                                    </div>
                                </div>
                                <div class="mi-arrow2">
                                    <img src="images/arrow.png">
                                </div>
                                <div class="col-md-6 my-5">
                                    <div class="mi-inter-row text-center">
                                        <div class="mi-inter-img py-3">
                                            <img src="images/certi.png">
                                        </div>
                                        <h3>
                                            Certificate
                                        </h3>
                                    </div>
                                </div>
                                <div class="mi-arrow3">
                                    <img src="images/arrow.png">
                                </div>
                                <div class="col-md-6 my-5 ">
                                    <div class="mi-inter-row text-center">
                                        <div class="mi-inter-img py-3">
                                            <img src="images/exam.png">
                                        </div>
                                        <h3>
                                            Examination
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="images/grad.png">
                    </div>


                </div>

            </div>
        </div>
    </section>
    <section class="mi-section mx-5 mi-us-section">
        <div class="mi-container py-3">
            <div class="mi-bdy">
                <div class="row">
                    <div class="col-md-5">
                        <img src="images/whyus.png">
                    </div>
                    <div class="col-md-7 text-start ">
                        <div class="mi-content-div ">
                            <h2 class="mi-header my-3">
                                Why US?
                            </h2>
                            <p class="mi-p">
                                Mero Internship is Nepal No.1 Internship Platform. It Provide Internship in Nepal. It is best for Paid and unpaid Internships in IT, Engineering, MBA, media, law, arts, and other streams. It is a platform where you can find the best company for your upcoming professional career.
                            </p>
                            <p class="mi-p" >
                                We were established in 2020. It is an online Internship platform created by Royesh Thapa(Alphatech) .  Alphatech is a leading software company based in Hetauda, Nepal for Website Design, Website development, SEO, Online Advertising, Mobile App development & Graphics Design.
                            </p>
                            <p class="mi-p">
                                We were established in 2020. It is an online Internship platform created O, Online Advertising, Mobile App development & Graphics Design.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mi-section-featured mx-5">
        <div class="mi-container-featured">
            <div class="mi-bdy-featured text-center">
                <h3 class="mi-header my-5">
                    Featured Internships
                </h3>
                
                <div class="mi-featured-row row my-3">
                    @foreach ($featured_internships as $internship)
                    <div class="mi-card mi-listing-card col-md-4">
                        <div class="mi-card-container m-2">
                            <div class="mi-card-bdy p-3">
                                <div class="mi-card-logo">
                                    <img src="images/cardlg.png">
                                </div>
                                <div class="mi-card-loc text-end">
                                    <label class="mi-card-loc-label">{{ $internship->city }} <span><i class="fa-solid fa-location-dot"></i></span> </label>
                                    <label class="mi-card-loc-label-cmp"> {{ $internship->organization->title }} </label>
                                </div>
                                <div class="mi-card-content p-3">
                                    <h4 class="mi-card-content-header">
                                        Content Writer (Gadget-oriented)
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
                </div>
                
                
            </div>
        </div>
    </section>
    <section class="mi-section-test mx-5">
        <div class="mi-container-test">
            <div class="mi-bdy-test text-center">
                <h3 class="mi-header">
                    What does the Students say?
                </h3>
                <div class="mi-test-content text-center px-3 my-5 w-50 mx-auto">

                    <p class="mi-p">
                        <span class="test-quote"><i class="fa-solid fa-quote-left"></i></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat aliquet vitae euismod faucibus sollicitudin id ut nibh odio. Mi cras convallis euismod arcu, at morbi in est. Ipsum phasellus egestas elit volutpat massa nulla commodo diam. Placerat sodales sagittis gravida dolor commodo diam eu urna.<span class="test-quote"><i class="fa-solid fa-quote-right"></i></i></span>
                    </p>

                    <div class="mi-test-user-info py-4">
                        <div class="mi-test-img text-center mx-auto">
                            <img src="images/userimg.png">
                        </div>
                        <div>
                            <label>Bipin Dhimal</label>
                            <span>Intern</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mi-section mx-5 mi-int-section">
        <div class="mi-container py-5">
            <div class="mi-bdy">
                <div class="row">
                    <div class="mi-header-div col-md-12 text-center my-5">
                        <h2 class="mi-header">
                            Subscribe For Internship News
                        </h2>
                    </div>
                    <div class="col-md-12">
                        <div class="mi-inside-container">
                            <div class="row">
                                <div class="col-md-10 offset-md-1 text-center">
                                    <p class="mi-p">
                                        lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in ze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font.
                                    </p>
                                    <div class="mi-form my-5">
                                        <input type="text" name="Name" placeholder="Enter Your Name" class="mi-input" />
                                        <input type="Email" name="Email" placeholder="Enter Your Email" class="mi-input" />
                                        <a href="#" class="mi-pmy-btn mi-pmy-btn d-block text-center mx-auto my-3">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
