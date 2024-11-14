@extends('layouts.app')

@section('content')
    <section class="py-5 bg-dark text-white">
        <div class="text-center mb-4 m-5 pt-5">
            <h1 class="display-4 fw-bold">Our Sports Club Team Members</h1>
        </div>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
                
                <!-- President Card -->
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <img src="./assets/img/users/agent-1.jpg" class="team-img" alt="President">
                        <div class="card-body">
                            <h5 class="card-title">President</h5>
                            <p class="text-uppercase fst-italic mb-1" style="font-size: 13px;">Action:</p>
                            <p>Setting goals, representing the club to the university, and ensuring the club’s activities align with its mission.</p>
                        </div>
                    </div>
                </div>
        
                <!-- Vice President Card -->
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <img src="./assets/img/users/agent-2.jpg" class="team-img" alt="Vice President">
                        <div class="card-body">
                            <h5 class="card-title">Vice President</h5>
                            <p class="text-uppercase fst-italic mb-1" style="font-size: 13px;">Action:</p>
                            <p>Assists the president and often steps in if the president is unavailable.</p>
                        </div>
                    </div>
                </div>
        
                <!-- Secretary Card -->
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <img src="./assets/img/users/agen-s-3-2.jpg" class="team-img" alt="Secretary">
                        <div class="card-body">
                            <h5 class="card-title">Secretary</h5>
                            <p class="text-uppercase fst-italic mb-1" style="font-size: 13px;">Action:</p>
                            <p>Responsible for administrative tasks, maintaining records, and handling official correspondence.</p>
                        </div>
                    </div>
                </div>
        
                <!-- Treasurer Card -->
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <img src="./assets/img/users/agen-s-3-1.jpg" class="team-img" alt="Treasurer">
                        <div class="card-body">
                            <h5 class="card-title">Treasurer</h5>
                            <p class="text-uppercase fst-italic mb-1" style="font-size: 13px;">Action:</p>
                            <p>Manages the club’s finances, budgeting, and securing sponsorships.</p>
                        </div>
                    </div>
                </div>
        
                <!-- Team Captain Card -->
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <img src="./assets/img/users/agen-s-3-3.jpg" class="team-img" alt="Team Captain">
                        <div class="card-body">
                            <h5 class="card-title">Team Captain</h5>
                            <p class="text-uppercase fst-italic mb-1" style="font-size: 13px;">Action:</p>
                            <p>Leads practices, motivates teammates, and serves as a liaison between team and club leadership.</p>
                        </div>
                    </div>
                </div>
        
                <!-- Events Coordinator Card -->
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <img src="./assets/img/users/agen-s-3-4.jpg" class="team-img" alt="Events Coordinator">
                        <div class="card-body">
                            <h5 class="card-title">Events Coordinator</h5>
                            <p class="text-uppercase fst-italic mb-1" style="font-size: 13px;">Action:</p>
                            <p>Schedules events, competitions, and social gatherings for the club.</p>
                        </div>
                    </div>
                </div>
        
                <!-- PR Officer Card -->
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <img src="./assets/img/users/team_popup.jpg" class="team-img" alt="PR Officer">
                        <div class="card-body">
                            <h5 class="card-title">Public Relations (PR) Officer</h5>
                            <p class="text-uppercase fst-italic mb-1" style="font-size: 13px;">Action:</p>
                            <p>Manages social media, member experience, and conflict resolution.</p>
                        </div>
                    </div>
                </div>
        
                <!-- Volunteer Card -->
                <div class="col">
                    <div class="card bg-secondary text-white h-100">
                        <img src="./assets/img/users/volunteer.jpg" class="team-img volunteer" alt="Volunteer">
                        <div class="card-body">
                            <h5 class="card-title">Volunteer</h5>
                            <p class="text-uppercase fst-italic mb-1" style="font-size: 13px;">Action:</p>
                            <p>Assists in event organization, logistics, and training sessions.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

