<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{URL::asset('css/layout/menu.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <!-- <script src="{{URL::asset('css/layout/profilemenu.js')}}"></script> -->

  <script>
    $(document).ready(function(){
      $("#icon").click(function(){
        $("ul").toggleClass('show');
      });
    });  
    
  </script>
  <title>Job Hunt</title>
</head>
<body class="antialiased">
<header>
    <nav class="navi">
      <label class="logo">JOB HUNT</label>


      <ul class="profile" >
                <li class="nr_li dd_main">
                  <img onclick="" src="css/layout/profile.jpeg" alt="profile_img">
                  
                  <div class="dd_menu"  >
                    
                    <div class="dd_left">
                      <ul>
                        <li><i class="fas fa-cog"></i></li>
                        <li><i class="fas fa-download"></i></li>
                        <li><i class="fas fa-sign-out-alt"></i></li>
                      </ul>
                    </div>
                    <div class="dd_right">
                      <ul>
                        <li>Settings</li>
                        <li>Downloads</li>
                        <li>Logout</li>
                      </ul>
                    </div>
                  </div>
                <!-- </li>
                <li class="nr_li">
                  <i class="fas fa-envelope-open-text"></i>
                </li> -->
          </ul>
      <ul class="ull">
        <li class="lii">
          <a class="active" href="#">Home</a>
        </li>
        <li class="lii">
          <a href="#">About</a>
        </li>
        <li class="lii">
          <a href="#">contact us</a>
        </li>


          
      </ul>

      
      <label class="label" id="icon">
        <i class="fa fa-bars"></i> 
      </label>
      
      <!-- Profile Menu -->
      
  

     


    </nav>
  </header>
  @yield('content')








<!-- Footer -->





  <!--Footer-->
  <!-- Footer -->
  <footer class="text-center  mt-5 text-lg-start bgcolor pcolor">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>S K I L L H U N T
            </h6>
            <p>
              Skill Hunt is a Plateform, where you can find out a job. You Can Post a job. Or if you want to find out
              the candidate for any post. You can also do that here
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> Comsats University Islamabad</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              localpurposes@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> +92 3075174602</p>
            <p><i class="fas fa-print me-3"></i> +51 1252521555</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="index.html">Skill Hunt</a>
    </div>
    <!-- Copyright -->
  </footer>



<!-- Footer End -->









  <script>
	var dd_main = document.querySelector(".dd_main");
	dd_main.addEventListener("click", function(){
		this.classList.toggle("active");
	});















</script>

  


  
</body>
</html>