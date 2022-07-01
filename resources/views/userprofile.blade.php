<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('/css/userprofile/userprofile.css')}}" />


    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Document</title>
</head>
@extends('Layouts.layoutwithoutfooter')
@section('content')

<body>


    <div>
        
        <span class="main_bg"></span>
        <div class="container">
            <section class="userProfile card">
                <div class="profile">
                @if($userData!=Null)
                @if($userData->profilePic!=Null)
               
                <figure><img src="..\{{$userData->profilePic}}" alt="profile" width="250px" height="250px"></figure>
                @endif
                @endif

                @if($userData==Null)
                
                <figure><img src="{{Images/DummyImages/dummyProfileImage.png}}" width="250px" height="250px"></figure>
                @endif
            </div>
            </section>

            <section class="work_skills card">
                <div class="work">
                    <h1 class="heading">About</h1>
                    <div class="primary">


                        <h1>@if($userData!=NULL){{$userData->aboutUser}}@endif</h1>
                    </div>


                </div>

                <div class="work">
                    <h1 class="heading">Work</h1>
                    <div class="primary">



                    </div>

                    <div class="secondary">
                        <h1>Front-End Developer </h1>
                        <span>Secondary</span>
                        <p>6th Street <br> Hostel City Islamabad</p>
                    </div>
                </div>

                <!-- ===== ===== Skills Contaienr ===== ===== -->
                <div class="skills">
                    <h1 class="heading">Skills</h1>
                    <ul>
                        <li style="--i:0">Android</li>
                        <li style="--i:1">Web-Design</li>
                        <li style="--i:2">UI/UX</li>
                        <li style="--i:3">Video Editing</li>
                    </ul>
                </div>
            </section>


            <!-- ===== ===== User Details Sections ===== ===== -->
            <section class="userDetails card">
                <div class="userName">
                    <h1 class="name">@if($userData!=NULL){{$userData->fName}} &nbsp; {{$userData->lName}}@endif</h1>
                    <div class="map">
                        <i class="ri-map-pin-fill ri"></i>
                        <span>@if($userData!=NULL){{$userData->city}}, &nbsp; {{$userData->country}}@endif</span>
                    </div>
                    <p>@if($userData!=NULL){{$userData->profession}}@endif</p>
                </div>

                <div class="rank">
                    <h1 class="heading">Ratings</h1>
                    <span>8.6</span>
                    <div class="rating">
                        <i class="ri-star-fill rate"></i>
                        <i class="ri-star-fill rate"></i>
                        <i class="ri-star-fill rate"></i>
                        <i class="ri-star-fill rate"></i>
                        <i class="ri-star-fill rate underrate"></i>
                    </div>
                </div>

                <div class="btns">
                    <ul>
                        <li class="sendMsg">
                            <i class="ri-chat-4-fill ri"></i>
                            <a href="/chat">Send Message</a>
                        </li>

                        <!-- <li class="sendMsg active">
                        <i class="ri-check-fill ri"></i>
                        <a href="#">Contacts</a>
                    </li> -->


                    </ul>
                </div>
            </section>


            <!-- ===== ===== Timeline & About Sections ===== ===== -->
            <section class="timeline_about card">
                <div class="tabs">
                    <ul>
                        <li class="about active">
                            <i class="ri-user-3-fill ri"></i>
                            <span>About</span>
                        </li>
                        {{-- <li class="timeline">
                            <i class="ri-eye-fill ri"></i>
                            <span>Timeline</span>
                        </li> --}}
                    </ul>
                </div>

                <div class="contact_Info">
                    <h1 class="heading">Contact Information</h1>
                    <ul>
                        <li class="phone">
                            <h1 class="label">Phone:</h1>
                            <span class="info">@if($userData!=NULL){{$userData->phoneNumber}}@endif</span>
                        </li>

                        <li class="address">
                            <h1 class="label">Address:</h1>
                            <span class="info">@if($userData!=NULL){{$userData->city}}<br>
                                {{$userData->country}}@endif</span>
                        </li>

                        <li class="email">
                            <h1 class="label">E-mail:</h1>
                            <span class="info">@if($userData!=NULL){{$userData->emailId}}@endif</span>
                        </li>

                        <li class="site">
                            <h1 class="label">Site:</h1>
                            <span class="info">@if($userData!=NULL){{$userData->portfolioSite}}@endif</span>
                        </li>
                    </ul>
                </div>

                <div class="basic_info">
                    <h1 class="heading">Basic Information</h1>
                    <ul>
                        <li class="birthday">
                            <h1 class="label">Birthday:</h1>
                            <span class="info">@if($userData!=NULL){{$userData->dateOfBirth}}@endif</span>
                        </li>

                        <li class="sex">
                            <h1 class="label">Gender:</h1>
                            <span class="info">@if($userData!=NULL){{$userData->gender}}@endif</span>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</body>
@endsection

</html>