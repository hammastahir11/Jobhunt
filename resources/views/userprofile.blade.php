<!DOCTYPE html>
@extends('Layouts.layout')
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('/css/userprofile/userprofile.css')}}"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Document</title>
</head>
@extends('Layouts.layout')
@section('content')
<body>


<div>
    <span class="main_bg"></span>
    <div class="container">
        <section class="userProfile card">
            <div class="profile">
                <figure><img src="profile.jpeg" alt="profile" width="250px" height="250px"></figure>
            </div>
        </section>

        <section class="work_skills card">
            <div class="work">
                <h1 class="heading">work</h1>
                <div class="primary">
                    <h1>Animation</h1>
                    <span>Primary</span>
                    <p>170  Street <br> Hostel City Islamabad</p>
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
                <h1 class="name">Hammas Tahir</h1>
                <div class="map">
                    <i class="ri-map-pin-fill ri"></i>
                    <span>Islamabad, Pakistan</span>
                </div>
                <p>Web Designer</p>
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
                        <a href="Chat.html">Send Message</a>
                    </li>

                    <!-- <li class="sendMsg active">
                        <i class="ri-check-fill ri"></i>
                        <a href="#">Contacts</a>
                    </li> -->

                    <li class="sendMsg">
                        <a href="#">Report User</a>
                    </li>
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
                    <li class="timeline">
                        <i class="ri-eye-fill ri"></i>
                        <span>Timeline</span>
                    </li>
                </ul>
            </div>

            <div class="contact_Info">
                <h1 class="heading">Contact Information</h1>
                <ul>
                    <li class="phone">
                        <h1 class="label">Phone:</h1>
                        <span class="info">+91 234 567 890</span>
                    </li>

                    <li class="address">
                        <h1 class="label">Address:</h1>
                        <span class="info">6th Street <br> Hostel City Islamabad</span>
                    </li>

                    <li class="email">
                        <h1 class="label">E-mail:</h1>
                        <span class="info">hammastahir11@gmail.com</span>
                    </li>

                    <li class="site">
                        <h1 class="label">Site:</h1>
                        <span class="info">www.Dummy.com</span>
                    </li>
                </ul>
            </div>

            <div class="basic_info">
                <h1 class="heading">Basic Information</h1>
                <ul>
                    <li class="birthday">
                        <h1 class="label">Birthday:</h1>
                        <span class="info">Dec 25, 2000</span>
                    </li>

                    <li class="sex">
                        <h1 class="label">Gender:</h1>
                        <span class="info">Male</span>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>
</body>
@endsection
</html>
@endsection