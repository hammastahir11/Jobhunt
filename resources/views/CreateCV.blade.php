<!DOCTYPE html>
@extends('Layouts.layoutwithoutfooter')
@section('content')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="css/Createcv/javascript/createcv.js" defer></script>
    <link rel="stylesheet" href="{{URL::asset('css/Createcv/createprofile.css')}}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity=
"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous">
    <title>Create CV</title>
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
            <div style= "height: 370px; overflow-y: scroll;">            

                <input type="text" name="fname " placeholder="First Name" />
                @error('fname')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                <input type="text" name="lname" placeholder="Last Name" />
                @error('lname')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                <input type="text" name="Field" placeholder="Field" />
                @error('Field')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                <textarea name="aboutus" placeholder="About Us"></textarea>
                @error('aboutus')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                <textarea name="address" placeholder="Address"></textarea>
                @error('address')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                <input type="text" name="country" placeholder="Country" />
                @error('country')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                <input type="text" name="phone" placeholder="Phone" />
                @error('phone')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                <input type="text" name="email" placeholder="Email" />
                @error('email')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                <input type="website" name="website" placeholder="Website" />
                @error('website')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                <input type="file" id="myFile" name="image" >
                @error('image')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                
            </div>
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>

        <fieldset>
        
            <h2 class="fs-title">Social</h2>
            <h3 class="fs-subtitle"></h3>
            <div style= "height: 310px; overflow-y: auto;">
                <input type="text" name="facebook" placeholder="Facebook"/>
                <input type="text" name="twitter" placeholder="Twitter" />
                <input type="text" name="github" placeholder="GitHub" />
                <input type="text" name="linkedin" placeholder="Linkedin" />
                <h2 class="fs-title">SKILL's</h2>
                <h3 class="fs-subtitle">SKILL 1</h3> 
                <div class=" input_field1_wrap">
                <input type="text" name="skillname" placeholder="Skill Name" class="form-control input-sm" />
                <input type="text" name="percentage" placeholder="SKills in %" class="form-control input-sm"/>
                </div>
                 

            </div> 
            <input type="button"  class="add_skill_button action-button" value="Add Skills" />
            <br>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next"  />
      
        </fieldset>


        <fieldset>
            <h2 class="fs-title">Work Experience</h2>
            <h3 class="fs-subtitle">Experience 1</h3>
            <div class="input_field_wrap" style= "height: 275px; overflow-y: auto;">
                
                <div><input type="text" name="jobname" placeholder="Job Name" /></div>
                @error('jobname')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                <div><textarea name="jobdesc" placeholder="Job Description/Project Detail"></textarea></div>
                @error('jobdesc')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                <div><input type="text" name="sy" placeholder="Start Year" /></div>
                @error('sy')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                <div><input type="text" name="ey" placeholder="End Year" /></div>
                @error('ey')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                
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
            <div class="input_fields_wrap" style= "height: 275px; overflow-y: auto;">
                <h3 class="fs-subtitle"></h3>
                <div><input type="text" name="instname" placeholder="Institution Name" /></div>
                @error('instname')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                <div><textarea name="coursedesc" placeholder="Courses Description/Courses Detail"></textarea></div>
                @error('coursedesc')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                <div><input type="text" name="esy" placeholder="Start Year" /></div>
                @error('esy')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                <div><input type="text" name="eey" placeholder="End Year" /></div>
                @error('eey')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                
            </div>
            <br>
            
            <input type="button"  class="add_field_button action-button" value="Add Education" />
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