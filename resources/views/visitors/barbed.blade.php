@extends('visitors.layouts.visitors',['title' => 'barbed-wire'])
@section('content')
<!--=========Banner Start============-->
<div class="inner-pages-bnr">
    <img src="images/manufacturing-banner.jpg" class="img-responsive" alt="Manufacturing-banner-image">
    <div class="banner-caption">
        <h1>Barbed Wire</h1>
        <ul class="breadcumb">
            <li><a href="{{ route('home') }}">Home</a> - </li>
            <li>Barbed Wire</li>
        </ul>
    </div>
</div>
<!--=========Banner end============-->
<section class="pad100-top-bottom">
    <div class="container">
        <div class="row">

            <!--=========Servie Right Start============-->
            <div class="col-md-8 right-column" style="margin-top: -50px">
                <div class="service-right-desc">
                    {{-- <span class="image_hover ">
                        <img src="images/manufacture-rght-img.jpg" class="img-responsive zoom_img_effect"
                            alt="manufacture-image">
                    </span> --}}
                    {{-- <h5>Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet
                        rutrum
                        faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at
                        eget metus. Aenean lacinia. Donec ullamcorper nulla non metus auctor fringilla.</h5>
                    <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative
                        approaches to corporate strategy foster collaborative thinking to further the overall value
                        proposition. Organically grow the holistic world view of disruptive innovation via workplace
                        diversity and empowerment.</p>
                    <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the
                        day, going forward, a new normal that has evolved from generation X is on the runway heading
                        towards a streamlined cloud solution.</p> --}}
                </div>
                <div class="specialization-cl">
                    <div class="special-img image_hover">
                        <img src="images\barbed-wire.jpg" class="img-responsive zoom_img_effect" alt="special-image">
                    </div>
                    <div class="special-text">
                        <h3>Barbed Wire</h3>
                        <p class=" mar-btm20"><b>BM Jain Steel Co.</b> is one of the leading <br><b>Barbed Wire Manufacturers in
                            Rajasthan. </b>One of the industry leaders in the
                            creation of open area security fences and barbed wire security wall cables is our business.
                            We have a great deal of
                            experience making security fencing coils and wires that last very long. We have been
                            collaborating with a cutting-edge
                            ion facility to provide our clients with the greatest goods and services from a single
                            reliable source.
                        </p>
                    </div>
                </div>
                <div>
                    <p>
                        As a leading <b>Barbed Wire Manufacturer in Dholpur</b>, utilizing cutting-edge, high-quality
                        equipment, high-quality barbed
                        wires are made and provided in accordance with various client needs. Our coiled wires are simple
                        to find at affordable
                        prices. The barbed wire is really durable, has a great polish, and is dimension accurate.
                    </p>
                </div>
                <br>
                <br>
                <div>
                    <p>
                        As one of the best <b>Barbed Wire Suppliers in India</b>, Our protective requirements are
                        successfully met by our barbed Wire.
                        They are created by crimping a tape of barbed, pointed barbs using a machine onto a central
                        core of the high tensile
                        wire. Barbed wire is extremely difficult to cut using hand tools or other equipment. In
                        order to prevent folding, these
                        wires are incredibly strong and supported by a metal coil. The barbs also have a sharp,
                        gripping action.
                    </p>
                </div>
                <br>
                <br>

                <div class="row text-center">
                    <div class="col-12">
                        <div class="col-6"></div>
                        <div class="col-6">
                            <h3 class="mar-btm30">Leave us your info</h3>
                            <p class="fnt-18">and we will get back to you.</p>
                            <form name="request_quote" id="request_quote" method="POST" enctype="multipart/form-data"
                                action="{{ route('formaction') }}" class="">
                                @csrf
                                <input name="act" id="act" type="hidden" value="request_quote" /> <input name="cur_page"
                                    id="cur_page" type="hidden" value="/" />
                                <div class="contact-form">
                                    <div class="col-md-6 form-field input-halfrght">
                                        <input type="text" name="person_name" class="form-input"
                                            id="formGroupExampleInput" placeholder="Enter Full Name" required>
                                    </div>
                                    <div class="col-md-6 form-field input-halflft">

                                        <input type="email" name="email" class="form-input" id="formGroupExampleInput2"
                                            placeholder="Enter Valid Email ID" onblur="return check_validation();">
                                    </div>
                                    <div class="col-lg-12 col-md-12 form-field">
                                        <input type="tel" name="contact" class="form-input" id="formGroupExampleInput3"
                                            placeholder="Enter Contact No" onblur="return check_validation();"
                                            pattern="[6-9]{1}[0-9]{9}"
                                            title="Phone number with 6-9 and remaing 9 digit with 0-9" required>
                                    </div>
                                    <div class="col-lg-12 col-md-12 form-field">

                                        <textarea type="text" cols="1" rows="2" name="comment" class="form-input"
                                            id="formGroupExampleInput4" placeholder="Comment*" required></textarea>
                                    </div>
                                    <div class="col-md-12 form-field no-margin">

                                        <input type="submit" class="form-submit-btn" value="Send Enquiry" />
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=========Servie Right end============-->
        <!--=========Servie Left Start============-->
        <div class="col-md-4 left-column">
            <ul class="category-list">
                <li><a href="{{ route('barbed-wire') }}" class="active-category">Barbed Wire</a></li>
                <li><a href="{{ route('chain-link-fencing') }}">Chain Link Fencing</a></li>
                <li><a href="{{ route('further-drawn-wire') }}">Further Drawn Wire</a></li>
                <li><a href="{{ route('gi-welded-wire-mesh') }}">GI Welded Wire Mesh</a></li>
                <li><a href="{{ route('hot-dip-galvnized-wire') }}">Hot Dip Galvanized Wire</a></li>
                <li><a href="{{ route('hb-wire') }}">HB Wire</a></li>
                <li><a href="{{ route('ms-welded-wire-mesh') }}">MS Welded Wire Mesh</a></li>
                <li><a href="{{ route('nail-wire') }}">Nail Wire</a></li>
                <li><a href="{{ route('commercial-gi-wire') }}">Commercial GI Wire</a></li>
                <li><a href="{{ route('redraw-wire') }}">Redraw Wire</a></li>
            </ul>
            <div class="contact-help">
                <div class="office-info-col wdt-100">
                    <h4>CONTACT US </h4>
                    <ul class="office-information">
                        <li class="office-loc">
                            <span class="info-txt" style="color: white">G-103 Pearl Emerald Building<br />Jaipur House,
                                Agra (UP)</span>
                        </li>
                        <li class="office-phn">
                            <span class="info-txt fnt_17"><a href="tel: +91 74550 29003" style="color: white">+91 74550
                                    29003</a></span>
                        </li>
                        <li class="office-msg">
                            <span class="info-txt fnt_17"><a href="mailto:exports@bmjainsteel.com"
                                    style="color: white">exports@bmjainsteel.com</a></span>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- <a class="pdf-button" href="#">DOWNLOAD BROCHURE</a> --}}
        </div>
        <!--=========Servie Left end============-->

    </div>
    </div>
</section>
@endsection
