@extends('visitors.layouts.visitors',['title' => 'company'])
@section('content')

    <!--=========Banner Start============-->
        <div class="inner-pages-bnr">
            <img src="images/about-banner.jpg" class="img-responsive" alt="about-banner-image">
            <div class="banner-caption">
                <h1>About Us</h1>
                <ul class="breadcumb">
                    <li><a href="{{ route('home') }}">Home</a> - </li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
        <!--=========Banner end============-->
        <!--=========Why Choose Start============-->
        <section class="bestthing-section why-choose-section why-choose-section_01">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bestthing-text-column">
                        <h3>why choose<br><span style="color: #f0cb72">B M Jain Steel Co.</span></h3>
                        <p class="fnt-17"><b>B M Jain Steel Co.</b> is a leading <b>Barbed Wire Manufacturers in Dholpur.</b> Our company is known for supplying a wide range of
                        superior quality fence and wire mesh Products since 1995.. </p>
                        <ul class="choose-list">
                           <b> <li>25+ Years Of Experience In This Field</li>
                            <li>We Use High-quality Raw Materials</li>
                            <li>We have a spacious manufacturing unit</li>
                            <li>We serve you the quality products</li>
                             <li>Timely Delivery</li>
                            <li>Round-The-Clock Support</li></b>
                            {{-- <li>Egestas Fermentum</li>
                            <li>Adipiscing Vulputate</li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="bestthing-img whychoos-img">
                <img src="images/why-choose-bg.png" class="img-responsive" alt="choose-image">
            </div>
        </section>
        <hr>
        <!--=========Why Choose end============-->
        <!--=========Company History Start============-->
        <section class="pad100-70-top-bottom">
            <div class="container">
                <div class="row ">
                    <div class="head-section wdt-100">
                        <div class="col-lg-5 col-md-6 col-sm-4 col-xs-12">
                            <h3>Services & Solution</h3>
                        </div>

                        <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12">
                            <p class="fnt-18">Our team has years of experience and ability to produce profitable products. We
                                use high-grade raw materials and
                                advanced technology in our process, and we ensure its quality within competitive market prices.
                            </p>
                        </div>

                    </div>
                    <h1 class="text-center" >Industries where our products are used</h1>
                    <div class="col-md-12" style="margin-top: 35px">
                        <div class="col-md-4 col-sm-6 col-xs-12 service-column text-center">
                            <a href="manufacturing.html">
                                <span class="icons service-manufactureicon"></span>
                                <h5>MANUFACTURING</h5>
                                <p class="line-height26 marbtm20">We offer a full service from a to z, <span>top quality
                                        products</span> with spot on deadlines. </p>
                                {{-- <span class="read-more-link">Read More</span> --}}
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 service-column text-center">
                            <a href="cnc-industry.html">
                                <span class="icons service-cncicon"></span>
                                <h5>CNC INDUSTRY</h5>
                                <p class="line-height26 marbtm20"><span>Maintenance</span> of our products is critical for long
                                    lasting quality. Choose the right partner. </p>
                                {{-- <span class="read-more-link">Read More</span> --}}
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 service-column text-center">
                            <a href="chemical-industry.html">
                                <span class="icons service-chemicalicon"></span>
                                <h5>CHEMICAL INDUSTRY</h5>
                                <p class="line-height26 marbtm20">Our factories uphold the <span>top world standards,</span>
                                    responsible towards environment.</p>
                                {{-- <span class="read-more-link">Read More</span> --}}
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 service-column text-center">
                            <a href="energy-engineering.html">
                                <span class="icons service-energyicon"></span>
                                <h5>ENERGY ENGINEERING</h5>
                                <p class="line-height26 marbtm20">Our finished products go trough <span>rigorous
                                        testing</span> and are delivered on time.
                                </p>
                                {{-- <span class="read-more-link">Read More</span> --}}
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 service-column text-center">
                            <a href="oil-industry.html">
                                <span class="icons service-oilicon"></span>
                                <h5>OIL INDUSTRY</h5>
                                <p class="line-height26 marbtm20">Our <span>own transport</span> gives us control over your
                                    delivery. We take pride in our delivery times. </p>
                                {{-- <span class="read-more-link">Read More</span> --}}
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 service-column text-center">
                            <a href="material-engineering.html">
                                <span class="icons service-materialicon"></span>
                                <h5>MATERIAL ENGINEERING</h5>
                                <p class="line-height26 marbtm20"><span>Top of the line machinery,</span> highly educated
                                    employees and great working environment.
                                </p>
                                {{-- <span class="read-more-link">Read More</span> --}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section class="history-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3>COMPANY HISTORY</h3>
                    </div>
                    <div class="col-md-3 col-sm-6 history-list text-center">
                        <span class="top-img"><img src="images/humble-begin-img.png" class="img-responsive"
                                alt="humble-image"></span>
                        <div class="history-list-middle">
                            <div class="white-circle">
                                <div class="white-circle-border">
                                    <div class="yellow-circle">1982</div>
                                </div>
                            </div>
                            <span class="year-circle"></span>
                        </div>
                        <h5>Humble beginnings</h5>
                        <p class="line-height26">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut
                            maximus.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 history-list text-center">
                        <span class="top-img"><img src="images/headquarter-img.png" class="img-responsive"
                                alt="headquarter-image"></span>
                        <div class="history-list-middle">
                            <div class="white-circle">
                                <div class="white-circle-border">
                                    <div class="yellow-circle">1985</div>
                                </div>
                            </div>
                            <span class="year-circle"></span>
                        </div>
                        <h5>New headquarters</h5>
                        <p class="line-height26">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut
                            maximus.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 history-list text-center">
                        <span class="top-img"><img src="images/opening-loc-img.png" class="img-responsive"
                                alt="location-image"></span>
                        <div class="history-list-middle">
                            <div class="white-circle">
                                <div class="white-circle-border">
                                    <div class="yellow-circle">2010</div>
                                </div>
                            </div>
                            <span class="year-circle"></span>
                        </div>
                        <h5>Opening 5 new locations</h5>
                        <p class="line-height26">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut
                            maximus.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 history-list text-center">
                        <span class="top-img"><img src="images/coverage-img.png" class="img-responsive"
                                alt="worldwide-image"></span>
                        <div class="history-list-middle">
                            <div class="white-circle">
                                <div class="white-circle-border">
                                    <div class="yellow-circle">2017</div>
                                </div>
                            </div>
                            <span class="year-circle"></span>
                        </div>
                        <h5>World wide coverage</h5>
                        <p class="line-height26">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut
                            maximus.</p>
                    </div>
                </div>
            </div>
        </section> --}}
        <!--=========Company History end============-->
   @endsection
