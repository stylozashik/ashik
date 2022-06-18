@extends('frontend.lib.layout')

@section('main-content')
    @include('frontend.lib.pre_loader');
<!-- WRAPPER ALL -->
<!--<div class="iknow_tm_all_wrap" data-magic-cursor="show" data-animation-in="rotateInDownLeft" data-animation-out="rotateOutDownLeft"> -->
<div class="iknow_tm_all_wrap" data-magic-cursor="show" data-animation-in="zoomIn" data-animation-out="zoomOut">


    @include('frontend.lib.modal')

    <div class="iknow_tm_extra_demo_2">

        <span class="top_shape"></span>
        <span class="bottom_shape"></span>

        <div class="iknow_tm_fixed_background" data-img-url="{{ asset('frontend/img/hero/4.jpg') }}"></div>
        
        @include('frontend.lib.topbar')
        
        <!-- MOBILE MENU -->
        @include('frontend.lib.mobile_menu')
        <!-- /MOBILE MENU -->
        
        <!-- MAINPART -->
        <div class="iknow_tm_mainpart_new_2">
        
            <!-- SOCIAL -->
            <div class="social_list">
                <ul>
                    <li><a href="https://www.freelancer.com/u/rexbdsoft" target="_blank"><img class="svg" src="{{ asset('frontend/img/svg/social/freelancer.svg') }}" alt="" /></a></li>
                    <li><a href="https://www.facebook.com/ashikur.rahaman99/" target="_blank"><img class="svg" src="{{ asset('frontend/img/svg/social/facebook-2.svg') }}" alt="" /></a></li>
                    <li><a href="https://github.com/stylozashik" target="_blank"><img class="svg" src="{{ asset('frontend/img/svg/social/github.svg') }}" alt="" /></a></li>
                    <li><a href="https://www.linkedin.com/in/ashikur-rahaman-bd/" target="_blank"><img class="svg" src="{{ asset('frontend/img/svg/social/linkedin-2.svg') }}" alt="" /></a></li>
                    <li><a href="https://www.youtube.com/channel/UCmaF9szqoFgt_gruJhP1hjw" target="_blank"><img class="svg" src="{{ asset('frontend/img/svg/social/youtube-3.svg') }}" alt="" /></a></li>
                   
                    
                </ul>
            </div>
            <!-- /SOCIAL -->
            
            <!-- MENU -->
            @include('frontend.lib.menu')
            <!-- /MENU -->
                            
            <!-- HERO -->
            @include('frontend.lib.hero')
            <!-- /HERO -->

            <!-- ABOUT -->
            @include('frontend.lib.about')
            <!-- /ABOUT -->

            <!-- RESUME -->
            @include('frontend.lib.resume')
            <!-- /RESUME -->

            <!-- PORTFOLIO -->
            @include('frontend.lib.portfolio')
            <!-- /PORTFOLIO -->

            <!-- SERVICES -->
            @include('frontend.lib.services')
            <!-- /SERVICES -->

            <!-- TESTIMONIALS -->
            <div class="iknow_tm_section_new" id="testimonials">
                <div class="iknow_tm_testimonials">
                    <div class="iknow_tm_main_title">
                        <span>Testimonials</span>
                        <h3>What people said about me</h3>
                    </div>
                    <div class="testimonials_list owl-carousel owl-theme">
                        <div class="list_inner">
                            <div class="in">
                                <div class="text">
                                    <p>Thank you for everything. Did a great job within such a less time. </p>
                                </div>
                                <div class="details">
                                    <div class="left">
                                        <div class="avatar">
                                            <div class="main" data-img-url="{{ asset('frontend/img/country/usa.webp') }}"></div>
                                        </div>
                                        <div class="info">
                                            <h3>Predovic M.</h3>
                                            <span>Business Man</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <img class="svg" src="{{ asset('frontend/img/svg/left-quote.svg') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list_inner">
                            <div class="in">
                                <div class="text">
                                    <p>It was awesome to working with him and his virtual but powerful team.</p>
                                </div>
                                <div class="details">
                                    <div class="left">
                                        <div class="avatar">
                                            <div class="main" data-img-url="{{ asset('frontend/img/country/romania.png') }}"></div>
                                        </div>
                                        <div class="info">
                                            <h3>Robertson C.</h3>
                                            <span>Executive</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <img class="svg" src="{{ asset('frontend/img/svg/left-quote.svg') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list_inner">
                            <div class="in">
                                <div class="text">
                                    <p>Still working, but so far very good. Really awesome at quality service.</p>
                                </div>
                                <div class="details">
                                    <div class="left">
                                        <div class="avatar">
                                            <div class="main" data-img-url="{{ asset('frontend/img/country/uk.png') }}"></div>
                                        </div>
                                        <div class="info">
                                            <h3>
                                                Iramen A.</h3>
                                            <span>Music Director</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <img class="svg" src="{{ asset('frontend/img/svg/left-quote.svg') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="list_inner">
                        <div class="in">
                            <div class="text">
                                <p>I think he can do a good job if he follow long with time consistancy.</p>
                            </div>
                            <div class="details">
                                <div class="left">
                                    <div class="avatar">
                                        <div class="main" data-img-url="{{ asset('frontend/img/country/china.webp') }}"></div>
                                    </div>
                                    <div class="info">
                                        <h3>Zhijie L.</h3>
                                        <span>Photographer</span>
                                    </div>
                                </div>
                                <div class="right">
                                    <img class="svg" src="{{ asset('frontend/img/svg/left-quote.svg') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list_inner">
                        <div class="in">
                            <div class="text">
                                <p>The work was delivered fast, way more before the deadline and within budget.</p>
                            </div>
                            <div class="details">
                                <div class="left">
                                    <div class="avatar">
                                        <div class="main" data-img-url="{{ asset('frontend/img/country/bd.png') }}"></div>
                                    </div>
                                    <div class="info">
                                        <h3>Mahadi R.</h3>
                                        <span>Freelancer</span>
                                    </div>
                                </div>
                                <div class="right">
                                    <img class="svg" src="{{ asset('frontend/img/svg/left-quote.svg') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- /TESTIMONIALS -->
        

        {{-- <!-- NEWS -->
        <div class="iknow_tm_section_new" id="news">
            <div class="iknow_tm_news">
                <div class="iknow_tm_main_title">
                    <span>Blog</span>
                    <h3>Latest tips, tricks &amp; Updates</h3>
                </div>
                <div class="news_list">
                    <ul>
                        <li>
                            <div class="list_inner">
                                <div class="image">
                                    <img src="{{ asset('frontend/img/thumbs/37-27.jpg') }}" alt="" />
                                    <div class="main" data-img-url="{{ asset('frontend/img/news/1.jpg') }}"></div>
                                    <a class="iknow_tm_full_link" href="#"></a>
                                </div>
                                <div class="details">
                                    <span class="category"><a href="#">Web Design</a></span>
                                    <h3 class="title"><a href="#">How to create a website using WordPress</a></h3>
                                </div>

                                <div class="hidden_content">
                                    <div class="news_informations">
                                        <div class="text">
                                            <p>iKnow is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                            <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                            <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <div class="image">
                                    <img src="{{ asset('frontend/img/thumbs/37-27.jpg') }}" alt="" />
                                    <div class="main" data-img-url="{{ asset('frontend/img/news/2.jpg') }}"></div>
                                    <a class="iknow_tm_full_link" href="#"></a>
                                </div>
                                <div class="details">
                                    <span class="category"><a href="#">Branding</a></span>
                                    <h3 class="title"><a href="#">Angular team streamlines requests</a></h3>
                                </div>

                                <div class="hidden_content">
                                    <div class="news_informations">
                                        <div class="text">
                                            <p>iKnow is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                            <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                            <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <div class="image">
                                    <img src="{{ asset('frontend/img/thumbs/37-27.jpg') }}" alt="" />
                                    <div class="main" data-img-url="{{ asset('frontend/img/news/3.jpg') }}"></div>
                                    <a class="iknow_tm_full_link" href="#"></a>
                                </div>
                                <div class="details">
                                    <span class="category"><a href="#">UI Design</a></span>
                                    <h3 class="title"><a href="#">How to handle errors in React Javascript</a></h3>
                                </div>

                                <div class="hidden_content">
                                    <div class="news_informations">
                                        <div class="text">
                                            <p>iKnow is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
                                            <p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
                                            <p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /NEWS --> --}}

        <!-- CONTACT -->
        <div class="iknow_tm_section_new" id="contact">
            <div class="iknow_tm_contact">
                <div class="iknow_tm_main_title">
                    <span>Contact Me</span>
                    <h3>Contact me to get your work done</h3>
                </div>
                <div class="wrapper">
                    <div class="left">
                        <ul>
                            <li>
                                <div class="list_inner">
                                    <span class="icon"><img class="svg" src="{{ asset('frontend/img/svg/smartphone.svg') }}" alt="" /></span>
                                    <div class="short">
                                        <h3>Call Me</h3>
                                        <span>+880 1820829119</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <span class="icon"><img class="svg" src="{{ asset('frontend/img/svg/letter.svg') }}" alt="" /></span>
                                    <div class="short">
                                        <h3>Email</h3>
                                        <span><a href="#">stylozashik@gmail.com</a></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <span class="icon"><img class="svg" src="{{ asset('frontend/img/svg/placeholder.svg') }}" alt="" /></span>
                                    <div class="short">
                                        <h3>Address</h3>
                                        <span>Dhaka, Bangladesh</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="right">
                        <div class="fields">
                            <form action="/" method="post" class="contact_form" id="contact_form" autocomplete="off">
                                <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                                <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                <div class="input_list">
                                    <ul>
                                        <li><input id="name" type="text" placeholder="Your Name" /></li>
                                        <li><input id="email" type="text" placeholder="Your Email" /></li>
                                        <li><input id="phone" type="number" placeholder="Your Phone" /></li>
                                        <li><input id="subject" type="text" placeholder="Subject" /></li>
                                    </ul>
                                </div>
                                <div class="message_area">
                                    <textarea id="message" placeholder="Your message here"></textarea>
                                </div>
                                <div class="iknow_tm_button">
                                    <a id="send_message" href="#">Send Now</a>
                                </div>

                                <!-- If you want change mail address to yours, just open "modal" folder >> contact.php and go to line 4 and change detail to yours.  -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /CONTACT -->
        
        <!-- COPYRIGHT -->
        <div class="iknow_tm_copyright smaller onepage empty">
            <div class="inner">
                <div class="left">
                    <p>Designed with love &copy; <a href="https://freelancer.com/u/rexbdsoft.html" target="_blank">Ashikur Rahaman</a></p>
                </div>
                <div class="right">
                    <ul>
                        <li><a href="#">Terms &amp; Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        {{-- <li><a href="#">Login</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
        <!-- /COPYRIGHT -->
            
        </div>
        <!-- /MAINPART -->
        
    </div>

    <!-- MAGIC CURSOR -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- /MAGIC CURSOR -->
</div>
<!-- / WRAPPER ALL -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    var typed = new Typed('.auto-type' , {
        strings : [
        "Certified Software Engineer",
        "Full Stack Web Developer",
        "Passionate Graphics Designer",
        "Professional Business Analyst",
        "Data Science and Machine Learning Expert",
        "Software Architecture",
        "Team Dedicated Software Developer"
        ],
        typeSpeed : 80,
        backSpeed : 20,
        loop : true
    });
</script>
@endsection