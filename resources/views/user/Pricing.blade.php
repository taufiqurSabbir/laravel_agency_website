@extends('layout.other_page')
@section('page_title','Easy Pricing')

@section('content')
    <!--
Start About Section
==================================== -->
    <section class="about-2 section" id="about">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="col-12">
                    <div class="title text-center">
                        <h2>We Are Bingo Agency</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam reprehenderit accusamus labore iusto,
                            aut, eum itaque illo totam tempora eius.</p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->

                <div class="col-md-6">
                    <img src="images/about/about-2.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-6">
                    <ul class="checklist">
                        <li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                        <li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                        <li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                        <li>Etiam porta sem multipage evint landing magna mollis euismod a pharetra augue.</li>
                        <li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                    </ul>
                    <a href="#" class="btn btn-main mt-20">Learn More</a>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->



    <!-- Start Pricing section
        =========================================== -->
    <section class="pricing-table " id="pricing">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="col-12">
                    <div class="title title-white text-center ">
                        <h2>Our Greatest Plans</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium soluta deserunt eaque, est, quia hic
                            odit sed incidunt officiis quidem.</p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- single pricing table -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="pricing-item">

                        <!-- plan name & value -->
                        <div class="price-title">
                            <h3>Basic</h3>
                            <strong class="value">$19</strong>
                            <p>Perfect for single freelancers who work by themselves</p>
                        </div>
                        <!-- /plan name & value -->

                        <!-- plan description -->
                        <ul>
                            <li><i class="tf-ion-ios-arrow-forward"></i> 1GB Disk Space</li>
                            <li><i class="tf-ion-ios-arrow-forward"></i> 10 Email Account</li>
                            <li><i class="tf-ion-ios-arrow-forward"></i> Script Installer</li>
                            <li><i class="tf-ion-ios-arrow-forward"></i> 1 GB Storage</li>
                            <li><i class="tf-ion-ios-arrow-forward"></i> 2 GB Bandwidth</li>
                            <li><i class="tf-ion-ios-arrow-forward"></i> 24/7 Tech Support</li>
                        </ul>
                        <!-- /plan description -->

                        <!-- signup button -->
                        <a class="btn btn-main" href="#">Signup</a>
                        <!-- /signup button -->

                    </div>
                </div>
                <!-- end single pricing table -->

                <!-- single pricing table -->
                <div class="col-md-4 col-sm-6 col-xs-12  ">
                    <div class="pricing-item">

                        <!-- plan name & value -->
                        <div class="price-title">
                            <h3>Standard</h3>
                            <strong class="value">$39</strong>
                            <p>Suitable for small businesses with up to 5 employees</p>
                        </div>
                        <!-- /plan name & value -->

                        <!-- plan description -->
                        <ul>
                            <li><i class="tf-ion-ios-arrow-forward"></i> 1GB Disk Space</li>
                            <li><i class="tf-ion-ios-arrow-forward"></i> 50 Email Account</li>
                            <li><i class="tf-ion-ios-arrow-forward"></i> Script Installer</li>
                            <li><i class="tf-ion-ios-arrow-forward"></i> 1 GB Storage</li>
                            <li><i class="tf-ion-ios-arrow-forward"></i> 10 GB Bandwidth</li>
                            <li><i class="tf-ion-ios-arrow-forward"></i> 24/7 Tech Support</li>
                        </ul>
                        <!-- /plan description -->

                        <!-- signup button -->
                        <a class="btn btn-main" href="#">Signup</a>
                        <!-- /signup button -->

                    </div>
                </div>
                <!-- end single pricing table -->

                <!-- single pricing table -->
                <div class="col-md-4 col-sm-6 col-xs-12 ">
                    <div class="pricing-item">

                        <!-- plan name & value -->
                        <div class="price-title">
                            <h3>Enterprise</h3>
                            <strong class="value">$59</strong>
                            <p>Great for large businesses with more than 5 employees</p>
                        </div>
                        <!-- /plan name & value -->

                        <!-- plan description -->
                        <ul>
                            <li><i class="tf-ion-ios-arrow-forward"></i> Unlimited Disk Space</li>
                            <li><i class="tf-ion-ios-arrow-forward"></i> Unlimited Email Account</li>
                            <li><i class="tf-ion-ios-arrow-forward"></i> Script Installer</li>
                            <li><i class="tf-ion-ios-arrow-forward"></i> Unlimited Storage</li>
                            <li><i class="tf-ion-ios-arrow-forward"></i> Unlimited Bandwidth</li>
                            <li><i class="tf-ion-ios-arrow-forward"></i> 24/7 Tech Support</li>
                        </ul>
                        <!-- /plan description -->

                        <!-- signup button -->
                        <a class="btn btn-main" href="#">Signup</a>
                        <!-- /signup button -->

                    </div>
                </div>
                <!-- end single pricing table -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->
@endsection
