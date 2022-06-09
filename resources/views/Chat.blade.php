<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/Chat/chat.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--Bootstrap-->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>CHAT</title>
</head>
@extends('Layouts.layoutwithoutfooter')
@section('content')
<body>
    <div class="container">
        <div class="row w-100 no-gutters">
            <div class="col-md-4 border-right">


                <div class="settings-tray">
                    <img class="profile-image"
                        src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/optimus-prime.jpeg"
                        alt="Profile img">
                    <span class="settings-tray--right">
                        <i class="material-icons">cached</i>
                        <i class="material-icons">message</i>
                        <i class="material-icons">menu</i>
                    </span>
                </div>
                <div class="search-box">
                    <div class="input-wrapper">
                        <i class="material-icons">search</i>
                        <input placeholder="Search here" type="text">
                    </div>
                </div>


                <div style=" overflow-y: scroll;">
                    <div class="friend-drawer friend-drawer--onhover">
                        <img class="profile-image"
                            src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/optimus-prime.jpeg" alt="">
                        <div class="text">
                            <h6>Optimus</h6>
                            <p class="text-muted">Hi, wanna see something?</p>
                        </div>
                        <span class="time text-muted small">13:21</span>
                    </div>
                    <hr>
                    <div class="friend-drawer friend-drawer--onhover">
                        <img class="profile-image"
                            src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/optimus-prime.jpeg" alt="">
                        <div class="text">
                            <h6>Optimus</h6>
                            <p class="text-muted">Hi, wanna see something?</p>
                        </div>
                        <span class="time text-muted small">00:32</span>
                    </div>

                    <hr>
                    <div class="friend-drawer friend-drawer--onhover ">
                        <img class="profile-image"
                            src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/optimus-prime.jpeg" alt="">
                        <div class="text">
                            <h6>Optimus</h6>
                            <p class="text-muted">Hi, wanna see something?</p>
                        </div>
                        <span class="time text-muted small">13:21</span>
                    </div>
                    <hr>
                    <div class="friend-drawer friend-drawer--onhover">
                        <img class="profile-image"
                            src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/optimus-prime.jpeg" alt="">
                        <div class="text">
                            <h6>Optimus</h6>
                            <p class="text-muted">Hi, wanna see something?</p>
                        </div>
                        <span class="time text-muted small">13:21</span>
                    </div>
                    <hr>
                    <div class="friend-drawer friend-drawer--onhover">
                        <img class="profile-image"
                            src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/optimus-prime.jpeg" alt="">
                        <div class="text">
                            <h6>Optimus</h6>
                            <p class="text-muted">Hi, wanna see something?</p>
                        </div>
                        <span class="time text-muted small">13:21</span>
                    </div>
                    <hr>
                    <div class="friend-drawer friend-drawer--onhover">
                        <img class="profile-image"
                            src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/optimus-prime.jpeg" alt="">
                        <div class="text">
                            <h6>Optimus</h6>
                            <p class="text-muted">Hi, wanna see something?</p>
                        </div>
                        <span class="time text-muted small">13:21</span>
                    </div>
                </div>

            </div>

            <!-- chat Area -->
            <div class="col-md-8 border-dark ">
                <div class="settings-tray">
                    <div class="friend-drawer no-gutters friend-drawer--grey">
                        <img class="profile-image"
                            src="https://www.clarity-enhanced.net/wp-content/uploads/2020/06/optimus-prime.jpeg" alt="">
                        <div class="text">
                            <h6>Optimus</h6>
                            <p class="text-muted">Online</p>
                        </div>
                        <span class="settings-tray--right">
                            <i class="material-icons">cached</i>

                            <i class="material-icons">menu</i>
                        </span>
                    </div>
                </div>


                <div class="chat-panel">
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <div class="chat-bubble chat-bubble--left">
                                Hello dude!
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-3 offset-md-9">
                            <div class="chat-bubble chat-bubble--right">
                                Hello dude!
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-3 offset-md-9">
                            <div class="chat-bubble chat-bubble--right">
                                Hello dude!
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <div class="chat-bubble chat-bubble--left">
                                Hello dude!
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <div class="chat-bubble chat-bubble--left">
                                Hello dude!
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-3">
                            <div class="chat-bubble chat-bubble--left">
                                Hello dude!
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-3 offset-md-9">
                            <div class="chat-bubble chat-bubble--right">
                                Hello dude!
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-3 offset-md-9">
                            <div class="chat-bubble chat-bubble--right">
                                Hello dude!
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="chat-box-tray">
                                <i class="material-icons">sentiment_very_satisfied</i>
                                <input type="text" placeholder="Type your message here...">
                                <i class="material-icons">mic</i>
                                <i class="material-icons">send</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>

        $('.friend-drawer--onhover').on('click', function () {

            $('.chat-bubble').hide('slow').show('slow');

        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>
@endsection