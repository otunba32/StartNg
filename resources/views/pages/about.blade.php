<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <title>Start NG | About</title>

    <style>

        a.nav-link:hover {
          color: #2DCE89;
        }
        /* Style for Navbar Starts */
        .navbar-custom li a {
            color: #000;
        }
        .btn-success {
            background-color: #2DCE89;
            color: #fff;
            border: thin solid #2dce89;
        }
        /* .btn-success:hover {
            background-color: rgb(2, 20, 12);
            color: #fff;
            border: thin solid rgb(2, 20, 12);
        } */
        .btn-primary:hover {
            background-color: var(--primary-color);
            opacity: 0.85;
        }
        .btn-secondary {
        background-color: #3A0842;
        border-color: #3A0842;
        color: #fff !important;
        cursor: pointer;
        }
        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0,0,0, 0.7)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
        .custom-toggler.navbar-toggler {
            border-color: #000;
        }
        /* Style for Navbar Ends */
        /* Style for Footer Starts */
        * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        }
        a {
        text-decoration: none;
        }
        .deep {
        background: #3A0842;
        color: #fff;
        }
        .deep #slink {
        background: #44CF6C;
        border-radius: 10px;
        color: white;
        padding: 10px 70px;
        }
        .deep li a {
        text-decoration: none;
        color: #fff;
        font-size: 16px;
        line-height: 30px;
        }
        .deep li {
        list-style: none;
        }
        .deep li a:hover {
        text-decoration: none;
        }
        a:hover {
        text-decoration: none;
        }
        .icons i {
        font-size: 26px;
        height: 50px;
        width: 50px;
        padding: 10px 20px;
        color: white;
        }
        .icons i.fa.fa-twitter:hover {
        color: #00aced;
        }
        .icons i.fa.fa-facebook:hover {
        color: #3b5598;
        }
        .icons i.fa.fa-instagram:hover {
        color: #ed3833;
        }
        /* Style for Footer Ends */
        /* Body Style */
        .banner {
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570915217/startng/Rectangle_7_ak5zc2.png');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .loren-ipsum {
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570916337/startng/Rectangle_10_pwiqsf.png');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .priviledge {
            background-color: #FCFCFC;
        }

        .started {
            background-color: #FCFCFC;
        }

        .global-reach {
            background-image: url('https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570920182/startng/Rectangle_57_xdcvbs.png');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        /* Slick style */
        .slick-initialized .slick-slide {
            /* margin: 8px !important; */
        }
        .slick-active {
            transition: 0.2s;
            box-shadow: none !important;
            transform: scale(0.9);
        }
        .slick-active + .slick-active {
            transition: 0.2s;
            transform: scale(1);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important;
        }
        .slick-active + .slick-active + .slick-active {
            transition: 0.2s;
            box-shadow: none !important;
            transform: scale(0.9);
        }
        .slick-active + .slick-active .card{
            transition: 0.2s;
            transform: scale(1);
        }
        .slick-arrow-first, .slick-arrow-second{
            background-color: #3A0842 !important;
            color: #fff !important;
        }
        .slick-arrow-first{
            position: absolute;
            z-index: 1000;
            top: 50%;
            right: -30px;
        }
        .slick-arrow-second{
            position: absolute;
            z-index: 1000;
            top: 50%;
            left: -30px;
        }
                /* Vidoe style */
        .videoWrapper {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 */
            padding-top: 25px;
            height: 0;
        }
        .videoWrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        /* Body Style Ends */
        .footer-top {
            background-color: #3A0842;
            color: #fff;
        }

        .footer-top li {
            list-style-type: none;
        }

        .footer-link {
            color: #fff;
            text-decoration: none;
            font-size: 1em;
        }

        .footer-link:hover {
            color: #2DCE89;
            text-decoration: none;
        }

        .footer-social {
            background-color: #2E0435;
            color: #fff;
        }
    </style>
</head>

<body>
@include('inc.navbar')

    <div class="container-fluid banner pt-5 pb-5">
        <div class="col-md-6 offset-md-3 text-center pt-5 pb-5 mb-5">
            <p class="pb-5 mb-5 lead font-weight-light" style="color: #3A0842;">A platform for learning programming <br> where anyone, anywhere
                in the world <br> can join and become
                <br> a better programmer
            </p>
        </div>
    </div>

    <div class="container-fluid pt-5 mt-5 mb-5 pb-5">
        <div class="row align-items-center">
            <div class="col-md-6 pb-5">

                <h4 class="pl-5" style="color: #7F5A83;">Courses</h4>
                <p class="pl-5">Interns are able to select from the number of courses we offer:<br> Complete quide. <br>100% Online. Flexible Online Learning and Earn a Course Certificate</p>
                <ul class="pl-5 ml-3" style="color: #44CF6C;">
                    <li>Machine Learning</li>
                    <li>Digital Marketing</li>
                    <li>Front End development</li>
                    <li>Back end Development</li>

                </ul>
                     @if(Auth::guest())
                 <a class="btn btn-success ml-5 pl-5 pr-5" href="{{route('register')}}">Start Learning</a>
                @else
                 <a class="btn btn-success ml-5 pl-5 pr-5" href="{{route('dashboard')}}">Start Learning</a>
                  @endif
            </div>
            <div class="col-md-6">
                <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570915745/startng/Rectangle_9_w0iucz.png"
                    class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container-fluid loren-ipsum pt-5 pb-5">
        <div class="col-md-6 offset-md-3 text-center">
            <p style="color: #fff;"> You can have access to our free courses in Web Development, Machine Learning, and Digital Marketing. We have also made available paid courses that would give maximum and intense information about any course you will be interested in and you will have the opportunity to get your hands on enough practicals and projects of which at the end of the course, certificates will be issued.</p>
        </div>
        <div class="col-md-4 offset-md-4">
            <div class="row">
                <div class="col-6 text-center">
                    <a href="https://www.youtube.com/channel/UCTmmCTH_jUmaXIMqHZK648A" class="btn btn-success pr-5 pl-5">Free Courses</a>
                </div>
                <div class="col-6 text-center">
                    <a href="{{route('course.index')}}" class="btn btn-success pr-5 pl-5">Paid Courses</a>
                </div>
            </div>
        </div>
    </div>




 <section class="sliding-content py-5">
     <h2 class="text-center">Testimonials</h2>
        <div class="container">
            <div class="our-students my-4 py-4 mx-4">
                <div>
                    <div class="card rounded-0">
                        <div class="card-header" style="height: 110px; background-color: #3A0842;">
                            <div class="" style="overflow:hidden; height:100px; width:100px; border-radius:50%; margin: 50px auto;">
                                <img class="img-fluid"  width="120" height="auto" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/b_rgb:ffffff,bo_7px_solid_rgb:ffffff,q_97,r_29/v1571318326/startng/icons8-user-80_espeij.png" alt='Agent picture' />
                            </div>
                        </div>
                        <div class="card-body mt-5">
                            <h5 class="card-title" style="color: #3A0842;">@Message: Moses Obanega</h5>
                            <p class="card-text">Managing tasks and having to deliver meeting up with deadlines in a few days under pressure is not a big deal anymore. I say a big thank you to the organizers of the HNG program and the sponsors.</p>
                            <p class="card-text ">Course: <small class="font-style-bold" style="color: #3A0842 !important;">Front End Track |From Imo State</small></p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card rounded-0">
                        <div class="card-header" style="height: 110px; background-color: #44CF6C;">
                            <div class="" style="overflow:hidden; height:100px; width:100px; border-radius:50%; margin: 50px auto;">
                                <img class="img-fluid"  width="120" height="auto" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/b_rgb:ffffff,bo_7px_solid_rgb:ffffff,q_97,r_29/v1571318326/startng/icons8-user-80_espeij.png" alt='Agent picture' />
                            </div>
                        </div>
                        <div class="card-body mt-5">

                            <h5 class="card-title" style="color: #3A0842;">@Message: Ibrahim Adamu</h5>
                            <p class="card-text">One of the many things learned during the HNG program is collaborating with people online effectively. And I won't forget to commend the efforts of the mentors who we could reach out to when we are faced with some big problems. Lol.</p>
                            <p class="card-text ">Course: <small class="font-style-bold" style="color: #3A0842 !important;">Machine Learning Track | From Kano</small></p>

                        </div>
                    </div>
                </div>
                <div>
                    <div class="card rounded-0">
                        <div class="card-header" style="height: 110px; background-color: #3A0842;">
                            <div class="" style="overflow:hidden; height:100px; width:100px; border-radius:50%; margin: 50px auto;">

                                <img class="img-fluid"  width="120" height="auto" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/b_rgb:ffffff,bo_7px_solid_rgb:ffffff,q_97,r_29/v1571318326/startng/icons8-user-80_espeij.png" alt='Agent picture' />
                            </div>
                        </div>
                        <div class="card-body mt-5">
                            <h5 class="card-title" style="color: #3A0842;">@Message: Sydney Collins</h5>
                            <p class="card-text">I came into HNG with zero knowledge in programming and I'll be leaving with so much knowledge acquired in programming, now I can be called a front end web developer. Thanks to HNG.</p>
                            <p class="card-text ">Course: <small class="font-style-bold" style="color: #3A0842 !important;">Front End track | From Cameroon</small></p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card rounded-0">
                        <div class="card-header" style="height: 110px; background-color:#44CF6C;">
                            <div class="" style="overflow:hidden; height:100px; width:100px; border-radius:50%; margin: 50px auto;">
                                <img class="img-fluid"  width="120" height="auto" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/b_rgb:ffffff,bo_7px_solid_rgb:ffffff,q_97,r_29/v1571318326/startng/icons8-user-80_espeij.png" alt='Agent picture' />
                            </div>
                        </div>
                        <div class="card-body mt-5">

                           <h5 class="card-title" style="color: #3A0842;">@Message: Ibrahim Adamu</h5>
                            <p class="card-text">One of the many things learned during the HNG program is collaborating with people online effectively. And I won't forget to commend the efforts of the mentors who we could reach out to when we are faced with some big problems. Lol.</p>
                            <p class="card-text ">Course: <small class="font-style-bold" style="color: #3A0842 !important;">Machine Learning Track | From Kano</small></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid priviledge pt-5 pb-5">
        <div class="col-md-6 offset-md-3 text-center">
            <p style="color: #3A0842;">On Start.ng, you are privileged to</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row mt-5 pt-3">
                    <div class="col-2">
                        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570918022/startng/Group_412_furoek.png" class="img-fluid ml-md-2 pl-md-2">
                    </div>
                    <div class="col-9">
                        <p style="color: #3A0842">Learn from the Best Teachers</p>
                        <p>
                            We hire Tutors with 100% knowledge on each track. Interns are provided best and appropriate advice from tutors based on their experiences.
                        </p>
                    </div>
                </div>


            </div>

            <div class="col-md-6">
                <div class="row mt-5 pt-3">
                    <div class="col-2">
                        <img src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1570918022/startng/Group_414_pycdu8.png" class="img-fluid ml-md-2 pl-md-2">
                    </div>
                    <div class="col-9">
                        <p style="color: #3A0842">Join Online Developer Community</p>
                        <p>
                            A 24-hour functioning online community is made available for interns to learn from each other and communicate with senior developers. They also would not miss out on important information about events and meetups.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="row mt-5 pt-3">
                    <div class="col-2">
                        <img src="https://res.cloudinary.com/adetohun/image/upload/v1572495398/Group_300.png" class="img-fluid ml-md-2 pl-md-2">
                    </div>
                    <div class="col-9">
                        <p style="color: #3A0842">Get Academic and Technical Support</p>
                        <p>
                            Interns are exposed to updated usage of some technologies and effective training on their usage is provided.
                        </p>
                    </div>
                </div>



            </div>
            <div class="col-md-6">
                <div class="row mt-5 pt-3">
                    <div class="col-2">
                        <img src="https://res.cloudinary.com/adetohun/image/upload/v1572495398/Group_306.png" class="img-fluid ml-md-2 pl-md-2">
                    </div>
                    <div class="col-9">
                        <p style="color: #3A0842">Earn a Certifcate</p>
                        <p>
                            Interns are eligible for a certificate if only they get to a certain stage of the internship.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <section class="">
    <div class="container-fluid pt-5 pb-5">
        <div class="col-md-6 offset-md-3 text-center">
            <p style="color: #3A0842;">Hi</p>
            <p style="color: #3A0842;">Do you know you can Enrol for</p>
            <p style="color: #3A0842; font-weight: bold;">FREE COMPLETE BEGINNER SOFTWARE DEVELOPMENT TRAINING</p>
                 @if(Auth::guest())
                 <div class="text-center">
                 <a class="btn btn-success  pl-5 pr-5" href="{{route('register')}}">Start Learning</a>
                @else
                 <a class="btn btn-success pl-5 pr-5" href="{{route('dashboard')}}">Start Learning</a>
                  @endif
                 </div>
        </div>
    </div>
</section>
    <section class="">
        <div class="container-fluid started">
            <div class="row align-items-center">
                <div class="col-md-6 pb-2 mt-0 pt-0">
                    <div class="videoWrapper">
                        <iframe
                            width="100%"
                            height="380"
                            src="https://www.youtube.com/embed/DYaq2sWTWAA"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            <div class="col-md-6 text-center pb-2">
                <h4 class="mt-4" style="color: #7F5A83; font-weight: bold;">How It All Started</h4>
                <p>
                    Start.ng started as a leading online learning platform for programming courses nationwide and
                across Africa and the world. Our goal is to eradicate illetracy across Africa, equipping each students
                with knowledge and character needed to excel anywhere
                in the world.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid global-reach pt-5 pb-5">
        <div class="col-md-6 offset-md-3 text-center pt-5">
            <h4 class="pb-3">Our Global Reach</h4>
            <p class="pb-5">Start.ng is the leading online learning platform for programming courses nationwide and
                across Africa and the world. Our goal is to eradicate illetracy across Africa, equipping each students
                with knowledge and character needed to excel anywhere
                in the world.</p>
            <p class="pb-3">Most Sought after Programming Skills </p>
            <p class="pb-3">Experienced Qualified Teachers</p>
            <p class="pb-3">Access to the Largest Online Developer Community</p>
            <a href="/" class="btn btn-secondary pl-5 pr-5 mb-3"
               style="background-color: #3A0842; border: thin solid #3A0842; cursor: pointer;">Explore Start.ng</a>
        </div>
    </div>
    <!-- Footer -->
    <footer>
        <div class="container-fluid footer-top col-lg-12">
            <div class="container col-md-12 p-5">
                <img class="img-fluid" src="https://res.cloudinary.com/sgnolebagabriel/image/upload/v1572346080/startng/Logo_2_ee1iqv.png">
                <div class="row">
                @if(Auth::guest())
                    <div class="col-md-4 mt-4">

                        <h4 class="">Ready to take the leap?</h4>
                        <a class="btn btn-success mt-3 pl-5 pr-5"  href="{{route('register')}}">Start</a>
                    </div>
                @else
                     <div class="col-md-4 mt-4">

                         <a class="btn btn-success mt-3 pl-5 pr-5"  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                         </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                    </div>
                @endif
                    <div class="col-md-2 mt-4">

                        <li><a class="footer-link" href="{{route('about')}}">About Us</a></li>
                        <li><a class="footer-link" href="{{route('course.index')}}">Our Course</a></li>
                        <li><a class="footer-link" href="{{route('hire')}}">Hire a Grad</a></li>

                    </div>
                    <div class="col-md-2 mt-4">

                        <li>
                            <a class="footer-link" href="{{route('curriculum')}}">Curriculum</a>
                        </li>
                        <li>
                            <a class="footer-link" href="http://lucid.blog/startng">Blog</a>
                        </li>

                    </div>
                    <div class="col-md-2 mt-4">
                        <li>
                            <a class="footer-link" href="{{route('find-course')}}">Find a Course</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{route('faq')}}">FAQ</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{route('contact')}}">Contact Us</a>
                        </li>
                    </div>
                    <div class="col-md-2 mt-4">
                        <li>
                            <a class="footer-link" href="{{route('terms')}}">Terms of Service</a>
                        </li>
                        <li>
                            <a class="footer-link" href="{{route('privacy')}}">Privacy Policy</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid footer-social col-lg-12">
            <div class="container p-3">
                <div class="clearfix">
                    <div class="float-left">

                    </div>
                    <div class="float-right">
                        <a href="https://twitter.com/hotelsng" class="text-white pl-2 pr-2" style="font-size: 1.5em;"><i
                                class="fab fa-twitter"></i></a>
                        <!-- <a href="" class="text-white pl-2 pr-2" style="font-size: 1.5em;"><i
                                class="fab fa-instagram"></i></a>
                        <a href="" class="text-white pl-2 pr-2" style="font-size: 1.5em;"><i
                                class="fab fa-facebook"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- End of Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
       <script type="text/javascript">
        // Find all YouTube videos
        var $allVideos = $("iframe[src^='//www.youtube.com']");
        // The element that is fluid width
        $fluidEl = $("body");
        // Figure out and save aspect ratio for each video
        $allVideos.each(function() {
            $(this)
            .data('aspectRatio', this.height / this.width)
            // and remove the hard coded width/height
            .removeAttr('height')
            .removeAttr('width');
        });
        // When the window is resized
        $(window).resize(function() {
            var newWidth = $fluidEl.width();
            // Resize all videos according to their own aspect ratio
            $allVideos.each(function() {
            var $el = $(this);
                $el
                .width(newWidth)
                .height(newWidth * $el.data('aspectRatio'));
            });
            // Kick off one resize to fix all videos on page load
        }).resize();
        $(document).ready(function(){
            $('.our-students').slick({
                centerMode: true,
                centerPadding: '0px',
                slidesToScroll: 1,
                slidesToShow: 3,
                autoplay: true,
                arrows: true,
                nextArrow: '<span class="slick-arrow-first text-white py-1 px-2 rounded-circle"><i class="fas fa-arrow-right"></i></span>',
                prevArrow: '<span class="slick-arrow-second text-white py-1 px-2 rounded-circle"><i class="fas fa-arrow-left"></i></span>',
                responsive: [{
                    breakpoint: 508,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '0',
                            slidesToShow: 1
                        }
                    },
                    {
                    breakpoint: 480,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '0',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>
