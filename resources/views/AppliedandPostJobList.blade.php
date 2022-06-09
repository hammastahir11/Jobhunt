<!DOCTYPE html>
@extends('Layouts.layout')
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/ApplieedandPostJob/ApplieedandPostJob.css')}}">
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



    <!-- Active has to add in both tabs and in the active page -->


    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-AppliedJobs-tab" onclick="addActiveClass" data-bs-toggle="pill" data-bs-target="#pills-AppliedJobs" type="button" role="tab" aria-controls="pills-AppliedJobs" aria-selected="true">Applied Jobs</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-PostJobs-tab" onclick="addActiveClass" data-bs-toggle="pill" data-bs-target="#pills-PostJobs" type="button" role="tab" aria-controls="pills-PostJobs" aria-selected="false">Post Jobs</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-RecievedProposals-tab" onclick="addActiveClass()" data-bs-toggle="pill" data-bs-target="#pills-RecievedProposals" type="button" role="tab" aria-controls="pills-RecievedProposals" aria-selected="false">Recieved Proposals</button>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">






        <div class="tab-pane fade show" id="pills-AppliedJobs" role="tabpanel" aria-labelledby="pills-AppliedJobs-tab">

            <!-- Applied Jobs -->


            <h4 class="parrotColor position-sticky p-2 m-2 bg-white border rounded ">Applied Job List</h4>
    <div class="container">


        <div class="row rounded">
            

            <div class="col-5 bgcolorp ScrollingJobs justify-content-center text-center outleftcontainerunder">
               

                
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                        <h7 style="color: #89ba16" >Part Time</h7>
                        <h5>Frontend Developer</h5>
                        <p>Facebook.Inc</p>
                </div>
                 
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>
             
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>

                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>
             
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>
                    

                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>
             
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>
                    
                    
                





            </div>



            <div class="offset-6 col-7 py-5  ">
                

                <div >
                    <h6 style="color: #89ba16" >Job Description</h6>
                    <h2>Post Of Job</h2>
                    <i class="bi bi-bag-fill h6">  (Internship,fullTime,Remote)</i><br>
                    <i class="bi bi-building h6">Address</i>
        
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias beatae aperiam, fugiat cupiditate, ea tempora qui, fuga tempore distinctio iusto nobis modi? Expedita voluptas repudiandae velit? Modi, repellat iusto.</p>
        
                  </div>  


            </div>
        </div>
    </div>


            <!-- Applied Jobs Ends -->



            
        </div>
        <div class="tab-pane fade show" id="pills-PostJobs" role="tabpanel" aria-labelledby="pills-PostJobs-tab">

            <!-- Post Jobs -->
            <h4 class="parrotColor position-sticky p-2 m-2 bg-white border rounded ">Posted Job List</h4>
    <div class="container">


        <div class="row rounded">
            

            <div class="col-5  bgcolorp ScrollingJobs justify-content-center text-center outleftcontainerunder">
               

                
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                        <h7 style="color: #89ba16" >Part Time</h7>
                        <h5>Frontend Developer</h5>
                        <p>Facebook.Inc</p>
                </div>
                 
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>
             
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>

                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>
             
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>
                    

                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>
             
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>
                    
                    
                





            </div>



            <div class="  col-7 py-5  ">
                

                <div >
                    <h6 style="color: #89ba16" >Job Description</h6>
                    <h2>Post Of Job</h2>
                    <i class="bi bi-bag-fill h6">  (Internship,fullTime,Remote)</i><br>
                    <i class="bi bi-building h6">Address</i>
        
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias beatae aperiam, fugiat cupiditate, ea tempora qui, fuga tempore distinctio iusto nobis modi? Expedita voluptas repudiandae velit? Modi, repellat iusto.</p>
        
                  </div>  


            </div>
        </div>
    </div>
            <!-- Post Jobs Ends -->

        </div>
        <div class="tab-pane show active fade" id="pills-RecievedProposals" role="tabpanel" aria-labelledby="pills-RecievedProposals-tab">

            <!-- Recieved Proposals -->
            <h4 class="parrotColor position-sticky p-2 m-2 bg-white border rounded ">Proposal Recieved List</h4>
    <div class="container">


        <div class="row rounded">
            

            <div class="col-5 bgcolorp ScrollingJobs justify-content-center text-center outleftcontainerunder">
               

                
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                        <h7 style="color: #89ba16" >Part Time</h7>
                        <h5>Frontend Developer</h5>
                        <p>Facebook.Inc</p>
                </div>
                 
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>
             
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>

                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>
             
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>
                    

                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>
             
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <h7 style="color: #89ba16" >Part Time</h7>
                    <h5>Frontend Developer</h5>
                    <p>Facebook.Inc</p>
                </div>
                    
                    
                





            </div>



            <div class=" col-7 py-5  ">
                

                <div >
                    <h6 style="color: #89ba16" >Job Description</h6>
                    <h2>Post Of Job</h2>
                    <i class="bi bi-bag-fill h6">  (Internship,fullTime,Remote)</i><br>
                    <i class="bi bi-building h6">Address</i>
        
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt molestias beatae aperiam, fugiat cupiditate, ea tempora qui, fuga tempore distinctio iusto nobis modi? Expedita voluptas repudiandae velit? Modi, repellat iusto.</p>
        
                  </div>  


            </div>
        </div>
    </div>
            <!-- Recieved Proposals Ends -->
        </div>
      </div>













    <!-- Start from here -->



</body>
</html>
@endsection