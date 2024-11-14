@extends('layouts.app')

@section('content')
    
<section class="text-white bg-dark py-5">

    <div class="container">
    
            <!-- Start Header -->
            <div class="row mb-5">
                <div class="col-lg-7">
                    <img src="./assets/img/gallery/studentsbg.jpg" class="w-100 h-100 object-fit-cover" alt="headerphoto">
                </div>
                <div class="col-lg-5 d-flex flex-column justify-content-center p-4 bg-dark text-light">
                    <h1 class="h2 fw-bold">Sports Club News & Announcements</h1>
                    <p>"Attention, students! Don’t miss out on these exciting upcoming sports events! Make sure to register by the deadlines. Gather your friends, form your teams, and register now to be part of the action. Don’t let these opportunities slip by!"</p>
                </div>
            </div>
            <!-- End Header -->
    
            <!-- Start Content -->
            <div class="row g-4">

                <!-- Post 1 -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card bg-dark text-light">
                        <img src="../assets/img/gallery/football3.jpg" class="card-img-top object-fit-cover h-100 rounded-top" alt="postphoto">
                        <div class="card-body">
                            <h2 class="card-title h4">Football Tournament 2025</h2>
                            <span class="text-white small d-block">Post date: 24 Nov 2024</span>
                            <p class="text-white small fst-italic">Posted by: admin1</p>
                            <p class="card-text">
                                <span class="truncated-text">We’re excited to invite all football enthusiasts to our Annual ...</span>
                                <span class="full-text d-none">We’re excited to invite all football enthusiasts to our Annual Club Football Tournament, set for March 15–17, 2025! Get ready for three days of thrilling competition, camaraderie, and skill. Matches will begin each day at 9:00 AM at the Club Sports Grounds. Gather your team, register before March 5, and compete for top prizes, including awards for the tournament’s MVP, Best Goalkeeper, and Top Scorer. Don’t miss out on this chance to showcase your talent and bring home the championship!</span>
                                <a href="#" class="toggle-text text-warning text-decoration-none">read more</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Post 2 -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card bg-dark text-light">
                        <img src="../assets/img/gallery/tennis3.jpg" class="card-img-top object-fit-cover h-100 rounded-top" alt="postphoto">
                        <div class="card-body">
                            <h2 class="card-title h4">Tennis Tournament 2025</h2>
                            <span class="text-white small d-block">Post date: 30 Nov 2024</span>
                            <p class="text-white small fst-italic">Posted by: admin2</p>
                            <p class="card-text">
                                <span class="truncated-text">Join us for the Annual Club Tennis Tournament from April 20–22, ...</span>
                                <span class="full-text d-none">Join us for the Annual Club Tennis Tournament from April 20–22, 2025! Over three exciting days, witness intense rallies, top spins, and powerful serves from players competing for the championship. Matches will start at 8:00 AM daily at the Club Tennis Courts. Register by April 10 to secure your spot, and compete for prestigious titles, including Best Singles Player, Best Doubles Team, and Most Valuable Player. Don’t miss this opportunity to showcase your skills and claim the title of club champion!</span>
                                <a href="#" class="toggle-text text-warning text-decoration-none">read more</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Post 3 -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card bg-dark text-light">
                        <img src="../assets/img/gallery/swim3.jpg" class="card-img-top object-fit-cover h-100 rounded-top" alt="postphoto">
                        <div class="card-body">
                            <h2 class="card-title h4">Swimming Championship 2024</h2>
                            <span class="text-white small d-block">Post date: 30 Nov 2024</span>
                            <p class="text-white small fst-italic">Posted by: admin1</p>
                            <p class="card-text">
                                <span class="truncated-text">We’re thrilled to announce the Annual Club Swimming Championship, ...</span>
                                <span class="full-text d-none">We’re thrilled to announce the Annual Club Swimming Championship, taking place from December 10–12, 2024! Dive into three days of intense competition, where swimmers of all levels showcase their speed, strength, and skill. Events will start daily at 8:00 AM at the Club Aquatic Center. Register by December 1 to join the race for top titles, including awards for Best Swimmer, Fastest Lap, and Best Team Relay. Don’t miss your chance to make a splash and compete for the ultimate swimming championship glory!</span>
                                <a href="#" class="toggle-text text-warning text-decoration-none">read more</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Post 4 -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card bg-dark text-light">
                        <img src="../assets/img/gallery/basket3.jpg" class="card-img-top object-fit-cover h-100 rounded-top" alt="postphoto">
                        <div class="card-body">
                            <h2 class="card-title h4">Basketball League 2025</h2>
                            <span class="text-white small d-block">Post date: 11 Dec 2024</span>
                            <p class="text-white small fst-italic">Posted by: admin3</p>
                            <p class="card-text">
                                <span class="truncated-text">Join us for an electrifying season at the Club Basketball League 2025, ...</span>
                                <span class="full-text d-none">Join us for an electrifying season at the Club Basketball League 2025, scheduled for April 5–20, 2025! Expect two weeks of intense games where teams compete in a showcase of skill, teamwork, and endurance. Games tip-off each evening at 6:00 PM at the Club Sports Arena. Assemble your team, register by March 25, and compete for championship glory and individual awards like Best Player, Top Scorer, and Defensive Star. Don’t miss your chance to be part of the action and experience the thrill of basketball at its finest!</span>
                                <a href="#" class="toggle-text text-warning text-decoration-none">read more</a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Post 5 -->
                <div class="col-sm-6 col-lg-4">
                    <div class="card bg-dark text-light">
                        <img src="./assets/img/gallery/upcomingevents.jpg" class="card-img-top object-fit-cover h-100 rounded-top" alt="postphoto">
                        <div class="card-body">
                            <h2 class="card-title h4">Upcoming Events</h2>
                            <span class="text-white small d-block">Post date: -</span>
                            <p class="text-white small fst-italic">Posted by: -</p>
                            <p class="card-text">
                                <span class="truncated-text">Attention, students! Exciting sports events are on the horizon...</span>
                                <span class="full-text d-none">Attention, students! Exciting sports events are on the horizon, and we don’t want you to miss out on any of the action. Your Sports Club leaders and members have put together thrilling competitions and activities that promise not only fun and excitement but also lasting memories with friends and teammates. Stay tuned for more updates, mark your calendars, and make sure to register on time. Let’s make these events unforgettable—filled with camaraderie, challenges, and the joy of sports. Get ready to play, cheer, and create incredible moments together!</span>
                                <a href="#" class="toggle-text text-warning text-decoration-none">read more</a>
                            </p>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <!-- End Content -->
    
    </div>
    
</section>

@endsection

