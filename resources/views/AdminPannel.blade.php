<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/AdminPannel/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body class="bg-light">
    <!--Header-->




 
    
    

    <!--Body-->

    <div class="sidebar bg-dark ">



        <a href="/" class="navbar-brand">Job Hunt</a>

        <a href="AdminPannel.html" class="active">Website footer</a>


        <a href="CreatePost.html">Post</a>


    </div>

    <div class="content tab-content">

        @php
            $data=\App\Models\WebPersonalData::where('id',1)->get()->first();
        @endphp

        @if(\App\Models\WebPersonalData::where('id',1)->get()->first()==NULL)
    <form action="/saveAdminInfo" Method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="text-dark text-center py-5">Add Avertising Banners</h1>
        <label for="banner1" class="text-center p-1 m-1" >Advertising Banner 1</label><br>
        <input name="b1" type="file"  class="text-center p-1 m-1 inputclass"><br>
        
        <label for="banner2" class="text-center p-1 m-1">Advertising Banner 2</label><br>
        <input name="b2" type="file" class="inputclass text-center"><br>

        <label for="banner3" class="text-center p-1 m-1">Advertising Banner 3</label><br>
        <input name="b3" type="file" class="inputclass text-center"><br>


        <label for="Description" class="text-center p-1 m-1"> Web site Description</label><br>
        <input name="descr" type="text" class="inputclass text-center"><br>

        <label for="Address" class="text-center p-1 m-1">Office Address</label><br>
        <input name="address" type="text" class="inputclass text-center"><br>

        <label for="Address" class="text-center p-1 m-1">Email</label><br>
        <input name="email" type="text" class="inputclass text-center"><br>

        <label for="Address" class="text-center p-1 m-1">Mobile Number</label><br>
        <input name="mbnumber" type="text" class="inputclass text-center"><br>

        <label for="Address" class="text-center p-1 m-1">Phone Number</label><br>
        <input name="pNumber" type="text" class="inputclass text-center"><br>

        <button type="submit" class="inputclass text-center my-3 bg-primary p-3 text-white">Submit</button>
    </form>
    @endif












    
    @if( \App\Models\WebPersonalData::where('id',1)->get()->first()!=NULL)
    <form action="/updateAdminDetails" Method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="text-dark text-center py-5">Add Avertising Banners</h1>
        <label for="banner1" class="text-center p-1 m-1"  >Advertising Banner 1</label><br>
        <input name="b1" type="file"  class="text-center p-1 m-1 inputclass"><br>
        
        <label for="banner2" class="text-center p-1 m-1">Advertising Banner 2</label><br>
        <input name="b2" type="file" class="inputclass text-center"><br>

        <label for="banner3" class="text-center p-1 m-1">Advertising Banner 3</label><br>
        <input name="b3" type="file" class="inputclass text-center"><br>


        <label for="Description" class="text-center p-1 m-1"> Description</label><br>
        <input name="descr" type="text" class="inputclass text-center" value="{{$data->Description}}"><br>

        <label for="Address" class="text-center p-1 m-1">Office Address</label><br>
        <input name="address" type="text" class="inputclass text-center" value="{{$data->address}}"><br>

        <label for="Address" class="text-center p-1 m-1">Email</label><br>
        <input name="email" type="text" class="inputclass text-center" value="{{$data->email}}"><br>

        <label for="Address" class="text-center p-1 m-1">Mobile Number</label><br>
        <input name="mbnumber" type="text" class="inputclass text-center" value="{{$data->mobileNumber}}"><br>

        <label for="Address" class="text-center p-1 m-1">Phone Number</label><br>
        <input name="pNumber" type="text" class="inputclass text-center" value="{{$data->phoneNumber}}"><br>

        <button type="submit" class="inputclass text-center my-3 bg-primary p-3 text-white">Submit</button>
    </form>
    @endif
    </div>



    <!--Body-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>