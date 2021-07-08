@extends('app')
@section('content')
<div class="bg-light">
    <div class="page-hero-section bg-image hero-mini" style="background-image: url(../assets/img/hero_mini.svg)">
        <div class="hero-caption">
            <div class="container fg-white h-100">
                <div class="
              row
              justify-content-center
              align-items-center
              text-center
              h-100
            ">
                    <div class="col-lg-6">
                        <h3 class="mb-4 fw-medium">Contact</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="
                    breadcrumb breadcrumb-dark
                    justify-content-center
                    bg-transparent
                  ">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Contact
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 my-3 wow fadeInUp">
                    <div class="card-page">
                        <div class="row row-beam-md">
                            <div class="col-md-4 text-center py-3 py-md-2">
                                <i class="mai-location-outline h3"></i>
                                <p class="fg-primary fw-medium fs-vlarge">Location</p>
                                <p class="mb-0">
                                    3 East Ridgewood Avenue Los Angeles, CA 90022
                                </p>
                            </div>
                            <div class="col-md-4 text-center py-3 py-md-2">
                                <i class="mai-call-outline h3"></i>
                                <p class="fg-primary fw-medium fs-vlarge">Contact</p>
                                <p class="mb-1">+213 908 92034</p>
                                <p class="mb-0">+415 123 89245</p>
                            </div>
                            <div class="col-md-4 text-center py-3 py-md-2">
                                <i class="mai-mail-open-outline h3"></i>
                                <p class="fg-primary fw-medium fs-vlarge">Email</p>
                                <p class="mb-1">support@mobster.com</p>
                                <p class="mb-0">support@macodeid.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 my-3 wow fadeInUp">
                    <Contact></Contact>
                </div>
                <div class="col-md-6 col-lg-7 my-3 wow fadeInUp">
                    <div class="card-page">
                        <div class="maps-container">
                            <div id="myMap">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26452.742917192725!2d-118.17736257691533!3d34.02866015917698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2cfa0df142edf%3A0x751712d405f4790c!2sLos%20Angeles%2C%20CA%2090022%2C%20USA!5e0!3m2!1sen!2scl!4v1625785208805!5m2!1sen!2scl" style="border:0; width: 100%; height:650px;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop