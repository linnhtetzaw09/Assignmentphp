@extends('layouts.app')

@section('content')

<section id="events" class="p-4 events">

    <div class="container-fluid p-3 pt-5">

        <!-- start title -->
        <div class="text-center p-3 pt-5 m-3">
            <div class="col">
                <h3 class="text-light titles">Our Coming Events</h3>
            </div>
        </div>
        <!-- end title -->

        <div class="row">

            <div class="col-lg-6 col-md-9 col-sm-12 mb-3">
                <div class="card eventscards border-0">
                    <img src="./assets/img/gallery/footballbg.jpg" class="" alt="football" />
                    <h5 class="text-white text-uppercase fw-bold p-2 headings">Football Tournament 2024</h5>
                </div>
            
                <div class="btn-container">
                    <a href="#" onclick="footballEventInfo()" id="football" class="btn">About Event</a>
                    <button type="button" id="" class="btn registerBtn">Register Now</button>
                </div>
            </div>
            
            <!-- Event Information Section (Initially Hidden) -->
            <div id="footballEventInfo" class="event-info">
                <h3 class="text-white">Event Information</h3>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Date:</strong> <span id="eventDate">March 15–17, 2024</span></li>
                    <li class="list-group-item"><strong>Time:</strong> <span id="eventTime">9:00 AM</span></li>
                    <li class="list-group-item"><strong>Location:</strong> <span id="eventLocation">Stadium ABC, City XYZ</span></li>
                    <li class="list-group-item"><strong>Sport:</strong> <span id="eventSport">Football</span></li>
                    <li class="list-group-item"><strong>Age Group:</strong> <span id="eventAgeGroup">18-25 years</span></li>
                    <li class="list-group-item"><strong>Description:</strong> <span id="eventDescription">A thrilling football competition for young athletes!</span></li>
                </ul>
                <button type="button" class="back-btn" data-event="footballEventInfo">Back</button>
            </div>

            <div class="col-lg-6 col-md-9 col-sm-12 mb-3">
                <div class="card eventscards border-0">
                    <img src="./assets/img/gallery/tennisbg.jpg" class="" alt="tennis" />
                    <h5 class="text-white text-uppercase fw-bold p-2 headings">Tennis Tournament 2025</h5>
                </div>

                <div class="btn-container">
                    <a href="#" onclick="tennisEventInfo()" id="tennis" class="btn">About Event</a>
                    <button type="button" id="" class="btn registerBtn">Register Now</button>
                </div>
            </div>

            <div id="tennisEventInfo" class="event-info">
                <h3 class="text-white">Event Information</h3>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Date:</strong> <span id="eventDate">April 20–22, 2024</span></li>
                    <li class="list-group-item"><strong>Time:</strong> <span id="eventTime">8:00 AM</span></li>
                    <li class="list-group-item"><strong>Location:</strong> <span id="eventLocation">Tennis Courts XYZ</span></li>
                    <li class="list-group-item"><strong>Sport:</strong> <span id="eventSport">Tennis</span></li>
                    <li class="list-group-item"><strong>Age Group:</strong> <span id="eventAgeGroup">16-30 years</span></li>
                    <li class="list-group-item"><strong>Description:</strong> <span id="eventDescription">A competitive tennis tournament for all skill levels</span></li>
                </ul>
                <button type="button" class="back-btn" data-event="tennisEventInfo">Back</button>
            </div>

            <div class="col-lg-6 col-md-9 col-sm-12 mb-3">
                <div class="card eventscards border-0">
                    <img src="./assets/img/gallery/swimbg.jpg" class="" alt="swimming" />
                    <h5 class="text-white text-uppercase fw-bold p-2 headings">Swimming Championship 2025</h5>
                </div>

                <div class="btn-container">
                    <a href="#" onclick="swimEventInfo()" id="swim" class="btn">About Event</a>
                    <button type="button" id="" class="btn registerBtn">Register Now</button>
                </div>
            </div>

            <div id="swimEventInfo" class="event-info">
                <h3 class="text-white">Event Information</h3>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Date:</strong> <span id="eventDate">December 10 - 12, 2024</span></li>
                    <li class="list-group-item"><strong>Time:</strong> <span id="eventTime">8:00 AM</span></li>
                    <li class="list-group-item"><strong>Location:</strong> <span id="eventLocation">Club Aquatic Center</span></li>
                    <li class="list-group-item"><strong>Sport:</strong> <span id="eventSport">Swimming</span></li>
                    <li class="list-group-item"><strong>Age Group:</strong> <span id="eventAgeGroup">12-25 years</span></li>
                    <li class="list-group-item"><strong>Description:</strong> <span id="eventDescription">A race for swimmers of all levels to showcase their skills.</span></li>
                </ul>
                <button type="button" class="back-btn" data-event="swimEventInfo">Back</button>
            </div>

            <div class="col-lg-6 col-md-9 col-sm-12 mb-3">
                <div class="card eventscards border-0">
                    <img src="./assets/img/gallery/basketbg.jpg" class="" alt="basketball" />
                    <h5 class="text-white text-uppercase fw-bold p-2 headings">Basketball League 2024</h5>
                </div>

                <div class="btn-container">
                    <a href="#" onclick="basketEventInfo()" id="basket" class="btn">About Event</a>
                    <button type="button" id="" class="btn registerBtn">Register Now</button>
                </div>
            </div>

            <div id="basketEventInfo" class="event-info">
                <h3 class="text-white">Event Information</h3>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Date:</strong> <span id="eventDate">April 5–20, 2024</span></li>
                    <li class="list-group-item"><strong>Time:</strong> <span id="eventTime">6:00 PM</span></li>
                    <li class="list-group-item"><strong>Location:</strong> <span id="eventLocation">Club Sports Arena</span></li>
                    <li class="list-group-item"><strong>Sport:</strong> <span id="eventSport">Basketball</span></li>
                    <li class="list-group-item"><strong>Age Group:</strong> <span id="eventAgeGroup">18-30 years</span></li>
                    <li class="list-group-item"><strong>Description:</strong> <span id="eventDescription">A competitive basketball league for teams.</span></li>
                </ul>
                <button type="button" class="back-btn" data-event="basketEventInfo">Back</button>
            </div>

        </div>

    </div>

</section>
    
@endsection

