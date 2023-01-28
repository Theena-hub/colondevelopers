    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light sticky-top" style="background: #E04048;padding: 0px;">
        <div class="container" id="nav_container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/colon_dev_logo.svg" alt="logo">
            </a>
            <button class="navbar-toggler active" data-bs-toggle="collapse" type="button"  data-bs-target="#navcol-1" id="tog-btn" onclick="togShow()" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="tog-show" class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto navigation" >
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>                                  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                          Services
                        </a>
                        <ul id="tog-list-show" class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a href="website.php" class="dropdown-item">Web Design & Development</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a href="android.php" class="dropdown-item">Android Apps</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a href="ios.php" class="dropdown-item">IOS Apps Development</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a href="custom-software.php" class="dropdown-item">Custom Software</a></li> 
                          <li><hr class="dropdown-divider"></li>
                          <li><a href="seo.php" class="dropdown-item">SEO Development</a></li> 
                        </ul>                         
                      </li> 
                    <li class="nav-item"><a class="nav-link" href="casestudy-index.php">Case Study</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>                    
                </ul>  
            </div>
        </div>
    </nav> 
    <script type="text/javascript">
        function togShow() {
            document.getElementById("tog-show").classList.add("show");
            document.getElementById('tog-btn').setAttribute("onclick","togHide()")
        }
        function togHide() {
            document.getElementById('tog-show').classList.remove("show");
            document.getElementById('tog-btn').setAttribute("onclick","togShow()")
        }
    </script>