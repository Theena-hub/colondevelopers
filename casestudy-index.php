<!DOCTYPE html>
<html lang="en">
<?php include("head.php")?>
<style>
    .index-casestudy-banner{
        display: flex;
        justify-content: center;
        align-items: center;
        height:50vh;
        background-image: url('assets/img/index-casestudy-back.svg');
        background-repeat: repeat-y;
        padding-top: 25px;
        padding-bottom: 25px;
        position: relative;
    }
    @media (min-width:576px) {
        .index-casestudy-banner{
            height:60vh;
        }
    }
    @media (min-width:768px) {
        .index-casestudy-banner{
            background-size:65%;
            height:54vh;
        }
    }
    @media (min-width:992px) {
        .index-casestudy-banner{
            height: 66vh ;
            background-size:65%;
        }
    }
    @media (min-width:1200px) {
        .index-casestudy-banner{
            background-size:68%;
            height:65vh;
        }
    }
    @media (min-width:1400px) {
        .index-casestudy-banner{  
            display: flex;
            justify-content: center;
            align-items: center;
            height:70vh;
            background-image: url('assets/img/index-casestudy-back.svg');
            background-repeat: repeat-y;
            background-size:70%;
        }
    }
    .index-casestudy-banner .left{
       /* margin: auto; */
       text-align: center;
    }
    @media (min-width:768px) {
        .index-casestudy-banner .left{
            /* margin: auto; */
            text-align: left;
        }
    }
    @media (min-width:992px) {
        .index-casestudy-banner .left{
            margin: auto;
        }
    }
    @media (min-width:1400px) {
        .index-casestudy-banner .left{
            margin: auto;
        } 
    }
    .index-casestudy-banner .left .title{
        font-style: normal;
        font-weight: 600;
        font-size: 25px;
        line-height: 34px;
        letter-spacing: 0.01em;
        color: #FFFFFF;
        margin-bottom: 0;
        text-align: center;
        padding:5px 0;
    }
    @media (min-width:768px) {
        .index-casestudy-banner .left .title{
            font-style: normal;
            font-weight: 600;
            font-size: 24px;
            line-height: 34px;
            letter-spacing: 0.01em;
            color: #FFFFFF;
            margin-bottom: 0;
            text-align: left;
            width:80%;
        }
    }
    @media (min-width:992px) {
        .index-casestudy-banner .left .title{
            font-style: normal;
            font-weight: 600;
            font-size: 36px;
            line-height: 44px;          
            letter-spacing: 0.01em;
            color: #FFFFFF;
            width:80%;
        } 
    }
    @media (min-width:1200px) {
        .index-casestudy-banner .left .title{
            font-style: normal;
            font-weight: 600;
            font-size: 40px;
            line-height: 44px;          
            letter-spacing: 0.01em;
            color: #FFFFFF;
            width:80%;
        } 
    }
    @media (min-width:1400px) {
        .index-casestudy-banner .left .title{
            font-style: normal;
            font-weight: 600;
            font-size: 50px;
            line-height: 60px;          
            letter-spacing: 0.01em;
            color: #FFFFFF;
            width:80%;
        } 
    }
    .index-casestudy-banner .left .title span{
        font-size: 40px;
    }
    @media (min-width:992px) {
        .index-casestudy-banner .left .title span{
            font-size: 54px;
            line-height: 67px;
        }
    }
    @media (min-width:1200px) {
        .index-casestudy-banner .left .title span{
            font-size: 64px;
            line-height: 77px;
        }
    }
    @media (min-width:1400px) {
        .index-casestudy-banner .left .title span{
            font-size: 74px;
            line-height: 87px;
        }
    }
    .index-casestudy-banner .left .sub-title{
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 24px;
        color: #FFFFFF;
        text-align: center;
        margin-bottom:0;
        padding:5px 0;
    }
    @media (min-width:768px) {
        .index-casestudy-banner .left .sub-title{
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 24px;
            color: #FFFFFF;
            text-align: left;
        }
    }
    @media (min-width:992px) {
        .index-casestudy-banner .left .sub-title{
            font-style: normal;
            font-weight: 400;
            font-size: 15px;
            line-height: 28px;
            color: #FFFFFF;
            width: 80%;
            margin-top:20px;
        }  
    }
    @media (min-width:1200px) {
        .index-casestudy-banner .left .sub-title{
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 28px;
            color: #FFFFFF;
            width: 80%;
            margin-top:20px;
        }  
    }
    @media (min-width:1400px) {
        .index-casestudy-banner .left .sub-title{
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 28px;
            color: #FFFFFF;
            width: 80%;
            margin-top:20px;
        }  
    }
    .index-casestudy-banner .left .btn{
        font-style: normal;
        font-weight: 700;
        font-size: 14px;
        line-height: 18px;
        color: #292929;
        background: #FFFFFF;
        padding: 10px 18px;
        margin-top:10px;
    }
    @media (min-width:992px) {
        .index-casestudy-banner .left .btn{
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            line-height: 18px;
            color: #292929;
            background: #FFFFFF;
            padding: 14px 24px;
            margin-top:20px;
        }
    }
    @media (min-width:1200px) {
        .index-casestudy-banner .left .btn{
            font-style: normal;
            font-weight: 600;
            font-size: 18px;
            line-height: 18px;
            color: #292929;
            background: #FFFFFF;
            padding: 18px 28px;
            margin-top:20px;
        }
    }
    @media (min-width:1400px) {
        .index-casestudy-banner .left .btn{
            font-style: normal;
            font-weight: 600;
            font-size: 18px;
            line-height: 18px;
            color: #292929;
            background: #FFFFFF;
            padding: 24px 40px;
            margin-top:20px;
        }
    }
    .index-casestudy-banner .right{
            display: none;
    }
    @media (min-width:768px) {
        .index-casestudy-banner .right{
            display: block;
            position:relative;
        } 
    } 
    @media (min-width:768px) {
        .index-casestudy-banner .right img{
            position: absolute;
            left: 0;
            top: 0;
            transform: translate(0%, 40%);
            width: 100%;
            height: auto;
        }
    }
    @media (min-width:992px) {
        .index-casestudy-banner .right img{
           position:absolute;
           left:0;
           top:0;
           transform:translate(0%,30%);
           width:100%;
           height:auto;
        }
    }
    @media (min-width:1200px) {
        .index-casestudy-banner .right img{
           position:absolute;
           left:0;
           top:0;
           transform:translate(0%,21%);
           width:100%;
           height:auto;
        }
    }
    @media (min-width:1400px) {
        .index-casestudy-banner .right img{
           position: absolute;
           left:0;
           top:0;
           transform:translate(0%,20%);
           width:100%;
           height:auto;
        }
    }
    .index-casestudy-section-two{
        margin-top:20px;
        padding-top:20px;
        padding-top:20px;
        background-image:url(assets/img/rocket_line.svg);
        background-size:contain;
        background-repeat:no-repeat;
        position:relative;
    }
    @media (min-width:576px) {
        .index-casestudy-section-two{
            margin-top:20px;
        }
    }
    @media (min-width:768px) {
        .index-casestudy-section-two{
            padding-top:25px;
            padding-bottom:25px;
            margin-top:50px;
        }
    }
    @media (min-width:992px) {
        .index-casestudy-section-two{
            padding-top:30px;
            padding-bottom:30px;
            margin-top:50px;
        }
    }
    @media (min-width:1200px) {
        .index-casestudy-section-two{
            padding-top:35px;
            padding-bottom:35px;
            margin-top:50px;
        }
    }
    @media (min-width:1400px) {
        .index-casestudy-section-two{
            padding-top:40px;
            padding-bottom:40px;
            margin-top:50px;
        }
    }
    .index-casestudy-section-two .planet_img{
        position: absolute;
        width: 50px;
        left: 0;
        top: 0;
        transform: translate(50%,0%);
    }
    @media (min-width:576px) {
        .index-casestudy-section-two .planet_img{
            position:absolute;
            width:80px;
            left:0;
            top:0;
            transform:translate(25%,0%);
        }
    }
    @media (min-width:768px) {
        .index-casestudy-section-two .planet_img{
            position: absolute;
            width: 100px;
            left: 0;
            top: 0;
            transform: translate(25%,0%);
        }
    }
    @media (min-width:992px) {
        .index-casestudy-section-two .planet_img{
            position: absolute;
            width: 100px;
            left: 0;
            top: 0;
            transform: translate(50%,0%);
        }
    }
    @media (min-width:1200px) {
        .index-casestudy-section-two .planet_img{
            position: absolute;
            width: 100px;
            left: 0;
            top: 0;
            transform: translate(50%,10%);
        }   
    }
    @media (min-width:1400px) {
        .index-casestudy-section-two .planet_img{
            position: absolute;
            width: 100px;
            left: 0;
            top: 0;
            transform: translate(50%,50%);
        }    
    }
    .index-casestudy-section-two .title{
        font-style: normal;
        font-weight: 600;
        font-size: 20px;
        line-height: 28px;
        color: #3C3C3C;
        text-align:center;
        margin-bottom:0;
        padding:5px 0;
    }
    @media (min-width:576px) {
        .index-casestudy-section-two .title{
            font-size: 24px;
            line-height:30px;
        }
    }
    @media (min-width:768px) {
        .index-casestudy-section-two .title{
            font-size:28px;
            line-height:32px;
        }
    }
    @media (min-width:992px) {
        .index-casestudy-section-two .title{
            font-size:32px;
            line-height:34px;
        }
    }
    @media (min-width:1200px) {
        .index-casestudy-section-two .title{
            font-size:36px;
            line-height:40px;
        }
    }
    @media (min-width:1400px) {
        .index-casestudy-section-two .title{
            font-style: normal;
            font-weight: 600;
            font-size: 40px;
            line-height: 47px;
            color: #3C3C3C;
            text-align:center;
            margin-bottom:0;
            padding:8px 0;
        }
    }
    .index-casestudy-section-two .container{
        margin-top:30px;
    }
    .index-casestudy-section-two .card{
        padding: 10px;
        background: #E6E6E6;
        border-radius:8px;
        /* height: 100%; */
        height:360px;
        border: none;
        overflow:hidden;
    }
    @media (min-width:576px) {
        .index-casestudy-section-two .card{
            height:370px;
        }
    }
    @media (min-width:768px) {
        .index-casestudy-section-two .card{
            height:380px;
        }
    }
    @media (min-width:992px) {
        .index-casestudy-section-two .card{
            height:350px;
        }
    }
    @media (min-width:1200px) {
        .index-casestudy-section-two .card{
            height:370px;
        }
    }
    @media (min-width:1400px) {
        .index-casestudy-section-two .card{
            height:420px;
        }
    }
    .index-casestudy-section-two .mobile-card{
        position:relative;
        overflow:hidden;
        height:400px;
    }
    @media (min-width:576PX) {
        .index-casestudy-section-two .mobile-card{
            height:390px;
        }
    }
    @media (min-width:768px) {
        .index-casestudy-section-two .mobile-card{
            position:relative;
            overflow:hidden;
            height:400px;
        }
    }
    @media (min-width:992px) {
        .index-casestudy-section-two .mobile-card{
            position:relative;
            overflow:hidden;
            height:380px;
        }
    }
    @media (min-width:1200px) {
        .index-casestudy-section-two .mobile-card{
        position:relative;
        overflow:hidden;
        height:400px;
    }
    }
    @media (min-width:1400px) {
        .index-casestudy-section-two .mobile-card{
            position:relative;
            overflow:hidden;
            height:450px;
        }   
    }
    .index-casestudy-section-two .slide_desktop{
        height:420px;
    }
    @media (min-width:576px) {
        .index-casestudy-section-two .slide_desktop{
            height:410px;
        }
    }
    @media (min-width:768px) {
        .index-casestudy-section-two .slide_desktop{
            height:430px;
        }
    }
    @media (min-width:992px) {
        .index-casestudy-section-two .slide_desktop{
            height:400px;
        }
    }
    @media (min-width:1200px) {
        .index-casestudy-section-two .slide_desktop{
            height:425px;
        }
    }
    @media (min-width:1400px) {
        .index-casestudy-section-two .slide_desktop{
            height:480px;
        }
    }
    .index-casestudy-section-two .card .title{
        font-style: normal;
        font-weight: 600;
        font-size: 18px;
        line-height: 38px;
        color: #2C2C2C;
        margin-bottom: 0;
    }
    @media (min-width:576px) {
        .index-casestudy-section-two .card .title{
            font-size:18px;
        }
    }
    @media (min-width:786px) {
        .index-casestudy-section-two .card .title{
            font-size:20px;
        }
    }
    @media (min-width:992px) {
        .index-casestudy-section-two .card .title{
            font-size:24px;
        }
    }
    @media (min-width:1200px) {
        .index-casestudy-section-two .card .title{
            font-size:28px;
        }
    }
    @media (min-width:1400px) {
        .index-casestudy-section-two .card .title{
            font-size: 32px;
            line-height: 38px;
        }
    }
    .index-casestudy-section-two .card .sub-title{
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 24px;
        color: #3C3C3C;
        margin-bottom: 0;
    }
    @media (min-width:1400px) {
        .index-casestudy-section-two .card .sub-title{
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 26px;
            color: #3C3C3C;
        } 
    }
    .index-casestudy-section-two .card .mobile{
        /* position: relative; */
    }
    .index-casestudy-section-two .card .mobile img{
        position: absolute;
    }
    .index-casestudy-section-two .card .mobile  #mob-1,.index-casestudy-section-two .card .mobile  #mob-3{
        width:50%;
    }
    .index-casestudy-section-two .card .mobile  #mob-2{
        width:60%;
    }
    .index-casestudy-section-two .card:hover .mobile #mob-1 {
        animation: linear;
        animation-name: mob-left;
        animation-duration: .8s;
        
    }
    @keyframes mob-left {
        0% {
            left: -20%;
        }
    }
    .index-casestudy-section-two .card:hover .mobile #mob-2{
        animation: linear;
        animation-name: mob-top;
        animation-duration: .8s; 
    }
    @keyframes mob-top {
        0%{
            bottom:-20%;
        }
    }
    .index-casestudy-section-two .card:hover .mobile #mob-3{
        animation: linear;
        animation-name: mob-right;
        animation-duration: .8s;
    }
    @keyframes mob-right {
        0%{
            right: -20%;
        }
    }
    .index-casestudy-section-two .card:hover #desktop{
        animation: linear;
        animation-name: zoom;
        animation-duration: .8s;
    }
    @keyframes zoom {
        0%{
            transform: scale(0);
        }
        100%{
            transform: scale(1);
        }
    }
    .index-casestudy-section-two .card #slide_desktop{
        position:absolute;
    }
    .index-casestudy-section-two .card:hover #slide_desktop{
        animation:linear;
        /* position: absolute; */
        animation-name: des-sld_right;
        animation-duration: .8s;
    }
    @keyframes des-sld_right {
        0%{
            right:-40%;
        }
        100%{
            right:0%;
        }
    }
</style>
<body style="font-family: Roboto;">
    <!--Navbar Section Start-->
    <?php include("nav.php")?>
    <!--Navbar Section End--> 
    <!-- Banner - Start -->
    <div class="container-fluid index-casestudy-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left">   
                    <p class="title"><span>Have</span> a glance at our works !</p>
                    <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate commodo ornare eu tincidunt amet integer sed. Dis porttitor felis mauris elit.</p>
                    <input type="button" value="Get a Proposal" class="btn">
                </div>
                <div class="col-md-6">
                    <div class="right">
                        <img src="assets/img/casestudy-index-bg.svg" alt="image">
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Banner - End -->
    <!-- Start -->
    <div class="container-fluid index-casestudy-section-two">
        <img class="planet_img" src="assets/img/planet.gif" alt="image">
        <p class="title">Our Project</p>
        <div class="container">
            <div class="row">
                <!-- <div class="flex-box"> -->
                    <div class="col-lg-4 col-sm-6" >
                        <div class="card mobile-card" style="margin-bottom:15px">
                            <p class="title">Header</p>
                            <p class="sub-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident iste cumque cum eveniet quam vero consequatur, beatae corrupti obcaecati accusamus nesciunt perspiciatis perferendis.</p>
                            <div class="mobile" >
                                <img id="mob-1" style="left: 0;bottom:0" class="" src="assets/img/left-mobile.svg" alt="image">
                                <img id="mob-2" style="z-index: 1;bottom:0;left: 50%;transform: translateX(-50%);bottom:0" class="" src="assets/img/center-mobile.svg" alt="image">
                                <img id="mob-3" style="right: 0;bottom:0" class="" src="assets/img/right-mobile.svg" alt="image">
                            </div>
                        </div>
                        <div class="card" style="margin-bottom:15px">
                            <p class="title">Header</p>
                            <p class="sub-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident iste cumque cum eveniet quam vero consequatur, beatae corrupti obcaecati accusamus nesciunt perspiciatis perferendis.</p>
                            <img id="desktop" class="img-fluid" src="assets/img/index-cs-card-2.svg" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6" >
                        <div class="card" style="margin-bottom:15px;">
                            <p class="title">Header</p>
                            <p class="sub-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident iste cumque cum eveniet quam vero consequatur, beatae corrupti obcaecati accusamus nesciunt perspiciatis perferendis.</p>
                            <img id="desktop" class="img-fluid" src="assets/img/index-cs-card-2.svg" alt="image">
                        </div>
                        <div class="card mobile-card" style="margin-bottom:15px">
                            <p class="title">Header</p>
                            <p class="sub-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident iste cumque cum eveniet quam vero consequatur, beatae corrupti obcaecati accusamus nesciunt perspiciatis perferendis.</p>
                            <div class="mobile" >
                                <img id="mob-1" style="left: 0;bottom:0" class="img-fluid" src="assets/img/left-mobile.svg" alt="image">
                                <img id="mob-2" style="z-index: 1;bottom:0;left: 50%;transform: translateX(-50%);bottom:0" class="img-fluid" src="assets/img/center-mobile.svg" alt="image">
                                <img id="mob-3" style="right: 0;bottom:0" class="img-fluid" src="assets/img/right-mobile.svg" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6" >
                        <div class="card slide_desktop" style="margin-bottom:15px">
                            <p class="title">Header</p>
                            <p class="sub-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident iste cumque cum eveniet quam vero consequatur, beatae corrupti obcaecati accusamus nesciunt perspiciatis perferendis.</p>
                            <img style="bottom:0" id="slide_desktop" class="img-fluid" src="assets/img/index-cs-card-3.svg" alt="image">
                        </div>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <!-- End -->
    <!--Footer Section Start-->
    <?php include("footer.php")?>
    <!--Footer Section End-->
    <?php include("script.php")?> 
</body>
</html>