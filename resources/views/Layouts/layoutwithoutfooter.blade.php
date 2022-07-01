<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{URL::asset('css/layout/menu.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script>
    $(document).ready(function(){
      $("#icon").click(function(){
        $("ul").toggleClass('show');
      });
    });  
    
  </script>
  <title>Job Hunt</title>
</head>

<body class="antialiased">
  <header>
    <nav class="navi">
      <label>
        <a class="logo" style="text-decoration: none; 
                              font-size: 30px;
                              font-weight: bold;
                              color: white;
                              padding: 0 20px;
                              line-height: 70px;" href="/">JOB HUNT</a>
      </label>


      <ul class="profile">
        <li class="nr_li dd_main">
          
          @if(\App\Models\userinfo::where('userId',Session::get('userId')->userId)->get()->first()==NULL)
          <img src="Images/DummyImages/dummyProfileImage.png" alt="profile_img">
          @endif
          @if(\App\Models\userinfo::where('userId',Session::get('userId')->userId)->get()->first()->profilePic!=NULL)
            <img src="..\{{\App\Models\userinfo::where('userId',Session::get('userId')->userId)->get()->first()->profilePic}}" alt="profile_img">
          @endif
          <div class="dd_menu">

            <div class="dd_left">
              <ul>
                <li><i class="fas fa-cog"></i></li>
                <li><i class="fas fa-download"></i></li>
                <li><i class="fas fa-sign-out-alt"></i></li>
              </ul>
            </div>
            <div class="dd_right">
              <ul>
                <li>
                  <a class="drop" href="/editprofile">Edit Profile</a>
                </li>
                <li>
                  <a class="drop" href="/viewProfile">View Profile</a>
                </li>
                <li>
                  <a class="drop" href="/JobsDetails">Jobs</a>
                </li>
                <li>
                  <a class="drop" href="/CreateJob">Create Jobs</a>
                </li>
                <li>
                  <a class="drop" href="/logout">Logout</a>
                </li>
              </ul>
            </div>
          </div>
      </ul>
      <ul class="ull">
        <li class="lii">
          <a class="menuheader" href="/allJobs">All Jobs</a>
        </li>
        <li class="lii">
          <a class="menuheader" href="/chat">chat</a>
        </li>
        <li class="lii">
          <a class="menuheader" href="/login">Sign In</a>
        </li>
      </ul>
      <label class="label" id="icon">
        <i class="fa fa-bars"></i>
      </label>

    </nav>
  </header>
  @yield('content')

  <script>
    var dd_main = document.querySelector(".dd_main");
	dd_main.addEventListener("click", function(){
		this.classList.toggle("active");
	});
  </script>
</body>

</html>