<!DOCTYPE html>
@extends('Layouts.layoutwithoutfooter')
@section('content')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="css/createpeofile/javascript/createprofile.js" defer></script>
    <link rel="stylesheet" href="{{URL::asset('css/Createcv/createprofile.css')}}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Create Profile</title>
</head>

<body>
    <span class="main_bg"></span>
    <form id="multistepsform" action="/createcv" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- progressbar -->
        <ul id="progressbar">
            
            <li class="active">Basic Infromation</li>
            <li>Skills & Social</li>
            <li>Work Experience</li>
            <li>Education</li>
            

        </ul>
        <!-- fieldsets -->
        <fieldset>
            <h2 class="fs-title">Basic Infromation</h2>
            <h3 class="fs-subtitle"></h3>
            <div style= "height: 380px; overflow-y: scroll;">            

                <input type="text" name="fname" placeholder="First Name" />
                <input type="text" name="lname" placeholder="Last Name" />
                <input type="text" name="Field" placeholder="Field" />
                <textarea name="aboutus" placeholder="About Us"></textarea>
                <textarea name="address" placeholder="Address"></textarea>
                <input type="text" name="country" placeholder="Country" />
                <input type="text" name="phone" placeholder="Phone" />
                <input type="text" name="email" placeholder="Email" />
                <input type="website" name="website" placeholder="Website" />
                <input type="file" id="myFile" name="image" >
                
            </div>
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>

        <fieldset>
            <h2 class="fs-title">Social</h2>
            <h3 class="fs-subtitle"></h3>
            <input type="text" name="facebook" placeholder="Facebook" />
            <input type="text" name="twitter" placeholder="Twitter" />
            <input type="text" name="github" placeholder="GitHub" />
            <input type="text" name="linkedin" placeholder="Linkedin" />
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>

        <fieldset>
            <h2 class="fs-title">Work Experience</h2>
            <h3 class="fs-subtitle">Experience 1</h3>
            <div class="input_field_wrap" style= "height: 275px; overflow-y: auto;">
                
                <div><input type="text" name="jobname" placeholder="Job Name" /></div>
                <div><textarea name="jobdesc" placeholder="Job Description/Project Detail"></textarea></div>
                <div><input type="text" name="sy" placeholder="Start Year" /></div>
                <div><input type="text" name="ey" placeholder="End Year" /></div>
                
            </div>
            <br>
           
            <input type="button"  class="add_exp_button action-button" value="Add Experience" />
            <br>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />

        </fieldset>


        <fieldset>
            <h2 class="fs-title">Education</h2>
            <h3 class="fs-subtitle"></h3>
            <div class="input_fields_wrap" class="input_fields_wrap" style= "height: 275px; overflow-y: auto;">
                <h3 class="fs-subtitle"></h3>
                <div><input type="text" name="instname" placeholder="Institution Name" /></div>
                <div><textarea name="coursedesc" placeholder="Courses Description/Courses Detail"></textarea></div>
                <div><input type="text" name="esy" placeholder="Start Year" /></div>
                <div><input type="text" name="eey" placeholder="End Year" /></div>
                
            </div>
            <br>
            
            <input type="button"  class="add_field_button action-button" value="Add Experience" />
            <br>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit" class="action-button" value="Submit" />
        </fieldset>
       
    </form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
</body>

</html>
@endsection