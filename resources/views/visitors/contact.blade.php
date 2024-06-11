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
                <p class="fnt-17">G-103 Pearl Emerald Building<br />Jaipur House, Agra (UP)</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  contact-info-column text-center">
                <img src="images/contact-phn-icon.png" alt="phone-icon">
                <h4>Phone</h4>
                <p class="fnt-17"><a href="tel: +91 74550 29003" style="color: black">+91 74550 29003</a></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  contact-info-column text-center">
                <img src="images/contact-msg-icon.png" alt="message-icon">
                <h4>Email</h4>
                <p class="fnt-17"><a href="mailto:exports@bmjainsteel.com" style="color: black">exports@bmjainsteel.com</a></p>
            </div>
        </div>
        <hr>

        <div class="row text-center">
            <h3 class="mar-btm30">Leave us your info</h3>
            <p class="fnt-18">and we will get back to you.</p>
            <form name="request_quote" id="request_quote" method="POST" enctype="multipart/form-data" action="{{ route('formaction') }}" class="">
                @csrf
                <input name="act" id="act" type="hidden" value="request_quote" /> <input name="cur_page" id="cur_page" type="hidden"
                    value="/" />
            <div class="contact-form">
                <div class="col-md-6 form-field input-halfrght" >
                   <input type="text" name="person_name" class="form-input" id="formGroupExampleInput" placeholder="Enter Full Name"
                        required>
                </div>
                <div class="col-md-6 form-field input-halflft">

                    <input type="email" name="email" class="form-input" id="formGroupExampleInput2" placeholder="Enter Valid Email ID"
                        onblur="return check_validation();">
                </div>
                <div class="col-lg-12 col-md-12 form-field">
                    <input type="tel" name="contact" class="form-input" id="formGroupExampleInput3" placeholder="Enter Contact No"
                        onblur="return check_validation();" pattern="[6-9]{1}[0-9]{9}"
                        title="Phone number with 6-9 and remaing 9 digit with 0-9" required>
                </div>
                <div class="col-lg-12 col-md-12 form-field">

                    <textarea type="text" cols="1" rows="2" name="comment" class="form-input" id="formGroupExampleInput4" placeholder="Comment*"
                        required></textarea>
                </div>
                <div class="col-md-12 form-field no-margin">

                    <input type="submit" class="form-submit-btn" value="Send Enquiry" />
                </div>
            </form>
            </div>
        </div>
    </div>
</section>
<div class="contact_map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.7399040776495!2d-6.261147484122739!3d53.34791197997939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!3m2!1sen!2sus!4v1462581622087"></iframe>
</div>


@endsection
