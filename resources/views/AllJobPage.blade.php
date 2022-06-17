<!DOCTYPE html>

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
  @extends('Layouts.layout')
@section('content')
    
    <!-- Copy of Linked In -->
    <!-- All jobs -->
    <div class="container">
      <div class="row w-100 justify-content-around">
    
     
        <!-- Jobs list -->
        <div class="col-5 my-2 shadow-lg rounded border ">
          <h6 style="color: #89ba16;">Recently Added Jobs</h6>
          {{-- <h6><a class="anchorTag" style="color: black;" href="index.html">Home Page</a></h6> --}}
  
          <!--Left Side List of Jobs-->
  
          <div class="row text-start">
            <div class="col-12 p-2 ScrollingJobs my-2 bgcolorp" id="kashif">

              @foreach ($jobs as $job)
              <div class="col-6 p-2 w-100 JobListItem bg-white rounded my-3">
                <div class="row">
                  <div class="col">
                    <h6 style="color: #89ba16" >{{$job->EmploymentType}}</h6>
                    <h4><b>{{$job->Title}}</b></h4>
                    <span><b>Company:</b> {{$job->CompanyName}}</span>
                  </div>
                  <div
                    class="col align-items-center text-end d-flex align-items-center justify-content-md-end"
                  >
                  <a href="/jobdescription/{{ $job->postId }}" class="btn btn-primary">Detail</a>
                    {{-- <button type="button" class="btn btn-primary"><a class="anchorTag" href="JobApply.html">Apply</a></button> --}}
                  </div>
                </div>
                
              </div>
              @endforeach
              
  
            </div>
          </div>
        </div>
  




        <!-- instructions -->
  
        <div class="col-6 shadow-lg rounded border my-2">
          <h6 style="color: #89ba16" >Job Description</h6>
          @if(Session::get('userId')!=NULL)
          <a href="/jobapply" class="btn btn-primary ">apply</a>
          @endif      
          <div  class="ScrollingJobs position-static">
            @if($jobDes!=NULL)
            <h2> {{$jobDes->Title}}</h2>
            <i class="bi bi-bag-fill h6"> {{$jobDes->WorkPlace}}</i><br>
            <i class="bi bi-building h6">{{$jobDes->JobLocation}}</i>
            <br>
            
            <div><div>{!!$jobDes->JobDescription!!}</div></div>
            
            @endif
          </div>  
        </div>
      </div>
  
    </div>




    @endsection
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
