@extends('frontend.lib.layout')

@section('main-content')
    @include('frontend.lib.pre_loader');
<!-- WRAPPER ALL -->
<!--<div class="iknow_tm_all_wrap" data-magic-cursor="show" data-animation-in="rotateInDownLeft" data-animation-out="rotateOutDownLeft"> -->
<div class="iknow_tm_all_wrap" data-magic-cursor="show" data-animation-in="zoomIn" data-animation-out="zoomOut">


    <!-- MODALBOX -->
    <div class="iknow_tm_modalbox">
        <div class="box_inner">
            <div class="close">
                <a href="#"><img class="svg" src="{{ asset('frontend/img/svg/cancel.svg') }}" alt="" /></a>
            </div>
            <div class="description_wrap"></div>
        </div>
    </div>
    <!-- /MODALBOX -->

    <div class="iknow_tm_extra_demo_2">

        <span class="top_shape"></span>
        <span class="bottom_shape"></span>

        <div class="iknow_tm_fixed_background" data-img-url="{{ asset('frontend/img/hero/4.jpg') }}"></div>
        
        <!-- TOPBAR -->
        <div class="iknow_tm_topbar smaller onepage">
            <div class="topbar_inner">
                <div class="logo">
                    <a href="#"><img src="{{ asset('frontend/img/logo/dark.png') }}" alt="" /></a>
                </div>
                <div class="iknow_tm_button btn-outline">
                    <a href="{{ asset('storage/downloads/Curriculam_Vitae-SE_Ashikur.pdf') }}">Download CV</a>
                </div>
            </div>
        </div>
        <!-- /TOPBAR -->
        
        <!-- MOBILE MENU -->
        <div class="iknow_tm_mobile_menu">
            <div class="mobile_menu_inner">
                <div class="mobile_in">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('frontend/img/logo/dark.png') }}" alt="" /></a>
                    </div>
                    <div class="trigger">
                        <div class="hamburger hamburger--slider">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropdown_inner">
                    <ul class="anchor_nav">
                        <li class="current"><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#resume">Resume</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#testimonials">Testimonial</a></li>
                        <li><a href="#news">Blog</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /MOBILE MENU -->
        
        <!-- MAINPART -->
        <div class="iknow_tm_mainpart_new_2">
        
            <!-- SOCIAL -->
            <div class="social_list">
                <ul>
                    <li><a href="#"><img class="svg" src="{{ asset('frontend/img/svg/social/facebook-2.svg') }}" alt="" /></a></li>
                    <li><a href="#"><img class="svg" src="{{ asset('frontend/img/svg/social/twitter-2.svg') }}" alt="" /></a></li>
                    <li><a href="#"><img class="svg" src="{{ asset('frontend/img/svg/social/youtube-3.svg') }}" alt="" /></a></li>
                    <li><a href="#"><img class="svg" src="{{ asset('frontend/img/svg/social/instagram-2.svg') }}" alt="" /></a></li>
                </ul>
            </div>
            <!-- /SOCIAL -->
            
            <!-- MENU -->
            <div class="main_menu">
                <ul class="anchor_nav">
                    <li class="current">
                        <img class="svg" src="{{ asset('frontend/img/svg/squares.svg') }}" alt="" />
                        <span>Home</span>
                        <a class="iknow_tm_full_link" href="#home"></a>
                    </li>
                    <li>
                        <img class="svg" src="{{ asset('frontend/img/svg/archive.svg') }}" alt="" />
                        <span>About Me</span>
                        <a class="iknow_tm_full_link" href="#about"></a>
                    </li>
                    <li>
                        <img class="svg" src="{{ asset('frontend/img/svg/contacs.svg') }}" alt="" />
                        <span>Resume</span>
                        <a class="iknow_tm_full_link" href="#resume"></a>
                    </li>
                    <li>
                        <img class="svg" src="{{ asset('frontend/img/svg/briefcase.svg') }}" alt="" />
                        <span>Portfolio</span>
                        <a class="iknow_tm_full_link" href="#portfolio"></a>
                    </li>
                    <li>
                        <img class="svg" src="{{ asset('frontend/img/svg/gear.svg') }}" alt="" />
                        <span>Service</span>
                        <a class="iknow_tm_full_link" href="#service"></a>
                    </li>
                    <li>
                        <img class="svg" src="{{ asset('frontend/img/svg/message.svg') }}" alt="" />
                        <span>Testimonial</span>
                        <a class="iknow_tm_full_link" href="#testimonials"></a>
                    </li>
                    <li>
                        <img class="svg" src="{{ asset('frontend/img/svg/writing.svg') }}" alt="" />
                        <span>Blog</span>
                        <a class="iknow_tm_full_link" href="#news"></a>
                    </li>
                    <li>
                        <img class="svg" src="{{ asset('frontend/img/svg/letter.svg') }}" alt="" />
                        <span>Contact</span>
                        <a class="iknow_tm_full_link" href="#contact"></a>
                    </li>
                </ul>
            </div>
            <!-- /MENU -->
                            
            <!-- HERO -->
            <div class="iknow_tm_hero_fifth" id="home">
                <div class="background">
                    <div class="image" data-img-url="{{ asset('frontend/img/hero/10.jpg') }}"></div>
                    <div class="overlay"></div>
                </div>
                <div class="content">
                    <div class="avatar">
                        <div class="main" data-img-url="{{ asset('frontend/img/hero/11.jpg') }}"></div>
                    </div>
                    <div class="details">
                        <span class="hello">Hello, I'm</span>
                        <h3 class="name">Ashikur Rahaman</h3>
                        <p class="text"><span class="auto-type"></span></p>
                        <img class="sign" src="img/hero/sign.png" alt="" />
                    </div>
                </div>
            </div>
            <!-- /HERO -->

            <!-- ABOUT -->
            <div class="iknow_tm_section_new" id="about">
                <div class="iknow_tm_about">
                    <div class="left">
                        <div class="left_inner">
                            <div class="image">
                                <img src="img/thumbs/35-44.jpg" alt="" />
                                <div class="main"  data-img-url="{{ asset('frontend/img/hero/13.jpg') }}"></div>
                            </div>
                            <div class="details">
                                <ul>
                                    <li>
                                        <h3>Name</h3>
                                        <span>Ashikur Rahaman</span>
                                    </li>
                                    <li>
                                        <h3>Designation</h3>
                                        <span>Software Engineer</span>
                                    </li>
                                    <li>
                                        <h3>Mail</h3>
                                        <span>ceo@webrelu.com</span>
                                    </li>
                                    <li>
                                        <h3>Phone</h3>
                                        <span>+880 1820829119</span>
                                    </li>
                                    <li>
                                        <h3>Address</h3>
                                        <span>Keraniganj, Dhaka</span>
                                    </li>
                                    <li>
                                        <h3>Nationality</h3>
                                        <span>Bangladeshi</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="iknow_tm_main_title">
                            <span>About Me</span>
                            <h3>Software Engineer</h3>
                        </div>
                        <div class="bigger_text">
                            <p>A Passionate UI/UX Designer and Full-Stack Web Developer based In Dhaka, BD</p>
                        </div>
                        <div class="text">
                            <p>Hi! My name is Ashikur Rahaman. I am capable to analyze your business and can provide anykind of possible iT service from my side, I'm very passionate and dedicated to my work. With 6+ years experience as a professional Project Lead, I have acquired the skills and knowledge necessary to make your dream project as success as you are looking for.</p>
                        </div>
                        <div class="iknow_tm_button">
                            <a href="{{ asset('storage/downloads/Curriculam_Vitae-SE_Ashikur.pdf') }}">Download CV</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /ABOUT -->

            <!-- RESUME -->
            <div class="iknow_tm_section_new" id="resume">
                <div class="iknow_tm_resume">
                    <div class="iknow_tm_main_title">
                        <span>Resume</span>
                        <h3>Combination of Skill &amp; Experience</h3>
                    </div>
                    <div class="resume_inner">
                        <div class="left">
                            <div class="info_list">
                                <div class="iknow_tm_resume_title">
                                    <h3>Education</h3>
                                    <span class="shape"></span>
                                </div>
                                <ul>
                                    <li>
                                        <div class="list_inner">
                                            <div class="short">
                                                <div class="job">
                                                    <h3>Cognitive Sciences</h3>
                                                    <span>University of Maine</span>
                                                </div>
                                                <div class="year">
                                                    <span>2018 - 2020</span>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <p>The goal of cognitive science is to understand the principles of intelligence with the hope that this will lead to better comprehension.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list_inner">
                                            <div class="short">
                                                <div class="job">
                                                    <h3>Civil Engineering</h3>
                                                    <span>University of Texas</span>
                                                </div>
                                                <div class="year">
                                                    <span>2016 - 2017</span>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <p>Civil engineering is arguably the oldest engineering discipline. It deals with the built environment and can be dated to the first time someone placed a roof.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list_inner">
                                            <div class="short">
                                                <div class="job">
                                                    <h3>Bachelor of Science</h3>
                                                    <span>Univercity of Dhaka</span>
                                                </div>
                                                <div class="year">
                                                    <span>2012 - 2015</span>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <p>This project is called a thesis and is usually presented in front of a group of people, including university professors who will evaluate it and let the student..</p>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                            <div class="info_list">
                                <div class="iknow_tm_resume_title">
                                    <h3>Experience</h3>
                                    <span class="shape"></span>
                                </div>
                                <ul>
                                    <li>
                                        <div class="list_inner">
                                            <div class="short">
                                                <div class="job">
                                                    <h3>UI/UX Designer</h3>
                                                    <span>Envato Market</span>
                                                </div>
                                                <div class="year">
                                                    <span>2018 - running</span>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <p>Web Developers are build a website’s core structure using coding languages, while designers are more visually creative and user-focused.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="list_inner">
                                            <div class="short">
                                                <div class="job">
                                                    <h3>Creative Designer</h3>
                                                    <span>Bahanno Digital</span>
                                                </div>
                                                <div class="year">
                                                    <span>2015 - 2017</span>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <p>Web Developers are build a website’s core structure using coding languages, while designers are more visually creative and user-focused.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="right">
                            <div class="skills_list">
                                <div class="iknow_tm_resume_title">
                                    <h3>Personal Skills</h3>
                                    <span class="shape"></span>
                                </div>
                                <div class="personal">
                                    <div class="dodo_progress">
                                        <div class="progress_inner" data-value="90">
                                            <span><span class="label">Time Management</span><span class="number">90%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                        <div class="progress_inner" data-value="70" >
                                            <span><span class="label">Effeciency</span><span class="number">70%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                        <div class="progress_inner" data-value="80">
                                            <span><span class="label">Intigrity</span><span class="number">80%</span></span>
                                            <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="skills_list">
                                <div class="iknow_tm_resume_title">
                                    <h3>Software Skills</h3>
                                    <span class="shape"></span>
                                </div>
                                <div class="software">
                                    <div class="circular_progress_bar">
                                        <ul>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="myCircle" data-value="0.8"></div>
                                                    <div class="title"><h3>Ms Office</h3></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="myCircle" data-value="0.75"></div>
                                                    <div class="title"><h3>Photoshop</h3></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="myCircle" data-value="0.9"></div>
                                                    <div class="title"><h3>Illustrator</h3></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="myCircle" data-value="0.65"></div>
                                                    <div class="title"><h3>Figma</h3></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /RESUME -->

            <!-- PORTFOLIO -->
            <div class="iknow_tm_section_new" id="portfolio">
                <div class="iknow_tm_portfolio">
                    <div class="iknow_tm_main_title">
                        <span>Resume</span>
                        <h3>My works that I did for clients</h3>
                    </div>
                    <div class="portfolio_filter">
                        <ul>
                            <li><a href="#" class="current" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".vimeo">Vimeo</a></li>
                            <li><a href="#" data-filter=".youtube">Youtube</a></li>
                            <li><a href="#" data-filter=".soundcloud">Soundcloud</a></li>
                            <li><a href="#" data-filter=".detail">Detail</a></li>
                        </ul>
                    </div>
                    <div class="portfolio_list">
                        <ul class="gallery_zoom">
                            <li class="vimeo">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend/img/thumbs/1-1.jpg') }}" alt="" />
                                        <div class="main" data-img-url="img/portfolio/1.jpg"></div>
                                    </div>
                                    <div class="overlay"></div>
                                    <img class="svg" src="{{ asset('frontend/img/svg/social/vimeo.svg') }}" alt="" />
                                    <div class="details">
                                        <span>Vimeo</span>
                                        <h3>Aumeo Audio</h3>
                                    </div>
                                    <a class="iknow_tm_full_link popup-vimeo" href="https://vimeo.com/337293658"></a>
                                </div>
                            </li>
                            <li class="youtube">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend/img/thumbs/1-1.jpg') }}" alt="" />
                                        <div class="main" data-img-url="img/portfolio/2.jpg"></div>
                                    </div>
                                    <div class="overlay"></div>
                                    <img class="svg" src="{{ asset('frontend/img/svg/social/youtube-2.svg') }}" alt="" />
                                    <div class="details">
                                        <span>Youtube</span>
                                        <h3>Bicker &amp; Jenna</h3>
                                    </div>
                                    <a class="iknow_tm_full_link popup-youtube" href="https://www.youtube.com/watch?v=7e90gBu4pas"></a>
                                </div>
                            </li>
                            <li class="soundcloud">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend/img/thumbs/1-1.jpg') }}" alt="" />
                                        <div class="main" data-img-url="{{ asset('frontend/img/portfolio/3.jpg') }}"></div>
                                    </div>
                                    <div class="overlay"></div>
                                    <img class="svg" src="{{ asset('frontend/img/svg/social/soundcloud.svg') }}" alt="" />
                                    <div class="details">
                                        <span>Soundcloud</span>
                                        <h3>Botanical Escape</h3>
                                    </div>
                                    <a class="iknow_tm_full_link soundcloude_link mfp-iframe audio" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/471954807&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></a>
                                </div>
                            </li>

                            <li class="youtube">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend/img/thumbs/1-1.jpg') }}" alt="" />
                                        <div class="main" data-img-url="{{ asset('frontend/img/portfolio/6.jpg') }}"></div>
                                    </div>
                                    <div class="overlay"></div>
                                    <img class="svg" src="{{ asset('frontend/img/svg/social/youtube-2.svg') }}" alt="" />
                                    <div class="details">
                                        <span>Youtube</span>
                                        <h3>Model Car</h3>
                                    </div>
                                    <a class="iknow_tm_full_link popup-youtube" href="https://www.youtube.com/watch?v=l-epKcOA7RQ"></a>
                                </div>
                            </li>
                            <li class="vimeo">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="img/thumbs/1-1.jpg" alt="" />
                                        <div class="main" data-img-url="{{ asset('frontend/img/portfolio/7.jpg') }}"></div>
                                    </div>
                                    <div class="overlay"></div>
                                    <img class="svg" src="{{ asset('frontend/img/svg/social/vimeo.svg') }}" alt="" />
                                    <div class="details">
                                        <span>Vimeo</span>
                                        <h3>Smart Watch</h3>
                                    </div>
                                    <a class="iknow_tm_full_link popup-vimeo" href="https://vimeo.com/337292310"></a>
                                </div>
                            </li>
                            <li class="detail">
                                <div class="list_inner">
                                    <div class="image">
                                        <img src="{{ asset('frontend/img/thumbs/1-1.jpg') }}" alt="" />
                                        <div class="main" data-img-url="{{ asset('frontend/img/portfolio/8.jpg') }}"></div>
                                    </div>
                                    <div class="overlay"></div>
                                    <img class="svg" src="{{ asset('frontend/img/svg/text.svg') }}" alt="" />
                                    <div class="details">
                                        <span>Detail</span>
                                        <h3>Teresa Melbig</h3>
                                    </div>
                                    <a class="iknow_tm_full_link portfolio_popup" href="#"></a>

                                    <div class="hidden_content">
                                        <div class="popup_details">
                                            <div class="main_details">
                                                <div class="textbox">
                                                    <p>We live in a world where we need to move quickly and iterate on our ideas as flexibly as possible. Building mockups strikes the ideal balance ease of modification.</p>
                                                    <p>Mockups are useful both for the creative phase of the project - for instance when you're trying to figure out your user flows or the proper visual hierarchy - and the production phase when they will represent the target product.</p>
                                                </div>
                                                <div class="detailbox">
                                                    <ul>
                                                        <li>
                                                            <span class="first">Client</span>
                                                            <span>Alvaro Morata</span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Category</span>
                                                            <span><a href="#">Detail</a></span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Date</span>
                                                            <span>March 07, 2021</span>
                                                        </li>
                                                        <li>
                                                            <span class="first">Share</span>
                                                            <ul class="share">
                                                                <li><a href="#"><img class="svg" src="{{ asset('frontend/img/svg/social/facebook.svg') }}" alt="" /></a></li>
                                                                <li><a href="#"><img class="svg" src="{{ asset('frontend/img/svg/social/twitter.svg') }}" alt="" /></a></li>
                                                                {{-- <li><a href="#"><img class="svg" src="{{ asset('frontend/img/svg/social/instagram.svg') }}" alt="" /></a> --}}
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="additional_images">
                                                <ul>
                                                    <li>
                                                        <div class="list_inner">
                                                            <div class="my_image">
                                                                <img src="{{ asset('frontend/img/thumbs/4-2.jpg') }}" alt="" />
                                                                <div class="main" data-img-url="{{ asset('frontend/img/portfolio/1.jpg') }}"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list_inner">
                                                            <div class="my_image">
                                                                <img src="{{ asset('frontend/') }}img/thumbs/4-2.jpg" alt="" />
                                                                <div class="main" data-img-url="{{ asset('frontend/img/portfolio/2.jpg') }}"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="list_inner">
                                                            <div class="my_image">
                                                                <img src="{{ asset('frontend/') }}img/thumbs/4-2.jpg" alt="" />
                                                                <div class="main" data-img-url="{{ asset('frontend/img/portfolio/3.jpg') }}"></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- /PORTFOLIO -->

            <!-- SERVICES -->
            <div class="iknow_tm_section_new" id="service">
                <div class="iknow_tm_services">
                    <div class="iknow_tm_main_title">
                        <span>Service</span>
                        <h3>Never compromise with quality</h3>
                    </div>
                    <div class="service_list">
                        <ul>
                            <li>
                                <div class="list_inner">
                                    <span class="icon"><img class="svg" src="{{ asset('frontend/img/svg/squares.svg') }}" alt="" /></span>
                                    <h3 class="title">Wireframing</h3>
                                    <p class="text">Web development is the building and maintenance of websites. it’s the work that...</p>
                                    <a class="iknow_tm_full_link" href="#"></a>
                                    <div class="hidden_content">
                                        <div class="service_informations">
                                            <div class="image">
                                                <img src="img/thumbs/4-2.jpg" alt="" />
                                                <div class="main" data-img-url="{{ asset('frontend/img/service/1.jpg') }}"></div>
                                            </div>
                                            <div class="description">
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
                                    <span class="icon"><img class="svg" src="{{ asset('frontend/img/svg/physics.svg') }}" alt="" /></span>
                                    <h3 class="title">Prototype</h3>
                                    <p class="text">Web development is the building and maintenance of websites. it’s the work that...</p>
                                    <a class="iknow_tm_full_link" href="#"></a>
                                    <div class="hidden_content">
                                        <div class="service_informations">
                                            <div class="image">
                                                <img src="img/thumbs/4-2.jpg" alt="" />
                                                <div class="main" data-img-url="{{ asset('frontend/img/service/2.jpg') }}"></div>
                                            </div>
                                            <div class="description">
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
                                    <span class="icon"><img class="svg" src="{{ asset('frontend/img/svg/web.svg') }}" alt="" /></span>
                                    <h3 class="title">UI Design</h3>
                                    <p class="text">Web development is the building and maintenance of websites. it’s the work that...</p>
                                    <a class="iknow_tm_full_link" href="#"></a>
                                    <div class="hidden_content">
                                        <div class="service_informations">
                                            <div class="image">
                                                <img src="img/thumbs/4-2.jpg" alt="" />
                                                <div class="main" data-img-url="{{ asset('frontend/img/service/3.jpg') }}"></div>
                                            </div>
                                            <div class="description">
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
                                    <span class="icon"><img class="svg" src="{{ asset('frontend/img/svg/user.svg') }}" alt="" /></span>
                                    <h3 class="title">Personal Creation</h3>
                                    <p class="text">Web development is the building and maintenance of websites. it’s the work that...</p>
                                    <a class="iknow_tm_full_link" href="#"></a>
                                    <div class="hidden_content">
                                        <div class="service_informations">
                                            <div class="image">
                                                <img src="img/thumbs/4-2.jpg" alt="" />
                                                <div class="main" data-img-url="{{ asset('frontend/img/service/4.jpg') }}"></div>
                                            </div>
                                            <div class="description">
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
                                    <span class="icon"><img class="svg" src="{{ asset('frontend/img/svg/briefcase.svg') }}" alt="" /></span>
                                    <h3 class="title">Case Study</h3>
                                    <p class="text">Web development is the building and maintenance of websites. it’s the work that...</p>
                                    <a class="iknow_tm_full_link" href="#"></a>
                                    <div class="hidden_content">
                                        <div class="service_informations">
                                            <div class="image">
                                                <img src="img/thumbs/4-2.jpg" alt="" />
                                                <div class="main" data-img-url="{{ asset('frontend/img/service/5.jpg') }}"></div>
                                            </div>
                                            <div class="description">
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
                                    <span class="icon"><img class="svg" src="{{ asset('frontend/img/svg/writing_2.svg') }}" alt="" /></span>
                                    <h3 class="title">Experience Design</h3>
                                    <p class="text">Web development is the building and maintenance of websites. it’s the work that...</p>
                                    <a class="iknow_tm_full_link" href="#"></a>
                                    <div class="hidden_content">
                                        <div class="service_informations">
                                            <div class="image">
                                                <img src="img/thumbs/4-2.jpg" alt="" />
                                                <div class="main" data-img-url="{{ asset('frontend/img/service/6.jpg') }}"></div>
                                            </div>
                                            <div class="description">
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
            <!-- /SERVICES -->

            <!-- TESTIMONIALS -->
            <div class="iknow_tm_section_new" id="testimonials">
                <div class="iknow_tm_testimonials">
                    <div class="iknow_tm_main_title">
                        <span>Testimonials</span>
                        <h3>What people say about me</h3>
                    </div>
                    <div class="testimonials_list owl-carousel owl-theme">
                        <div class="list_inner">
                            <div class="in">
                                <div class="text">
                                    <p>These people really know what they are doing! Great customer support availability and supperb kindness. I am very happy that I've purchased this liscense!!!</p>
                                </div>
                                <div class="details">
                                    <div class="left">
                                        <div class="avatar">
                                            <div class="main" data-img-url="{{ asset('frontend/img/testimonials/1.jpg') }}"></div>
                                        </div>
                                        <div class="info">
                                            <h3>Jecob Oramson</h3>
                                            <span>Designer</span>
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
                                    <p>The design is elegant. The customer support on this product is also amazing. I would highly recommend you to purchase templates from the Marketify team!</p>
                                </div>
                                <div class="details">
                                    <div class="left">
                                        <div class="avatar">
                                            <div class="main" data-img-url="{{ asset('frontend/img/testimonials/2.jpg') }}"></div>
                                        </div>
                                        <div class="info">
                                            <h3>Kerry Hudson</h3>
                                            <span>IBO. Corp</span>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <img class="svg" src="img/svg/left-quote.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list_inner">
                            <div class="in">
                                <div class="text">
                                    <p>Not only was customer support very fast, but the design is very professional. Will definitely be looking for new products in the future from this author.</p>
                                </div>
                                <div class="details">
                                    <div class="left">
                                        <div class="avatar">
                                            <div class="main" data-img-url="{{ asset('frontend/img/testimonials/3.jpg') }}"></div>
                                        </div>
                                        <div class="info">
                                            <h3>Albert Walker</h3>
                                            <span>Singer</span>
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
                                <p>The Author had done a great job, it's clean and easy to understand the code. Comment blocks made it really easy to read the code.</p>
                            </div>
                            <div class="details">
                                <div class="left">
                                    <div class="avatar">
                                        <div class="main" data-img-url="{{ asset('frontend/img/testimonials/4.jpg') }}"></div>
                                    </div>
                                    <div class="info">
                                        <h3>Arnold Hookins</h3>
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
                                <p>I can't believe I got support and my problem resolved in minutes from posting my question. Simply amazing team and amazing theme! Thank you!</p>
                            </div>
                            <div class="details">
                                <div class="left">
                                    <div class="avatar">
                                        <div class="main" data-img-url="{{ asset('frontend/img/testimonials/5.jpg') }}"></div>
                                    </div>
                                    <div class="info">
                                        <h3>Aura Brooklyn</h3>
                                        <span>Fashion Model</span>
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

        <!-- NEWS -->
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
        <!-- /NEWS -->

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
                                        <span>+123 456 7890</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <span class="icon"><img class="svg" src="{{ asset('frontend/img/svg/letter.svg') }}" alt="" /></span>
                                    <div class="short">
                                        <h3>Email Us</h3>
                                        <span><a href="#">hello@iknow.com</a></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="list_inner">
                                    <span class="icon"><img class="svg" src="{{ asset('frontend/img/svg/placeholder.svg') }}" alt="" /></span>
                                    <div class="short">
                                        <h3>Address</h3>
                                        <span>20, Bardeshi, Amin Bazar</span>
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
                                    <a id="send_message" href="#">Submit Now</a>
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
                    <p>Designed with love &copy; <a href="https://freelancer.com/u/rexbdsoft.html" target="_blank">RexBDsoft</a></p>
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
    <audio id="audio1"><source src="audio/1.mp3"></audio>
    <audio id="audio2"><source src="audio/2.mp3"></audio>

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
        "Data Science and Machine Learning Expert"
        ],
        typeSpeed : 90,
        backSpeed : 20,
        loop : true
    });
</script>
@endsection