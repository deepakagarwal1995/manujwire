@extends('visitors.layouts.visitors',['title' => 'distributor'])
@section('content')

<!--=========Banner Start============-->
<div class="inner-pages-bnr">
    <img src="images/blog-banner.jpg" class="img-responsive" alt="blog-banner-image">
    <div class="banner-caption">
        <h1>Become A Distributor</h1>
        <ul class="breadcumb">
            <li><a href="{{ route('home') }}">Home</a> - </li>
            <li>Become a Distributor</li>
        </ul>
    </div>
</div>
<!--=========Banner end============-->
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
            <input name="name" type="text" class="form-input" placeholder="Website*">
        </div>
        <div class="col-lg-12 col-md-12 form-field">
            <textarea name="name" cols="1" rows="2" class="form-comment" placeholder="Comment*"></textarea>
        </div>
        <div class="col-md-12 form-field no-margin">
            <input name="name" type="button" class="form-submit-btn" value="Submit Now">
        </div>
    </div>
</div>


@endsection
