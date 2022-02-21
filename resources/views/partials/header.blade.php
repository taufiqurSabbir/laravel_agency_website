<body id="body">

<!--
 Start Preloader
 ==================================== -->
<div id="preloader">
    <div class='preloader'>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!--
End Preloader
==================================== -->




<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
    <div class="container">
        <!-- main nav -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- logo -->
            <a class="navbar-brand logo" href="index.html">
                <img class="logo-default" src="images/logo.png" alt="logo"/>
                <img class="logo-white" src="images/logo-white.png" alt="logo"/>
            </a>
            <!-- /logo -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('service')}}">Services</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('team')}}">Team</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('price')}}">Pricing</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
