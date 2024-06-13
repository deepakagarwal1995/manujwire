@extends('visitors.layouts.visitors',['title' => 'HOME'])
@section('content')
   <!--=========home banner start============-->
   <div id="minimal-bootstrap-carousel" class="home1 hmslider1 carousel slide carousel-fade shop-slider full_width"
      data-ride="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
         <div class="item active slide-1">
            <div class="carousel-caption">
               <div class="thm-container ">
                  <div class="box valign-top">
                     <div class="content home1-slides">
                        <h1 data-animation="animated fadeInUp">Barbed<span> Wire</span>
                        </h1>
                        <p data-animation="animated fadeInDown"><b>BM Jain Steel Co.</b> is one of the leading <b>Barbed Wire Manufacturers in Rajasthan.</b> One of the industry leaders in the
                        creation of open area security fences and barbed wire security wall cables is our business.</p>
                        {{-- <a data-animation="animated fadeInUp" href="{{ route('barbed-wire') }}"
                           class="header-requestbtn learn-more hvr-bounce-to-right">learn more</a> --}}
                        <a data-animation="animated fadeInUp" href="{{ route('barbed-wire') }}"
                           class="header-requestbtn learn-more our-solution hvr-bounce-to-right">Learn More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="item slide-2">
            <div class="carousel-caption">
               <div class="thm-container">
                  <div class="box valign-top">
                     <div class="content home1-slides">
                        <h1 data-animation="animated fadeInUp">Chain Link <span>Fence</span> </h1>
                        <p data-animation="animated fadeInDown"><b>B M Jain Steel Co.</b> is one of the leading Chain link Fencing Manufacturers in Rajasthan.</p>
                        {{-- <a data-animation="animated fadeInUp" href="{{ route('chain-link-fencing') }}"
                           class="header-requestbtn learn-more hvr-bounce-to-right">learn more</a> --}}
                         <a data-animation="animated fadeInUp" href="{{ route('chain-link-fencing') }}"
                           class="header-requestbtn learn-more our-solution hvr-bounce-to-right">Learn More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="item slide-3">
            <div class="carousel-caption">
               <div class="thm-container">
                  <div class="box valign-top">
                     <div class="content home1-slides">
                        <h1 data-animation="animated fadeInUp"><span>Galvanized</span> Wire </h1>
                        <p data-animation="animated fadeInDown"><b>BM Jain Steel Co. </b>is one of the leading <b>Hot Dip Galvanized Wire Manufacturers in Rajasthan.</b></p>
                        {{-- <a data-animation="animated fadeInUp" href="{{ route('hot-dip-galvnized-wire') }}"
                           class="header-requestbtn learn-more hvr-bounce-to-right">learn more</a> --}}
                         <a data-animation="animated fadeInUp" href="{{ route('hot-dip-galvnized-wire') }}"
                           class="header-requestbtn learn-more our-solution hvr-bounce-to-right">Learn More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#minimal-bootstrap-carousel" role="button" data-slide="prev"> <i
            class="fa fa-angle-left"></i> <span class="sr-only">Previous</span> </a> <a class="right carousel-control"
         href="#minimal-bootstrap-carousel" role="button" data-slide="next"> <i class="fa fa-angle-right"></i> <span
            class="sr-only">Next</span> </a>
   </div>
   <!--=========home banner end============-->

   <section class="recent-project-section projectsec1">
      <div class="container">
         <div class="row">
            <div class="col-lg-9 col-md-8 col-xs-12">
         <h3 class="black-color">Quality Custom Wire Mesh Manufacturer</h3>
         <h5 style="font-weight: 500;font-size: 18px;">24 Years Expertise in the Industry and Counting…</h5>
         </div>
         <div class="col-lg-3 col-md-4 col-xs-12 col-centered" style="text-align:center">
         <a href="{{ route('contact') }}" class="header-requestbtn learn-more our-solution hvr-bounce-to-right">Get A Quick Quote</a>
      </div>
      </div>
   </div>
      <!-- Tab panes -->

   </section>
   <!--=========Services Start============-->



<hr>
   <section class="pad95-45-top-bottom">
      <div class="container">
         <h3 class="text-center" style="    margin-bottom: 40px;">Our Products</h3>
         <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home3-service-column marbtm50">
               <a href="#">
                  <span class="image_hover img">
                     <img src="images/hotdipwire.jpg" class="img-responsive zoom_img_effect"
                        alt="manufacture-image">
                  </span> </a>
               <h4> HOT DIP GALVANIZED WIRE</h4>

               <span class="read-more-link"><a href="{{ route('hot-dip-galvnized-wire') }}">Read More</a></span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home3-service-column marbtm50">
               <a href="#">
                  <span class="image_hover img"> <img src="images/fence.jpg"
                        class="img-responsive zoom_img_effect" alt="CNC-image"></span></a>
               <h4> CHAIN LINK FENCING</h4>

               <span class="read-more-link"><a href="{{ route('chain-link-fencing') }}">Read More</a></span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home3-service-column marbtm50">
               <a href="#">
                  <span class="image_hover img">
                    <img src="images\fwire.jpg" class="img-responsive zoom_img_effect" alt="manufacture-image">
                  </span> </a>
               <h4> FURTHER DRAWN WIRE</h4>

               <span class="read-more-link"><a href="{{ route('further-drawn-wire') }}">Read More</a></span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home3-service-column marbtm50">
               <a href="#">
                  <span class="image_hover img"> <img src="images/barbed-wire.jpg" class="img-responsive zoom_img_effect"
                        alt="CNC-image"></span></a>
               <h4> BARBED WIRE</h4>

               <span class="read-more-link"><a href="{{ route('barbed-wire') }}">Read More</a></span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home3-service-column marbtm50">
               <a href="#">
                  <span class="image_hover img">
                     <img src="images/giwire.jpg" class="img-responsive zoom_img_effect" alt="manufacture-image">
                  </span> </a>
               <h4> GI WELDED WIRE MESH</h4>

               <span class="read-more-link"><a href="{{ route('gi-welded-wire-mesh') }}">Read More</a></span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home3-service-column marbtm50">
               <a href="#">
                  <span class="image_hover img"> <img src="images/hbwire.jpg" class="img-responsive zoom_img_effect"
                        alt="CNC-image"></span></a>
               <h4> HB WIRE</h4>

               <span class="read-more-link"><a href="{{ route('hb-wire') }}">Read More</a></span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home3-service-column marbtm50">
                <a href="#">
                    <span class="image_hover img"> <img src="images/nailwire.jpg" class="img-responsive zoom_img_effect"
                            alt="CNC-image"></span></a>
                <h4> NAIL WIRE</h4>

                <span class="read-more-link"><a href="{{ route('nail-wire') }}">Read More</a></span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home3-service-column marbtm50">
                <a href="#">
                    <span class="image_hover img">
                        <img src="images/mswire.png" class="img-responsive zoom_img_effect" alt="manufacture-image">
                    </span> </a>
                <h4>MS WELDED WIRE MESH</h4>

                <span class="read-more-link"><a href="{{ route('ms-welded-wire-mesh') }}">Read More</a></span>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home3-service-column marbtm50">
                <a href="#">
                    <span class="image_hover img"> <img src="images/raipurwire.jpg" class="img-responsive zoom_img_effect"
                            alt="CNC-image"></span></a>
                <h4>COMMERCIAL GI WIRE</h4>

                <span class="read-more-link"><a href="{{ route('commercial-gi-wire') }}">Read More</a></span>
            </div>

         </div>
      </div>
   </section>
   <!--=========High Quality end============-->

<!--=========Emergency end============-->

<!--=========Success Story Start============-->
{{-- <section class=" success_story">
   <div class="container">
      <div class="row">
         <div class="success_story_content">
            <div class="col-xs-12 col-sm-6 col-md-7 iconSec">
               <div class="row">
                  <div class="topText">
                     <p>Lorem ipsum d
                        magna aliqua...</p>
                  </div>
                  <div class="icon_counter">
                     <div class="col-xs-3 col-sm-2 col-md-2">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                     </div>
                     <div class="col-xs-9 col-sm-10 col-md-10">
                        <h3 class="counter">250</h3>
                        <h3>+</h3>
                        <h4>Projects Completed Successfully</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut et dolore
                           magna aliqua</p>
                     </div>
                  </div>
                  <div class="icon_counter">
                     <div class="col-xs-3 col-sm-2 col-md-2">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                     </div>
                     <div class="col-xs-9 col-sm-10 col-md-10">
                        <h3 class="counter">25</h3>
                        <h3>+</h3>
                        <h4>Experience</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut et dolore
                           magna aliqua</p>
                     </div>
                  </div>
                  <div class="icon_counter">
                     <div class="col-xs-3 col-sm-2 col-md-2">
                        <i class="fa fa-users" aria-hidden="true"></i>
                     </div>
                     <div class="col-xs-9 col-sm-10 col-md-10">
                        <h3 class="counter">100</h3>
                        <h3>+</h3>
                        <h4>Team Members</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut et dolore
                           magna aliqua</p>
                     </div>
                  </div>
                  <div class="vertical_titleStrip">
                     <h1>Our Success Stories</h1>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-5 formSec">
               <div class="titleHead">
                  <div class="tophead">
                     <div class="line"></div>
                     <p>NEED HELP?</p>
                  </div>
                  <h1>Schedule A Services</h1>
               </div>
               <div class="schedule_services">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 form-field">
                        <input type="text" name="your-name" class="form-input" placeholder="Full Name*" required>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 form-field">
                        <input type="email" name="your-email" class="form-input" placeholder="Email*" required>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 form-field">
                        <input type="text" name="your-phone" class="form-input" placeholder="Phone*" required>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 form-field">
                        <select name="service">
                           <option>Chemical Industry"</option>
                           <option>CNC Industry"</option>
                           <option>Energy Engineering"</option>
                           <option>Manufacturing"</option>
                           <option>Material Engineering"</option>
                           <option>Oil Industry"</option>
                        </select>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 form-field">
                        <textarea class="form-comment" name="your-comment">How Can We Help You?</textarea>
                     </div>
                     <div class="col-md-12 form-field request_btn">
                        <input type="submit" name="submit" class="form-submit-btn" value="Submit">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> --}}
<!--=========Success Story end============-->
   <!--=========Testimonial Start============-->
   <section class="testimonial-section">
      <div class="testimonial-rght-head">
         <h2>Testimonial</h2>
      </div>
      <div class="container">
         <div class="col-lg-6 col-md-6 testimonial-left-sidebar">
            <div id="minimal-bootstrap-carousel1"
               class="home1 carousel slide carousel-horizontal shop-slider full_width testimonial-slider"
               data-ride="carousel">
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                  <div class="item active slide-1">
                     <div class="testimonial-head">
                        <span class="testi-img"><img src="images\neel-kanth-steel.jpg"
                              class="img-responsive img-circle" alt="testimonial-image"></span>
                        <div class="testi-text">
                           <h5>Neel Kanth Steel</h5>
                           <span class="testi-designation">Guna,India</span>
                        </div>
                     </div>
                     <p>" We are pleased with the barbed wire we received after getting positive feedback from our buyers our trust built up
                    towards your products and company. "
                     </p>
                  </div>
                  <div class="item slide-2">
                     <div class="testimonial-head">
                        <span class="testi-img"><img src="images\udairam-sons.jpg"
                              class="img-responsive img-circle" alt="testimonial-image"></span>
                        <div class="testi-text">
                           <h5>Udairam & Sons</h5>
                           <span class="testi-designation">Balotra (Raj.), India</span>
                        </div>  
                     </div>
                     <p>" We are getting a regular supply of your quality products, which are regularly increasing in demand by customers to make
                    our trust with your company. "
                     </p>
                  </div>
                  <div class="item slide-3">
                     <div class="testimonial-head">
                        <span class="testi-img"><img src="images\sanjay.png"
                              class="img-responsive img-circle" alt="testimonial-image"></span>
                        <div class="testi-text">
                           <h5>M/s. Gopi Ram Krishan <br>Gopal</h5>
                           <span class="testi-designation">Hisar, India</span>
                        </div>
                     </div>
                     <p>" We are working as a Dealer since the last two years. All the products manufactured by the company are of very Good
                    quality and regularly in demand by customers."
                     </p>
                  </div>
               </div>
               <!-- Controls -->
               <a class="left carousel-control" href="#minimal-bootstrap-carousel1" role="button" data-slide="prev"> <i
                     class="fa fa-angle-left"></i> <span class="sr-only">Previous</span> </a> <a
                  class="right carousel-control" href="#minimal-bootstrap-carousel1" role="button" data-slide="next"> <i
                     class="fa fa-angle-right"></i> <span class="sr-only">Next</span> </a>
            </div>
         </div>
      </div>
   </section>
   <!--=========Testimonial end============-->
   {{-- <section class="pad95-70-top-bottom">
      <div class="container">
         <!--=========Latest News Start============-->
         <div class="row">
            <div class="col-md-12 text-center">
               <h3>latest news</h3>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 news-column">
               <a href="blog.html" class="enitre_mouse">
                  <div class="shadow_effect effect-apollo"> <img src="images/home1-images/home1-news-img1.jpg"
                        class="img-responsive" width="370px" height="215px" alt="news-image"> </div>
               </a>
               <div class="yellow-strip">
                  <div class="news-time">
                     <h5>06</h5>
                     <span>Nov</span>
                  </div>
                  <ul>
                     <li>By : admin</li>
                     <li>Comments : 0</li>
                  </ul>
               </div>
               <h6><a href="blog.html">Duis vitae tellus suscipit, imperdiet est sed, semper urna.</a></h6>
               <p class="line-height26"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium
                  doloremque laudantium totam rem aperiam</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 news-column">
               <a href="blog.html" class="enitre_mouse">
                  <div class="shadow_effect effect-apollo"> <img src="images/home1-images/home1-news-img2.jpg"
                        class="img-responsive" width="370px" height="215px" alt="news-image"> </div>
               </a>
               <div class="yellow-strip">
                  <div class="news-time">
                     <h5>06</h5>
                     <span>Nov</span>
                  </div>
                  <ul>
                     <li>By : admin</li>
                     <li>Comments : 0</li>
                  </ul>
               </div>
               <h6><a href="blog.html">Duis vitae tellus suscipit, imperdiet est sed, semper urna.</a></h6>
               <p class="line-height26"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium
                  doloremque laudantium totam rem aperiam</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 news-column">
               <a href="blog.html" class="enitre_mouse">
                  <div class="shadow_effect effect-apollo"> <img src="images/home1-images/home1-news-img3.jpg"
                        width="370px" height="215px" class="img-responsive" alt="news-image"> </div>
               </a>
               <div class="yellow-strip">
                  <div class="news-time">
                     <h5>06</h5>
                     <span>Nov</span>
                  </div>
                  <ul>
                     <li>By : admin</li>
                     <li>Comments : 0</li>
                  </ul>
               </div>
               <h6><a href="blog.html">Duis vitae tellus suscipit, imperdiet est sed, semper urna.</a></h6>
               <p class="line-height26"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium
                  doloremque laudantium totam rem aperiam</p>
            </div>
         </div>
         <!--=========Latest News end============-->
         <!--=========Our Client Start============-->

         <!--=========Our Client end============-->
      </div>
   </section> --}}
   <div class="google-maps">
      <iframe
         src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7098.94326104394!2d78.0430654485247!3d27.172909818538997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1385710909804"></iframe>
   </div>
@endsection
