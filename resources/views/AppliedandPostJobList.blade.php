<!DOCTYPE html>
@extends('Layouts.layout')
@section('content')
<html lang="en">
{{-- <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
    />
    <title>Job List</title>
</head> --}}

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL::asset('css/ApplieedandPostJob/ApplieedandPostJob.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>

    <div class="container">
      <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#home">Applied Jobs</a></li>
        <li><a data-toggle="pill" href="#menu1">Post Jobs</a></li>
        <li><a data-toggle="pill" href="#menu2">Recieved Jobs</a></li>
      </ul>
      













      <div class="tab-content">
        {{-- Applied Jobs --}}
        <div id="home" class="tab-pane fade in active">
            
            <h4 class="parrotColor position-sticky p-2 m-2 bg-white border rounded ">Applied Job List</h4>
    <div class="container">


        <div class="row rounded">
            

            <div class="col-5 bgcolorp ScrollingJobs justify-content-center text-center outleftcontainerunder">
               

                
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                        <h6 style="color: #89ba16" >Part Time</h6>
                        <h5>Frontend Developer</h5>
                        <p>Facebook.Inc</p>
                </div>
                 
            </div>



            <div class=" col-7   ">
                <div >
                    <h3 class="text-center   bg-dark p-3" style="color: #89ba16" >Job Description</h3>
                    <h4>Post Of Job</h4>
                    <i class="bi bi-bag-fill h6">  (Internship,fullTime,Remote)</i><br>
                    <i class="bi bi-building h6">Address</i>
        
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias beatae aperiam, fugiat cupiditate, ea tempora qui, fuga tempore distinctio iusto nobis modi? Expedita voluptas repudiandae velit? Modi, repellat iusto.</p>
        
                </div>  


            </div>
        </div>
    </div>



        </div>
        {{-- Applied Jobs End --}}


















        {{-- Post Job --}}
        <div id="menu1" class="tab-pane fade">
            <h4 class="parrotColor position-sticky p-2 m-2 bg-white border rounded ">Posted Job List</h4>
            <div class="container">
        
        
                <div class="row rounded">
                    
        
                    <div class="col-5  bgcolorp ScrollingJobs justify-content-center text-center outleftcontainerunder">
                       
        
                        
                        <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                                <h6 style="color: #89ba16" >Part Time</h6>
                                <h5>Frontend Developer</h5>
                                <p>Facebook.Inc</p>
                        </div>
                        
                    </div>
        
        
        
                    <div class="  col-7   ">
                        
        
                        <div >
                            <h3 class="text-center   bg-dark p-3" style="color: #89ba16" >Job Description</h3>
                            <h4>Post Of Job</h4>
                            <i class="bi bi-bag-fill h6">  (Internship,fullTime,Remote)</i><br>
                            <i class="bi bi-building h6">Address</i>
                
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias beatae aperiam, fugiat cupiditate, ea tempora qui, fuga tempore distinctio iusto nobis modi? Expedita voluptas repudiandae velit? Modi, repellat iusto.</p>
                
                        </div>  
        
        
                    </div>
                </div>
            </div>
        </div>

        {{-- Post Job End --}}























        <div id="menu2" class="tab-pane fade">
            <h4 class="parrotColor position-sticky p-2 m-2 bg-white border rounded ">Proposal Recieved List</h4>
            <div class="container">
        
        
                <div class="row rounded">
                    
        
                    <div class="col-5 bgcolorp ScrollingJobs justify-content-center text-center outleftcontainerunder">
                       
        
                        
                        <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                                <h6 style="color: #89ba16" >Part Time</h6>
                                <h5>Frontend Developer</h5>
                                <p>Facebook.Inc</p>
                        </div>
                      
                    </div>
        
        
        
                    <div class=" col-7   ">
                        
        
                        <div >
                            <h3 class="text-center   bg-dark p-3" style="color: #89ba16" >Job Description</h3>
                            <h4>Post Of Job</h4>
                            <i class="bi bi-bag-fill h6">  (Internship,fullTime,Remote)</i><br>
                            <i class="bi bi-building h6">Address</i>
                
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias beatae aperiam, fugiat cupiditate, ea tempora qui, fuga tempore distinctio iusto nobis modi? Expedita voluptas repudiandae velit? Modi, repellat iusto.</p>
                
                        </div>   
        
        
                    </div>
                </div>
            </div>
        </div>
        
      </div>
    </div>
    
    </body>

</html>
@endsection