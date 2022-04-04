@extends('layouts.app')

@section('content')

<section class="mi-section-contact">
    <div class="mi-container">
        <div class="mi-body">
            <div class="row py-5">
                <div class="contactimg col-md-6 text-center">
                    <img src="images/contact1.png">
                </div>
                <div class="contacth1 col-md-6 text-center">
                    <p class="mi-p">
                        <h1 class="contactheader">
                                <strong>CONTACT US</strong>
                        </h1>
                    </p>
                </div>  
                <div class="mi-line-section">
                    <div class="contactline text-center">
                        <img src="images/line.png">
                    </div>
                </div>
                <div class="mi-content-section mx-5">
                    <div class="row">
                        <div class="mi-body-c col-md-6 px-5">
                            
                                <h3 class="mx-5"><strong>Get in Touch!</strong></h3> 

                                <div class="contactimage d-block">
                                    <img src="images/cicon1.png">
                                    <label class="contactcontent"> <strong>9824289806</strong></label>
                                </div>
                                <div class="contactimage d-block">
                                    <img src="images/cicon2.png">
                                    <label class="contactcontent"> <strong>Hetauda-4, Surya Marg</strong></label>
                                </div>
                                <div class="contactimage d-block">
                                    <img src="images/cicon3.png">
                                    <label class="contactcontent"> <strong>internshipmero@gmail.com</strong></label>
                                </div>
                                <div class="contactimage d-block">
                                    <img src="images/cicon4.png">
                                    <label class="contactcontent"> <strong>Drop us a line !</strong></label>
                                </div>
                            
            
                        </div>
                        <div class="mi-body-ci col-md-6 text-center">
                            <img src="images/contact2.png">
                        </div>
                    </div>
                </div>
                    
                <div class="p-0 my-4 mi-form-section">
                    <div class="row mx-5">
                        <div class="col-md-6 mx-auto text-center">
                            <h3 class="mi-header">
                                Leave Us A Message
                            </h3>
                            <div class="form-start ">
                                <div class="py-3 row">
                                    <div class="col-md-2 text-start">
                                        <label>Full Name</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="name" placeholder="Your Full Name">
                                    </div>
                                </div>
                                <div class="py-3 row">
                                    <div class="col-md-2 text-start">
                                        <label>Email Address</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="Email" name="email" placeholder="Your Email Address">
                                    </div>  
                                </div>
                                <div class="py-3 row">
                                    <div class="col-md-2 text-start">
                                        <label>Subject</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="subject" placeholder="Subject of your message">
                                    </div>                    				
                                </div>
                                <div class="Message py-3 row" >
                                    <div class="col-md-2 text-start">
                                        <label>Message</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea placeholder="write down your message" >              					
                                        </textarea>
                                    </div>
                                </div>
                                <div class="text-center my-3">	                    				
                                    <a href="#" class="mi-pmy-btn text-center mx-auto">
                                        Submit
                                    </a>
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
