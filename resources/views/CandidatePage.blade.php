<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('css/AllJob/allJob.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
    />
    <title>Candidate</title>
</head>
<body>
    
    
    @extends('Layouts.layout')
    @section('content')
    <div class="text-center bgcolorp  text-light p-5   " >
        <h3>All Candidates</h3>
    </div>
    <div class="bgcolorp ">



        <div class="container bg-light py-4  ">
        <div class="col-12 p-2 ScrollingJobs my-2  shadow-lg" id="kashif">
    
            <div class="col-6 p-2 w-100 JobListItem bg-white rounded my-3">
              @if($candidates!=NULL)
              @foreach($candidates as $candidate)
              <div class="row">
                <div class="col">
                  <h6 style="color: #89ba16" >2 year experience</h6>
                  <h2>{{$candidate->fName}}  {{$candidate->lName}}  </h2>
                  <span>{{$candidate->profession}}</span>
                  
                </div>
                <div
                  class="col align-items-center text-end d-flex align-items-center justify-content-md-end"
                >
                  <button type="button" class="btn px-5 btn-primary"><a class="anchorTag" href="/chat/{{$candidate->userId}}">Chat</a></button>
                </div>
              </div>
              @endforeach
              @endif
            </div>
    
        </div>
    </div>
  


    @endsection



</body>
</html>