@extends('layout.other_page')
@section('page_title','Our Team')

@section('content')
    <section class="about" id="about">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="title text-center"  >
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa placeat voluptas tempore recusandae quasi nesciunt in, facilis animi. Sint, possimus?</p>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                <div class="col-md-6">
                    <img src="images/about-us.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a tempor eros. Pellentesque elementum nulla sed justo tempor posuere sit amet sit amet ligula. Curabitur felis nibh, imperdiet eu erat non, luctus cursus lectus. Donec maximus diam leo, sed fringilla nisl auctor eget. Donec dictum neque est, ac faucibus ex blandit a.</p>
                    <p>Curabitur felis nibh, imperdiet eu erat non, luctus cursus lectus. Donec maximus diam leo, sed fringilla nisl auctor eget. Donec dictum neque est, ac faucibus ex blandit a</p>
                    <h4>Lorem ipsum dolor sit.</h4>
                    <ul class="feature-list">
                        <li> <i class="tf-ion-android-checkmark-circle"></i> Web Development</li>
                        <li> <i class="tf-ion-android-checkmark-circle"></i> Application Development</li>
                        <li> <i class="tf-ion-android-checkmark-circle"></i> Website Design</li>
                        <li> <i class="tf-ion-android-checkmark-circle"></i> UI/UX Design</li>
                        <li> <i class="tf-ion-android-checkmark-circle"></i> SEO Service</li>
                    </ul>
                    <a href="#" class="btn btn-main mt-20">Learn More</a>
                </div>
            </div> 		<!-- End row -->
        </div>   	<!-- End container -->
    </section>   <!-- End section -->



    <!-- Start Our Team
        =========================================== -->
    <section class="team" id="team">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="col-12">
                    <div class="title text-center ">
                        <h2>Our Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quasi tempora obcaecati, quis
                            similique quos.</p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- team member -->
                <div class="col-md-4 col-sm-6 ">
                    <div class="team-member text-center">
                        <div class="member-photo">
                            <!-- member photo -->
                            <img class="img-fluid" src="images/team/member-1.jpg" alt="Meghna">
                            <!-- /member photo -->

                            <!-- member social profile -->
                            <div class="mask">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <!-- /member social profile -->
                        </div>

                        <!-- member name & designation -->
                        <div class="member-content">
                            <h3>Michael Jonson</h3>
                            <span>Head Of Marketing</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                        </div>
                        <!-- /member name & designation -->

                    </div>
                </div>
                <!-- end team member -->

                <!-- team member -->
                <div class="col-md-4 col-sm-6 ">
                    <div class="team-member text-center">
                        <div class="member-photo">
                            <!-- member photo -->
                            <img class="img-fluid" src="images/team/member-2.jpg" alt="Meghna">
                            <!-- /member photo -->

                            <!-- member social profile -->
                            <div class="mask">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <!-- /member social profile -->
                        </div>

                        <!-- member name & designation -->
                        <div class="member-content">
                            <h3>Carrick Mollenkamp</h3>
                            <span>Web Developer</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                        </div>
                        <!-- /member name & designation -->
                    </div>
                </div>
                <!-- end team member -->

                <!-- team member -->
                <div class="col-md-4 col-sm-6 ">
                    <div class="team-member text-center">
                        <div class="member-photo">
                            <!-- member photo -->
                            <img class="img-fluid" src="images/team/member-3.jpg" alt="Meghna">
                            <!-- /member photo -->

                            <!-- member social profile -->
                            <div class="mask">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <!-- /member social profile -->
                        </div>

                        <!-- member name & designation -->
                        <div class="member-content">
                            <h3>David Gauthier</h3>
                            <span>Head Of Management</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                        </div>
                        <!-- /member name & designation -->

                    </div>
                </div>
                <!-- end team member -->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->


@endsection
