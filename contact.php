<!DOCTYPE html>
<html lang="en">
<?php include("head.php")?>
<body style="font-family: Roboto;">
    <!--Navbar Section Start-->
    <!-- <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light" style="background: #E04048;padding: 0px;">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img style=" width: 150px;height: auto;" src="assets/img/t4l_logo_white.png" alt="logo">
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" type="button"  data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto navigation" >
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>                                  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a href="website.html" class="dropdown-item" href="website.html">Web Design & Development</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a href="android.html" class="dropdown-item" href="android.html">Android Apps</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a href="ios.html" class="dropdown-item" href="ios.html">IOS Apps Development</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a href="custom-software.html" class="dropdown-item" href="#">Custom Software</a></li> 
                        </ul>                         
                      </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="casestudy-index.html">Case Study</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>                    
                </ul>  
            </div>
        </div>
    </nav> -->
    <?php include("nav.php")?>
    <!--Navbar Section End-->   
    <!--Get in Touch start-->
    <div class="container-fluid get-in" style="background-image: url(assets/img/about-us/worldmap.svg);">
        <div class="container inner-one" >    
            <div class="inner-two">     
                <p class="title text-center">Get in Touch.</h1>
                <p class="sub-title text-center">
                    Please share your queries by completing the form below. We will reply to you shortly.
                </p>
                <div class="row" style="padding: 20px 0">
                    <div class="col-md-6 left">
                        <div class="inner">
                            <input class="form-control fname" type="text" name="fname" placeholder="First name" required/>
                            <input class="form-control lname" id="lname" type="text" name="lname" placeholder="Last name" required>
                            <input class="form-control email" type="email" name="email" placeholder="Email"/>
                            <input class="form-control company" type="text" name="company" placeholder="Company"/>
                        </div>
                    </div>
                    <div class="col-md-6 right">                
                        <textarea class="form-control address" name="address" cols="30" rows="9" placeholder="Your message..."></textarea>                   
                    </div>
                    <div class="send_message">
                        <input type="button" class="btn" name="" value="Send Message">
                    </div>                 
                </div> 
            </div>  
        </div>      
    </div> 
    <!--Get in Touch end-->
    <!--Map Section Start-->
    <div class="container contact-map">
        <div class="row" >
            <div class="col-md-6 left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.004892544962!2d80.13360211455337!3d13.098876290772436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5263bdf228cf6b%3A0xc3dc59824337538!2sTech4LYF%20Codeground!5e0!3m2!1sen!2sin!4v1660384422204!5m2!1sen!2sin" width="90%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                 
            </div>
            <div class="col-md-6 right">                        
                <p class="title">We are a young company but we grew fast, thanks to the support of all our valuable customers.</p>
                <div class="sub-title">
                    <ul class="text">                
                        <li><p class="sub-text">You can enter your details and message here. We will contact you as soon as possible.</p></li>
                        <li><p class="sub-text">Call us, send us a message, or simply come to visit us.</p></li>
                    </ul>
                </div>
                <div class="contact-form">  
                    <div class="form-group">
                        <img src="assets/img/email_icon.svg" alt="image">
                        <input class="form-control input-field" type="email" name="email" placeholder="Email:"/>                        
                    </div>       
                    <div class="form-group">
                        <img src="assets/img/phone_icon.svg" alt="image">
                        <input class="form-control input-field" id="phone" type="number" name="phone" placeholder="Phone:" onKeyPress="if(this.value.length==10) return false;">
                    </div>
                    <div class="form-group">
                        <img id="location_icon" src="assets/img/location_icon.svg" alt="image" >
                        <textarea class="form-control" name="address" cols="40" rows="3" style="height:100px" placeholder="Address"></textarea>
                    </div>                 
                </div>               
            </div>  
        </div>
    </div>
    <!--Map Section End-->
    <!--Footer Section Start-->
    <?php include("footer.php")?>
    <!--Footer Section End-->
    <?php include("script.php")?>
</body>
</html>