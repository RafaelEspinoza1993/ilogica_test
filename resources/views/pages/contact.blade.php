@extends('app')
    @section('content')
        <div class="bg-light">

            <div class="page-hero-section bg-image hero-mini" style="background-image: url(../assets/img/hero_mini.svg);">
                <div class="hero-caption">
                    <div class="container fg-white h-100">
                        <div class="row justify-content-center align-items-center text-center h-100">
                            <div class="col-lg-6">
                                <h3 class="mb-4 fw-medium">Contact</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
                                        <p class="mb-0">3 East Ridgewood Avenue Los Angeles, CA 90022</p>
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
                            <div class="card-page">
                                <h3 class="fw-normal">Get in touch</h3>
                                <form method="POST" class="mt-3">
                                    <div class="form-group">
                                        <label for="name" class="fw-medium fg-grey">Fullname</label>
                                        <input type="text" class="form-control" id="name">
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="fw-medium fg-grey">Email</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone" class="fw-medium fg-grey">Phone(optional)</label>
                                        <input type="number" class="form-control" id="phone">
                                    </div>

                                    <div class="form-group">
                                        <label for="message" class="fw-medium fg-grey">Message</label>
                                        <textarea rows="6" class="form-control" id="message"></textarea>
                                    </div>

                                    <p>*Your information will never be shared with any third party.</p>

                                    <div class="form-group mt-4">
                                        <button type="submit" class="btn btn-primary">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 my-3 wow fadeInUp">
                            <div class="card-page">
                                <div class="maps-container">
                                    <div id="myMap">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3328.3892346545636!2d-70.65674968480036!3d-33.46521558076974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c517031c89a5%3A0x75825a394a4f15c!2sSta%20Ana%2C%20Santiago%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1sen!2scl!4v1625765094598!5m2!1sen!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- .bg-light -->
    @stop