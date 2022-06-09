@extends('Layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{URL::asset('css/CreateJob/CreateJob.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
        />
        <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
        <title>Job Create</title>
    </head>
    <body >
    <div class="bgcolorp">
        <div class="container  text-center py-3 text-light">
            <div class="parrotColor">Lannat Be Shamar</div>
            <h3>Find a Great Hire, Fast</h3>
            
            <p>Rated #1 in delivering quality hires</p>
        <div class="d-flex justify-content-center  p-3  " >
            <form class=" border rounded w-50 p-2 text-start" action="">
                <label for="title" class="py-2">Job Title</label><br>
                <input type="text" class="rounded border w-100 p-2" placeholder="Job Title">
                <label for="Company" class="py-2">Company</label><br>
                <input type="text" class="rounded border w-100 p-2" placeholder="Company">

                <label for="Workplace" class="py-2">Work Place</label><br>
                <select name="workPlace" class="rounded border w-100 p-2" id="workPlace">
                    <option value="On site">On site</option>
                    <option value="Remote">Remote</option>
                    <option value="Hybrid">Hybrid</option>
                </select>

                <label for="location" class="py-2">Job Location</label><br>
                <input type="text" class="rounded border w-100 p-2" placeholder="Address">

                <label for="Employmenttype" class="py-2">Employment Type</label><br>
                <select name="workPlace" class="rounded border w-100 p-2" id="workPlace">
                    <option value="Full Time">Full Time</option>
                    <option value="Part Time">Part Time</option>
                    <option value="Contract">Contract</option>
                    <option value="Temporary">Temporary</option>
                </select>

                <label for="description" class="py-2">Description</label><br>
                <textarea class="text-dark" name="editor"  id="editor" rows="10" class="w-100"></textarea>

                <button class="rounded border w-100 py-2 my-2 btn-primary">Post</button>


            </form>
        </div>
        </div>
    </div>




<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
                            ClassicEditor.create( document.querySelector( '#editor' ) ).then( editor => {
                                            console.log( editor );
                                    } ).catch( error => {
                                            console.error( error );
                                    } );
    </script>


</body>
</html>
@endsection