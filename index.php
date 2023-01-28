<!DOCTYPE html>
<html lang="en">
<?php include("head.php")?>
<style>
    .testimonial{
        padding-top:20px;
        padding-bottom:20px;
        background: #E04048;
        padding-left:0;
        padding-right:0;
    }
    @media (min-width:768px) {
        .testimonial{
            padding-top:25px;
            padding-bottom:25px;
        }
    }
    @media (min-width:992px) {
        .testimonial{
            padding-top:30px;
            padding-bottom:30px;
        }
    }
    @media (min-width:1200px) {
        .testimonial{
            padding-top:35px;
            padding-bottom:35px;
        }
    }
    @media (min-width:1400px) {
        .testimonial{
            padding-top:40px;
            padding-bottom:40px;
        }
    }
    .testimonial .header .title{
        font-style: normal;
        font-weight: 600;
        font-size: 20px;
        line-height: 32px;
        color: #FFFFFF;
        margin-bottom:0;
        padding:5px 0;
    }
    @media (min-width:576px) {
        .testimonial .header .title{
            font-size:24px;
        }
    }
    @media (min-width:768px) {
        .testimonial .header.title{
            font-size:26px;
            line-height:34px;
        }
    }
    @media (min-width:992px) {
        .testimonial .header .title{
            font-size:28px;
            line-height:36px;
            padding:8px 0;
        }
    }
    @media (min-width:1200px) {
        .testimonial .header .title{
            font-size:34px;
            line-height:40px;
        }
    }
    @media (min-width:1400px) {
        .testimonial .header .title{
            font-size:40px;
            line-height:47px;
        }
    }
    .testimonial .header .sub-title{
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 24px;
        text-align: center;
        letter-spacing: 1px;
        color: #FFFFFF;
        margin-bottom:0;
    }
    @media (min-width:1200px) {
        .testimonial .header .sub-title{
            font-size:16px;
            line-height:26px
        }
    }
    @media (min-width:1400px) {
        .testimonial .header .sub-title{
            font-size:18px;
            line-height:30px;
        }
    }
    .index-testimonial .owl-stage{
        padding:40px 0;
    }
    @media (min-width:768px) {
        .index-testimonial .owl-stage{
            padding:70px 0;
        }
    }
    @media (min-width:600px) {
        .index-testimonial .owl-stage .owl-item.center{
            transform:scale(1.3);
            z-index:300;   
        }
        .index-testimonial .owl-stage .owl-item.center .carousel-item{
            background:#ffffff;
        }   
    }
    .testimonial .owl-carousel{
        position: relative;
    }
    .testimonial .owl-carousel .carousel-item{
        padding: 10px 20px;
        background: #F3F3F3;
        border-radius: 21px;
        border:0px;
    }
    .testimonial .owl-carousel .carousel-item .double-quote{
        position: absolute;
        font-family: 'Revalia';
        font-style: normal;
        font-weight: 400;
        font-size: 110px;
        line-height: 70px;
        text-align: center;
        color: #E04048;
        left: 0;
    }
    .testimonial .owl-carousel .carousel-item .flex-box img{
        width: 90px;
        height: 90px;
        margin: auto;
        display: block;
        color: #f2f2f2;
        border-radius: 50%;
    }
    .testimonial .owl-carousel .carousel-item .name{
        padding:12px 0;
        margin-bottom: 0px;
        font-style: normal;
        font-weight: 700;
        font-size: 20px;    
        line-height: 18px;
        letter-spacing: 0.5px;
        color: #E04048;
    }
    .testimonial .owl-carousel .carousel-item .review{
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-size: 13px;
        line-height: 23px;
        text-align: center;
        color: #717171;
        margin-bottom:10px;
    }
    .testimonial .owl-carousel .carousel-item .client_rating{
        margin:auto;
        width:80px;
    }
    @media (min-width:768px) {
        .testimonial .owl-carousel .carousel-item .client_rating{
            width:80px;
        }
    }
    @media (min-width:992px) {
        .testimonial .owl-carousel .carousel-item .client_rating{
            width:90px;
        }
    }
    @media (min-width:1200px) {
        .testimonial .owl-carousel .carousel-item .client_rating{
            width:100px;
        }
    }
    .testimonial .owl-carousel .owl-nav{
        display: none;
    }
    .testimonial .owl-carousel .owl-dots{
        /* display: none; */
    }          
</style>
<body style="font-family: Roboto;">
    <style>
        .loader { 
            left: 50%;
            top: 50%;
            width: 100px;
            height: 100px;
            position: absolute;
            z-index: 1000;
        }
        .loader .loader-inner-1,
        .loader .loader-inner-2,
        .loader .loader-inner-3,
        .loader .loader-inner-4{
            display: block;
            width: 20px;
            height: 20px;
            border-radius: 20px;
            position: absolute;
        }
        .loader .loader-inner-1:before,
        .loader .loader-inner-2:before,
        .loader .loader-inner-3:before,
        .loader .loader-inner-4:before{
            content:"";
            display: block;
            width: 20px;
            height: 20px;
            border-radius: 20px;
            position: absolute;
            right: 0;
            animation-name: loading-1;
            animation-iteration-count: infinite;
            animation-direction: normal;
            animation-duration: 2s;
        }
        .loader .loader-inner-1{
            top: 0;
            left: 0;
            transform: rotate(70deg);
        }
        .loader .loader-inner-1:before{
            background: #e04048;
        }
        .loader .loader-inner-2{
            top: 0;
            right: 0;
            transform: rotate(160deg);
        }
        .loader .loader-inner-2:before{
            background: #e04048;
        }
        .loader .loader-inner-3{
            bottom: 0;
            right: 0;
            transform: rotate(-110deg);
        }
        .loader .loader-inner-3:before{
            background: #ffffff;
        }
        .loader .loader-inner-4{
            bottom: 0;
            left: 0;
            transform: rotate(-20deg);
        }
        .loader .loader-inner-4:before{
            background: #ffffff;
        }
        @keyframes loading-1 {
            0% {
                width: 20px;
                right: 0;
            }
            30% {
                width: 120px;
                right: -100px;
            }
            60% {
                width: 20px;
                right: -100px;
            }
        }
    </style>
    <!--Navbar Section Start-->
    <?php include("nav.php")?>
    <!--Navbar Section End--> 
    <!--Banner Section - Start-->
    <div class="container-fluid hero-banner">
        <div class="row">
            <div class="col-md-7 left">  
                <div class="hero-banner-ani-1">
                    <img class="rocket" src="assets/img/main_rock.gif" alt="rocket-image">
                    <img class="home_banner_clouds" src="assets/img/landing_page/clouds.svg" alt="clouds-image">
                </div>              
            </div>
            <div class="col-md-5 right">
                <div>
                    <p class="hero-banner-heading">We’ve got Solution!</p>
                    <p class="hero-banner-description">Lorem Ipsum as their default model text, and a search for 'lorem ipsum'.</p>
                    <!-- <input type="button" class="btn btn-primary" name="" value="Learn More"> -->
                    <button type="button" class="btn btn-primary hero-banner-btn" name="" >Learn More</button>
                </div>
            </div>                        
        </div>
        <img class="bottom-clouds" src="assets/img/landing_page/bottom_clouds.svg" alt="bottom-clouds">
    </div>
    <!--Banner Section - End-->
    <!--Our Service Section - Start-->   
    <div class="container-fluid service-main">
        <div class="inner-rock">
            <div class="container">
                <div style="margin: 50px;" >    
                    <p class="service-heading text-center">Our Services</p>
                </div>
                <div class="row text-center" style="padding:0 0 50px;">            
                    <div class="col-lg-3 col-sm-6 service-block mb-3">
                        <div class="service-block-one">
                            <div class="inner-box ">
                                <div class="icon-box">                            
                                    <img src="assets/img/landing_page/card-1.svg" alt="image">
                                </div>                        
                                <p class="service-header">Web Design & Development</p>
                                <p class="service-description">Looking for a best web designer who can develop simple yet elegant web designs?</p>                            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 service-block mb-3">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="icon-box">                            
                                    <img src="assets/img/landing_page/card-2.svg" alt="image">
                                </div>                        
                                <p class="service-header">Android App</p>
                                <p class="service-description">Wanna develop your dream application? Find your best android developers in chennai here</p>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 service-block mb-3">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="icon-box">                            
                                    <img src="assets/img/apple-logo.png" alt="image">
                                </div>                        
                                <p class="service-header">IOS App Development</p>
                                <p class="service-description">Colan Developers is a top iOS app development company in Chennai with 95% on time delivery record.</p>                        
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 service-block mb-3">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="icon-box">                            
                                    <img class="icon_img" src="assets/img/landing_page/card-4.svg" alt="image">
                                </div>                        
                                <p class="service-header">Custom Software</p>
                                <p class="service-description">Wondering where to find the best custom software developer who can utilize a wide array of technologies?</p>                        
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        <!-- <img src="assets/img/landing_page/ser-bg-clouds.svg" alt="image">    -->
    </div>
    <!--Our Service Section - End-->
     <!-- preloader - start -->
     <!-- <div class="loader">
            <span class="loader-inner-1"></span>
            <span class="loader-inner-2"></span>
            <span class="loader-inner-3"></span>
            <span class="loader-inner-4"></span>
        </div> -->
    <!-- preloader - end -->
    <!-- Why Colan Developers? Start -->
    <div class="container why-cd">
        <div class="row text-center">
            <div>
            <!-- <div class="why-cd-head"> -->
                <p class="why-cd-head">Why Colan Developers ?</p>
            <!-- </div> -->
            <!-- <div class="why-cd-description"> -->
                <p class="why-cd-description">Brand Builders, web developers & app developers, digital campaigners, and storytellers - all at one station. colan Developers is your one-stop solution for all your digital needs. Besides providing service, we provide technical support and help you get rid of those hazy clouds. We’re totally approachable and ready to answer all your queries 24/7.</p>
            <!-- </div> -->
            <!-- <div class="star-image"> -->
                <img class="star-image" src="assets/img/landing_page/star-image.svg" alt="image">
            <!-- </div> -->
            </div>
            <!-- <ul role="tablist" class="nav nav-tabs section-4">
                <li role="presentation" class="nav-item inner left ">
                    <a role="tab" data-bs-toggle="tab" class="nav-link active" href="#consultation">Consultation</a>
                </li>
                <li role="presentation" class="nav-item inner">
                    <a role="tab" data-bs-toggle="tab" class="nav-link" href="#highlyskilled">Highly Skilled</a>
                </li>
                <li role="presentation" class="nav-item inner right">
                    <a role="tab" data-bs-toggle="tab" class="nav-link" href="#result">100% Result</a>
                </li>                
            </ul>          -->
        </div>
    </div>
    <!-- Why Colan Developers? End -->
    <!-- Free Consultancy Section - Start -->
    <div class="container free-consultation" id="free_cons">
        <ul role="tablist" class="nav nav-tabs section-4">
            <li role="presentation" class="nav-item inner left ">
                <a role="tab" data-bs-toggle="tab" class="nav-link  active" id="id_one" href="#consultation">Consultation</a>
            </li>
            <li role="presentation" class="nav-item inner">
                <a role="tab" data-bs-toggle="tab" class="nav-link " id="id_two" href="#highlyskilled">Highly Skilled</a>
            </li>
            <li role="presentation" class="nav-item inner right">
                <a role="tab" data-bs-toggle="tab" class="nav-link " id="id_three" href="#result">100% Result</a>
            </li>                
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade show active" id="consultation">
                <div class="row">
                    <div class="col-md-6 free-consultation-left">
                        <div>
                            <img src="assets/img/free_consultansy.gif" alt="image">
                        </div>
                    </div>
                    <div class="col-md-6 free-consultation-right">  
                        <div class="inner">
                            <div>              
                                <p class="free-consultation-title">Free Consultation</p>
                                <img class="line" src="assets/img/landing_page/line.svg" alt="image">                
                                <p class="free-consultation-description">Let's catch up over coffee. Let out your musings and we shall help you explore the most recommended solutions for your industry.</p>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="highlyskilled">
                <div class="row">
                    <div class="col-md-6 free-consultation-left">
                        <div>
                            <img src="assets/img/highly_skilled.gif" alt="image">
                        </div>
                    </div>
                    <div class="col-md-6 free-consultation-right"> 
                        <div class="inner">
                            <div>               
                                <p class="free-consultation-title">High Skilled</p>
                                <img class="line" src="assets/img/landing_page/line.svg" alt="image">                
                                <p class="free-consultation-description">Let's catch up over coffee. Let out your musings and we shall help you explore the most recommended solutions for your industry.</p>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="result">
                <div class="row">
                    <div class="col-md-6 free-consultation-left">
                        <div>
                            <img src="assets/img/result_oriented.gif" alt="image">
                        </div>
                    </div>
                    <div class="col-md-6 free-consultation-right">
                        <div class="inner">
                            <div>                
                                <p class="free-consultation-title">100% Result</p>
                                <img class="line" src="assets/img/landing_page/line.svg" alt="image">                
                                <p class="free-consultation-description">Let's catch up over coffee. Let out your musings and we shall help you explore the most recommended solutions for your industry.</p>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <script>
        var a = document.getElementById("id_one");
        var b = document.getElementById("id_two");
        var c = document.getElementById("id_three");
        var a1 = document.getElementById("consultation");
        var b1 = document.getElementById("highlyskilled");
        var c1 = document.getElementById("result");
        var array_one = ["a","b","c"]; 
        var sec=0;
        var i = 0;
        var res = " ";
        function theena(){          
            res = array_one[i];
            i++;
            a.classList.remove("active");
            b.classList.remove("active");
            c.classList.remove("active");
            a1.classList.remove("active");
            b1.classList.remove("active");
            c1.classList.remove("active");
            console.log(i);
            if(i==0){
                a.classList.add("active");
                a.style.transition="1s";
                a1.classList.add("active");
                a1.classList.add("show");
                setTimeout(theena,7000);
            }
            if(i==1){
                b.classList.add("active");
                b.style.transition="1s";
                b1.classList.add("active");
                b1.classList.add("show");
                setTimeout(theena,7000);
            }
            if(i==2){
                c.classList.add("active"); 
                c.style.transition="1s";
                c1.classList.add("active");
                c1.classList.add("show");
                setTimeout(theena,7000);
                i=-1;
            }
        }
        setTimeout(theena,7000);
    </script>   
    <!-- Free Consultancy Section - End -->
    <!-- Our Best Work Section - Start -->
    <style>
       .ourbest-work-right{
            background:#e04048;
            border-radius:0 60px;
            height: 220px;
            width: 80%;
            margin: auto;
            overflow: hidden;
            position: relative;
            animation: linear;
            animation-name: zoom_red;
            animation-duration:0.5s;
            margin-top:20px;
            /* transition:5s; */
       }
       @media (min-width:576px) {
        .ourbest-work-right{
            height:300px;
        }
       }
       @media (min-width:768px) {
        .ourbest-work-right{
            margin-top:0;
            height:260px;
        }
       }
       @media (min-width:992px) {
        .ourbest-work-right{
            height:300px;
        }
       }
       @media (min-width:1200px) {
        .ourbest-work-right{
            height:350px;
        }
       }
       @media (min-width:1400px) {
        .ourbest-work-right{
            height:400px;
        }
       }
       @keyframes zoom_red{
            0%{
                scale:0;
            }
            100%;{
                scale:1;
            }
       }
       .ourbest-work-right .back{
            bottom: 0;
            position: absolute;
            left: 50%;
            transform: translate(-50%, 50%);
            animation: linear;
            animation-name: move_top;
            animation-duration: 2s;
            width: 100%;
            height: auto;
       }
       @keyframes move_top {
            0%{
                bottom:-100%;
            }
        }
    </style>
    <div class="container-fluid ourbest-work" id="best_work">
        <div class="container">  
            <div class="row">
                <div class="col-md-6 left">
                    <div class="ourbest-work-left">
                        <p class="ourbest-work-title">Our Best Work</p>
                        <img id="line" src="assets/img/line_arrow.svg"  alt="image">
                        <div class="outer">
                            <p class="project-title">Gatello-1 <img src="assets/img/getelo.png" style="display:inline;margin-left:20px;width:30px; height:auto;margin-bottom:5px" alt=""></p>                
                            <p class="project-description">Let’s catch up over coffee. Let out your musings and we shall help you explore the most recommended solutions for your industry.</p>
                            <a href="casestudy.php"><input type="button" value="View"></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 best_right" id="arun">
                    <div class="" id="ourbest_work">
                        <img class="back" src="assets/img/best_work_image.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
            var win_top =document.getElementById("best_work").offsetTop;
            window.addEventListener("scroll", function(){
            if (window.scrollY > win_top-850){
                document.getElementById('arun').style.visibility="visible";
                document.getElementById('ourbest_work').classList.add("ourbest-work-right");
                document.getElementById('ourbest_work').classList.add("back");
            }
            else{
                document.getElementById('ourbest_work').classList.remove("ourbest-work-right"); 
                document.getElementById('arun').style.visibility="hidden";
            }
        })    
    </script>
    <!-- Our Best Work Section - End -->
    <!-- How-Colan-developers - Start -->
    <style>
        @media (max-width:768px) {
            .how-CD-outer{
                display:none;
            }
        }
        @media (max-width:768px) {
            .how-CD .inner .mob_main{
                display:none;
            }
        }
        @media (max-width:768px) {
            .how-CD .inner .desktop_main{
                padding-left:0;
                padding-right:0;
            }
        }
        .how-CD-outer {
            padding:40px 0;
            margin-bottom:200px;
            background-image:url(assets/img/rocket_line_two.svg);
            background-repeat:no-repeat;
            background-size:cover;
        }
        .how-CD-outer .title{
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 40px;
            color: #3C3C3C;
            margin-bottom:0;
        }
        @media (min-width:1400px) {
            .how-CD-outer .title{
                font-style: normal;
                font-weight: 600;
                font-size: 40px;
                line-height: 47px;
                color: #3C3C3C;
            }
        }
        .how-CD-outer .sub-title{
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 24px;
            color: #636363;
            /* width: 50%; */
            margin: auto;
        }
        @media (min-width:1400px) {
            .how-CD-outer .sub-title{
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
                line-height: 24px;
                color: #636363;
                width: 50%;
                margin: auto;
            }
        }
        .tab {
            overflow: hidden;  
            /* border: 1px solid #ccc; */
            /* background-color: #f1f1f1; */
            display: flex;
            justify-content: center;
        }
        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;  
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #E04048;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;  
            border-top: none;
            
        }
        .tabcontent.show {
            display: block;
        }

        .how-CD{
            background:#E04048;
            height:20vh;
            position:relative;
            /* margin:60px 0; */
            margin-top:50px;
            background-image:url(assets/img/white_line.svg);
            background-position:center;
            background-repeat:no-repeat;
            background-size:contain;
        }
        @media (min-width:992px) {
            .how-CD{
                background:#E04048;
                height:30vh;
                position:relative;
                /* margin:60px 0; */
                margin-top:150px;
                background-image:url(assets/img/white_line.svg);
                background-position:center;
                background-repeat:no-repeat;
                background-size:contain;
            }
        }
        .how-CD .inner{
            padding-left:0;
            padding-right:0;
            position: absolute;
            left:0;
            top:50%;
            transform:translateY(-50%)

        }
        @media (min-width:992px) {
            .how-CD .inner{
                position:absolute;
                left:0;
                top:50%;
                box-sizing:content-box;
                transform:translateY(-50%);
            }    
        }
        .how-CD .inner .tab .tablinks{
            border-radius:50%;
            padding:7px;
            background: #D9D9D9;
            margin-right:10px;
        }
        .how-CD .inner .tab .tablinks:hover{
            background:#e04048;
        }
        .how-CD .inner .tab .tablinks.active{
            background:#e04048;
        }
        .how-CD .inner .left{  
            background: url('assets/img/landing_page/mobile.svg');
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            height:70vh;

            display:flex;
            justify-content:center;
            position:relative;
        }
        .how-CD .inner .left .tabcontent{
            position:absolute;
            /* bottom:50%; */
            bottom: 33%;
            left: 50%;
            transform: translateX(-37%);
        }
        @media (min-width:992px) {
            .how-CD .inner .left .tabcontent{
                transform: translateX(-42%);
            }
        }
        @media (min-width:1200px) {
            .how-CD .inner .left .tabcontent{
                transform:translateX(-37%);
            }
        }
        @media (min-width:1400px) {
            .how-CD .inner .left .tabcontent{
                position:absolute;
                /* bottom:50%; */
                bottom: 33%;
                left: 50%;
                transform: translateX(-39%);
            }
        }
        .how-CD .inner .left .tabcontent .tab_img{
            width:80%;
            height:auto;
        }
        @media (min-width:992px) {
            .how-CD .inner .left .tabcontent .tab_img{
                width:70%;
                height:auto;
            }
        }
        @media (min-width:1200px) {
            .how-CD .inner .left .tabcontent .tab_img{
                width:70%;
                height:auto;
            }
        }
        @media (min-width:1400px) {
            .how-CD .inner .left .tabcontent .tab_img{
                width:75%;
                height:auto;
            } 
        }
        .how-CD .inner .right{
            /* background: url('assets/img/laptop_image.png'); */
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            height:45vh;
            position:relative;
        }
        @media (min-width:992px) {
            .how-CD .inner .right{
                /* background: url('assets/img/laptop_image.png'); */
                background-repeat: no-repeat;
                background-size: contain;
                background-position: center;
                /* height:7width:0vh; */
                width:400px;
                position:relative;
            }  
        }
        .how-CD .inner .right .tabcontent{
            position:absolute;
            bottom:27%;
            width:85%;
            left:50%;
            transform:translateX(-50%);
        }
        @media (min-width:992px) {
            .how-CD .inner .right .tabcontent{
                position:absolute;
                bottom:28%;
                width:85%;
                left:50%;
                transform:translateX(-50%);
            } 
        }
        @media (min-width:1200px) {
            .how-CD .inner .right .tabcontent{
                bottom:25%;
                width:85%;
            }
        }
        @media (min-width:1400px) {
            .how-CD .inner .right .tabcontent{
                position:absolute;
                bottom:25%;
                width:85%;
                left:50%;
                transform:translateX(-50%);
            }
        }
       .how-CD .inner .right .tabcontent .title{
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 24px;
            color: #3A3A3A;
            margin-bottom:-17px;
            padding:5px 0;
        }
        @media (min-width:992px) {
            .how-CD .inner .right .tabcontent .title{
                font-size:22px;
                line-height:28px;
                margin-bottom:-10px;
            }
        }
        @media (min-width:1200px) {
            .how-CD .inner .right .tabcontent .title{
                margin-bottom:-15px;
                font-size:26px;
            }
        }
        @media (min-width:1400px) {
            .how-CD .inner .right .tabcontent .title{
                font-style: normal;
                font-weight: 700;
                font-size: 30px;
                line-height: 38px;
                color: #3A3A3A;
                margin-bottom:-15px;
                padding:5px 0;
            }
        }
        .how-CD .inner .right .tabcontent .rocket_arrow_img{
            width:60%
        }
        @media (min-width:992px) {
            .how-CD .inner .right .tabcontent .rocket_arrow_img{
                margin-bottom:-3px;
                width:70%;
            }
        }
        @media (min-width:1200px) {
            .how-CD .inner .right .tabcontent .rocket_arrow_img{
                margin-bottom:-10px;
            }
        }
        .how-CD .inner .right .tabcontent .sub-title{
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 24px;
            color: #717171;
            width:100% !important;
            text-align:justify;
        }
        @media (min-width:992px) {
            .how-CD .inner .right .tabcontent .sub-title{
                font-size:14px;
                line-height:24px;
            }
        }
        @media (min-width:1200px) {
            .how-CD .inner .right .tabcontent .sub-title {
                font-size:17px;
                line-height:28px;
            }   
        }
        @media (min-width:1400px) {
            .how-CD .inner .right .tabcontent .sub-title{
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                line-height: 30px;
                color: #717171;
                width:100% !important;
            } 
        }
        .how-works{
            height:150px;
            background:#e04048;
            display:flex;
            justify-content:center;
            position:relative;
            align-items:center;
            padding:0;
        }
        @media (min-width:768px) {
            .how-works{
                height:150px;
            }
        }
        @media (min-width:992px) {
            .how-works{
                height:200px;
            }
        }
        @media (min-width:1200px) {
            .how-works{
                height:260px;
            }
        }
        .how-works .container{
            height:700px;
            position:absolute;
            display:flex;
            justify-content:center;
            flex-direction:column;
            align-items:center;
            /* background:green; */
        }
        @media (min-width:992px) {
            .how-works .container{
                height:600px;
            }
        }
        @media (min-width:1200px) {
            .how-works .container{
                height:700px;
            }
        }
        .how-works .slide_phn{ position:relative;}
        .how-works .slide_lap{position:relative;}
        .how-works .slide_phn img{
            width:100%;
            height:auto;
            max-height:700px;
        }
        .how-works .slide_lap img{
            width:100%;
            height:auto;
            max-height:700px;
        }
        .how-works .slide_phn .inner_slide{
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            width:215px;
        }
        /* @media (min-width:768px) {
            .how-works .slide_phn .inner_slide{
                width:160px;
            }
        } */
        @media (min-width:992px) {
            .how-works .slide_phn .inner_slide{
                width:215px;
            }
        }
        @media (min-width:1400px) {
            .how-works .slide_phn .inner_slide{
                width:250px;
            }
        }
        .how-works .slide_lap .inner_slide{
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            width:470px;
        }
        @media (min-width:992px) {
            .how-works .slide_lap .inner_slide{
                width:470px;
            }
        }
        @media (min-width:1200px) {
            .how-works .slide_lap .inner_slide{
                width:550px;
            }
        }
        @media (min-width:1400px) {
            .how-works .slide_lap .inner_slide{
                width:600px;
            }
        }
        .how-works .slide_lap .inner_slide .tabcontent{
            padding:40px 50px 10px 50px;
        }
        @media (min-width:1200px) {
            .how-works .slide_lap .inner_slide .tabcontent{
                padding:40px 50px 10px 50px;
            }
        }
        @media (min-width:1400px) {
            .how-works .slide_lap .inner_slide .tabcontent{
                padding:35px 25px 10px 25px;
            }
        }
        .how-works .slide_lap .inner_slide .title{
            font-size:18px;
            font-weight:700;
            margin-bottom:0;
            line-height:10px;
        }
        @media (min-width:768px) {
            .how-works .slide_lap .inner_slide .title{
                font-size:18px;
            }
        }
        @media (min-width:992px) {
            .how-works .slide_lap .inner_slide .title{
                font-size:20px;
                line-height:10px;          
            }
        }
        @media (min-width:1200px) {
            .how-works .slide_lap .inner_slide .title{
                font-size: 26px;
                font-weight: 700;
                line-height:14px;
                /* margin-bottom: 0; */
            }
        }
        @media (min-width:1400px) {
            .how-works .slide_lap .inner_slide .title{
                font-size:32px;
                font-weight:700;
                /* margin-bottom:0; */
            }
        }
        .how-works .slide_lap .inner_slide .rocket_arrow_img{
            width:30%;
        }
        @media (min-width:1200px) {
            .how-works .slide_lap .inner_slide .rocket_arrow_img{
                width:30%;
            }
        }
        @media (min-width:1400px) {
            .how-works .slide_lap .inner_slide .rocket_arrow_img{
                width:35%;
            }
        }
        .how-works .slide_lap .inner_slide p{
            font-size:14px;
            font-weight:400;
            margin-bottom:0;
            line-height:24px;
            text-align:left;
        }
        @media (min-width:992px) {
            .how-works .slide_lap .inner_slide p{
                font-size:14px;
                line-height:24px;
            }
        }
        @media (min-width:1200px) {
            .how-works .slide_lap .inner_slide p{
                font-size:16px;
                font-weight:400;
                /* margin-bottom:0; */
                line-height:30px;
            }   
        }
        @media (min-width:1400px) {
            .how-works .slide_lap .inner_slide p{
                font-size:18px;
                font-weight:400;
                /* margin-bottom:0; */
                line-height:38px;
            }
        }
        .how-works-main{
            height:700px;
            display:flex;
            align-items:center; 
        }
        @media (min-width:768px) {
            .how-works .container{
                max-width:740px;
            }
        }
        @media (min-width:992px) {
            .how-works .container{
                max-width:980px;
            }
        }
        @media (min-width:1200px) {
            .how-works .container{
                max-width:1160px;
            }
        }
        @media (min-width:1400px) {
            .how-works .container{
                max-width:1360px;
            }
        }
        .how-works .tablinks{
            border-radius: 50%;
            padding: 7px;
            background: #D9D9D9;
            margin-right: 10px;
        }
        @media (max-width:768px) {
            .how-works-section{
                display: none;
            }
        }
        .how-works-section{
            padding-top:20px;
            padding-bottom:20px;
        }
        @media (min-width:576px) {
            .how-works-section{
                background-image:url(assets/img/rocket_line_two.svg);
                background-repeat:no-repeat;
            }
        }
        @media (min-width:768px) {
            .how-works-section{
                padding-top:25px;
                padding-bottom:25px;
                background-size:contain;
            }  
        }
        @media (min-width:992px) {
            .how-works-section{
                margin-top:15px;
                padding-top:30px;
                padding-bottom:30px;
               
            }
        }
        @media (min-width:1200px) {
            .how-works-section{
                margin-top:20px;
                padding-top:45px;
                padding-bottom:35px;
            }
        }
        @media (min-width:1400px) {
            .how-works-section{
                margin-top:30px;
                padding-top:60px;
                padding-bottom:40px;
            } 
        }
        .how-works-section .header{
            position:relative;
        }
        .how-works-section .header .title{
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 32px;
            color: #3C3C3C;
            margin-bottom:0;
            padding:5px 0;
        }
        @media (min-width:576px) {
            .how-works-section .header .title{
                font-size:24px;
            }
        }
        @media (min-width:768px) {
            .how-works-section .header .title{
                font-size:26px;
            }
        }
        @media (min-width:992px) {
            .how-works-section .header .title{
                font-size:28px;
                padding:10px 0;
                line-height:34px;
            }
        }
        @media (min-width:1200px) {
            .how-works-section .header .title{
                font-size:34px;
                line-height:40px
            }
        }
        @media (min-width:1400px) {
            .how-works-section .headeer .title{
                font-size:40px;
                line-height:47px
            }
        }
        .how-works-section .header .sub-title{
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 24px;
            text-align: center;
            color: #636363;
            margin-bottom:0;
            width:80%;
            margin:auto;
        }
        @media (min-width:576px) {
            .how-works-section .header .sub-title{
                width:66%;
                margin:auto;
            }
        }
        @media (min-width:768px) {
            .how-works-section .header .sub-title{
                width:50%;
                margin:auto;
            }
        }
        @media (min-width:992px) {
            .how-works-section .header .sub-title{
                font-size:14px;
                line-height:24px;
                width:44%;
                margin:auto;
            }
        }
        @media (min-width:1200px) {
            .how-works-section .header .sub-title{
                font-size:16px;
                line-height:26px;
                width:40%;
                margin:auto;
            }
        }
        @media (min-width:1400px) {
            .how-works-section .header .sub-title{
                font-size:18px;
                line-height:30px;
                width:40%;
                margin:auto;
            }
        }
        .how-works-section .header .robot{
            width:90px;
            position:absolute;
            top: 0;
            left: 25%;
            /* transform: translateX(-25%); */
        }
        @media (min-width:576px) {
            .how-works-section .header .robot{
                width:60px;
                left:0;
                transform:translate(50%,25%)
            }
        }
        @media (min-width:768px) {
            .how-works-section .header .robot{
                width:65px;
                left:20%;
                transform:translate(-50%,25%);
            }
        }
        @media (min-width:992px) {
            .how-works-section .header .robot{
                left:25%;
                width:70px;
                transform:translate(-50%,25%);
            }
        }
        @media (min-width:1200px) {
            .how-works-section .header .robot{
                width:80px;
                transform:translate(-25%,25%);
            }
        }
        @media (min-width:1400px) {
            .how-works-section .header .robot{
                width:90px;
                position:absolute;
                top: 0;
                left: 25%;
                transform:translate(-25%,25%);
            }
        }
    </style>    
    <div class="how-works-section">
        <div class="header">
            <p class="title text-center">How Colon Developers work ?</p>
            <p class="sub-title text-center">Our thoughts are well organized and so is our process. Scroll down and find different phases of software development.</p>
            <img class="robot" src="assets/img/kuttappan.gif" alt="robot">
        </div>
        <div class="how-works-main">
            <div class="container-fluid how-works">
                <img src="assets/img/white_line.svg" style="margin:auto; width:100%" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="slide_phn">
                                <img src="assets/img/landing_page/mobile.svg" class="" alt="">
                                <div class="inner_slide">
                                    <div class="tabcontent document show" >       
                                        <img class="tab_img" src="assets/img/daiiiiii.svg" alt="image">
                                    </div>    
                                    <div class="tabcontent development" >                    
                                        <img class="tab_img" src="assets/img/dai-2.svg" alt="image">
                                    </div>    
                                    <div class="tabcontent testing" >                    
                                        <img class="tab_img" src="assets/img/dai-3.svg" alt="image">
                                    </div>
                                    <div class="tabcontent deploy" >
                                        <img class="tab_img" src="assets/img/dai-4.svg" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7" style="margin:auto">
                            <div class="slide_lap">
                                <img src="assets/img/laptop_image.png" class="" alt="">
                                <div class="inner_slide">
                                    <div class="tabcontent document  show">
                                        <h3 class="title">Document</h3> 
                                        <img class="rocket_arrow_img" src="assets/img/rocket_arrow.svg" alt="">                  
                                        <p class="sub-title">As this stage plays a crucial part in software development, Senior members of our team who are proficient in comprehending the clients' requirements are deployed in the scene. The scope of your project, in-depth analysis, and a prediction report will give you a clear picture of how far your success is.</p>
                                    </div>    
                                    <div class="tabcontent development">
                                        <h3 class="title">Development</h3>      
                                        <img class="rocket_arrow_img" src="assets/img/rocket_arrow.svg" alt="">                    
                                        <p class="sub-title">As this stage plays a crucial part in software development, Senior members of our team who are proficient in comprehending the clients' requirements are deployed in the scene.</p>
                                    </div>    
                                    <div class="tabcontent testing" >
                                        <h3 class="title">Testing</h3>   
                                        <img class="rocket_arrow_img" src="assets/img/rocket_arrow.svg" alt="">                       
                                        <p class="sub-title">As this stage plays a crucial part in software development, Senior members of our team who are proficient in comprehending the clients' requirements are deployed in the scene. The scope of your project, in-depth analysis, and a prediction report will give you a clear picture of how far your success is.</p>
                                    </div>
                                    <div class="tabcontent deploy">
                                        <h3 class="title">Deploy</h3>  
                                        <img class="rocket_arrow_img" src="assets/img/rocket_arrow.svg" alt="">                        
                                        <p class="sub-title">As this stage plays a crucial part in software development, Senior members of our team who are proficient in comprehending the clients' requirements are deployed in the scene.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <button class="tablinks l active" id="w_one" onclick="openCity(event, 'document')" id="defaultOpen"></button>
                            <button class="tablinks p" id="x_two" onclick="openCity(event, 'development')"></button>
                            <button class="tablinks t" id="y_three" onclick="openCity(event, 'testing')"></button>
                            <button class="tablinks d" id="z_four" onclick="openCity(event, 'deploy')"></button>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
    </div>
    <script>
        var w = document.getElementById("w_one");
        var x = document.getElementById("x_two");
        var y = document.getElementById("y_three");
        var z = document.getElementById("z_four");
  
        var w1 = document.getElementsByClassName("document")[0];
        var x1 = document.getElementsByClassName("development")[0];
        var y1 = document.getElementsByClassName("testing")[0];
        var z1 = document.getElementsByClassName("deploy")[0];

        var w2 = document.getElementsByClassName("document")[1];
        var x2 = document.getElementsByClassName("development")[1];
        var y2 = document.getElementsByClassName("testing")[1];
        var z2 = document.getElementsByClassName("deploy")[1];

        var secc=0;
        var j = 0;
        function theena1(){          
            j++;
            w.classList.remove("active");
            x.classList.remove("active");
            y.classList.remove("active");
            z.classList.remove("active");

            w1.classList.remove("active");
            x1.classList.remove("active");
            y1.classList.remove("active");
            z1.classList.remove("active");

            w1.classList.remove("show");
            x1.classList.remove("show");
            y1.classList.remove("show");
            z1.classList.remove("show");
            
            w2.classList.remove("active");
            x2.classList.remove("active");
            y2.classList.remove("active");
            z2.classList.remove("active");

            w2.classList.remove("show");
            x2.classList.remove("show");
            y2.classList.remove("show");
            z2.classList.remove("show");

            
            console.log(j);
            if(j==0){
                w.classList.add("active");
                w.style.transition="1s";
                w1.classList.add("active");
                w1.classList.add("show");
                w2.classList.add("active");
                w2.classList.add("show");
                setTimeout(theena1,6000);
            }
            if(j==1){
                x.classList.add("active");
                x.style.transition="1s";
                x1.classList.add("active");
                x1.classList.add("show");
                x2.classList.add("active");
                x2.classList.add("show");
                setTimeout(theena1,6000);
            }
            if(j==2){
                y.classList.add("active"); 
                y.style.transition="1s";
                y1.classList.add("active");
                y1.classList.add("show");
                y2.classList.add("active");
                y2.classList.add("show");
                setTimeout(theena1,6000);
            }
            if(j==3){
                z.classList.add("active"); 
                z.style.transition="1s";
                z1.classList.add("active");
                z1.classList.add("show");
                z2.classList.add("active");
                z2.classList.add("show");
                setTimeout(theena1,6000);
                j=-1;
            }
        }
        setTimeout(theena1,6000);
    </script>  
    <!-- How-Colan-developers - End -->
    <!-- home_abt_main - start -->
    <div id="home_abt_main" class="container-fluid home_abt_main">
        <div class="container">
            <div class="inner">
                <div class="before">
                    <img src="assets/img/curly1.svg" alt="">
                </div>
                <div class="after">
                    <img src="assets/img/curly2.svg" alt="">
                </div>
                <div class="cnt" id="cnt_ani_scroll">
                    <h1>About Us</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, tempora rerum! Iusto quas nulla harum quod aliquid deserunt commodi labore sed iure voluptas, reiciendis sapiente alias similique distinctio voluptatem amet!</p>
                </div>
             </div>
        </div>
    </div>
    <!-- home_abt_main - end -->
    <!-- Testimonial Swiper Section - Start -->
    <div class="container-fluid testimonial">
        <div class="header text-center">
            <p class="title">Testimonials</p>
            <p class="sub-title">Know What Others Say About Us</p>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme index-testimonial" style="padding: 0px;" >
                <div class="item card carousel-item active" >
                    <p class="double-quote">&ldquo;</p>
                    <div class="flex-box">                       
                        <img class="" src="assets/img/landing_page/client-img.svg" >                        
                    </div>
                    <p class="name text-center">Keerthana</p>
                    <p class="review">Once we achieve a 100% result in the above phases, we seek feedback and reviews from our project manager. Upon sanctioning, your final software will be launched in the market with highly enabled safety and security options.</p>
                    <img class="client_rating" src="assets/img/landing_page/star-image.svg" alt="star">
                </div>
                <div class="item card carousel-item active">
                    <p class="double-quote">&ldquo;</p>
                    <div class="flex-box">                        
                        <img class="" style="border-radius: 50%;" src="assets/img/landing_page/client-img.svg" >
                    </div>
                    <p class="name text-center">Keerthana</p>
                    <p class="review">Once we achieve a 100% result in the above phases, we seek feedback and reviews from our project manager. Upon sanctioning, your final software will be launched in the market with highly enabled safety and security options.</p>
                    <img class="client_rating" src="assets/img/landing_page/star-image.svg" alt="star">                    
                </div>                           
                <div class="item card carousel-item active">
                    <p class="double-quote">&ldquo;</p>
                    <div class="flex-box">
                        <img class="" style="border-radius: 50%;" src="assets/img/landing_page/client-img.svg" >
                    </div>
                    <p class="name text-center">Keerthana</p>
                    <p class="review">Once we achieve a 100% result in the above phases, we seek feedback and reviews from our project manager. Upon sanctioning, your final software will be launched in the market with highly enabled safety and security options.</p>
                    <img class="client_rating" src="assets/img/landing_page/star-image.svg" alt="star">                    
                </div>
            </div>
        </div>
    </div> 
    <!-- Testimonial Swiper Section - End -->
    <!-- Let Catchup over Coffee - Start -->
    <div class="container-fluid lets-catchup">
            <p class="title text-center">Let’s Catchup Over Coffee</p>
            <p class="sub-title text-center">Oh yeah, our coders are great listeners.</p>
        <div class="container">
            <div class="row">
                <div class="col-md-6 left">
                    <img src="assets/img/landing_page/lets-catchup-image.gif" alt="image">
                </div>
                <div class="col-md-6 right">
                    <div style="height:100%">
                        <form class="main">
                            <div class="contact-form">
                                <label for="">Name</label>
                                <input type="text" class="name form-control" >
                            </div>
                            <div class="contact-form">
                                <label for="">Phone Number</label>
                                <input type="number" class="phone form-control">
                            </div>
                            <div class="contact-form">
                                <label for="">E-Mail</label>
                                <input type="email" class="email form-control">
                            </div>
                            <div class="contact-form">
                                <label for="">Company</label>
                                <input type="text" class="company form-control">
                            </div>
                            <div class="robot_btn">
                                <img class="mini-robot" src="assets/img/kuttappan.gif" alt="">
                                <input class="btn" type="submit" value="Sign Up">        
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Let Catchup over Coffee - End -->
    <!--Footer Section Start-->
    <?php include("footer.php")?>
    <!--Footer Section End-->
    <?php include("script.php")?>
    <script>
        window.addEventListener('load', () => {
            document.querySelector('.loader').style.display ="none";
        })
        $('.owl-wors').owlCarousel({
            loop:true,
            margin:10,
            // autoplay: true,
            nav:false,
            // animateOut: 'slideOutUp',
            animateIn: 'slideInUp',
            dots:true,
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
        $('.free-consult-owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            items:1,
        })
        var bef_heig=document.getElementsByClassName("after");
        bef_heig=bef_heig[0].offsetHeight;
        // alert(bef_heig);
        document.getElementById("cnt_ani_scroll").style.height=bef_heig+"px";
        var fromtop=document.getElementById("home_abt_main").offsetTop;
        // alert(fromtop);
        $(function() {
            var header = $(".home_abt_main");
            $(window).scroll(function() {    
                var scroll = $(window).scrollTop();
                if (scroll >= fromtop-500) {
                    console.log(fromtop);
                    console.log(scroll);
                    document.getElementById("home_abt_main").classList.add("addani");
            // header.removeClass('header').addClass("header-alt");
                } 
            });
        });
        /* index - Testimonial Owl-Carousel - Start */
        $('.index-testimonial').owlCarousel({
            autoplay:true,
            loop:true,
            margin:0,
            center: true,
            nav:true,
            dots:false,
            autoplaySpeed: 2000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })        
        /* index - Testimonial Owl-Carousel - End */
    </script>
</body>
</html>
     
                
               
               
               