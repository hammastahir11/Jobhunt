<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/login/login.css')}}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->


    <title>LOGIN</title>
</head>

<body>
<span class="main_bg"></span>
    <div class="full-page ">
        <div id='login-form' class='login-page d-flex justify-content-center'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
                    <button type='button' onclick='register()' class='toggle-btn'>Register</button>
                </div>
                <form id='login' action="/login" enctype="multipart/form-data"    method="POST" name="form1" class='input-group-login'>
                    @csrf
                    <input type='text' name="emailId" class='input-field' placeholder='Email/UserName' required>
                    <input type='text' name="password"  class='input-field' placeholder='Enter Password' required>
                    <input type='checkbox' class='check-box'><span>Remember Password</span>
                    <button type='submit'onclick="CheckPassword(document.form1.text1)" class='submit-btn'> Log in </button>
                </form>
                <form id='register' action="/register" enctype="multipart/form-data"   method="POST" class='input-group-register'>
                    @csrf
                    <input type='text' class='input-field' name='fName' placeholder='First Name' required>
                    <input type='text' class='input-field' name='lName' placeholder='Last Name ' required>
                    <input type='email' class=' input-field' name='emailId' placeholder='Email Id' required>
                    <input type='text'  name='password' class='input-field' placeholder='Enter Password' required>
                    <input type='password' name="text1" name='confirmPassword' class='input-field' placeholder='Confirm Password' required>
                    <button type='submit' onclick="CheckPassword(document.form1.text1)" class='submit-btn'>Register</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');
        function register() {
            x.style.left = '-400px';
            y.style.left = '50px';
            z.style.left = '110px';
        }
        function login() {
            x.style.left = '50px';
            y.style.left = '450px';
            z.style.left = '0px';
        }


        // function CheckPassword(inputtxt) {
        //     var decimal = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
        //     if (inputtxt.value.match(decimal)) {
        //         alert('Correct Password')
        //         return true;
        //     }
        //     else {
        //         alert('Wrong Password')
        //         return false;
        //     }
        // }

    </script>
    <!-- <script>
        var modal = document.getElementById('login-form');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script> -->


</body>

</html>