<!DOCTYPE html>
<html lang="en">
<?php include("head.php")?>
<style>
    .case_study_main_container .line{
            display:none;
    }
    @media (min-width:1200px) {
        .case_study_main_container .line{
            display:block;
            position: absolute;
            top:0;
            left:0;
            transform:translateY(4%)
        }
    }
    @media (min-width:1400px) {
        .case_study_main_container .line{
            position: absolute;
            top:0;
            left:0;
            transform:translateY(6%)
        }
    }
        
        .flex_scroll{
            display:flex;
            justify-content:center;
            align-items:center;
            overflow:hidden;
            /* position:relative; */
        }
        .flex_scroll .inner_scl_a{
            /* min-width:24.25%; */
            min-width:40.25%;
            height:200%;
            background:red;
            background:url(assets/img/mobile-a.svg);
            background-size:cover;   
            transform:rotate(45deg);
            animation:linear infinite;
            animation-name:top_scroll;
            animation-duration: 10s;
            animation-direction:normal;
            /* position:absolute; */
        }
        @media (min-width:576px) {
            .flex_scroll .inner_scl_a{
                min-width:24.25%
            }
        }
        @media (min-width:768px) {
            .flex_scroll .inner_scl_a{
                min-width:24.25%;
                height:200%;
                background:red;
                background:url(assets/img/mobile-a.svg);
                background-size:cover;   
                transform:rotate(45deg);
                animation:linear infinite;
                animation-name:top_scroll;
                animation-duration: 10s;
                animation-direction:normal;
                /* position:absolute; */
            }   
        }
        @media (min-width:1400px) {
            .flex_scroll .inner_scl_a{
                min-width:21.25%;
                height:200%;
                background:red;
                background:url(assets/img/mobile-a.svg);
                background-size:cover;   
                transform:rotate(45deg);
                animation:linear infinite;
                animation-name:top_scroll;
                animation-duration: 10s;
                animation-direction:normal;
                /* position:absolute; */
            }
        }
        @keyframes top_scroll{
            0%{
                background-position:100% 0;
            }
            100%{
                background-position:100% 100%;
            }
        }
        .flex_scroll .inner_scl_b{
            /* min-width:20.25%; */
            min-width:44.25%;
            height:200%;
            background:red;
            background:url(assets/img/mobile-a.svg);
            background-size:cover;
            transform:rotate(45deg);
            animation:linear infinite;
            animation-name:bottom_scroll;
            animation-duration: 10s;
            animation-direction:normal;
            /* position:absolute; */
        }
        @media (min-width:576px) {
            .flex_scroll .inner_scl_b{
                min-width:20.25%;
            }
        }
        @media (min-width:768px) {
            .flex_scroll .inner_scl_b{
                min-width:20.25%;
                height:200%;
                background:red;
                background:url(assets/img/mobile-a.svg);
                background-size:cover;
                transform:rotate(45deg);
                animation:linear infinite;
                animation-name:bottom_scroll;
                animation-duration: 10s;
                animation-direction:normal;
                /* position:absolute;s */
            }
        }
        @media (min-width:1400px) {
            .flex_scroll .inner_scl_b{
                min-width:17.25%;
                height:200%;
                background:red;
                background:url(assets/img/mobile-a.svg);
                background-size:cover;
                transform:rotate(45deg);
                animation:linear infinite;
                animation-name:bottom_scroll;
                animation-duration: 10s;
                animation-direction:normal;
                /* position:absolute; */
            }   
        }
        @keyframes bottom_scroll{
            0%{
                background-position:100% 100%;;
            }
            100%{
                background-position:100% 0;
            }
        }
    </style>
<body style="font-family: Roboto;">
    <!--Navbar Section Start-->
    <?php include("nav.php")?>
    <!--Navbar Section End--> 
    <!--Banner Section - Start-->
    <div class="container-fluid case-study-sec-one">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 left">
                    <p class="title">Case Study</p>
                    <p class="sub-title">Explore Gatello</p>
                </div>
                <div class="col-md-6 col-sm-6 right" >
                    <div class="inner">
                        <img class="" src="assets/img/casestudy-index-bg.svg" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Banner Section - End-->
    <!-- Case-Study Section-two - Start -->
    <div class="case_study_main_container">
        <p class="title text-center">Problem & Solution</p>
        <img class="line" src="assets/img/case_study_back_line.svg" alt="">
        <div class="container-fluid case-study-sec-two">
            <img class="case_study_rock" src="assets/img/case_study_back_rocket.svg" alt="">
            <img class="case_study_woman" src="assets/img/case_study_woman.svg" alt="">
            <div class="container">    
                <div class="row" style="padding-top: 60px;">
                    <div class="col-md-4 col-sm-4 left">
                        <p class="number">01</p>
                        <p class="sub-title">Project Overview</p>
                    </div>
                    <div class="col-md-8 col-sm-8 right">
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec, varius luctus eleifend integer rhoncus tincidunt cursus sapien. Vulputate diam, aliquam ac mi purus,laoreet. Nam ligula nunc luctus diam consectetur amet mattis. At nunc justo, arcu cursus neque odio nascetur. Odio enim, nisi fermentum adipiscing mauris.Eget faucibus fringilla mattis mi pulvinar velit arcu. Volutpat et, tristique volutpat donec et. Tortor gravida at ligula fermentum consectetur dignissim lobortis urna. Nulla neque tellus scelerisque.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid project-name title-outline" id="project-name" style="padding:0">
            <p class="text-center title-outline">GATELLO</p>
        </div>
        <div class="container-fluid case-study-sec-three">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 left"  style="background:url(assets/img/case-study/circle-bg.svg);background-repeat: no-repeat;background-size: contain;background-position: center;">
                        <div class="inner" >
                            <img class="" src="assets/img/case-study/mob.svg" alt="img">
                        </div>
                    </div>
                    <div class="col-md-8 right">
                        <p class="number">02</p>
                        <p class="sub-title">Project Overview</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec, varius luctus eleifend integer rhoncus tincidunt cursus sapien. Vulputate diam,  aliquam ac mi purus,laoreet. Nam ligula nunc luctus diam consectetur amet mattis. At nunc justo, arcucursus neque odo nascetur. Odio enim, nisi fermentum adipiscing mauris.Eget faucibus fringilla mattis mi pulvinar velit arcu. Volutpat et, tristique volutpat donecet. Tortor gravida at ligula fermentum consectetur dignissim lobortis urna. Nulla neque tellus scelerisque.</p>
                    </div>
                </div>
            </div>
        </div> 
        <div class="container-fluid case-study-sec-four">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 left">
                        <p class="number">03</p>
                        <p class="sub-title">Solution</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec, varius luctus eleifend integer rhoncus tincidunt cursus sapien. Vulputate diam,  aliquam ac mi purus,laoreet. Nam ligula nunc luctus diam consectetur amet mattis. At nunc justo, arcu cursus neque odio nascetur. Odio enim, nisi fermentum adipiscing mauris.Eget faucibus fringilla mattis mi pulvinar velit arcu. Volutpat et, tristique volutpat donec et. Tortor gravida at ligula fermentum consectetur dignissim lobortis urna. Nulla neque tellus scelerisque.</p>
                    </div>
                    <div class="col-md-4" style="margin:auto">
                        <div class="right">
                            <img class="" src="assets/img/sec-four-bg.gif" alt="image"> 
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid case-study-sec-five">
            <div class="hero text-center">
                <p class="number">04</p>
                <div class="inner">
                    <p class="sub-title">Mockup</p>
                </div>
            </div>
            <div class="flex_scroll" style="padding: 0;background: #e0404820;height:70vh">
                <div class="inner_scl_a">
                    
                </div>
                <div class="inner_scl_b">

                </div>
                <div class="inner_scl_a">

                </div>
                <div class="inner_scl_b">

                </div>
                <div class="inner_scl_a">

                </div>
                <div class="inner_scl_b">

                </div>
                <div class="inner_scl_a">

                </div>
                <div class="inner_scl_b">

                </div>
            </div> 
        </div>
        <div class="container case-study-sec-six">
            <div class="hero text-center">
                <p class="number">05</p>
                <div class="inner">
                    <p class="sub-title">Technology</p>
                </div>
            </div>
            <div class="one">
                <div class="tech text-center">
                    <img src="assets/img/case-study/csharp.svg" alt="image">
                    <p class="title">C#</p>
                </div>
                <div class="tech text-center">
                    <img src="assets/img/case-study/Java.svg" alt="image">
                    <p class="title">Java</p>
                </div>
                <div class="tech text-center">
                    <img src="assets/img/case-study/Python.svg" alt="image">
                    <p class="title">Python</p>
                </div>
                <div class="tech text-center">
                    <img src="assets/img/case-study/Android_Studio.svg" alt="image">
                    <p class="title">Android Studio</p>
                </div>
            </div>
        </div>
        <div class="container-fluid case-study-sec-seven">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 left" style="margin: auto;">
                        <p class="number">06</p>
                        <p class="sub-title">Current Status</p>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nec, varius luctus eleifend integer rhoncus tincidunt cursus sapien. Vulputate diam,  aliquam ac mi purus,laoreet. Nam ligula nunc luctus diam consectetur amet mattis. At nunc justo, arcu cursus neque odio nascetur. Odio enim, nisi fermentum adipiscing mauris.Eget faucibus fringilla mattis mi pulvinar velit arcu. Volutpat et, tristique volutpat donec et. Tortor gravida at ligula fermentum consectetur dignissim lobortis urna. Nulla neque tellus scelerisque.</p>
                    </div>
                    <div class="col-md-5 right">
                        <div class="inner-one">
                            <div class="inner-two">
                                <img class="lft_mob" src="assets/img/case-study/mob-1.svg" alt="image">
                                <img class="rgt_mob" src="assets/img/case-study/mob-2.svg" alt="image">  
                            </div>                    
                        </div>                
                    </div>
                </div>
            </div>
        </div> 
        <div class="container-fluid case-study-sec-eight">  
            <div class="container">
                <p class="title text-center">Want to know more?</p>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <p class="text">Header</p>
                            <p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate commodo ornare eu tincidunt amet integer sed. </p>
                            <div class="mobiles">
                                <img id="mob-1"  src="assets/img/left-mobile.svg" alt="image">
                                <img id="mob-2"  src="assets/img/center-mobile.svg" alt="image">
                                <img id="mob-3"  src="assets/img/right-mobile.svg" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <p class="text">Header</p>
                            <p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate commodo ornare eu tincidunt amet integer sed. </p>
                            <div class="mobiles">
                                <img id="mob-1"  src="assets/img/left-mobile.svg" alt="image">
                                <img id="mob-2"  src="assets/img/center-mobile.svg" alt="image">
                                <img id="mob-3"  src="assets/img/right-mobile.svg" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <p class="text">Header</p>
                            <p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate commodo ornare eu tincidunt amet integer sed. </p>
                            <div class="mobiles">
                                <img id="mob-1"  src="assets/img/left-mobile.svg" alt="image">
                                <img id="mob-2"  src="assets/img/center-mobile.svg" alt="image">
                                <img id="mob-3"  src="assets/img/right-mobile.svg" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Case-Study Section-two - End -->
    <!--Footer Section Start-->
    <?php include("footer.php")?>
    <!--Footer Section End-->
    <?php include("script.php")?>
    <script>
        var swidth=document.getElementById("project-name").offsetWidth;
        // alert(swidth);
    </script>
</body>
</html>