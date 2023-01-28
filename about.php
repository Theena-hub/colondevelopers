<!DOCTYPE html>
<html lang="en">
<?php include("head.php")?>
<style>
        #mainsection {
            background: linear-gradient(180deg, #E04048 0%, rgba(224, 64, 72, 0) 50%);
            height: 80vh;
            overflow: hidden;
            padding-left:0;
            padding-right:0;
        }
        @media (min-width:1200px) {
            #mainsection{
                height: 90vh;
            }
        }
        @media (min-width:1400px) {
            #mainsection {
                background: linear-gradient(180deg, #E04048 0%, rgba(224, 64, 72, 0) 50%);
                height: 100vh;
                overflow: hidden;
            }   
        }
        #section-2 {
            background-image: url("assets/img/land.svg");
            background-repeat: no-repeat;
            background-position: 125% 75%;
            background-size: 95%;
            font-size: 20px;
            
        }
        #section-1 {
            height: 20vh;
            background-image: url("assets/img/abt_hero_bg.svg");
            background-repeat: repeat-x;
            background-size: cover;
            background-position:right;
            /* padding-left:20px ; */
        }

        .about-banner .title {
            font-style: normal;
            font-weight: 800;
            font-size: 34px;
            line-height: 47px;
            letter-spacing: 0.035em;
            color: #333333;
            margin-bottom: 0;
            padding: 5px 0;
            text-align: center;
        }
        @media (min-width:1400px) {
            .about-banner .title {
                font-style: normal;
                font-weight: 800;
                font-size: 64px;
                line-height: 75px;
                letter-spacing: 0.035em;
                color: #333333;
                margin-bottom: 0;
                padding: 5px 0;
                text-align: center;
            }
        }
        #section-2 {
            margin-top: 20%;
        }
        @media (min-width:768px) {
            #section-2{
                margin-top: 10%;
            }
        }
        @media (min-width:1400px) {
            #section-2 {
                margin-top: 10%;
            }
        }


        .about-banner .sub-title {
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 24px;
            text-align: center;
            color: #595959;
            margin:auto;
            margin-bottom: 0;
            text-align: center;
        }
        @media (min-width:768px) {
            .about-banner .sub-title{
                width:50%;
            }
        }
        @media (min-width:992px) {
            .about-banner .sub-title{
                width:40%;
            }
        }
        @media (min-width:1200px) {
            .about-banner .sub-title{
                line-height: 26px;
                font-size: 16px;
            }
        }
        @media (min-width:1400px) {
            .about-banner .sub-title{
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
                line-height: 28px;
                text-align: center;
                color: #595959;
                width:40%;
                margin:auto;
                margin-bottom: 0;
                text-align: center;
            }
        }
        #section-2 img {
            display: flex;
            justify-content: flex-start;
            width:50%;
            position: absolute;
            left:100px;
            bottom:0;
        }
        @media (min-width:768px) {
            #section-2 img{
                width:22%;
            }
        }
        @media (min-width:992px) {
            #section-2 img{
                width:17%;
            }
        }
        @media (min-width:1200px) {
            #section-2 img{
                width:20%;
            }
        }
        @media (min-width:1400px) {
            #section-2 img {
                display: flex;
                justify-content: flex-start;
                width:20%;
            }  
        }
        #section-1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        /*  */
        #rocket {
            position: absolute;
            animation-name: rocket;
            animation-duration: 30s;
            animation-iteration-count:infinite;
        }
        @keyframes rocket {
            0% {
                left: 0;
            }
            40% {
                left: calc(100% - 180px);
            }
            40%{
                transform: rotateY(0deg);
            }
            45% {
                transform: rotateY(200deg);
            }
            60% {
                left: 0;
            }   
        }
        /*  */
        #section-1 {
            position: relative;
            animation-name: clouds;
            animation-duration: 60s;
            animation-iteration-count: infinite;
        }
        @keyframes clouds {
            0% {
                background-position-x: 100%;
            }
            100% {
                background-position-x: 0%;   
            }
        }
        .about-banner .header .title{
            font-style: normal;
            font-weight: 800;
            font-size: 64px;
            line-height: 75px;
            letter-spacing: 0.035em;
            color: #333333;
        }
        .about-banner .header .sub-title{
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 28px;
            text-align: center;
            color: #595959;
            width: 33%;
            margin: auto;
        }        
        .founders{
            padding-top: 20px;
            padding-bottom: 20px;
        }
        @media (min-width:768px) {
            .founders{
                padding-top:25px;
                padding-bottom:25px;
            }
        }
        @media (min-width:992px) {
            .founders{
                padding-top:30px;
                padding-bottom:30px;
            }
        }
        @media (min-width:1200px) {
            .founders{
                padding-top:35px;
                padding-bottom:35px;
            }
        }
        @media (min-width:1400px) {
            .founders{
                padding-top:40px;
                padding-bottom:40px;
            }
        }
        .founders_title{
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 600;
                font-size: 20px;
                line-height: 30px;
                color: #515151;
                margin-bottom: 0;
                padding: 5px 0;
                text-align: center;
        }
        @media (min-width:576px) {
            .founders_title{
                font-size:24px;
            }
        }
        @media (min-width:768px) {
            .founders_title{
                font-size:26px;
                padding:8px 0;
            }
        }
        @media (min-width:992px) {
            .founders_title{
                font-size:28px;
            }
        }
        @media (min-width:1200px) {
            .founders_title{
                font-size:32px;
            }
        }
        @media (min-width:1400px) {
            .founders_title{
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 600;
                font-size: 40px;
                line-height: 47px;
                /* identical to box height */
                color: #515151;
            }
        }
        .founders_description{
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 24px;
            color: #636363;
            margin-bottom: 0;
            /* padding: 5px 0; */
            text-align: center;
            width:90%;
            margin:auto;
        }
        @media (min-width:576px) {
            .founders_description {
                width:70%;
            }
        }
        @media (min-width:768px) {
            .founders_description{
                width:50%;
            }
        }
        @media (min-width:992px) {
            .founders_description{
                width:40%;
            }
        }
        @media (min-width:1200px) {
            .founders_description{
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                font-size: 16px;
                line-height: 26px;
                color: #636363;
            } 
        }
        @media (min-width:1400px) {
            .founders_description {
                font-size: 18px;
                line-height:30px;
                width:45%;
                margin:auto;
            }
        }
        .founders .left {
            margin: auto;
        }
        .founders_word_heading{
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 30px;
            color: #3C3C3C;
            margin-bottom: 0;
            padding: 5px 0;
        }
        @media (min-width:768px) {
            .founders_word_heading{
                font-size:22px;
            }
        }
        @media (min-width:992px) {
            .founders_word_heading{
                font-size:24px;
            }
        }
        @media (min-width:1200px) {
            .founders_word_heading{
                font-size:26px;
                padding:10px 0;
            }
        }
        @media (min-width:1400px) {
            .founders_word_heading{
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 700;
                font-size: 28px;
                line-height: 33px;
                color: #3C3C3C;
            }
        }
        .founders_word_description{
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 24px;
            color: #8C8C8C; 
            margin-bottom: 0;
            text-align: justify;
        }
        @media (min-width:1200px) {
            .founders_word_description{
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                font-size: 16px;
                line-height: 28px;
                color: #8C8C8C; 
            }
        }
        @media (min-width:1400px) {
            .founders_word_description{
                font-size: 18px;
                line-height: 38px;
            }
        }
        .about-card{
            padding-top:25px;
            padding-bottom: 25px;
        }
        @media (min-width:1200px) {
            .about-card{
                padding-top:35px;
                padding-bottom:35px;
            }
        }
        @media (min-width:1400px) {
            .about-card{
                padding-top:40px;
                padding-bottom:40px;
            }
        }
        .about-card .container .row{
            row-gap:15px;
        }
        .about-card .service-block-one a {
        text-decoration:none;
        }  
        .about-card .service-block-one{
        height: 100%;
        /* margin: 0 40px; */
        margin-bottom:15px;
        }
        @media (min-width:992px) {
            .about-card .service-block-one{
                margin: 0 20px;
            }
        }
        @media (min-width:1200px) {
            .about-card .service-block-one{
                margin: 0 25px;
            }
        }
        @media (min-width:1400px) {
            .about-card .service-block-one{
                height: 100%;
                margin: 0 30px;
                margin-bottom:15px;
            }
        }
        .about-card .service-block-one .inner-box{
        /* position:relative; */
        /*display:block;*/
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow:hidden;
        padding:40px 20px;
        background: #FFFFFF;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.15);
        border-radius: 17px;
        height: 100%;
        } 
        /* .about-card .service-block-one .inner-box .icon-box{
            position:relative; 
            display:inline-block; 
            font-size:100px; 
            line-height:100px; 
            margin-bottom:8px;
            z-index:1; 
        }  */
        .about-card .service-block-one .inner-box .icon-box img{
            width: 40%;
            height: auto;
            display: flex;
            margin: auto;
        }
        @media (min-width:768px) {
            .about-card .service-block-one .inner-box .icon-box img{
                width: 45%;
            }
        }
        @media (min-width:1400px) {
            .about-card .service-block-one .inner-box .icon-box img{
                width: 60%;
                height: auto;
                display: flex;
                margin: auto;
            } 
        }
        .about-card .service-header a{
        display:inline-block;
        /*color:#E04048;*/
        }
        .about-card .service-header{
        /* position:relative; */
        display:block;
        font-style: normal;
        font-size:18px;
        line-height:33px;
        /*color:#E04048;*/
        font-weight:700;
        margin-bottom:0;
        padding: 10px 0;
        width: 100%;
        color: #3C3C3C;
        }
        @media (min-width:1200px) {
            .about-card .service-header{
                font-size: 22px;
            }
        }
        @media (min-width:1400px) {
            .about-card .service-header{
                /* position:relative; */
                display:block;
                font-style: normal;
                font-size:28px;
                line-height:33px;
                /*color:#E04048;*/
                font-weight:700;
                /*margin-bottom:9px;*/
                width: 100%;
                color: #3C3C3C;
                padding:16px 0;
            } 
        }
        .about-card .service-description{
        /* position:relative; */
        margin-bottom:0;
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 24px;
        color: #868686;
        } 
        @media (min-width:1200px) {
            .about-card .service-description{
                font-size: 16px;
                line-height: 26px;
            }
        }
        @media (min-width:1400px) {
            .about-card .service-description{
                /* position:relative; */
                margin-bottom:0;
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
                line-height: 28px;
                color: #868686;
            }   
        }
        .count_main{
            background: url(assets/img/about-us/world_map_white.svg);
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            padding-top: 20px;
            padding-bottom: 20px; 
            /* margin-bottom:40px;
            margin-top:40px; */
        }
        @media (min-width:768px) {
            .count_main{
                padding-top:25px;
                padding-bottom:25px;
            }
        }
        @media (min-width:992px) {
            .count_main{
                padding-top:30px;
                padding-bottom:30px;
                margin-top:25px;
                margin-bottom:25px;
            }
        }
        @media (min-width:1200px) {
            .count_main{
                padding-top:35px;
                padding-bottom:35px;
                margin-top:35px;
                margin-bottom:35px;
            }
        }
        @media (min-width:1400px) {
            .count_main{
                padding-top:40px;
                padding-bottom:40px;
                margin-top:40px;
                margin-bottom:40px;
            }
        }
        .count_main .title{
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 30px;
            color: #383838;
            margin-bottom: 0;
            padding: 5px 0;
            text-align: center;
        }
        @media (min-width:768px) {
            .count_main .title{
                font-size:24px;
            }
        }
        @media (min-width:992px) {
            .count_main .title{
                font-size:28px;
                padding:10px 0;
            }
        }
        @media (min-width:1200px) {
            .count_main .title{
                font-size: 34px;
            }
        }
        @media (min-width:1400px) {
            .count_main .title{
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 600;
            font-size: 40px;
            line-height: 47px;
            color: #383838;
        } 
        }
        .count_main .sub-title{
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 24px;
            text-align: center;
            color: #959595;
            margin-bottom: 0;
            margin: auto;
        }
        @media (min-width:576px) {
            .count_main .sub-title{
                width:80%;
            }
        }
        @media (min-width:768px) {
            .count_main .sub-title{
                width: 60%;
            }
        }
        @media (min-width:1200px) {
            .count_main .sub-title{
                width:45%;
                font-size: 16px;
            }
        }
        @media (min-width:1400px) {
            .count_main .sub-title{
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                line-height: 28px;
                text-align: center;
                color: #959595;
            } 
        }
        .count_main .row{
            /* padding-top:50px; */
        }
        @media (min-width:768px) {
            .count_main .row{
                padding-top:50px;
            } 
        }
        .count_main .counter{
            color: #949699; 
            text-align: center;
            width: 200px;
            padding: 20px 0 0;
            margin: 0 auto;
            /* border-radius: 20px; */
            border-radius: 45px 0;
            /* box-shadow: 0 0 15px -5px rgba(0, 0, 0,.5); */
            overflow: hidden;
        }
        .count_main .counter .counter-icon{
            /* font-size: 45px;     */
            margin: 0 0 10px;
        }
        .count_main .counter .counter-icon img{
            width:50px;
            height:50px;
            /* opacity: 0.7; */
            color:white;
        }
        @media (min-width:1400px) {
            .count_main .counter .counter-icon img{
            width:90px;
            height:90px;
            /* opacity: 0.7; */
            color:white;
            }
        }
        .count_main .counter h3{
            margin: 0 0 10px;
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 28px;
            color: #E04048;
            margin-bottom: 0;
        }
        @media (min-width:1400px) {
            .count_main .counter h3{
                margin: 0 0 10px;
                font-family: 'Roboto';
                font-style: normal;
                font-weight: 600;
                font-size: 24px;
                line-height: 28px;
                color: #E04048;
            }
        }
        .count_main .counter .counter-value{
            /* padding : 5px 0 5px; */
            display: block;    
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 800;
            font-size: 28px;
            line-height: 47px;
            color: #343434;
        }
        @media (min-width:1400px) {
            .count_main .counter .counter-value{
            padding : 5px 0 5px;
            display: block;    
            font-family: 'Roboto';
            font-style: normal;
            font-weight: 800;
            font-size: 40px;
            line-height: 47px;
            color: #343434;
        }
        }
        /* .about-section-five{
            padding-top: 25px;
            padding-bottom: 25px;   
            background-repeat: no-repeat;
            background-size: cover;
        } */
        .about-section-five .title{
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 30px;
            color: #FFFFFF;
            text-align: center;
            margin-bottom: 0;
            padding: 5px 0;
        }
        @media (min-width:1200px) {
            .about-section-five .title{
                font-size: 34px;
            }
        }
        @media (min-width:1400px) {
            .about-section-five .title{
                font-style: normal;
                font-weight: 600;
                font-size: 40px;
                line-height: 47px;
                color: #FFFFFF;
            }
        }
        .about-section-five .sub-title{
            font-style: normal;
            font-weight: 350;
            font-size: 14px;
            line-height: 24px;
            text-align: center;
            color: #FFFFFF;
            /* width: 40%; */
            margin: auto;
            width:84%;
        }
        @media (min-width:768px) {
            .about-section-five .sub-title{
                width: 60%;
            }
        }
        @media (min-width:1200px) {
            .about-section-five .sub-title{
                font-size: 16px;
                width:50%;
            }
        }
        @media (min-width:1400px) {
            .about-section-five .sub-title{
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
                line-height: 28px;
                text-align: center;
                color: #FFFFFF;
                width: 40%;
                margin: auto;
            }
        }
        /* .about-section-five .card{
            width: 50%;
            margin: auto;
            padding: 20px;
        }
        .about-section-five .card .d-flex .icon-box{
            margin:auto;
            width: 250px;
            height: 100px;
            background: #D9D9D9;
            border-radius: 50%;
            display: flex;
        }
        .about-section-five .card .d-flex .inner{
            margin-left:20px;
        }
        .about-section-five .card .d-flex .inner .name{
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 18px;
            color: #E04048;
            margin-bottom: 0;
        }
        .about-section-five .card .d-flex .inner .description{
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 23px;
            color: #6A6A6A;
        } */
        .our-clients{
            padding-top: 25px;
            padding-bottom: 25px;
            background-image:url(assets/img/rocket_line.svg);
            background-size:contain;
            background-repeat:no-repeat;
            margin-top:25px;
            padding-left:0;
            padding-right:0;
        }
        @media (min-width:1400px) {
            .our-clients{
                padding-top:40px;
            }
        }
        @media (min-width:992px) {
            .our-clients{
                background-size:cover;
            }
        }
        .our-clients .header .title{
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 28px;
            color: #3B3B3B;
            margin-bottom: 0;
            padding: 5px 0;
        }
        @media (min-width:768px) {
            .our-clients .header .title{
                font-size:24px;
            }
        }
        @media (min-width:992px) {
            .our-clients .header .title{
                font-size:28px;
                line-height:32px
            }
        }
        @media (min-width:1200px) {
            .our-clients .header .title{
                font-size: 34px;
                line-height:40px;
            }
        }
        @media (min-width:1400px) {
            .our-clients .header .title{
                font-style: normal;
                font-weight: 600;
                font-size: 40px;
                line-height: 47px;
                color: #3B3B3B;
            }
        }
        .our-clients .header .sub-title{
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            text-align: center;
            color: #717171;
            margin-bottom: 0;
        }
        @media (min-width:1200px) {
            .our-clients .header .sub-title{
                font-size: 18px;
                line-height:28px;
            }
        }
        @media (min-width:1400px) {
            .our-clients .header .sub-title{
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
                line-height: 30px;
                text-align: center;
                color: #717171;
            }
        }
        .our-clients .client-carousel-left{
            padding:15px 0;
        }
        @media (min-width:1200px) {
            .our-clients .client-carousel-left{
            padding:40px 0;
        }
        }
        .our-clients .client-carousel-left .item{
            display:flex;
            justify-content: center;
            height: 100px;
        }
        .our-clients .client-carousel-right{
            padding:15px 0;
        }
        @media (min-width:1200px) {
            .our-clients .client-carousel-right{
            padding:40px 0;
        }
        }
        .our-clients .client-carousel-right .item{
            display:flex;
            justify-content: center;
            height: 100px;
        }
        .our-clients .client-carousel-left .item img{
            width: 40%;
            height: auto;
        }
        @media (min-width:768px) {
            .our-clients .client-carousel-left .item img{
                width: 60%;
                height: auto;
            }
        }
        @media (min-width:1200px) {
            .our-clients .client-carousel-left .item img{
                width: 80%;
                height: auto;
            }
        }
        @media (min-width:1400px) {
            .our-clients .client-carousel-left .item img{
                width: 100%;
                height: auto;
            }
        }
        .our-clients .client-carousel-right .item img{
            width: 40%;
            height: auto;
        }
        @media (min-width:768px) {
            .our-clients .client-carousel-right .item img{
                width: 60%;
                height: auto;
            }
        }
        @media (min-width:1200px) {
            .our-clients .client-carousel-right .item img{
                width: 80%;
                height: auto;
            } 
        }
        @media (min-width:1400px) {
            .our-clients .client-carousel-right .item img{
                width: 100%;
                height: auto;
            }
        }
        .our-clients .client-carousel-left .owl-dots, .our-clients .client-carousel-right .owl-dots{
                display: none;
        }
    </style>
<body style="font-family: Roboto;" >
    <!--Navbar Section Start-->
    <?php include("nav.php")?>
    <!--Navbar Section End-->
    <div class="container-fluid hero_abt_bg" id="hero_abt">
        <div class="hero_abt_mountain">
            <div class="hero_abt_grass">
                <div class="hero_abt_cloud">
                    <img src="assets/img/abt_banner_rocket.png" alt="">
                    <div class="inner">
                        <h1 class="title" data-aos="fade-up" data-aos-delay="500" data-aos-duration="2000">About Us</h1>
                        <p class="sub_title" data-aos="fade-up" data-aos-delay="600" data-aos-duration="2000">We are a young company but we grew fast, thanks to the support of all our valuable cutomers.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <style>
        .hero_abt_cloud h1,.hero_abt_cloud p{
            color:#fff;
        }
        .hero_abt_cloud img{
            position:absolute;
            left:-15%;
            top:7vh;
            transition:2s;
        }
        .loaded .hero_abt_cloud img{
            position:absolute;
            left:15%;
            top:7vh;
            transition:2s;
            width:100px;
            animation:abt_rock;
            animation-duration:60s;
            animation-iteration-count:infinite;
        }
        @keyframes abt_rock {
            0%{background-position-x:100%;}
            100%{background-position-x:0%;}
        }
        .loaded .hero_abt_cloud .inner{
            text-align:center;
        }
        .loaded .hero_abt_cloud .inner .title{
            font-style: normal;
            font-weight: 800;
            font-size: 28px;
            line-height: 47px;
            letter-spacing: 0.035em;
            color: #FFFFFF;
            margin-bottom:0;
        }
        @media (min-width:768px) {
            .loaded .hero_abt_cloud .inner .title{
                font-size:28px;
                line-height:34px;
            }
        }
        @media (min-width:992px) {
            .loaded .hero_abt_cloud .inner .title{
                font-size:32px;
                line-height:40px;
            }
        }
        @media (min-width:1200px) {
            .loaded .hero_abt_cloud .inner .title{
                font-size:42px;
                line-height:50px;
            }
        }
        @media (min-width:1400px) {
            .loaded .hero_abt_cloud .inner .title{
                font-size:52px;
                line-height:60px;
            }
        }
        .loaded .hero_abt_cloud .sub_title{
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 24px;
            text-align: center;
            color: #FFFFFF;
            width:80%;
            /* margin:auto; */
            margin-left:auto;
            margin-right:auto;
        }
        @media (min-width:576px) {
            .loaded .hero_abt_cloud .sub_title{
                width:60%;
            }
        }
        @media (min-width:768px) {
            .loaded .hero_abt_cloud .sub_title{
                width:50%;
            }
        }
        @media (min-width:992px) {
            .loaded .hero_abt_cloud .sub_title{
                width:40%;
            }
        }
        @media (min-width:1200px) {
            .loaded .hero_abt_cloud .sub_title{
                width:60%;
                font-size:16px;
                line-height:28px;
            }
        }
        @media (min-width:1400px) {
            .loaded .hero_abt_cloud .sub_title{
                font-size:18px;
                line-height:30px;
                width:60%;
            }
        }
        .hero_abt_cloud{
            background-image:url(assets/img/abt_banner_cloud.png);
            background-position:top;
            background-repeat:no-repeat;
            height:60vh;
            transition:2s;
            display:flex;
            flex-direction:column;
            position:relative;
            justify-content:center;
            align-items:center;
            /* width:400px; */
            animation:abt_hero_clouds;
            animation-duration:60s;
            animation-iteration-count:infinite;
        }
        @keyframes abt_hero_clouds {
            from{background-position-x:100%;}
            to{background-position-x:0%;}
        }
        @media(min-width:992px){
            .hero_abt_cloud{
                height:80vh;
            }
        }
        .hero_abt_bg{
            /* height:80vh; */
            
            background: linear-gradient(180deg, #E04048 11.08%, #F06D94 29.4%, #FF9696 46.42%);
            padding:0;
            transition:2s;
        }
        .hero_abt_mountain{
            background:url("assets/img/abt_banner_mountain.png");
            /* background-position:bottom center; */
            background-position-y:600%;
            background-repeat:no-repeat;
            background-position-x:center;
            background-size:100%;
            transition:2s;
        }
        .hero_abt_grass{
            background:url("assets/img/abt_banner_grass.png");
            background-size:200%;
            background-repeat:no-repeat;
            background-position:center bottom;
            transition:2s;
        }
        .loaded .hero_abt_cloud{
            background-image:url(assets/img/abt_banner_cloud.png);
            background-position:top;
            background-repeat:no-repeat;
            transition:2s;

        }
        .loaded.hero_abt_bg{
            background: linear-gradient(180deg, #E04048 11.08%, #F06D94 29.4%, #FF9696 46.42%);
            padding:0;
            transition:2s;
        }
       
        .loaded .hero_abt_mountain{
            background:url("assets/img/abt_banner_mountain.png");
            background-position:bottom center;
            /* background-position-y:600%; */
            background-repeat:no-repeat;
            /* background-position-x:center; */
            background-size:300%;
            transition:2s;
        }
        @media (min-width:576px) {
            .loaded .hero_abt_mountain{
                background-size:100%;
            }
        }
        @media (min-width:1200px) {
            .loaded .hero_abt_mountain{
                background-size:100%;
            }
        }
        .loaded .hero_abt_grass{
            background:url("assets/img/abt_banner_grass.png");
            background-size:300%;
            background-repeat:no-repeat;
            background-position:center bottom;
            transition:2s;
        }
        @media (min-width:576px) {
            .loaded .hero_abt_grass{
                background-size:100%;
            }
        }
        @media (min-width:1200px) {
            .loaded .hero_abt_grass{
                background-size:100%;
            }
        }
    </style>
    <script>
        window.addEventListener('load', function(){ 
            setTimeout(function() {
                document.getElementById('hero_abt').classList.add("loaded");   
            }, 500);
        } );
    </script>
    <!--Aboutus-banner Section Start-->
    <!-- <div class="container-fluid about-banner" id="mainsection">
        <div id="section-1">
            <div>
                <img id="rocket" src="assets/img/rocket.png" alt="rocket">
            </div>
        </div>
        
        <div id="section-2">
            <p class="title">About us</p>
            <p class="sub-title">We are a young company but we grew fast, thanks to the support of all our valuable cutomers.
            </p>
            <div class="buildings" style="width: 100%;height:204.55px;background: url(assets/img/buildings.png);"></div>
            <img src="assets/img/about-us/woman.svg" alt="image">
        </div>
    </div> -->
    <!--Aboutus-banner Section End-->
    <!-- Word From CEO Section - Start -->
    <div class="container-fluid founders">
        <p class="founders_title">Our Founders Speak</p>
        <p class="founders_description">Our company started with a brilliant but simple idea, give you insight on whatever you want.</p>
        <div class="container" style="margin-top:25px;">
            <div class="row" style="padding-top : 20px 100px 20px 100px;">            
                <div class="col-md-6 left">
                    <img class="img-fluid" src="assets/img/about-us/word_from_ceo.png" alt="image">
                </div>
                <div class="col-md-6 right">
                    <p class="founders_word_heading">A word from Chrishtofer, CEO</p>
                    <p class="founders_word_description">A Soloprenuer's hobby turned business, is now driven by a bunch of 
                        highly skilled professionals. Being the best website development 
                        company in Chennai, we're proud to proclaim that Tech4LYF has 
                        served more than 200+ customers worldwide. From underneath 
                        buddy's roof to opening a second branch in Chennai, we've made a 
                        ton of memories and success stories in the past couple of years and 
                        are still counting.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Word From CEO Section - End -->
    <!-- Card Section - Start -->
    <div class="container-fluid about-card" style="background-color: #E04048;">
        <div class="container">
            <div class="row" >
                <div class="col-md-4 service-block">
                    <div class="service-block-one">
                        <div class="inner-box ">
                            <div class="icon-box">                            
                                <img src="assets/img/about-us/24-7_support.gif" alt="gif">
                            </div>                        
                            <p class="service-header text-center">24/7 Support</p>
                            <p class="service-description text-center">Not only developing the product we love to support you forever.</p>
                        </div>
                    </div>
                </div> 
                <div class="col-md-4 service-block">
                    <div class="service-block-one">
                        <div class="inner-box ">
                            <div class="icon-box">                           
                                <img src="assets/img/about-us/availablity.gif" alt="gif">
                            </div>                        
                            <p class="service-header text-center ">99.9% Availability</p>
                            <p class="service-description text-center">As a Best Hosting Reseller, We promise 99.9% Availability of your Products</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4    service-block">
                    <div class="service-block-one">
                        <div class="inner-box ">
                            <div class="icon-box">                            
                                <img src="assets/img/about-us/training_session.gif" alt="gif">
                            </div>                        
                            <p class="service-header text-center">Training Session</p>
                            <p class="service-description text-center">Our Team of experts trains you in your product and they always love to hear queries from you</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card Section - End -->
    <!-- Counter Section - Start  -->
    <div class="container count_main">        
        <p class="title">Let's work Together</p>   
        <p class="sub-title">We work with companies all over the world. Join the experience and become one of our valuable partners.</p>
        <div class="row" id="counter">                     
            <div class="col-md-4">
                <div class="counter">
                    <div class="counter-icon">                        
                        <img src="assets/img/about-us/countries.svg" alt="image">
                    </div>
                    <span class="counter-value count percent" id="value1" data-count="15">0</span> 
                    <h3>Countries</h3>                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="counter">
                    <div class="counter-icon">                        
                        <img src="assets/img/about-us/teams.svg" alt="image">
                    </div>
                    <span class="counter-value count percent" id="value2" data-count="50">0</span>
                    <h3>Teams</h3>                    
                </div>
            </div>
            <div class="col-md-4">
            <div class="counter">
                <div class="counter-icon">                    
                    <img src="assets/img/about-us/active_users.svg" alt="image">                    
                </div>
                <span class="counter-value count percent" id="value3" data-count="985">0</span>
                <h3>Active Users</h3>                
            </div>
            </div>      
        </div>
    </div>
    <!-- Counter Section - End -->
    <!-- Start -->
    <style>
        .abt_tes_caro_main{
            width:300px;
            height:320px;
            background:#fff;
            margin:auto;
            border-radius:17px;
            /* display:flex;
            justify-content:center;
            align-items:center; */
            /* background:green; */
        }
        @media (min-width:576px) {
            .abt_tes_caro_main{
                width:500px;
                height:325px;
                background:#fff;
                margin:auto;
                border-radius:17px;
                /* display:flex;
                justify-content:center;
                align-items:center; */
                
            }
        }
        @media (min-width:768px) {
            .abt_tes_caro_main{
                width:600px;
                height:300px;
                background:#fff;
                margin:auto;
                border-radius:17px;
                /* display:flex;
                justify-content:center;
                align-items:center; */
                /* background:green; */
            }
        }
        @media (min-width:992px) {
            .abt_tes_caro_main{
                width:700px;
                height:240px;
                background:#fff;
                margin:auto;
                border-radius:17px;
                /* display:flex;
                justify-content:center;
                align-items:center; */
                /* background:green; */
            }
        }
        @media (min-width:1200px) {
            .abt_tes_caro_main{
                width:800px;
                height:270px;
                background:#fff;
                margin:auto;
                border-radius:17px;
                /* display:flex;
                justify-content:center;
                align-items:center; */
                /* background:green; */
            }
        }
        @media (min-width:1400px) {
            .abt_tes_caro_main{
                width:900px;
                height:250px;
                background:#fff;
                margin:auto;
                border-radius:17px;
                /* display:flex;
                justify-content:center;
                align-items:center; */
                /* background:green; */
            }
        }
        .abt_tes_caro_main .card_tes{
            /* background:green; */
            padding:0 25px;
            width:100%;
        }
        @media (min-width:576px) {
            .abt_tes_caro_main .card_tes{
                padding: 0 80px;
            }
        }
        .abt_tes_caro_main .owl-prev{
            position: absolute;
            left:0;
            margin:0 !important;
            top:50%;
            transform:translate(-50%, calc(-50% - 30px));
            background: #FFFFFF !important;
            box-shadow: 0px 0px 22px rgba(0, 0, 0, 0.19);
            width:30px;
            height:30px;
            border-radius:50% !important; 
        }
        @media (min-width:576px) {
            .abt_tes_caro_main .owl-prev{
                position: absolute;
                left:0;
                margin:0 !important;
                top:50%;
                transform:translate(-50%, calc(-50% - 30px));
                background: #FFFFFF !important;
                box-shadow: 0px 0px 22px rgba(0, 0, 0, 0.19);
                width:50px;
                height:50px;
                border-radius:50% !important; 
            } 
        }
        .abt_tes_caro_main .owl-next{
            position: absolute;
            right:0;
            top:50%;
            margin:0 !important;
            transform:translate(50%, calc(-50% - 30px));
            background: #FFFFFF !important;
            box-shadow: 0px 0px 22px rgba(0, 0, 0, 0.19);
            width: 30px;
            height: 30px;
            border-radius:50% !important; 
        }
        @media (min-width:576px) {
            .abt_tes_caro_main .owl-next{
                position: absolute;
                right:0;
                top:50%;
                margin:0 !important;
                transform:translate(50%, calc(-50% - 30px));
                background: #FFFFFF !important;
                box-shadow: 0px 0px 22px rgba(0, 0, 0, 0.19);
                width: 50px;
                height: 50px;
                border-radius:50% !important; 
            } 
        }
        .abt_tes_caro_main .owl-prev img{
            width:8px;
        }
        .abt_tes_caro_main .owl-next img{
            width:8px;
        }
        .abt_tes_caro_main .owl-prev, .abt_tes_caro_main .owl-next:hover{
            color:black !important;
        }
        .abt_tes_caro_main .owl-prev span, .abt_tes_caro_main .owl-next span{
            font-size:40px;
        }
        .abt_tes_caro_main .owl-nav{
            margin:0;
        }
        .abt_tes_caro_main .item{
            height:320px;
            display:flex;
            justify-content:center;
            align-items:center;
            /* width:100%; */
            width:300px
        }
        @media (min-width:576px) {
            .abt_tes_caro_main .item{
                height:325px;
                display:flex;
                justify-content:center;
                align-items:center;
                /* width:100%; */
                width:500px
            } 
        }
        @media (min-width:768px) {
            .abt_tes_caro_main .item{
                height:300px;
                display:flex;
                justify-content:center;
                align-items:center;
                /* width:100%; */
                width:600px
            } 
        }
        @media (min-width:992px) {
                .abt_tes_caro_main .item{
                height:240px;
                display:flex;
                justify-content:center;
                align-items:center;
                /* width:100%; */
                width:700px
            }
        }
        @media (min-width:1200px) {
                .abt_tes_caro_main .item{
                height:270px;
                display:flex;
                justify-content:center;
                align-items:center;
                /* width:100%; */
                width:800px
            }
        }
        @media (min-width:1400px) {
            .abt_tes_caro_main .item{
                height:250px;
                display:flex;
                justify-content:center;
                align-items:center;
                /* width:100%; */
                width:900px
            }
        }
        .abt_tes_caro_main{
            overflow:visible !important;
        }
        .abt_tes_caro_main .card_tes .double-quote{
            font-family: 'Irish Grover';
            font-style: normal;
            font-weight: 900;
            font-size: 30px;
            color: #E04048;
        }
        .abt_tes_caro_main .card_tes .client_name{
            color:#E04048;
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 28px;
            text-align: center;
            margin-bottom:0;
            padding:8px 0;
        }
        @media (min-width:576px) {
            .abt_tes_caro_main .card_tes .client_name{
                color:#E04048;
                font-style: normal;
                font-weight: 700;
                font-size: 24px;
                line-height: 28px;
                text-align: center;
                margin-bottom:0;
                padding:8px 0;
            }
        }
        .abt_tes_caro_main .card_tes .rating_image{
            width:75px !important;
            margin:auto;
        }
        .abt_tes_caro_main .card_tes .review{
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height:26px;
            color: #4A4A4A;
            margin-bottom:0;
            text-align:center;
        }
        @media (min-width:576px) {
            .abt_tes_caro_main .card_tes .review{
                font-style: normal;
                font-weight: 400;
                font-size: 14px;
                line-height:26px;
                color: #4A4A4A;
                margin-bottom:0;
                text-align:center;
            }  
        }
        @media (min-width:768px) {
            .abt_tes_caro_main .card_tes .review{
                font-size:16px;
                line-height:28px;
            }
        }
        .abt_tes_caro_main .card_tes .client_img{
            width:70px;
            height:70px;
            object-fit:cover;
            position:absolute;
            bottom:0;
            left:50%;
            transform:translate(-50%, 50%);
        } 
        @media (min-width:576px) {
            .abt_tes_caro_main .card_tes .client_img{
                width:100px;
                height:100px;
                object-fit:cover;
                position:absolute;
                bottom:0;
                left:50%;
                transform:translate(-50%, 50%);
            }
        }
        .abt_tes_caro_main .owl_abt_tes{
            overflow:visible;
        }
        .abt_tes_caro_main .owl_abt_tes .owl-stage{
            overflow-y:visible;
        }
        .abt_tes_caro_main .owl_abt_tes .owl-stage-outer{
            overflow: hidden;
            overflow-y: visible;
            padding-bottom: 60px;
        }
    </style>
    <style>
        .ani_background{
          background: url(assets/img/background.png);
          background-position:center;
          background-size: cover;
          background-repeat: no-repeat;
          position: relative;
          /* padding-top:40px;
            padding-bottom:40px; */
            padding-left:0;
            padding-right:0;
            /* height:100vh; */
            height:800px;
        }
        @media (min-width:576px) {
            .ani_background{
                background: url(assets/img/background.png);
                background-position:center;
                background-size: cover;
                background-repeat: no-repeat;
                position: relative;
                /* padding-top:40px;
                    padding-bottom:40px; */
                    padding-left:0;
                    padding-right:0;
                    /* height:100vh; */
                    height:800px;
                }
        }
        .ani_cloud{
            background: url(assets/img/Cloud.png);
            background-position:0% 0%;
            background-size:500%;
            background-repeat: repeat-x;
            width:100%;
            height:100%;
            -webkit-animation: cloud 80s infinite linear;
        }
        @-webkit-keyframes cloud{
            from{    
                background-position:0% 10%;
            }
            to { 
                background-position:200% 10%;
            }
        }
        @media(min-width:992px){
            .ani_cloud{
                background-size:270%;
            }
        }
        .ani_mountain{
            background: url(assets/img/mountain.svg);
            background-position:0% 0%;
            background-size: 500%;
            background-repeat: repeat-x;
            width:100%;
            height:100%;
            /* top:868px; */
            -webkit-animation: mountain 38s infinite linear;
            display:flex;
            flex-direction:column;
            justify-content:center;
        }
        @-webkit-keyframes mountain{
            from{
                background-position:0% 100%;
            }
            to {
                background-position:200% 100%;
            }
        }
        @media(min-width:768px){
            .ani_mountain{
                background-size: 250%;
            }
        }
        @media(min-width:992px){
            .ani_mountain{
                background-size: 300%;
            }
        }
        @media(min-width:1200px){
            .ani_mountain{
                background-size: 253%;
            }
        }
        .ani_car {

        }
        .ani_car {
            bottom:25px;
            position: absolute;
            width:120px;
            left:15px;
            background-size: 277%;
        }
        @media (min-width:576px) {
            .ani_car {
                bottom:32px;
                position: absolute;
                width:120px;
                left:100px;
                background-size: 277%;
            }
        }
        @media (min-width:768px) {
            .ani_car{
                background-size: 277%;
                bottom: 25px;
                position: absolute;
                left:100px;
                width: 125px;
            }
        }
        @media (min-width:992px) {
            .ani_car{
                background-size: 277%;
                bottom: 42px;
                position: absolute;
                left:100px;
                width: 150px;
            }
        }
        @media (min-width:1200px) {
            .ani_car{
                background-size: 277%;
                bottom: 42px;
                position: absolute;
                left:100px;
                width:205px;
            }
        }
        @media (min-width:1400px) {
            .ani_car{
                bottom:40px;
                width:220px;
                left:100px;
            }
        }
        .car_wheels{
            position: absolute;
            /* top: 95%; */
            bottom:0px;
            left:43px;
            transform: translate(-50%, -50%);
            width:27px;
            animation: car_wheel 1s infinite;
            animation-timing-function: linear;
        }
        @keyframes car_wheel {
            0%{
              transform:translate(-50%, -50%) rotate(0deg);
            }
            100%{
            transform:translate(-50%, -50%) rotate(360deg);
            }
        }
        @media (min-width:576px) {
            .car_wheels{
                position: absolute;
                bottom:8px;
                left:128px;
                width:27px; 
            }
        }
        @media (min-width:768px) {
            .car_wheels{
                bottom:0px;
                /* width: 35px; */
                width: 28px;
                left:205px;
            }
        }
        @media (min-width:992px) {
            .car_wheels{
                bottom:12px;
                /* width: 35px; */
                width:34px;
                left:135px;
            }
        }
        @media (min-width:1200px) {
            .car_wheels{
                bottom:0px;
                /* width: 35px; */
                width:45px;
                left:148px
            }
        }
        @media (min-width:1400px) {
            .car_wheels{
                left:152px;
                bottom:0;
                width:46px;
            }
        }
        .car_wheels2{
            position: absolute;
            bottom:0px;
            left:116px;
            transform: translate(-50%, -50%);
            width:27px;
            animation: car_wheel2 1s infinite;
            animation-timing-function: linear;
        }
        @keyframes car_wheel2 {
            0%{
            transform:translate(-50%, -50%) rotate(0deg);
            }
            100%{
            transform:translate(-50%, -50%) rotate(360deg);
            }    
        }
        @media (min-width:576px) {
            .car_wheels2{
                position: absolute;
                bottom:8px;
                left:201px;
                width:27px;
            }
        }
        @media (min-width:768px) {
            .car_wheels2{
                left: 130px;
                width: 28px;
                bottom:0px;
            }
        }
        @media (min-width:992px) {
            .car_wheels2{
                left: 226px;
                width:34px;
                bottom:12px;
            }
        }
        @media (min-width:1200px) {
            .car_wheels2{
                left: 272px;
                width:45px;
                bottom:0px;
            }
        }
        @media (min-width:1400px) {
            .car_wheels2{
                left:285px;
                bottom:0;
                width:46px;
            }
        }
    </style>
    <div class="container-fluid about-section-five ani_background">
        <div class="ani_cloud">
            <div class="ani_mountain">
                <div class="container">
                        <P class="title">We are top rated</P>
                        <p class="sub-title">Just take a look at what our clients say about us. We thank them a lot for top ranking us and for using our solutions.</p>
                        <div class="abt_tes_caro_main">
                            <div class="owl-carousel owl_abt_tes owl-theme">
                                <div class="item">
                                    <div class="card_tes">
                                        <div class="double-quote">&ldquo;</div> 
                                        <h4 class="client_name">Vijay</h4>
                                        <img class="rating_image" src="assets/img/testi_rating.svg"> 
                                        <p class="review">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam officia iure cupiditate sunt! Modi praesentium ab, consequatur obcaecati ipsum esse iste dolorem unde facilis ullam laboriosam quisquam blanditiis earum maiores?</p>
                                        <img class="client_img" src="assets/img/client_img.svg" alt="">
                                        <div style="text-align:end" class="double-quote">&rdquo;</div> 
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card_tes">
                                        <div class="double-quote">&ldquo;</div> 
                                        <h4 class="client_name">Vijay</h4>
                                        <img class="rating_image" src="assets/img/testi_rating.svg"> 
                                        <p class="review">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam officia iure cupiditate sunt! Modi praesentium ab, consequatur obcaecati ipsum esse iste dolorem unde facilis ullam laboriosam quisquam blanditiis earum maiores?</p>
                                        <img class="client_img" src="assets/img/client_img.svg" alt="">
                                        <div style="text-align:end" class="double-quote">&rdquo;</div> 
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card_tes">
                                        <div class="double-quote">&ldquo;</div> 
                                        <h4 class="client_name">Vijay</h4>
                                        <img class="rating_image" src="assets/img/testi_rating.svg"> 
                                        <p class="review">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam officia iure cupiditate sunt! Modi praesentium ab, consequatur obcaecati ipsum esse iste dolorem unde facilis ullam laboriosam quisquam blanditiis earum maiores?</p>
                                        <img class="client_img" src="assets/img/client_img.svg" alt="">
                                        <div style="text-align:end" class="double-quote">&rdquo;</div> 
                                    </div>
                                </div>
                            </div>
                            
                        </div>     
                    </div> 
                    <img class="ani_car" src="assets/img/car_part.png">
                    <img class="car_wheels" src="assets/img/car_wheel.png">
                    <img class="car_wheels2" src="assets/img/car_wheel.png">                 
            </div>
        </div>
    </div>
    <!-- Our Clients - Start -->
    <div class="container-fluid our-clients">
        <div class="header text-center">
            <p class="title">We build Trust</p>
            <p class="sub-title">Having 250+ Clients over the Globe.</p>
        </div>
        <!--  left direction -->
        <div class="owl-carousel owl-theme client-carousel-left">
            <div class="item">
                <img src="assets/img/about-us/client-1.svg" alt="image">
            </div>
            <div class="item">
                 <img src="assets/img/about-us/client-2.svg" alt="image">
            </div>
            <div class="item">
                 <img src="assets/img/about-us/client-3.svg" alt="image">
            </div>
            <div class="item">
                <img src="assets/img/about-us/client-4.svg" alt="image">
            </div>
             <div class="item">
                <img src="assets/img/about-us/client-5.svg" alt="image">
            </div>        
        </div>
        <!--  right direction -->
        <div class="owl-carousel owl-theme client-carousel-right">
            <div class="item">
                <img src="assets/img/about-us/client-6.svg" alt="image">
            </div>
            <div class="item">
                 <img src="assets/img/about-us/client-7.svg" alt="image">
            </div>
            <div class="item">
                 <img src="assets/img/about-us/client-8.svg" alt="image">
            </div>
            <div class="item">
                <img src="assets/img/about-us/client-9.svg" alt="image">
            </div>
            <div class="item">
                <img src="assets/img/about-us/client-10.svg" alt="image">
            </div>       
        </div>
    </div>
    <!-- Our Clients - End -->    
    <!--Footer Section Start-->
    <?php include("footer.php")?>
    <!--Footer Section End-->
    <?php include("script.php")?>
    <script>
         AOS.init();
        /* client_logo carousel - start*/
        $(document).ready(function () {
            var owl = $('.client-carousel-left');
            owl.owlCarousel({
            loop: true,
            margin: 20,
            autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 4900,
            autoplaySpeed: 4900,
            autoplayHoverPause: true,
            responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            });
        });
        //Alternate Direction
        $(document).ready(function () {
            var owl = $('.client-carousel-right');
            owl.owlCarousel({
                rtl: true,
                loop: true,
                margin: 20,
                autoplay: true,
                slideTransition: 'linear',
                autoplayTimeout: 4900,
                autoplaySpeed: 4900,
                autoplayHoverPause: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            });
        });
        /* client_logo carousel - end*/
        /* aboutus page counter section - Start*/
        var counted = 0;
        $(window).scroll(function() {
            var oTop = $('#counter').offset().top - window.innerHeight;
            if (counted == 0 && $(window).scrollTop() > oTop) {
                $('.count').each(function() {
                    var $this = $(this),
                    countTo = $this.attr('data-count');
                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    },
                    {
                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                        $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                                                        //alert('finished');
                            }
                        });
                });
                counted = 1;
            }                                                                   
        });
         /* aboutus page counter section - End*/
        // about-testimonial start
        $('.owl_abt_tes').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots:false,
            navText: ['<img src="assets/img/angle_left.svg">','<img src="assets/img/angle_right.svg">'],
            items:1
        })
        // about-testimonial end
    </script>
</body>
</html>