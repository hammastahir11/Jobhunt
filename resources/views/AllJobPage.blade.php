<!DOCTYPE html>
@extends('Layouts.layout')
@section('content')
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{URL::asset('css/AllJob/allJob.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
    />
    <title>Job List</title>
  </head>
  <body>
    
    <!-- Copy of Linked In -->
    <!-- All jobs -->
    <div class="container">
      <div class="row justify-content-around">
    
     
        <!-- Jobs list -->
        <div class="col-5 my-2 rounded border ">
          <h6 style="color: #89ba16">Recently Added Jobs</h6>
          <h6><a class="anchorTag" style="color: black;" href="index.html">Home Page</a></h6>
  
          <!--Left Side List of Jobs-->
  
          <div class="row text-start">
            <div class="col-12 p-2 ScrollingJobs my-2 bgcolorp" id="kashif">

              <div class="col-6 p-2 w-100 JobListItem bg-white rounded my-3">
                <div class="row">
                  <div class="col">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h2>Frontend Developer</h2>
                    <span>Facebook.Inc</span>
                  </div>
                  <div
                    class="col align-items-center text-end d-flex align-items-center justify-content-md-end"
                  >
                    <button type="button" class="btn btn-primary"><a class="anchorTag" href="JobApply.html">Apply</a></button>
                  </div>
                </div>
              </div>

  
            </div>
          </div>
        </div>
  




        <!-- instructions -->
  
        <div class="col-6 rounded border my-2">
          <div class="position-static">
            <h6 style="color: #89ba16" >Job Description</h6>
            <h2>Post Of Job</h2>
            <i class="bi bi-bag-fill h6">  (Internship,fullTime,Remote)</i><br>
            <i class="bi bi-building h6">Address</i>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias beatae aperiam, fugiat cupiditate, ea tempora qui, fuga tempore distinctio iusto nobis modi? Expedita voluptas repudiandae velit? Modi, repellat iusto.</p>

          </div>  
        </div>
      </div>
  
    </div>





    <!-- bootstrap link -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
@endsection