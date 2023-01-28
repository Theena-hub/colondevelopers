<!DOCTYPE html>
<html lang="en">
<?php include("head.php")?>
<body id="web-page" style="font-family: Roboto;">
    <!--Navbar Section Start-->
    <?php include("nav.php")?>
    <!--Navbar Section End--> 
    <!-- Banner Section - Start -->
    <style>
        @media (min-width:768px) {
            .web-banner .hero .left .inner{
                padding-left:calc(((var(--web_cont_wid) - 720px) / 2) + 6px);
            }
        }
        @media (min-width:992px) {
            .web-banner .hero .left .inner{
                padding-left:calc(((var(--web_cont_wid) - 960px) / 2) + 6px);
            }
        }
        @media (min-width:1200px) {
            .web-banner .hero .left .inner{
                padding-left:calc(((var(--web_cont_wid) - 1140px) / 2) + 6px);
            }
        }
        @media (min-width:1400px) {
            .web-banner .hero .left .inner{
                padding-left:calc(((var(--web_cont_wid) - 1320px) / 2) + 6px);
            }
        }
    </style>
    <div class="container-fluid web-banner" id="web_hero">
        <script>
            var web_crt_wid=document.getElementById("web_hero").offsetWidth;
            // alert(web_crt_wid);
            document.documentElement.style.setProperty('--web_cont_wid', web_crt_wid+'px');
        </script>
        <div class="hero">
            <div class="row">
                <div class="col-md-6 left" > 
                    <div class="inner">               
                        <p class="title">A better way to build your website</p>
                        <p class="description">Wanna create a website at an affordable price in Chennai? Hunt no further. Drop your mail id, and we’ll get back to you.</p>
                        <input class="btn" type="button" value="Get a Proposal" name="">
                    </div>
                </div>
                <div class="col-md-6 right">
                    <img class="banner_image" src="assets/img/website-page/web-banner.svg" alt="image">
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section - End -->
    <!-- Web-Common-tech - Start -->
    <div class="container-fluid web-common-tech">
        <p class="title">Wanna know the technologies we work with?</p>
        <p class="sub-title">Pick any technology you want your application to be built on and  we will provide the best android app developer in Chennai to you.</p>
        <div class="container inner">
            <div class="one">
                <div class="tech text-center">
                    <img class="tech-img" src="assets/img/website-page/html-css.svg" alt="image">
                    <p class="tech-title">HTML,CSS</p>
                </div>
                <div class="tech text-center">
                    <img class="tech-img" src="assets/img/website-page/bootstarp.svg" alt="image">
                    <p class="tech-title">Bootstarp</p>
                </div>
                <div class="tech text-center">
                    <img class="tech-img" src="assets/img/website-page/wordpress.svg" alt="image">
                    <p class="tech-title">Wordpress</p>
                </div>
                <div class="tech text-center">
                    <img class="tech-img" src="assets/img/website-page/angular.svg" alt="image">
                    <p class="tech-title">Angular</p>
                </div>
            </div>
            <div class="two">
                <div class="tech text-center">
                    <img class="tech-img" src="assets/img/website-page/php.svg" alt="image">
                    <p class="tech-title">PHP</p> 
                </div>
                <div class="tech text-center">
                    <img class="tech-img" src="assets/img/website-page/node-js.svg" alt="image">
                    <p class="tech-title">Node JS</p> 
                </div>
                <div class="tech center-tech text-center">
                    <img class="tech-img" src="assets/img/website-page/react-js.svg" alt="image">
                    <p class="tech-title">React JS</p>
                </div>  
            </div>
        </div>   
    </div>
    <!-- Web-Common-tech - End -->
    <!-- Web-Service - Start -->
    <div class="container-fluid web-service">
        <div class="header text-center">
            <p class="title">Web Development Services</p>
            <p class="description">Scroll down to know the diverse web developing services we provide.</p>
        </div>
        <!-- <img class="pink_shadow_two" src="assets/img/pink_shadow_two.png" alt=""> -->
        <div class="container">
            <div class="owl-carousel owl-theme web-owl-carousel">   
                <div class="item carousel-item active" >
                    <div class="row">             
                        <div class="col-md-6">
                            <div class="left">
                                <img src="assets/img/gif1.gif" alt="image-1">
                            </div>
                        </div>
                        <div class="col-md-6 right">
                            <div class="inner">
                                <p class="title">Static Web Design</p>
                                <img src="assets/img/landing_page/line.svg" alt="line">
                                <p class="description">Wanna have a simple, sleek and elegant site to showcase what your business or you’re up to? Well, Static web design will be the right choice for you.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item carousel-item active" >
                    <div class="row">             
                        <div class="col-md-6">
                            <div class="left">
                                <img src="assets/img/gif2.gif" alt="image-1">
                            </div>
                        </div>
                        <div class="col-md-6 right">
                            <div class="inner">
                                <p class="title">CMS based Web Design</p>
                                <img src="assets/img/landing_page/line.svg" alt="line">
                                <p class="description">Worried you’ve no technical knowledge? Hmm, that's understandable but CMS based web design requires zero knowledge in maintaining or updating the content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item carousel-item active" >
                    <div class="row">             
                        <div class="col-md-6">
                            <div class="left">
                                <img src="assets/img/gif3.gif" alt="image-1">
                            </div>
                        </div>
                        <div class="col-md-6 right">
                            <div class="inner">
                                <p class="title">Dynamic Web Design</p>
                                <img src="assets/img/landing_page/line.svg" alt="line">
                                <p class="description">Don't you want your customers to believe how serious your business is? Dynamic web design with complete control over the content has to be your choice.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item carousel-item active" >
                    <div class="row">             
                        <div class="col-md-6">
                            <div class="left">
                                <img src="assets/img/gif4.gif" alt="image-1">
                            </div>
                        </div>
                        <div class="col-md-6 right">
                            <div class="inner">
                                <p class="title">Customized Web Application Development</p>
                                <img src="assets/img/landing_page/line.svg" alt="line">
                                <p class="description">Need to tweak your web design under your business requirements? Try a customized web application that comes with low maintenance and is easily scalable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Web-Service - End -->
    <!-- Cool UI/UX - Start -->
    <div class="container-fluid cool-ui-ux">
        <div class="header text-center">
            <p class="title">Why redesign your website?</p>
            <p class="description">Many startups and established companies are frequently in search of "the best web developers." Reason? Revamping a site will surpass its competitors.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 left">
                    <img src="assets/img/cool_ui_ux_gif.gif" class="cool_ui_ux_image" alt="image">
                </div>
                <div class="col-md-6 right">
                    <div style="position:relative">
                        <div class="inner">
                            <p class="title">Cool UI / UX</p>
                            <img class="pink_shadow" src="assets/img/pink_shadow.png" alt="shadow">
                            <p class="description">Our team of graphical wizards strives to craft well-designed user interface designs and thus make sure to enhance user experience. Our consumer-tailored interface will increase your customer engagement.</p>
                        </div sty>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Cool UI/UX - End -->
    <!-- Maintanance - Start -->
    <div class="container-fluid maintanance">   
        <div class="header text-center">
            <p class="title">Get to choose your flavor</p>
            <p class="description text-center">Do you want the layout to be determined on the user side or server-side? The content you post on your website is more like water - says, responsive design lovers. Reach maximum mobile users - says, adaptive design freaks. But we love to work on both.</p>
        </div>
        <div class="container outer">
            <div class="row">
                <div class="col-md-6 left">
                    <img src="assets/img/website-page/maintance.svg" alt="image">
                </div>
                <div class="col-md-6 right">
                    <div class="inner">
                        <p class="title">Website Maintenance Services</p>
                        <p class="description">From updating your website in relevance to the emerging technologies to managing your site, we provide complete website maintenance service in Chennai to all our customers. We strive to strengthen your SEO score and make sure you have a healthy website.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Maintanance End -->
    <!-- Image rotate - Start -->
    <div class="container-fluid rotate" style="padding: 0;">
        <img class="img-fluid" src="assets/img/rotation_image.svg" alt="image">
    </div>
    <!-- Image rotate - End -->
    <!--Footer Section Start-->
    <?php include("footer.php")?>
    <!--Footer Section End-->
    <?php include("script.php")?>
    <script>
        // Website-Page - Web-Dev- Service - Start
        var web_width=document.getElementById("web-page").offsetWidth;
        // alert(web_width);
        $('.web-owl-carousel').owlCarousel({
            autoplay:true,
            loop:true,
            margin:10,
            nav:true,
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            navText: ['<img class="" src="assets/img/web_carousel_nav_prev.svg">','<img class="" src="assets/img/web_carousel_nav_next.svg">'],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
        // Website-Page - Web-Dev- Service - End
    </script>
</body>
</html>