@extends('layouts.app')

@if (session('success'))
        <script>
            window.onload = function() {
                alert("{{ session('success') }}");
            };
        </script>
 @endif

@section('banner')
    <div class="text-light text-center text-md-end banners">
        <h1 class="display-5 bannerheaders fw-bold">
            Welcome to <span class="display-4 text-uppercase fw-bolder">Auston</span> Sport Club Home Page
        </h1>
        <p class="lead bannerparagraphs fw-bold">
            “Talent wins games, but teamwork and intelligence win championships.” __ Michael Jordan
        </p>
    </div>
@endsection

@section('content')

    <!-- start back to top -->
        <div class="fixed-bottom">
            <a href="{{ route('index') }}" class="btn-backtotops"><i class="fas fa-arrow-up"></i></a>
        </div>
    <!-- end back to top -->

    <!-- start stick note -->

        <div class="sticknotes">
            <a href="javascript:void(0;)" class="one">Leadership</a>
            <a href="javascript:void(0;)" class="two">Skill</a>
            <a href="javascript:void(0;)" class="three">Teamwork</a>
            <a href="javascript:void(0;)" class="four">Wellbeing</a>
        </div>

    <!-- start stick note -->

    <!-- start about us section -->

        <section id="aboutus" class="py-5 aboutus">
            <div class="container">
                <div class="row about">

                    <div class="col col-sm-6 text-white">
                        
                        <div class="col-md-12">
                            <h2 class="text-uppercase text-black">Who are we ??</h2>
                            <div class="lines"></div>
                            <div class="lines"></div>
                            <div class="lines"></div>
                        </div>

                        <h5 class="fw-bold">We are the Sports Club Team under the Student Council of Auston University, dedicated to promoting health, wellness, and community spirit through engaging sports activities and events. </h5>
                        <p class="fw-bold">Our club provides students with opportunities to participate in various sports, fostering teamwork, discipline, and personal growth. We aim to create a supportive environment where members can develop their skills, enjoy healthy competition, and connect with fellow students who share a passion for sports. Join us as we build a vibrant, active, and unified campus community!</p>
                        <a href="{{ route('aboutus') }}" class="btn btn-danger rounded-0">See Members</a>

                    </div>

                </div>
            </div>
        </section>

    <!-- end about us section -->

    <!-- start property section -->

        <section id="activities" class="py-5">
            <div class="container-fluid">

                <!-- start title -->
                <div class="text-center mb-5">
                    <div class="col">
                        <h3 class="titles">Activities</h3>
                    </div>
                </div>
                <!-- end title -->

                <ul class="list-inline text-center text-uppercase fw-bold">
                    <li class="list-inline-item activitylists activeitems" data-filter="all">All <span class="mx-3 mx-md-5 text-muted">/</span></li>
                    <li class="list-inline-item activitylists" data-filter="football">Football <span class="mx-3 mx-md-5 text-muted">/</span></li>
                    <li class="list-inline-item activitylists" data-filter="tennis">Tennis <span class="mx-3 mx-md-5 text-muted">/</span></li>
                    <li class="list-inline-item activitylists" data-filter="basketball">Basketball <span class="mx-3 mx-md-5 text-muted">/</span></li>
                    <li class="list-inline-item activitylists" data-filter="swimming">Swimming</li>
                </ul>

                <div class="container-fluid">
                    <div class="d-flex flex-wrap justify-content-center">
                        <div class="filters football"><a href="./assets/img/gallery/football1.jpg" data-lightbox="property" data-title="Image 1"><img src="./assets/img/gallery/football1.jpg" width="200" alt="image1"/></a></div>
                        <div class="filters football"><a href="./assets/img/gallery/football2.jpg" data-lightbox="property" data-title="Image 2"><img src="./assets/img/gallery/football2.jpg" width="200" alt="image2"/></a></div>
                        <div class="filters football"><a href="./assets/img/gallery/football3.jpg" data-lightbox="property" data-title="Image 3"><img src="./assets/img/gallery/football3.jpg" width="200" alt="image3"/></a></div>
                        <div class="filters football"><a href="./assets/img/gallery/football4.jpg" data-lightbox="property" data-title="Image 4"><img src="./assets/img/gallery/football4.jpg" width="200" alt="image4"/></a></div>
                        <div class="filters football"><a href="./assets/img/gallery/football5.jpg" data-lightbox="property" data-title="Image 5"><img src="./assets/img/gallery/football5.jpg" width="200" alt="image5"/></a></div>
                        <div class="filters tennis"><a href="./assets/img/gallery/tennis1.jpg" data-lightbox="property" data-title="Image 6"><img src="./assets/img/gallery/tennis1.jpg" width="200" alt="image6"/></a></div>
                        <div class="filters tennis"><a href="./assets/img/gallery/tennis2.jpg" data-lightbox="property" data-title="Image 7"><img src="./assets/img/gallery/tennis2.jpg" width="200" alt="image7"/></a></div>
                        <div class="filters tennis"><a href="./assets/img/gallery/tennis3.jpg" data-lightbox="property" data-title="Image 8"><img src="./assets/img/gallery/tennis3.jpg" width="200" alt="image8"/></a></div>
                        <div class="filters tennis"><a href="./assets/img/gallery/tennis4.jpg" data-lightbox="property" data-title="Image 9"><img src="./assets/img/gallery/tennis4.jpg" width="200" alt="image9"/></a></div>
                        <div class="filters tennis"><a href="./assets/img/gallery/tennis5.jpg" data-lightbox="property" data-title="Image 10"><img src="./assets/img/gallery/tennis5.jpg" width="200" alt="image10"/></a></div>
                        <div class="filters tennis"><a href="./assets/img/gallery/tennis6.jpg" data-lightbox="property" data-title="Image 11"><img src="./assets/img/gallery/tennis6.jpg" width="200" alt="image11"/></a></div>
                        <div class="filters tennis"><a href="./assets/img/gallery/tennis7.jpg" data-lightbox="property" data-title="Image 12"><img src="./assets/img/gallery/tennis7.jpg" width="200" alt="image12"/></a></div>
                        <div class="filters basketball"><a href="./assets/img/gallery/basket1.jpg" data-lightbox="property" data-title="Image 13"><img src="./assets/img/gallery/basket1.jpg" width="200" alt="image13"/></a></div>
                        <div class="filters basketball"><a href="./assets/img/gallery/basket2.jpg" data-lightbox="property" data-title="Image 14"><img src="./assets/img/gallery/basket2.jpg" width="200" alt="image14"/></a></div>
                        <div class="filters basketball"><a href="./assets/img/gallery/basket3.jpg" data-lightbox="property" data-title="Image 15"><img src="./assets/img/gallery/basket3.jpg" width="200" alt="image15"/></a></div>
                        <div class="filters basketball"><a href="./assets/img/gallery/basket4.jpg" data-lightbox="property" data-title="Image 16"><img src="./assets/img/gallery/basket4.jpg" width="200" alt="image16"/></a></div>
                        <div class="filters swimming"><a href="./assets/img/gallery/swim1.jpg" data-lightbox="property" data-title="Image 17"><img src="./assets/img/gallery/swim1.jpg" width="200" alt="image17"/></a></div>
                        <div class="filters swimming"><a href="./assets/img/gallery/swim2.jpg" data-lightbox="property" data-title="Image 18"><img src="./assets/img/gallery/swim2.jpg" width="200" alt="image18"/></a></div>
                        <div class="filters swimming"><a href="./assets/img/gallery/swim3.jpg" data-lightbox="property" data-title="Image 19"><img src="./assets/img/gallery/swim3.jpg" width="200" alt="image19"/></a></div>
                    </div>
                </div>

            </div>
        </section>

    <!-- end property section -->


    <!-- start adv section -->

        <section class="py-5 missions">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5">
                        <img src="./assets/img/banner/sportsall.png" class="fromlefts advimages" alt="sports">
                    </div>

                    <div class="col-lg-7 text-white text-center text-lg-end fromrights advtexts">
                        <h1>How we started our Sport Club in University</h1>
                        <p>We started Auston University’s Sports Club to create a space for students to enjoy sports, build teamwork, and connect outside academics. With support from the Student Council, we organized football, basketball, swimming, and tennis activities, making the club a thriving community for health and camaraderie.</p>
                    </div>

                </div>
            </div>
        </section>

    <!-- end adv section -->

    <!-- start champion section -->

    <section id="champions" class="py-3 champions">

        <div class="container-fluid">

            <!-- start title -->
            <div class="text-center mb-3">
                <div class="col">
                    <h3 class="text-white titles">Our School Champions</h3>
                </div>
            </div>
            <!-- end title -->

            <div class="row">
                <div class="col-md-6 mx-auto">

                <div id="stdcarousels" class="carousel slide" data-bs-ride="carousel"> 

                    <ol class="carousel-indicators fw-lighter">
                        <li class="active" data-bs-target="#stdcarousels" data-bs-slide-to="0"></li>
                        <li data-bs-target="#stdcarousels" data-bs-slide-to="1"></li>
                        <li data-bs-target="#stdcarousels" data-bs-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        
                        <div class="carousel-item text-center active">
                            <img src="./assets/img/users/user1.jpg" class="rounded-circle" alt="user1">
                            <blockquote class="text-light">
                                <p class="fw-bold">Tennis Champion</p>
                                <p>University Sprots Tournament</p>
                            </blockquote>
                            <h5 class="text-uppercase fw-bold mb-3 text-white">Ms. July</h5>
                            <ul class="list-inline mb-5">
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                            </ul>
                        </div>

                        <div class="carousel-item text-center">
                            <img src="./assets/img/users/user2.jpg" class="rounded-circle" alt="user2">
                            <blockquote class="text-light">
                                <p class="fw-bold">Silver Meadal Swimming Champion</p>
                                <p>University Sprots Tournament</p>
                            </blockquote >
                            <h5 class="text-uppercase fw-bold mb-3 text-white">Mr. Anton</h5>
                            <ul class="list-inline mb-5">
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                            </ul>
                        </div>

                        <div class="carousel-item text-center">
                            <img src="./assets/img/users/user3.jpg" class="rounded-circle" alt="user3">
                            <blockquote class="text-light">
                                <p class="fw-bold">Basketball Champion</p>
                                <p>University Sprots Tournament</p>
                            </blockquote>
                            <h5 class="text-uppercase fw-bold mb-3 text-white">Ms. Yoon</h5>
                            <ul class="list-inline mb-5">
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                                <li class="list-inline-item"><i class="fas fa-star text-warning"></i></li>
                            </ul>
                        </div>

                    </div>

                </div>

                </div>
            </div>

        </div>

    </section>

<!-- end champion section -->


<!-- start contact section -->

<section id="contact" class="p-5 contacts">
        <div class="container-fluid">
            <div class="col-md-5 mx-auto">
                <h5 class="display-4 mb-3 text-center text-white fw-bold">Stay Updated with Announcements</h5>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group py-3 my-2">
                        <label for="name" class="labels">Full Name <span class="text-danger">* required</span></label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            class="form-control p-3 inputs" 
                            placeholder="Enter your name" 
                            value="{{ old('name') }}" 
                            required 
                            autocomplete="off"
                        />
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group py-3">
                        <label for="email" class="labels">Email Address <span class="text-danger">* required</span></label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form-control p-3 inputs" 
                            placeholder="Enter your email" 
                            value="{{ old('email') }}" 
                            required 
                            autocomplete="off"
                        />
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group py-3">
                        <label for="password" class="labels">Password <span class="text-danger">* required</span></label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="form-control p-3 inputs" 
                            placeholder="Enter your password" 
                            required 
                            autocomplete="off"
                        />
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group py-3">
                        <label for="password_confirmation" class="labels">Confirm Password <span class="text-danger">* required</span></label>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            class="form-control p-3 inputs" 
                            placeholder="Confirm your password" 
                            required 
                            autocomplete="off"
                        />
                    </div>

                    <div class="my-4">
                        <div class="form-check">
                            <input type="checkbox" id="accept" name="accept" class="form-check-input" />
                            <label for="accept" class="form-check-label text-light">I agree to receive notifications</label>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn text-uppercase fw-bold rounded-0 submit-btns">Sign Up</button>
                    </div>
                </form>
                
                <p class="text-center text-white mt-3">Already have an account? <a href="{{ route('login.form') }}" class="text-decoration-none">Login here</a></p>
            </div>
        </div>
    </section>

<!-- end contact section -->

@endsection

@section('scripts')
    <!-- Additional JavaScript specific to this page -->
    <script>
        $(document).ready(function() {
            // Page-specific JS code
        });
    </script>
@endsection
