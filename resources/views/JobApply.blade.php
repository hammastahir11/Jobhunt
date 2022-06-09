<!DOCTYPE html>
@extends('Layouts.layout')
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/JobApply/JobApply.css')}}s" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <title>Apply</title>
</head>
<body>

    <div class="container">
        <div class="row rounded">
            <div class="col-5 bgcolorp justify-content-center text-center outleftcontainerunder">
                <img src="hiring img.png" class="w-100" alt="hiring img">
                <button class="btn-warning rounded btn text-light " ><a class="anchorTag" href="AllJobPage.html">Click Here</a></button>
            </div>
            <div class="offset-5 col-7 py-5 text-center align-content-center justify-content-center">
                <h4>Personal Info</h4>
                <input type="text" placeholder="Full Name" class="w-50 border p-1 m-3 rounded">
                <input type="text" placeholder="Email" class="w-50 border p-1 m-3 rounded">
                <input type="text" placeholder="Phone Number" class="w-50 border p-1 m-3 rounded">
                <label for="Resume" class="w-50 border-0 p-1 m-3 rounded">Upload .pdf/.docx Resume file </label>
                <input type="file" id="Resume" placeholder="Choose Resume" class="w-50 border p-1 m-3 rounded"><br>
                <button type="submit" class="btn bg-warning text-light">Apply</button>

            </div>
        </div>
    </div>
   
</body>
</html>
@endsection