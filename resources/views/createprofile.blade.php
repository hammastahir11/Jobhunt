<!DOCTYPE html>
@extends('Layouts.layoutwithoutfooter')
@section('content')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="css/createpeofile/javascript/createprofile.js" defer></script>
    <link rel="stylesheet" href="{{URL::asset('css/createpeofile/createprofile.css')}}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Create Profile</title>
</head>

<body>
    <span class="main_bg"></span>
    <form id="multistepsform" action="/saveProfile" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- progressbar -->
        @if($userData!=NULL)
        <ul id="progressbar">
            
            <li class="active">Personal Details</li>
            <li>Contact Infromation</li>
            <li>Work Experience</li> 
            
            
        </ul>
        <!-- fieldsets -->
        <fieldset>
            <h2 class="fs-title">Personal Details</h2>
            @isset($error)
            <label for="error" style="color:rgb(255, 255, 255); background:rgb(150, 10, 10);padding:8px"
                class='submit-btn'><b style="width:100%; text-align: center;">{!!$error!!}</b></label>
            @endisset
            <h3 class="fs-subtitle"></h3>

            <input type="text" name="field" placeholder="Field" value="{{$userData->profession}} " />
            @error('field')
                    <div class="alert-danger ">{{$message}}</div>
            @enderror
            <select name="Gender" id="category" value="">
                <option value="Male" <?=$userData->gender == 'Male' ? 'selected' : '';?>>Male</option>
                <option value="Female" <?=$userData->gender == 'Female' ? 'selected' : '';?>> Female</option>
                {{-- {{ $tabactive == 3 ? 'active' : '' }} --}}
                <input type="text" onfocus="(this.type='date')" name="dob" value="{{$userData->dateOfBirth}}"
                    placeholder="Date Of Birth" />
                    @error('dob')
                    <div class="alert-danger ">{{$message}}</div>
            @enderror
                <input type="text" name="city" placeholder="City" value="{{$userData->city}}" />
                @error('city')
                    <div class="alert-danger ">{{$message}}</div>
            @enderror
                <input type="text" name="country" placeholder="Country" value="{{$userData->country}}" />
                @error('country')
                    <div class="alert-danger ">{{$message}}</div>
            @enderror
                <input type="button" name="next" class="next action-button" value="Next" />
                
        </fieldset>

        <fieldset>
            <h2 class="fs-title">Contact Infromation</h2>

            <label for="formFile" class="form-label">Profile Image</label>
            
            <input  name="pic" type="file" value='{!!$userData->profilePic!!}' id="formFile">
            @error('pic')
                    <div class="alert-danger ">{{$message}}</div>
            @enderror
            <input type="number" name="phone" placeholder="Phone" value="{{$userData->phoneNumber}}" />
            @error('phone')
                    <div class="alert-danger ">{{$message}}</div>
            @enderror
            <input type="website" name="website" placeholder="Website" value="{{$userData->portfolioSite}}" />
            @error('website')
                    <div class="alert-danger ">{{$message}}</div>
            @enderror
            <textarea name="personalInfo" placeholder="About You">{{$userData->aboutUser}}</textarea>
            @error('personalInfo')
                    <div class="alert-danger ">{{$message}}</div>
            @enderror
            <input type="button" name="previous" class="previous action-button" value="Previous" />

            
            <input type="button" name="next" class="next action-button" value="Next" /> 
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Work Experience</h2>
            <h3 class="fs-subtitle">Experience 1</h3>
            <div class="input_field_wrap" style= "height: 225px; overflow-y: auto;">
                
                <div><input type="text" name="jobname" placeholder="Job Name" /></div>
                @error('jobname')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                <div><textarea name="jobdesc" placeholder="Job Description/Project Detail"></textarea></div>
                @error('jobdesc')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror
                
                <div><textarea name="address" placeholder="Address"></textarea></div>
                @error('address')
                    <div class="alert-danger ">{{$message}}</div>
                @enderror

                
            </div>
            <br>

            <input type="button" class="add_field_button action-button" value="Add Experience" />
            <br>

            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit" class=" action-button" value="Submit" />
        </fieldset> 
        
        @endif

        <!-- @if($userData==NULL)
        <ul id="progressbar">

            <li class="active">Personal Details</li>
            <li>Contact Infromation</li>
            <li>Work Experience</li>


        </ul> -->
        <!-- fieldsets
        <fieldset>
            <h2 class="fs-title">Personal Details</h2>
            <h3 class="fs-subtitle"></h3>

            <input type="text" name="field" placeholder="Field" value="{{$userData!=NULL?$userData->aboutUser:''}} " />
            <select name="Gender" id="category" value="">
                <option value="Male">Male</option>
                <option value="Female"> Female</option>
                {{-- {{ $tabactive == 3 ? 'active' : '' }} --}}
                <input type="text" onfocus="(this.type='date')" name="dob" value="" placeholder="Date Of Birth" />
                <input type="text" name="city" placeholder="City" value="}" />
                <input type="text" name="country" placeholder="Country" value="" />
                <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>

        <fieldset>
            <h2 class="fs-title">Contact Infromation</h2>

            <label for="formFile" class="form-label">Profile Image</label>
            <input type='file'  name='pic'>
            {{-- <input class="form-control" name="picture" type="file" id="formFile"> --}}
            <input type="text" name="phone" placeholder="Phone" value="" />
            <input type="website" name="website" placeholder="Website" />
            <textarea name="personalInfo" placeholder="About You" value=""></textarea>
            <input type="button" name="previous" class="previous action-button" value="Previous" />

            
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Work Experience</h2>
            <h3 class="fs-subtitle">Experience</h3>
            <div class="input_fields_wrap">
                <h3 class="fs-subtitle"></h3>
                <div><input type="text" name="jname" placeholder="Job Name" /></div>
                <div><input type="text" name="cname" placeholder="Company Name" /></div>
                <div><textarea name="caddress" placeholder="Address"></textarea></div>
            </div>
            <br>
             <button class="add_field_button">Add More Experience</button>  
            <input type="button" class="add_field_button action-button" value="Add Experience" />
            <br>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
        </fieldset> 
        @endif-->
    </form> 



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
</body>

</html>
@endsection