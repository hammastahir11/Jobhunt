<!DOCTYPE html>
@extends('Layouts.layout')
@section('content')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/JobApply/JobApply.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Apply</title>
</head>

<body>


    <div class="container">
        <div class="row w-100  rounded">
            <div class="col-5 shadow-lg  p-5 bgcolorp justify-content-center text-center outleftcontainerunder">
                <img src="css/JobApply/hiring img.png" class="w-100" alt="hiring img">
                <button class="btn-warning rounded shadow btn text-light "><a class="anchorTag" href="/allJobs">Click
                        Here</a></button>
            </div>
            <div class="shadow-lg  col-7 py-5 text-center align-content-center justify-content-center">
                <h4>Personal Info</h4>
                @isset($error)
                <label for="error"
                    style="color:rgb(255, 255, 255); text-align: center; background:rgb(150, 10, 10);padding:8px"
                    class='submit-btn'><b>{!!$error!!}</b></label>
                @endisset
                <form action="/apply" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="text" name="fname" placeholder="Full Name" class="w-50 border p-1 m-3 rounded">
                    @error('fname')
                    <div class="alert-danger ">{{$message}}</div>
                    @enderror
                    <input type="text" name="email" placeholder="Email" class="w-50 border p-1 m-3 rounded">
                    @error('email')
                    <div class="alert-danger ">{{$message}}</div>
                    @enderror
                    <input type="text" name="pNumber" placeholder="Phone Number" class="w-50 border p-1 m-3 rounded">
                    @error('pNumber')
                    <div class="alert-danger ">{{$message}}</div>
                    @enderror
                    <label for="Resume" class="w-50 border-0 p-1 m-3 rounded">Upload .pdf/.docx Resume file </label>
                    
                    <input type="file" name="resume" id="Resume"  class="w-50 border p-1 m-3 rounded"><br>
                    @error('resume')
                    <div class="alert-danger ">{{$message}}</div>
                    @enderror
                    <button type="submit" class="btn bg-warning text-light">Apply</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
@endsection