<!DOCTYPE html>
@extends('Layouts.layoutwithoutfooter')
@section('content')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="css/createpeofile/javascript/createprofile.js" defer></script>
    <link rel="stylesheet" href="{{URL::asset('css/createpeofile/createprofile.css')}}"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Create Profile</title>
</head>

<body>
    <span class="main_bg"></span>
    <form id="multistepsform" action="/editprofile" method="POST">
        @csrf
        <!-- progressbar -->
        <ul id="progressbar">
            
            <li class="active">Personal Details</li>
            <li>Contact Infromation</li>
            <li>Work Experience</li>
            

        </ul>
        <!-- fieldsets -->
        <fieldset>
            <h2 class="fs-title">Personal Details</h2>
            <h3 class="fs-subtitle"></h3>
            <input type="text" name="fname" placeholder="First Name" />
            <input type="text" name="lname" placeholder="Last Name" />
            <input type="text" name="field" placeholder="Field" />
            <input type="text" onfocus="(this.type='date')" name="dob" placeholder="Date Of Birth" />
            <input type="text" name="city" placeholder="City" />
            <input type="text" name="country" placeholder="Country" />
            <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>

        <fieldset>
            <h2 class="fs-title">Contact Infromation</h2>
            <h3 class="fs-subtitle">We will never sell it</h3>
            <input type="text" name="email" placeholder="Email" />
            <input type="text" name="phone" placeholder="Phone" />
            <input type="website" name="website" placeholder="Website" />
            <textarea name="address" placeholder="Address"></textarea>
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
            <!-- <button class="add_field_button">Add More Experience</button>  -->
            <input type="button"  class="add_field_button action-button" value="Add Experience" />
            <br>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit" class=" action-button" value="Submit" />
        </fieldset>
    </form>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
</body>

</html>
@endsection