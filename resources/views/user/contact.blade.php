@extends('layout.other_page')
@section('page_title','Contact Us')

@section('content')

    <!--Start Contact Us
	=========================================== -->
    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="col-12">
                    <div class="title text-center" >
                        <h2>Get In Touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate facilis eveniet maiores ab maxime nam ut numquam molestiae quaerat incidunt?</p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Contact Details -->
                <div class="contact-details col-md-6 " >
                    <h3>Contact Details</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>
                    <ul class="contact-short-info" >
                        <li>
                            <i class="tf-ion-ios-home"></i>
                            <span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
                        </li>
                        <li>
                            <i class="tf-ion-android-phone-portrait"></i>
                            <span>Phone: +880-31-000-000</span>
                        </li>
                        <li>
                            <i class="tf-ion-android-globe"></i>
                            <span>Fax: +880-31-000-000</span>
                        </li>
                        <li>
                            <i class="tf-ion-android-mail"></i>
                            <span>Email: hello@meghna.com</span>
                        </li>
                    </ul>
                    <!-- Footer Social Links -->
                    <div class="social-icon">
                        <ul>
                            <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
                            <li><a href="#"><i class="tf-ion-social-linkedin-outline"></i></a></li>
                        </ul>
                    </div>
                    <!--/. End Footer Social Links -->
                </div>
                <!-- / End Contact Details -->

                <!-- Contact Form -->
                <div class="contact-form col-md-6 " >
                    <form id="contact-form" method="post" role="form">
                        <div class="form-group">
                            <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                        </div>

                        <div class="form-group">
                            <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                        </div>

                        <div class="form-group">
                            <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                        </div>

                        <div id="success" class="success">
                            Thank you. The Mailman is on His Way :)
                        </div>

                        <div id="error" class="error">
                            Sorry, don't know what happened. Try later :(
                        </div>
                        <div id="cf-submit">
                            <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                        </div>

                    </form>
                </div>
                <!-- ./End Contact Form -->

            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section -->

    <!--================================
    =            Google Map            =
    =================================-->
    <section class="map">
        <!-- Google Map -->
        <div id="map_canvas"></div>
    </section>
    <!--====  End of Google Map  ====-->
@endsection
