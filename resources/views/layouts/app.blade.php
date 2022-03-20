<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/574bd77c03.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
<section title="Nav" class="mi-section-nav">
    <nav class="mi-container-nav">
        <div class="mi-body-nav">
            <div class="mi-sec-nav-container ">
                <div class="mi-sec-nav-bdy py-3 mx-5">
                    <div class="row">
                        <div class="col-md-1 text-center ">
                            <a href="#">Kathmandu <span class="px-1 opacity-75"><i class="fa-solid fa-location-dot"></i></span></a>
                        </div>
                        <div class="col-md-1 text-center ">
                            <a href="#">Pokhara <span class="px-1 opacity-75"><i class="fa-solid fa-location-dot"></i></span></a>
                        </div>
                        <div class="col-md-1 text-center ">
                            <a href="#">Butwal <span class="px-1 opacity-75"><i class="fa-solid fa-location-dot"></i></span></a>
                        </div>
                        <div class="col-md-1 text-center ">
                            <a href="#">Hetauda <span class="px-1 opacity-75"><i class="fa-solid fa-location-dot"></i></span></a>
                        </div>
                        <div class="col-md-1 text-center ">
                            <a href="#">Chitwan <span class="px-1 opacity-75"><i class="fa-solid fa-location-dot"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mi-pmy-nav-container">
                <div class="mi-pmy-nav-bdy py-3 mx-5">
                    <div class="row">
                        <div class="col-md-4 p-0">
                            <div class="nav-logo">
                                <img src="images/logo.png" class="nav-logo-img">
                                <label class="nav-logo-label mi-label px-3">
                                    Mero Internship
                                </label>
                            </div>
                        </div>
                        <div class="col-md-5 mi-pmy-menu text-end p-0">
                            <ul class="mi-pmy-ui d-block p-0 m-0">
                                <li class="mi-pmy-li d-inline-block py-2 px-3">
                                    <a href="#" class="py-2 px-3 mi-nav-itm">
                                        Internship
                                        <span class="mi-arw">
												<i class="fa-solid fa-angle-down"></i>
											</span>
                                    </a>
                                    <div class="mi-nav-dropdown  py-4">
                                        <div class="mi-nav-dropdown-topic text-start">
                                            <ul>
                                                <li ref-id="mi-droplist1" class="p-2 my-1 active">
                                                    <a href="#" class="mi-droplist-header">Location</a>
                                                </li>
                                                <li ref-id="mi-droplist2" class="p-2 my-1">
                                                    <a href="#" class="mi-droplist-header">Profile</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="mi-nav-dropdown-cat text-start px-2">
                                            <ul id="mi-droplist1" class="active">
                                                <li class="py-1">
                                                    <a href="#" class="mi-droplist-item">Work From Home</a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="mi-droplist-item">Internship in Kathmandu</a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="mi-droplist-item">InternShip in Hetauda</a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="mi-droplist-item">Internship in Kathmandu</a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="mi-droplist-item">InternShip in Hetauda</a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="mi-droplist-item">Internship in Kathmandu</a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="mi-droplist-item">InternShip in Hetauda</a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="mi-droplist-item">Internship in Kathmandu</a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="mi-droplist-item">InternShip in Hetauda</a>
                                                </li>
                                            </ul>
                                            <ul id="mi-droplist2" class="deactive">
                                                <li class="py-1">
                                                    <a href="#" class="mi-droplist-item">In Graphics Design</a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="mi-droplist-item">In Programming</a>
                                                </li>
                                                <li class="py-1">
                                                    <a href="#" class="mi-droplist-item">In Networking</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="mi-pmy-li d-inline-block py-2 px-3 ">
                                    <a href="#" class="py-2 px-3 mi-nav-itm">
                                        Online Traning
                                        <span class="mi-arw">
												<i class="fa-solid fa-angle-down"></i>
											</span>
                                    </a>
                                </li>
                                <li class="mi-pmy-li d-inline-block py-2 px-3">
                                    <a href="#" class="py-2 px-3 mi-nav-itm">
                                        Fresher Job
                                        <span class="mi-arw">
												<i class="fa-solid fa-angle-down"></i>
											</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 mi-pmy-menu text-end p-0">
                            <a href="#" class="mi-pmy-btn mx-2">Login</a>
                            <a href="#" class="mi-pmy-btn">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</section>
@yield('content')
<footer class="mi-footer  ">
    <div class="mi-footer-container mx-5 py-5">
        <div class="mi-footer-bdy">
            <div class="mi-footer-row mi-pmy-footer row mx-3 py-5">
                <div class="mi-footer-row-content col-md-3">
                    <h3 class="mi-footer-header">
                        Internship by places
                    </h3>
                    <div class="mi-footer-links">
                        <a href="#" class="mi-footer-a d-block">Internship in Kathmandu</a>
                        <a href="#" class="mi-footer-a d-block">Internship in Hetauda</a>
                        <a href="#" class="mi-footer-a d-block">Internship in Butwal</a>
                        <a href="#" class="mi-footer-a d-block">Internship in Chitwan</a>
                    </div>
                </div>
                <div class="mi-footer-row-content col-md-3">
                    <h3 class="mi-footer-header">
                        Internship by fields
                    </h3>
                    <div class="mi-footer-links">
                        <a href="#" class="mi-footer-a d-block">Internship in Graphics Design</a>
                        <a href="#" class="mi-footer-a d-block">Internship in Web Development</a>
                        <a href="#" class="mi-footer-a d-block">Internship in Free Writing</a>
                        <a href="#" class="mi-footer-a d-block">Internship in Banks</a>
                        <a href="#" class="mi-footer-a d-block">Internship in Ecommerce</a>
                        <a href="#" class="mi-footer-a d-block">Internship in Digital Markerting</a>
                    </div>
                </div>
                <div class="mi-footer-row-content col-md-3">
                    <h3 class="mi-footer-header">
                        Internship Training
                    </h3>
                    <div class="mi-footer-links">
                        <a href="#" class="mi-footer-a d-block">Digital Marketing Training</a>
                        <a href="#" class="mi-footer-a d-block">Graphics Design Training</a>
                        <a href="#" class="mi-footer-a d-block">Web Designing Training</a>
                        <a href="#" class="mi-footer-a d-block">Web Development Training</a>
                        <a href="#" class="mi-footer-a d-block">Php & Laravel Training</a>
                        <a href="#" class="mi-footer-a d-block">Java Script Training</a>
                    </div>
                </div>
                <div class="mi-footer-row-content col-md-3">
                    <h3 class="mi-footer-header">
                        About Mero Internship
                    </h3>
                    <div class="mi-footer-links">
                        <a href="#" class="mi-footer-a d-block">About us</a>
                        <a href="#" class="mi-footer-a d-block">Contact us</a>
                        <a href="#" class="mi-footer-a d-block">We're hiring</a>
                        <a href="#" class="mi-footer-a d-block">Hire interns for your company</a>
                        <a href="#" class="mi-footer-a d-block">Team Diary</a>
                        <a href="#" class="mi-footer-a d-block">Blog</a>
                        <a href="#" class="mi-footer-a d-block">Our Services</a>
                        <a href="#" class="mi-footer-a d-block">Terms & Conditions</a>
                        <a href="#" class="mi-footer-a d-block">Privacy</a>
                    </div>
                </div>
            </div>
            <div class="mi-footer-rowsocial m-4">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="mi-footer-header">
                            Find us on Facebook
                        </h3>
                        <div class="fb-page" data-href="https://www.facebook.com/merointernship" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/merointernship" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/merointernship">Mero Internship</a></blockquote></div>
                    </div>
                    <div class="col-md-4 text-start">
                        <h3 class="mi-footer-header">
                            Connect with us
                        </h3>
                        <div class="py-3">
                            <span class="px-3" href="#">
                                <i class="fa-brands fa-facebook-f"></i>
                            </span>
                            <a href="#">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mi-sec-footer py-4">
                <div class="mi-sec-footer-bdy">
                    <div class="mi-footer-logo d-inline-block">
                        <img src="images/logo.png">
                    </div>
                    <!-- <div class="mi-fooer-icon">
                        <a class="px-3" href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </span>
                        <a href="#">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div> -->
                    <div class="text-end mi-sec-footer-cpy">
                        <span><i class="fa-regular fa-copyright"></i></span> Copyright 2020 Mero Internship
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="fb-root"></div>

@yield('styles')
@yield('scripts')
</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
