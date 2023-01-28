<!DOCTYPE html>
<html lang="en">
<?php include("head.php")?>
<body style="font-family: Roboto;">
    <!-- navbar - Start -->
    <?php include("nav.php")?>
    <!--Navbar Section End --> 
    <!-- Banner Section - Start -->
    <style>
        @media (min-width:768px) {
            .custom-software-banner .left .inner{
                padding-left:calc(((var(--cs_cont_wid) - 720px) / 2) + 12px);
            }
        }
        @media (min-width:992px) {
            .custom-software-banner .left .inner{
                padding-left:calc(((var(--cs_cont_wid) - 960px) / 2) + 12px);
            }
        }
        @media (min-width:1200px) {
            .custom-software-banner .left .inner{
                padding-left:calc(((var(--cs_cont_wid) - 1140px) / 2) + 12px);
            }
        }
        @media (min-width:1400px) {
            .custom-software-banner .left .inner{
                padding-left:calc(((var(--cs_cont_wid) - 1320px) / 2) + 12px);
            }
        }
    </style>
    <div class="container-fluid custom-software-banner" id="cs-hero">
        <script>
            var cs_crt_wid=document.getElementById("cs-hero").offsetWidth;
            document.documentElement.style.setProperty('--cs_cont_wid', cs_crt_wid+'px');
        </script>
        <!-- <div class="container"> -->
            <div class="row">
                <div class="col-md-6 left">
                    <div class="inner">
                        <p class="title text-white">A better way to build your website</p>
                        <p class="description text-white">Wanna create a website at an affordable price in Chennai? Hunt no further. Drop your mail id, and we’ll get back to you.</p>         
                        <button type="button" id="" class="button btn" name="">Get a Proposal</button>
                    </div>  
                </div>
                <div class="col-md-6 right">
                    <img src="assets/img/custom-software_page/custom-software-banner.svg" alt="img">
                </div>
            </div>
        <!-- </div> -->
    </div>
    <!-- Banner Section - End --> 
    <!-- Common-tech - Start -->
    <div class="container-fluid cs-common-tech">
        <p class="title text-center">How we build Custom softwares?</p>
        <p class="description text-center">Though we’re experimental at times, our best custom software developers crave to utilise their skills in the technology you choose.</p>
        <div class="container-fluid inner">
                <div class="one">
                    <div class="tech text-center">
                        <img class="tech-img" src="assets/img/custom-software_page/c-sharp.svg" alt="image">
                        <p class="tech-title">C#</p>
                    </div>
                    <div class="tech text-center">
                        <img class="tech-img" src="assets/img/custom-software_page/java.svg" alt="image">
                        <p class="tech-title">Java</p>
                    </div>
                    <div class="tech text-center">
                        <img class="tech-img" src="assets/img/custom-software_page/python.svg" alt="image">
                        <p class="tech-title">Python</p>
                    </div>
                    <div class="tech text-center">
                        <img class="tech-img" src="assets/img/custom-software_page/android-studio.svg" alt="image">
                        <p class="tech-title">Android Studio</p>
                    </div>
                </div>                
                <div class="two">
                    <div class="tech text-center" >
                        <img class="tech-img" src="assets/img/custom-software_page/IoT.svg" alt="image">
                        <p class="tech-title">IoT</p> 
                    </div>
                    <div class="tech text-center">
                        <img class="tech-img" src="assets/img/custom-software_page/cloud.svg" alt="image">
                        <p class="tech-title">Cloud Computing</p>
                    </div>
                </div>
        </div>   
    </div>
    <!-- Common-tech - End -->
    <!-- Custom Software Service - Start -->    
    <div class="container-fluid cs-service">
        <div class="header text-center" >
            <p class="title">Custom Software Services</p>
            <p class="sub-title">Being the best software development company in chennai, we provide top-notch tailored solutions for diverse markets.</p>
        </div>
        <img class="right_circle" src="assets/img/circle.svg" alt="circle">
        <img class="planet" src="assets/img/planet.gif" alt="planet">
        <div class="container inner-one">
            <img class="ball" src="assets/img/ball_unscreen.gif" alt="ball_gif">
            <img class="rock_robo" src="assets/img/custom-software_page/robo_aero.gif" alt="image">
            <div class="inner-two">
                <div class="row">
                    <div class="col-md-6 col-lg-6" style="margin-bottom: 20px;">
                        <div class="card">
                            <div class="d-flex">
                                <div class="icon-box">
                                    <img src="assets/img/custom-software_page/cs_service_1.svg" alt="image">
                                </div>
                                <p class="title">Order & Inventory Management</p>
                            </div>
                            <p class="sub-title">Don’t you want to get notified when you’re running out of stocks? Optimizing Inventory is halfway to success.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6" style="margin-bottom:20px">
                        <div class="card">
                            <div class="d-flex">
                                <div class="icon-box">
                                    <img src="assets/img/custom-software_page/cs_service_2.svg" alt="image">
                                </div>
                                <p class="title">Accounting Softwares</p>
                            </div>
                            <p class="sub-title">Tired of spreadsheets? Wanna go beyond simple functionalities? Try custom softwares to improve accuracy & secure your database.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6" style="margin-bottom:20px">
                        <div class="card">
                            <div class="d-flex">
                                <div class="icon-box">
                                    <img src="assets/img/custom-software_page/cs_service_3.svg" alt="image">
                                </div>
                                <p class="title">Invoice & Billing Softwares</p>
                            </div>
                            <p class="sub-title">Be it a startup or a mid-sized business, custom softwares can help you manage invoices and payments in the safest way possible.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6" style="margin-bottom:20px">
                        <div class="card">
                            <div class="d-flex">
                                <div class="icon-box">
                                   <img src="assets/img/custom-software_page/cs_service_4.svg" alt="image">
                                </div>
                                <p class="title">IoT applications</p>
                            </div>
                            <p class="sub-title">Being one of the best software development companies in Chennai, we provide complete end-to-end services for IoT projects.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <!-- Custom Software Service - End -->
    <!-- Notable Features - Start -->
    <div class="container-fluid cs-notable">
        <div class="header text-center">
            <p class="title">Notable features from us</p>
            <p class="sub-title">We craft tailor-made softwares with exceptional features letting you rule the market.</p>
        </div>
        <img class="satlite_img" src="assets/img/satlite.gif" alt="satlite-gif">
        <img class="planet_red" src="assets/img/planet_red.gif" alt="planet_red_gif">
        <div class="container-fluid inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left" style="margin:auto">
                        <p class="text">Exhibit Branding Feature</p>
                        <p class="sub-text">Designing a custom built software is an opportunity for you to show off how serious you’re into your business. Besides, it helps you carry out automated tasks with easy integration options.</p>
                    </div>
                    <div class="col-md-6 right">
                        <div class="right">
                            <img src="assets/img/custom-software_page/cs-notable.gif" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Notable Features - End -->
    <!-- Redifine-Success - Start -->
    <div class="container-fluid cs-section-five">
        <img class="mini_smoke_roc" src="assets/img/mini_smoke_roc.gif" alt="mini_rock">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left">
                        <img class="" src="assets/img/custom-software_page/cs-section-five-bg.gif" alt="image">
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="inner">
                        <p class="text">Redefine your success</p>
                        <p class="sub-text">You’ll get the liberty to customize existing software whereas in other cases, you’ll have to engage new developers to integrate a third-party solution.</p>                
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!-- Redifine-Success - End -->
    <!-- Custom-software Multiplatform - Start -->
    <div class="container-fluid cus-multi-plat">
        <div class="header">
            <p class="title text-center">Multiple platforms</p>
            <p class="description text-center">Our custom softwares shall be employed on multiple platforms and indeed, you’ll get free technical support.</p>
        </div> 
        <img class="left_circle" src="assets/img/circle_2.svg" alt="left-circle">
        <img class="planet"src="assets/img/planet.gif" alt="planet">
        <img class="roc_robo" src="assets/img/roc_robo.gif" alt="roc_robo">
        <div class="container inner">
            <div class="row">
                    <div class="col-md-6 left" >
                        <p class="title">Why tech4LYF for Custom Software Development?</p>
                        <p class="description">We bring on board young and dynamic souls to design custom softwares and We’ve got a great portfolio to showcase custom softwares developed for both small businesses & large corporate enterprises.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="right">
                            <img src="assets/img/custom-software_page/multiplatform-custom-software.svg" alt="image">
                        </div>
                    </div>
            </div> 
        </div>
    </div>
    <!-- Custom-software Multiplatform - End -->   
    <!--Footer Section Start-->
    <?php include("footer.php")?>
    <!--Footer Section End-->
    <?php include("script.php")?>
</body>
</html>