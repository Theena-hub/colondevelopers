<!DOCTYPE html>
<html lang="en">
    <style>
        /* :root{
            --screen_width: 1140;
        } */
        .android_hero{
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 0;
        }
        @media (min-width:1400px) {
            .android_hero{
                height: 90vh;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                padding: 0;
            }
        }
        .android_hero .row{
            width: 100% ;
        }
        .android_hero .hero-left{
                background: #E04048;
                height: 80vh;
                /*padding-left:calc(calc(1140 - 960) / 2)px;*/
                display: flex;
                flex-flow: column;
                justify-content: center;
            }
        @media (min-width:768px) {
            .android_hero .hero-left{
                background: url('assets/img/android_page/android-banner-bg.svg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: bottom right;
            }
        }
        @media (min-width:992px) {
            .android_hero .hero-left{
                background: url('assets/img/android_page/android-banner-bg.svg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: bottom right;
            }
        }
        @media (min-width:1400px) {
            .android_hero .hero-left{
                /* background: red; */
                height: 90vh;
                background: url('assets/img/android_page/android-banner-bg.svg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: bottom right;
                /*padding-left:calc(calc(1140 - 960) / 2)px;*/
                display: flex;
                flex-flow: column;
                justify-content: center;
            }
        }
        .android_hero .hero-left .title{
                color:#ffffff;
                font-style: normal;
                font-weight: 800;
                font-size: 28px;
                line-height: 40px;
                letter-spacing: 0.035em;
                /* width: 80%; */
                margin: 0 px;
                text-align: center;
                padding:8px 0;
                margin-bottom:0
            }
        @media (min-width:768px) {
            .android_hero .hero-left .title{
                font-size: 36px;
                text-align:left;
                margin-left:0;
            }
        }
        @media (min-width:992px) {
            .android_hero .hero-left .title{
                width:100%;
            }
        }
        @media (min-width:1200px) {
            .android_hero .hero-left .title{
                width:85%;
                text-align:left;
            }
        }
        @media (min-width:1400px) {
            .android_hero .hero-left .title{
                color:#ffffff;
                font-style: normal;
                font-weight: 800;
                font-size: 64px;
                line-height: 75px;
                letter-spacing: 0.035em;
                width: 80%;
                text-align: left;
            }
        }
        .android_hero .hero-left .sub-title{
            color:#ffffff;
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 24px;
            /* width:60%; */
            text-align: center;
        }
        @media (min-width:768px) {
            .android_hero .hero-left .sub-title{
                font-size: 14px;
                width: 50%;
                margin-left:0;
                text-align: left;
            }
        }
        @media (min-width:992px) {
            .android_hero .hero-left .sub-title{
                font-size: 16px;
                width:50%;
            }
        }
        @media (min-width:1400px) {
            .android_hero .hero-left .sub-title{
                color:#ffffff;
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
                line-height: 30px;
                width:50%;
                text-align: left;
            }
        }
        .android_hero .hero-left .btn{
            background: #FFFFFF;
            padding: 10px 25px;
            border-radius: 8px;
            border: none;
            font-style: normal;
            font-weight: 600;
            font-size: 14px;
            margin-top: 30px;
            line-height: 24px;
            color: #292929;
            margin:auto;
            /* width:50%; */
            display:flex;justify-content:center;
            
        }
        @media (min-width:576px) {
            .android_hero .hero-left .btn{
                width:30%;
                padding:8px 30px;
            }
        }
        @media (min-width:768px) {
            .android_hero .hero-left .btn{
                padding:10px 28px;
                width:33%;
                font-size:14px;
                margin:0;
                /* margin-left:40px; */
                /* margin-right:auto; */
            }
        }
        @media (min-width:992px) {
            .android_hero .hero-left .btn{
                padding: 12px 34px;
                font-size:18px;
                /* margin-left:35px; */
                width:33%;
            }
        }
        @media (min-width:1200px) {
            .android_hero .hero-left .btn{
                padding:14px 36px;
                font-size:20px;
                /* margin-left:65px; */
                width:30%;
            }
        }
        @media (min-width:1400px) {
            .android_hero .hero-left .btn{
                background: #FFFFFF;
                padding: 15px 40px;
                border-radius: 8px;
                border: none;
                font-style: normal;
                font-weight: 600;
                font-size: 22px;
                margin-top: 30px;
                line-height: 28px;
                color: #292929;
                /* margin-left: 80px; */
                width:33%;
            }
        }
        @media (max-width:767px) {
            .android_hero .col-md-5{
                display:none;
            }  
        }
        .hero-right{
            height: 80vh;
            display: flex;
            justify-content: center;
            flex-flow: column;
        }
        @media (min-width:1400px) {
            .hero-right{
                height:90vh;
            }
        }
        .hero-right img{
            width:90%;
            height:auto;
        }
        @media (min-width:768px) {
            .hero-right img{
                width:100%;
                height:auto;
            }
        }
        @media (min-width:992px) {
            .hero-right img{
                width:80%;
            }
        }
        @media (min-width:1200px) {
            .hero-right img{
                width:90%;
            }
        }
        @media (min-width:1400px) {
            .hero-right img{
                width:100%;
            }
        }
    </style>
    <?php include("head.php")?>
<body style="font-family: Roboto;">
    <!--Navbar Section - Start-->
    <?php include("nav.php")?>
    <!--Navbar Section - End--> 
    <!-- Banner Section - Start -->
    <style>
        @media (min-width:768px) {
            .sty_pad{
                padding-left:calc(((var(--cont_wid) - 720px) / 2) + 12px);
            }
        }
        @media (min-width:992px) {
            .sty_pad{
                padding-left:calc(((var(--cont_wid) - 960px) / 2) + 12px);
            }
        }
        @media (min-width:1200px) {
            .sty_pad{
                padding-left:calc(((var(--cont_wid) - 1140px) / 2) + 12px);
            }
        }
        @media (min-width:1400px) {
            .sty_pad{
                padding-left:calc(((var(--cont_wid) - 1320px) / 2) + 12px);
            }
        }
    </style>
    <div class="container-fluid android_hero" id="hero" style="padding:0">
        <script>
            var crt_wid=document.getElementById("hero").offsetWidth;
            document.documentElement.style.setProperty('--cont_wid', crt_wid+'px');
        </script>
        <div class="row" style="margin:0; padding:0">
            <div class="col-md-7" style="padding:0">
                <div class="hero-left">
                    <div class="sty_pad">
                        <p class="title" >Finest App Developers</p>
                        <p class="sub-title" >Enough googling. Drop your mail id to meet top-rated app developers in Chennai.</p>
                        <input class="btn" type="button" value="Get a Proposal" name="">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="hero-right">
                    <img src="assets/img/android_page/android-banner-img-2.gif" alt="gif">
                </div>
            </div>
        </div>
    </div>
    <script>
        var swidth=document.getElementById("hero").offsetWidth;
        // alert(swidth);
        // document.documentElement.style.setProperty('--screen_width', swidth);
    </script>
    <!-- Banner Section - End --> 
    <!-- Common-tech - Start -->
    <div class="container-fluid android-tech">
        <div class="header">
            <p class="title text-center">Common Technologies We Embrace</p>
            <p class="sub-title text-center">Pick any technology you want your application to be built on and  we will provide the best android app developer in Chennai to you.</p>
        </div>
        <div class="container-fluid inner">
            <div class="one">
                <div class="tech text-center">
                    <img class="tech-img" src="assets/img/android_page/android.svg" alt="image">
                    <p class="tech-title">Android Studio</p>
                </div>
                <div class="tech text-center">
                    <img class="tech-img" src="assets/img/android_page/Flutter.svg" alt="image">
                    <p class="tech-title">Flutter</p>
                </div>
                <div class="tech text-center">
                    <img class="tech-img" src="assets/img/android_page/java.svg" alt="image">
                    <p class="tech-title">Java</p>
                </div>
                <div class="tech text-center">
                    <img class="tech-img" src="assets/img/android_page/Kotlin.svg" alt="image">
                    <p class="tech-title">Kotlin</p>
                </div>
            </div>
            <div class="two">
                <div class="tech text-center">
                    <img class="tech-img" src="assets/img/android_page/Ionic JS.svg" alt="image">
                    <p class="tech-title">Ionic JS</p>
                </div>
                <div class="tech text-center">
                    <img class="tech-img" src="assets/img/android_page/react-js.svg" alt="image">
                    <p class="tech-title">React JS</p>
                </div>
            </div>
        </div>   
    </div>
    <!-- Common-tech - End -->
    <!-- Android Service - Start -->
    <div class="container-fluid android-service" >
        <p class="android-service-title text-center">Android App Services We provide</p>
        <p class="android-service-description text-center">Scroll down to find common android app development services we provide irrespective of what your field is.</p>
        <div class="container inner" style="background-repeat:no-repeat; position:relative">
            <img src="assets/img/round_line.svg" class="overlay_ser_in" alt="">
            <img src="assets/img/round_line_two.svg" class="overlay_ser_in_two" alt="">
            <style>
                .overlay_ser_in{
                    display:none;
                }
                 @media (min-width:768px) {
                    .overlay_ser_in{
                        display: block;
                        position: absolute;
                        z-index: -1;
                        top:0;
                        right:0;
                        transform:translate(25%,-25%);
                        opacity: .4;
                        width:150px;
                    }
                }
                @media (min-width:992px) {
                    .overlay_ser_in{
                        position: absolute;
                        z-index: -1;
                        top:0;
                        right:0;
                        transform:translate(25%,-25%);
                        opacity: .4;
                        width:150px;
                    } 
                }
                @media (min-width:1200px) {
                    .overlay_ser_in{
                        position: absolute;
                        z-index: -1;
                        top:0;
                        right:0;
                        transform:translate(25%,-25%);
                        opacity: .4;
                        width:150px;
                    } 
                } 
                @media (min-width:1400px) {
                    .overlay_ser_in{
                        position: absolute;
                        z-index: -1;
                        top:0;
                        right:0;
                        transform:translate(25%,-25%);
                        opacity: .4;
                        width:200px;
                    } 
                }
                .overlay_ser_in_two{
                   display:none
                }
                @media (min-width:768px) {
                    .overlay_ser_in_two{
                        display:block;
                        position: absolute;
                        z-index: -1;
                        top: 0;
                        left: 0;
                        transform: translate(-15%, -35%);
                        opacity: .4;
                        width:150px;
                    }
                }
                @media (min-width:992px) {
                    .overlay_ser_in_two{
                        position: absolute;
                        z-index: -1;
                        top: 0;
                        left: 0;
                        transform: translate(-15%, -35%);
                        opacity: .4;
                        width:150px;
                    } 
                }
              
                @media (min-width:1200px) {
                    .overlay_ser_in_two{
                        position: absolute;
                        z-index: -1;
                        top: 0;
                        left: 0;
                        transform: translate(-25%, -25%);
                        opacity: .4;
                        width:150px;
                    } 
                }
                @media (min-width:1400px) {
                    .overlay_ser_in_two{
                        position: absolute;
                        z-index: -1;
                        top: 0;
                        left: 0;
                        transform: translate(-15%, -35%);
                        opacity: .4;
                        width:200px;
                    } 
                }
            </style>
            <div class="row text-center">
                <!--  Single Starts  -->    
                <div class="col-lg-3 col-sm-6 mb-3 service-block">
                    <div class="service-block-one">
                        <div class="inner-box ">
                            <div class="icon-box">                            
                                <img src="assets/img/native_android.svg" alt="image">
                            </div>                        
                            <p class="service-header"><a href="#">Native Android App Development</a></p>
                            <p class="service-description">Wish your apps operate at an electric speed with flawless performance? #Tech4LYF will build the best native apps for you</p>                            
                        </div>
                    </div>
                </div>   
                <div class="col-lg-3 col-sm-6 mb-3 service-block">
                    <div class="service-block-one">
                        <div class="inner-box ">
                            <div class="icon-box">                            
                                <img src="assets/img/android_page/cross-platform.svg" alt="image">
                            </div>                        
                            <p class="service-header"><a href="#">Cross Platforms App Development</a></p>
                            <p class="service-description">Single source code for multiple platforms including, ios and android. Highly cost-effective & easy to sync your updates.</p>                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3 service-block">
                    <div class="service-block-one">
                        <div class="inner-box ">
                            <div class="icon-box">                            
                                <img src="assets/img/android_page/hybrid-android.svg" alt="image">
                            </div>                        
                            <p class="service-header"><a href="#">Hybrid Android App Development</a></p>
                            <p class="service-description">Hybrid apps are probably easy to work with, besides smooth upgrades. Compile once and target widely.</p>                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-3 service-block">
                    <div class="service-block-one">
                        <div class="inner-box ">
                            <div class="icon-box">                            
                                <img src="assets/img/android_page/android-things.svg" alt="image">
                            </div>                        
                            <p class="service-header"><a href="#">Android Things Development</a></p>
                            <p class="service-description">Need android based applications for IoT devices? Being aware of tech trends, we create top-notch IoT applications in Chennai</p>                            
                        </div>
                    </div>
                </div>                     
            </div>
        </div>
    </div>
    <!-- Android Service - End -->
    <!-- Android Features - Start -->   
    <div class="container-fluid android-feature">
        <p class="android-feature-title text-center">Notable Features From Us</p>
        <p class="android-feature-description text-center">Hiring our team for your dream app will embrace following features.</p>
        <div class="container inner">
            <div class="row">
                <div class="col-md-6 left">
                    <div class="left-inner">               
                        <p class="title">Location based apps</p>
                        <p class="description">A few applications depend highly on GPS integration for their success. If you're one among them, then handover your project to us and sit back. Let's enable awesome navigation tools that will enhance user experience.</p>
                    </div>
                </div>
                <div class="col-md-6 right text-center">
                    <img src="assets/img/android_page/android-feature_1.gif" alt="image">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid android-feature-2">
        <div class="row outer">
            <div class="col-md-6 text-center">
                <div class="left">
                    <img src="assets/img/android_page/android_feature_two.gif" alt="image">
                </div>
            </div>
            <div class="col-md-6" style="padding:0">
                <div class="right">
                    <div class="inner">
                        <p class="title">Integration Options</p>
                        <p class="description">Being one of the best android app development companies in Chennai, our coders are highly knowledgeable. You've options for Beacon integration, third-party integration, wearable integration, payment gateway integration, and many more.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- android-Features - End -->   
    <!-- android-multiple-platform - Start -->
    <div class="container-fluid and-multi-plat" >
        <p class="title text-center">Multiple Platforms</p>
        <p class="description text-center">We employ all the latest technologies and tools to develop android apps for various platforms (Native, Hybrid & Cross Platforms). We've got a robust technology stack to build scalable applications.</p>
    </div>
    <!-- android-multiple-platform - End -->
    <!-- why-t4l-for-android - start -->
    <div class="container-fluid why-t4l">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left" style="margin: auto;">
                    <p class="title">Why Tech4LYF for Android App Development?</p>
                    <p class="description">When it comes to rabbit and tortoise, beauty doesn't matter but the pace. We believe the best android app developers are those who work on tight deadlines with an artistic approach.</p>
                </div>
                <div class="col-md-6 right text-center">
                    <img src="assets/img/android_page/multi-plat.svg" alt="image">
                </div>
            </div>        
        </div>
    </div>
    <!-- why-t4l-for-android - End -->
    <!-- need-us - Start -->
    <div class="container need-us">
        <p class="title text-center">Wherever you Need Us the Most</p>
        <p class="description text-center">Different layouts and styles for team sections.</p>
        <div class="row">
            <div class="col-lg-7 col-sm-6 left">               
                <div class="inner">                   
                    <div class="card">  
                        <div class="flex-box">
                            <span class="dot" id="dot-1"></span>
                            <p class="text">Well Integrated</p>
                        </div>
                    </div>            
                    <div class="card">
                        <div class="flex-box">
                            <span class="dot" id="dot-2"></span>
                            <p class="text">Clean and modern Design</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="flex-box">
                            <span class="dot" id="dot-3"></span>
                            <p class="text">Light and dark mode</p>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                 .need-us .right .inner{
                    background-image:url(assets/img/needus_mob_bg.png);
                    background-repeat: no-repeat;
                    background-size: contain;
                    background-position: center;
                    position: relative;
                    margin:auto;
                    width:50%;
                    height:200px;
                }
                @media (min-width:576px) {
                    .need-us .right .inner{
                        width:86%;
                        height:250px;
                    }
                }
                @media (min-width:768px) {
                    .need-us .right .inner{
                        height:285px;
                        width:70%;
                    }
                }
                @media (min-width:992px) {
                    .need-us .right .inner{
                        height:370px;
                        width:82%;
                    }
                }
                @media (min-width:1200px) {
                    .need-us .right .inner{
                        height:470px;
                    }
                }
                @media (min-width:1400px) {
                    .need-us .right .inner{
                        height:600px;
                    }
                }

                
                .need-us .right .inner img{
                    position: absolute;
                    animation:linear infinite;
                    animation-name:mobile_spin;
                    /* right:0; */
                    /* width:250px; */
                    animation-duration:1.5s;
                    left:50%;
                    transform:translateX(-50%);
                    width:65%;

                }

                @media (min-width:768px) {
                    .need-us .right .inner img{
                        width:70%;
                    }
                }
                @media (min-width:992px) {
                    .need-us .right .inner img{
                        width:70%;
                    }
                }
                @media (min-width:1200px) {
                    .need-us .right .inner img{
                        width:75%;
                    }
                }
                @media (min-width:1400px) {
                    .need-us .right .inner img{
                        position: absolute;
                        animation:linear infinite;
                        animation-name:mobile_spin;
                        /* right:0; */
                        /* width:250px; */
                        animation-duration:1.5s;
                        left:50%;
                        transform:translateX(-50%);
                        width:80%;
                    }
                }
                @keyframes mobile_spin {
                    0%{
                        top:0px;
                    }
                    50%{
                        top:10px;
                    }
                    100%{
                        top:0px;
                    }
                }
            </style> 
            <div class="col-lg-5 col-sm-6 right text-center">
                <div class="inner">
                <!-- <img src="assets/img/android_page/mobile.svg" alt="image"> -->
                    <img class="" src="assets/img/needus_mobile.svg" alt="img">
                </div>
            </div>
        </div>
    </div>
    <!-- div-nine - End -->
    <!--Footer Section Start-->
    <?php include("footer.php")?>
    <!--Footer Section End-->
    <?php include("script.php")?>
    <script>
        // alert(documet.getElementById("nav_container").offsetLeft);
    </script>
</body>
</html>