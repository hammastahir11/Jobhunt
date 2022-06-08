@extends('Layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />




  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{URL::asset('css/index/index.css')}}"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />


  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!--Bootstrap-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
  <!--Bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <title>HOME</title>
</head>

<body class="pcolor">


  <!--BODY OF PAGE-->

  <h2>kashif</h2>
  <div style="background-image: url('css/index/bgHomeImage.jpg'); background-size: cover" class="bcolor">
    <div class="py-5 text-center pcolor bgcolor">
      <p>Find Job, Employment, and Career Opportunities</p>
      <h1>The Eassiest Way to Get Your New Job</h1>

      <!--COMPLAINS FONT OWESM ITEMS HERE-->
      <div class="row py-3">
        <div class="col">
          <!-- <i class="fa fa-globe fa-4x" aria-hidden="true"> </i> -->
          <i class="bi bi-globe fa-4x "></i>

          <span>
            <h2>46</h2>
            <h3>Countries</h3>
          </span>
        </div>

        <div class="col">
          <div class="row">
            <i class="bi bi-building fa-4x"></i>
            <span>
              <h2>450</h2>
              <h3>Companies</h3>
            </span>
          </div>
        </div>

        <div class="col">
          <i class="bi bi-person-circle fa-4x"></i>
          <span>
            <h2>1800</h2>
            <h3>Total-Users</h3>
          </span>
        </div>
      </div>

      <!--Search for a Job-->
      <div class="py-5 bg-light text-dark rounded-3 shadow mx-5">
        <!-- <i class="bi bi-binoculars-fill btnset rounded shadow"><input type="text" class="workSearch" placeholder="   i:e Graphic Designer">

            </i> -->

        <input type="text" class="shadow rounded workSearch" placeholder="   i:e Graphic Designer" />

        <button type="button" class="btnset shadow rounded">
          Search Candidate
        </button>

        <button type="button" class="btnset shadow rounded">
          &nbsp;&nbsp;&nbsp;Search Job&nbsp; &nbsp;&nbsp;
        </button>
      </div>
    </div>
  </div>

  <!--Open Jobs-->

  <!--Shadow will be added using javaScript-->
  <section class="openPositions py-3">
    <h2 class="text-center py-2 bgcolor shadow pcolor">Categories</h2>
    <div class="container">

      <div class="row  p-1 shadow">
        <a href="#" class="CategoryJobOpen rounded col-lg-2">
          <div class="">
            <h4>Graphic Designer</h4>
            <i class="bi bi-palette fa-4x"></i>
            <p>123 Job Open</p>
          </div>
        </a>

        <a href="#" class="CategoryJobOpen rounded col-lg-2">
          <div class="">
            <h4>Training and Education</h4>
            <i class="bi bi-book-half fa-4x"></i>
            <p>123 Job Open</p>
          </div>
        </a>

        <a href="#" class="CategoryJobOpen rounded col-lg-2">
          <div class="">
            <h4>Website & Coder</h4>
            <i class="bi bi-journal-code fa-4x"></i>
            <p>123 Job Open</p>
          </div>
        </a>

        <a href="#" class="CategoryJobOpen rounded col-lg-2">
          <div class="">
            <h4>Account & Finance</h4>
            <i class="bi bi-calculator-fill fa-4x"></i>
            <p>123 Job Open</p>
          </div>
        </a>

        <a href="#" class="CategoryJobOpen rounded col-lg-2">
          <div class="">
            <h4>Resturant & Food</h4>
            <i class="bi bi-egg-fried fa-4x"></i>
            <p>123 Job Open</p>
          </div>
        </a>

        <a href="#" class="CategoryJobOpen rounded col-lg-2">
          <div class="">
            <h4>Health & Hospital</h4>
            <i class="bi bi-palette fa-4x"></i>
            <p>123 Job Open</p>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!--Little Info-->
  <section>
    <div class="container pt-5 text-center  shadow">

      <h6 style="color: #89ba16">Recently Added Jobs</h6>
      <h1 class=" pcolor">Featured Jobs Posts For This Week</h1>

      <!--Left Side List of Jobs-->

      <div class="row text-start ">
        <div class="col-8 p-4 ScrollingJobs" id="kashif">
          <div class="col-8 p-3 w-100 JobListItem my-3">
            <div class="row">
              <div class="col">
                <h6 style="color: #89ba16">Part Time</h6>
                <h2>Frontend Developer</h2>
                <span>Facebook.Inc</span>
              </div>
              <div class="col align-items-center text-end d-flex align-items-center justify-content-md-end">
                <button type="button" class="btn btn-primary">Apply</button>
              </div>
            </div>
          </div>

          <div class="col-8 p-3 w-100 JobListItem my-3">
            <div class="row">
              <div class="col">
                <h6 style="color: #89ba16">Part Time</h6>
                <h2>Frontend Developer</h2>
                <span>Facebook.Inc</span>
              </div>
              <div class="col align-items-center text-end d-flex align-items-center justify-content-md-end">
                <button type="button" class="btn btn-primary">Apply</button>
              </div>
            </div>
          </div>

          <div class="col-8 p-3 w-100 JobListItem my-3">
            <div class="row">
              <div class="col">
                <h6 style="color: #89ba16">Part Time</h6>
                <h2>Frontend Developer</h2>
                <span>Facebook.Inc</span>
              </div>
              <div class="col align-items-center text-end d-flex align-items-center justify-content-md-end">
                <button type="button" class="btn btn-primary">Apply</button>
              </div>
            </div>
          </div>

          <div class="col-8 p-3 w-100 JobListItem my-3">
            <div class="row">
              <div class="col">
                <h6 style="color: #89ba16">Part Time</h6>
                <h2>Frontend Developer</h2>
                <span>Facebook.Inc</span>
              </div>
              <div class="col align-items-center text-end d-flex align-items-center justify-content-md-end">
                <button type="button" class="btn btn-primary">Apply</button>
              </div>
            </div>
          </div>

          <div class="col-8 p-3 w-100 JobListItem my-3">
            <div class="row">
              <div class="col">
                <h6 style="color: #89ba16">Part Time</h6>
                <h2>Frontend Developer</h2>
                <span>Facebook.Inc</span>
              </div>
              <div class="col align-items-center text-end d-flex align-items-center justify-content-md-end">
                <button type="button" class="btn btn-primary">Apply</button>
              </div>
            </div>
          </div>

          <div class="col-8 p-3 w-100 JobListItem my-3">
            <div class="row">
              <div class="col">
                <h6 style="color: #89ba16">Part Time</h6>
                <h2>Frontend Developer</h2>
                <span>Facebook.Inc</span>
              </div>
              <div class="col align-items-center text-end d-flex align-items-center justify-content-md-end">
                <button type="button" class="btn btn-primary">Apply</button>
              </div>
            </div>
          </div>

          <div class="col-8 p-3 w-100 JobListItem my-3">
            <div class="row">
              <div class="col">
                <h6 style="color: #89ba16">Part Time</h6>
                <h2>Frontend Developer</h2>
                <span>Facebook.Inc</span>
              </div>
              <div class="col align-items-center text-end d-flex align-items-center justify-content-md-end">
                <button type="button" class="btn btn-primary">Apply</button>
              </div>
            </div>
          </div>

          <div class="col-8 p-3 w-100 JobListItem my-3">
            <div class="row">
              <div class="col">
                <h6 style="color: #89ba16">Part Time</h6>
                <h2>Frontend Developer</h2>
                <span>Facebook.Inc</span>
              </div>
              <div class="col align-items-center text-end d-flex align-items-center justify-content-md-end">
                <button type="button" class="btn btn-primary">Apply</button>
              </div>
            </div>
          </div>

          <div class="col-8 p-3 w-100 JobListItem my-3">
            <div class="row">
              <div class="col">
                <h6 style="color: #89ba16">Part Time</h6>
                <h2>Frontend Developer</h2>
                <span>Facebook.Inc</span>
              </div>
              <div class="col align-items-center text-end d-flex align-items-center justify-content-md-end">
                <button type="button" class="btn btn-primary">Apply</button>
              </div>
            </div>
          </div>

          <div class="col-8 p-3 w-100 JobListItem my-3">
            <div class="row">
              <div class="col">
                <h6 style="color: #89ba16">Part Time</h6>
                <h2>Frontend Developer</h2>
                <span>Facebook.Inc</span>
              </div>
              <div class="col align-items-center text-end d-flex align-items-center justify-content-md-end">
                <button type="button" class="btn btn-primary">Apply</button>
              </div>
            </div>
          </div>

          <div class="col-8 p-3 w-100 JobListItem my-3">
            <div class="row">
              <div class="col">
                <h6 style="color: #89ba16">Part Time</h6>
                <h2>Frontend Developer</h2>
                <span>Facebook.Inc</span>
              </div>
              <div class="col align-items-center text-end d-flex align-items-center justify-content-md-end">
                <button type="button" class="btn btn-primary">Apply</button>
              </div>
            </div>
          </div>

          <div class="col-8 p-3 w-100 JobListItem my-3">
            <div class="row">
              <div class="col">
                <h6 style="color: #89ba16">Part Time</h6>
                <h2>Frontend Developer</h2>
                <span>Facebook.Inc</span>
              </div>
              <div class="col align-items-center text-end d-flex align-items-center justify-content-md-end">
                <button type="button" class="btn btn-primary">Apply</button>
              </div>
            </div>
          </div>

          <div class="col-8 p-3 w-100 JobListItem my-3">
            <div class="row">
              <div class="col">
                <h6 style="color: #89ba16">Part Time</h6>
                <h2>Frontend Developer</h2>
                <span>Facebook.Inc</span>
              </div>
              <div class="col align-items-center text-end d-flex align-items-center justify-content-md-end">
                <button type="button" class="btn btn-primary">Apply</button>
              </div>
            </div>
          </div>
        </div>

        <!--Right side just some pics-->
        <div class="col-4 p-4">
          <img src="css/index/bgHomeImage.jpg" class="w-100 py-1" alt="" />
          <img src="css/index/bgHomeImage.jpg" class="w-100 py-1" alt="" />
          <img src="css/index/bgHomeImage.jpg" class="w-100 py-1" alt="" />
        </div>
      </div>

      <!--Add for SignUp-->

      <div class="p-5 w-100 bgcolor my-3">
        <div class="row d-flex justify-content-start">
          <div class="col text-start bcolor">
            <h2>If you are Looking for a JOB</h2>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Tenetur laborum iste amet modi.
            </p>
          </div>
          <div class="col d-flex align-items-center justify-content-end">
            <a href="{{url('login')}}">
              <button type="button" class="btn btn-primary py-3 px-5">
                Sign Up
              </button>

            </a>
          </div>
        </div>
      </div>

      <!--Testimonials-->
      <section>
        <div class="container py-5 justify-content-center">
          <h4 class="parrotColor">Testimonial</h4>
          <h5 class="hscolor">*Our Happy Clients*</h5>
          <!--Testtimonialsssss-->
          <div class="py-3"></div>
          <div class="container py-3 bgcolor">
            <div id="myCarousel" class="carousel carousel-dark " data-bs-ride="carousel">
              <!-- Carousel indicators -->
              <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
              </ol>

              <!-- Wrapper for carousel items -->
              <div class="carousel-inner ">
                <div class="carousel-item shadow border p-3 active bcolor">
                  <div class="row " style="width: 90%;">

                    <div class="col-md-4 d-flex justify-content-end">


                      <img src="css/index/bgHomeImage.jpg" class="circular_image p-2 border shadow" alt="">


                    </div>
                    <div class="col-md-8 d-flex align-items-center ">


                      <h5><span style="font-weight: bold; font-size:larger;">"</span>Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Harum amet facilis fugiat iste, recusandae ad pariatur!
                        Dignissimos aspernatur consectetur dolore.<span
                          style="font-weight: bold; font-size:larger;">"</span></h5>

                    </div>

                  </div>
                </div>
                <div class="carousel-item shadow border p-3  bcolor">
                  <div class="row " style="width: 90%;">

                    <div class="col-md-4 d-flex justify-content-end">


                      <img src="css/index/bgHomeImage.jpg" class="circular_image p-2 border shadow" alt="">


                    </div>
                    <div class="col-md-8 d-flex align-items-center ">


                      <h5><span style="font-weight: bold; font-size:larger;">"</span>Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Quibusdam fugiat excepturi debitis, tempora ullam inventore? Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Harum amet facilis fugiat iste, recusandae ad
                        pariatur! Dignissimos aspernatur consectetur dolore.<span
                          style="font-weight: bold; font-size:larger;">"</span></h5>

                    </div>

                  </div>
                </div>
                <div class="carousel-item shadow border p-3  bcolor">
                  <div class="row " style="width: 90%;">

                    <div class="col-md-4 d-flex justify-content-end">


                      <img src="css/index/bgHomeImage.jpg" class="circular_image p-2 border shadow" alt="">


                    </div>
                    <div class="col-md-8 d-flex align-items-center ">


                      <h5><span style="font-weight: bold; font-size:larger;">"</span>Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Magnam, delectus? Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Harum amet facilis fugiat iste, recusandae ad pariatur! Dignissimos aspernatur
                        consectetur dolore.<span style="font-weight: bold; font-size:larger;">"</span></h5>

                    </div>

                  </div>
                </div>
              </div>

              <!-- Carousel controls -->
              <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                <!-- <span class="carousel-control-prev-icon"></span> -->
              </a>
              <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                <!-- <span class="carousel-control-next-icon"></span> -->
              </a>
            </div>


          </div>

          <!--end-->
        </div>
      </section>
      <!--Testimonial end-->
    </div>
  </section>


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
  <!-- Footer -->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>





  <script>
    $("document").ready(function () {
      $("#kashif")
        .children()
        .hover(
          function () {
            $(this).addClass("shadow");
          },

          function () {
            $(this).removeClass("shadow");
          }
        );



      $("#JobListItem").hover(
        function () {
          $(this).addClass("shadow");
        },

        function () {
          $(this).removeClass("shadow");
        }
      );

      $(function () {
        $('#file').load('Testimonial.html');
      });
    });



    /*JQUERY*/

    /*---------------*/
  </script>


</body>

</html>
@endsection