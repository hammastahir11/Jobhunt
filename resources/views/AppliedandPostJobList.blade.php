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
      <ul class="nav nav-pills nav-pills-primary">
        <li class="{{ $tabactive == 1 ? 'active' : '' }}"><a data-toggle="pill" href="#appliedjob">Applied Jobs</a></li>
        <li class="{{ $tabactive == 2 ? 'active' : '' }}"><a data-toggle="pill" href="#menu1">Post Jobs</a></li>
        <li class="{{ $tabactive == 3 ? 'active' : '' }}"><a data-toggle="pill" href="#menu2">Offer Recieved</a></li>
      </ul>
      













      <div class="tab-content">
        {{-- Applied Jobs --}}
        <div id="appliedjob" class="tab-pane fade in {{ $tabactive == 1 ? 'active' : '' }}">
            
            <h4 class="parrotColor position-sticky p-2 m-2 bg-white border rounded ">Applied Job List</h4>
    <div class="container">


        <div class="row rounded">
            

            <div class="col-5 bgcolorp ScrollingJobs justify-content-center text-center outleftcontainerunder">
               

                @if($Jobs_Applied!=NULL)
                @foreach($Jobs_Applied as $data)
                    
                <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                    <a href="/deleteAppliedJob/{{$data->applyId}}" class="btn bg-primary" styel="text-decoration: none;">Delete</a>
                    <a href="/appliedJobDescription/{{$data->postId}}" class="btn bg-primary" styel="text-decoration: none;">Description</a>
                    
                    <h6 style="color: #89ba16" >{{$data->EmploymentType}}</h6>
                    <h5>{{$data->Title}}</h5>
                    <p>{{$data->CompanyName}}</p>
                </div>
                @endforeach
                 @endif
            </div>



            <div class=" col-7  ScrollingJobs ">
                <div >
                    @if($firstjob!=Null)
                    <h3 class="text-center    bg-dark p-3" style="color: #89ba16" >Job Description</h3>
                    <h4>{{$firstjob->Title}}</h4>
                    <i class="bi bi-bag-fill h6">  {{$firstjob->EmploymentType}}</i><br>
                    <i class="bi bi-building h6">{{$firstjob->JobLocation}}</i>
        
                    <p>{!!$firstjob->JobDescription!!}</p>
                    @endif
                </div>  
            </div>
        </div>
    </div>



        </div>
        {{-- Applied Jobs End --}}


















        {{-- Post Job --}}
        <div id="menu1" class="tab-pane fade in {{ $tabactive == 2 ? 'active' : '' }}">
            <h4 class="parrotColor position-sticky p-2 m-2 bg-white border rounded ">Posted Job List</h4>
            <div class="container">
        
        
                <div class="row rounded">
                    
        
                    <div class="col-5  bgcolorp ScrollingJobs justify-content-center text-center outleftcontainerunder">
                       
        
                        @if($postjobs!=NULL)
                        @foreach($postjobs as $job)
                        <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                            
                            <a href="/postJobdelete/{{$job->postId}}" class="btn bg-primary" styel="text-decoration: none;">Delete</a>
                            <a href="/postJobDescription/{{$job->postId}}" class="btn bg-primary" styel="text-decoration: none;">Description</a>
                    
                            <h6 style="color: #89ba16" >{{$job->EmploymentType}}</h6>
                            <h5>{{$job->Title}}</h5>
                            <p>{{$job->CompanyName}}</p>
                           
                        </div>
                        @endforeach
                        @endif
                        
                    </div>
        
        
        
                    <div class="  col-7  ScrollingJobs ">
                        
        
                        @if($firstpostjob!=NULL)
                        <div >
                            <h3 class="text-center   bg-dark p-3" style="color: #89ba16" >Job Description</h3>
                            <h4>{{$firstpostjob->Title}}</h4>
                            <i class="bi bi-bag-fill h6">{{$firstpostjob->EmploymentType}}</i><br>
                            <i class="bi bi-building h6">{{$firstpostjob->JobLocation}}</i>

                
                            <p>{!!$firstpostjob->JobDescription!!}</p>
                
                        </div>  
                        @endif
        
                    </div>
                </div>
            </div>
        </div>

        {{-- Post Job End --}}























        <div id="menu2" class="tab-pane fade in {{ $tabactive == 3 ? 'active' : '' }}">
            <h4 class="parrotColor position-sticky p-2 m-2 bg-white border rounded ">Proposal Recieved List</h4>
            <div class="container">
        
        
                <div class="row rounded">
                    
        
                    <div class="col-5 bgcolorp ScrollingJobs justify-content-center text-center outleftcontainerunder">
                       
        
                        @if($offerRecieved!=NULL)
                        @foreach($offerRecieved as $offers)
                        <div class="col-5 p-2 w-100 JobListItem text-start bg-white rounded my-3">
                            <a href="/deleteoffer/{{$offers->applyId}}" class="btn bg-primary" styel="text-decoration: none;">Delete</a>
                            <a href="/offerJobDescription/{{$offers->applyId}}" class="btn bg-primary" styel="text-decoration: none;">Description</a>
                            <a href="/Chat/{{$offers->userId}}" class="btn bg-primary" styel="text-decoration: none;">Chat</a>
                    
                                <h6 style="color: #89ba16" >{{$offers->emailId}}</h6>
                                <h5>{{$offers->fName}}</h5>
                                <p>{{$offers->Title}}</p>
                        </div>
                        @endforeach
                        @endif
                      
                    </div>
        
        
        
                    <div class=" col-7  ScrollingJobs ">
                        
        
                        <div >
                            <h3 class="text-center     bg-dark p-3" style="color: #89ba16" >Job Description</h3>
                            @if($offerRecievedfirst!=NULL)
                            <h4>{{$offerRecievedfirst->Title}}</h4>
                            <i class="bi bi-bag-fill h6"> {{$offerRecievedfirst->fName}} (Internship,fullTime,Remote)</i><br>
                            <i class="bi bi-building h6">{{$offerRecievedfirst->emailId}}</i>
                
                            <p>{!!$offerRecievedfirst->JobDescription!!}</p>
                            @endif
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