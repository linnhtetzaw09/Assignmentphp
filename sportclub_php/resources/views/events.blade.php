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
                    <a href="#" class="btn register-btn" data-event-id="1">Register Now</a>
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
                    <a href="#" class="btn register-btn" data-event-id="2">Register Now</a>
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
                    <a href="#" class="btn register-btn" data-event-id="3">Register Now</a>
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
                    <a href="#" class="btn register-btn" data-event-id="4">Register Now</a>
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
        
        <!-- Registration Modal (Single for All Events) -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Register for Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="registrationForm">
                    @csrf <!-- CSRF token for security -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <input type="hidden" id="event_id" name="event_id" value="">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

    </div>

    <div id="alertMessage" class="alert d-none" role="alert"></div>


</section>
    
@endsection

@section('scripts')
    <script>

$(document).ready(function () {
    // Open modal and set event ID
    $(document).on('click', '.register-btn', function () {
        const eventId = $(this).data('event-id');
        $('#event_id').val(eventId); // Set event ID in hidden input
        $('#registerModal').modal('show'); // Show the modal
    });

    // Handle form submission
    $('#registrationForm').on('submit', function (event) {
        event.preventDefault(); // Prevent default form submission

        const formData = $(this).serialize(); // Serialize form data for AJAX

        $.ajax({
            url: '/events/register', // Your backend route
            type: 'POST',
            data: formData,
            success: function (response) {
                // Check for success condition
                if (response.success) {
                    // Show success alert
                    $('#alertMessage')
                        .removeClass('d-none alert-danger')
                        .addClass('alert-success')
                        .text(response.message); // Use the response message

                    // Close the modal and reset the form
                    $('#registerModal').modal('hide');
                    $('#registrationForm')[0].reset();
                } else {
                    // Show error alert with the backend error message
                    $('#alertMessage')
                        .removeClass('d-none alert-success')
                        .addClass('alert-danger')
                        .text(response.message || 'Registration failed.');
                }
            },
            error: function (xhr) {
                // Show error alert for unexpected errors
                $('#alertMessage')
                    .removeClass('d-none alert-success')
                    .addClass('alert-danger')
                    .text('Something went wrong. Please try again.');
                console.error(xhr.responseText); // Log the error for debugging
            }
        });
    });
});


    </script>
@endsection