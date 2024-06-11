@extends('visitors.layouts.visitors',['title' => 'contact'])
@section('content')
<!--=========Banner start============-->
<div class="inner-pages-bnr">
    <img src="images/contact-banner.jpg" class="img-responsive" alt="contact-banner-image">
    <div class="banner-caption">
        <h1>Contact Us</h1>
        <ul class="breadcumb">
            <li><a href="{{ route('home') }}">Home</a> - </li>
            <li>Contact Us</li>
        </ul>
    </div>
</div>
<!--=========Banner end============-->
<!--=========Contact Section Start============-->
<section class="pad100-top-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact-info-column text-center">
                <img src="images/contact-address-icon.png" alt="address-icon">
                <h4>Location</h4>
                <p class="fnt-17"><b style="color: rgb(77, 75, 75)">G-103 Pearl Emerald Building<br />Jaipur House, Agra (UP)</b></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  contact-info-column text-center">
                <img src="images/contact-phn-icon.png" alt="phone-icon">
                <h4>Phone</h4>
                <p class="fnt-17"><a href="tel: +91 74550 29003" style="color: rgb(77, 75, 75)"><b>+91 74550 29003</b></a></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  contact-info-column text-center">
                <img src="images/contact-msg-icon.png" alt="message-icon">
                <h4>Email</h4>
                <p class="fnt-17"><a href="mailto:exports@bmjainsteel.com" style="color: rgb(77, 75, 75)"><b>exports@bmjainsteel.com</b></a></p>
            </div>
        </div>
        <hr>
        <div class="row text-center">
            <h3 class="mar-btm30">Leave us your info</h3>
            <p class="fnt-18">and we will get back to you.</p>
            <div class="contact-form">
                <div class="col-md-6 form-field input-halfrght">
                    <input name="name" type="text" class="form-input" placeholder="Full Name*">
                </div>
                <div class="col-md-6 form-field input-halflft">
                    <input name="name" type="text" class="form-input" placeholder="Email*">
                </div>
                <div class="col-lg-12 col-md-12 form-field">
                    <input name="phone" type="tel" class="form-input" placeholder="Phone No">
                </div>
                <div class="col-lg-12 col-md-12 form-field">
                    <textarea name="name" cols="1" rows="2" class="form-comment" placeholder="Comment*"></textarea>
                </div>
                <div class="col-md-12 form-field no-margin">
                    <input name="name" type="button" class="form-submit-btn" value="Submit Now">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="contact_map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.7399040776495!2d-6.261147484122739!3d53.34791197997939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!3m2!1sen!2sus!4v1462581622087"></iframe>
</div>
<!--=========Contact Section end============-->
@endsection
