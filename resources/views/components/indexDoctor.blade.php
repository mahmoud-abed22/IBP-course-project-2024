<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    @section('css') @show
    
    <link rel="stylesheet" href="/assets/css/style2.css"/>
    <title>Manager</title>
</head>
<body id="body-pd">
<header class="header" id="header">
    
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div style=" display: flex; -ms-flex-align: center; color: red; font-size:20px ; font-weight:600 ; text-transform: capitalize ;  " >{{Auth::user()->name}} {{Auth::user()->surname}} Merkezi</div>

    <div class="dropdown text-end">
        <a href="#" class=" link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="/assets/photos/merkez.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="{{route('doctorProfile')}}">Donation Place Detailes</a></li>
        </ul>
      </div>
    
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="nav">
        <div> 
            <a href="#" class="nav_logo">  <i class='bx bx-plus-medical nav_logo-icon'>
                </i><span class="nav_logo-name"> Blood Donation</span> 
            </a>
            <div class="nav_list">  
                <a href="{{route('donation_dates')}}" class="nav_link "> <i class='bx bx-time-five nav_icon' ></i> <span style="color:#fff" class="nav_name">Blood Donation <br> Appointment </span> </a> 
                <a href="{{route('add_blood_request')}}" class="nav_link"> <i class='bx bx-add-to-queue nav_icon' ></i> <span style="color:#fff" class="nav_name">Blood Requests</span> </a>
                <a href="{{route('doctor_report')}}" class="nav_link"> <i class='bx bxs-report nav_icon' ></i> <span style="color:#fff" class="nav_name">Report</span> </a>
                @if (Auth::user()->state == 1)
                <a href="{{route('add_place')}}" class="nav_link"> <i class='bx bxs-user-plus nav_icon' ></i> <span style="color:#fff" class="nav_name">Add Place</span> </a>
                @endif
                <a href="{{route('messages')}}" class="nav_link"> <i class='bx bx-chat nav_icon' ></i> <span style="color:#fff"  class="nav_name">Messages</span> </a>
            </div>
        </div>

         <form class="nav_link1" method="POST" action="{{ route('logout') }}">
            @csrf 
            @method('POST')
            <button class="nav_link1" style="padding:0 ; background-color: #D82C2C; border: none; ">
                <i class='bx bx-log-out nav_icon'></i><span style="color:#fff" class="nav_name">Sign Out</span>
            </button>
        </form>

        
    </nav>
</div>

<!--Container Main start-->
<div class="main" >

@section('main')
        
@show

 
</div>
@section('error')

@show
<!--Container Main end-->

</body>
@section('script')
        
@show
<script>

document.addEventListener("DOMContentLoaded", function(event) {
   
   const showNavbar = (toggleId, navId, bodyId, headerId) =>{
   const toggle = document.getElementById(toggleId),
   nav = document.getElementById(navId),
   bodypd = document.getElementById(bodyId),
   headerpd = document.getElementById(headerId)
   
   // Validate that all variables exist
   if(toggle && nav && bodypd && headerpd){
   toggle.addEventListener('click', ()=>{
   // show navbar
   nav.classList.toggle('show')
   // change icon
   toggle.classList.toggle('bx-x')
   // add padding to body
   bodypd.classList.toggle('body-pd')
   // add padding to header
   headerpd.classList.toggle('body-pd')
   })
   }
   }
   
   showNavbar('header-toggle','nav-bar','body-pd','header')
   
   const linkColor = document.querySelectorAll('.nav_link')
   
   function colorLink(){
   if(linkColor){
   linkColor.forEach(l=> l.classList.remove('active'))
   this.classList.add('active')
   }
   }
   linkColor.forEach(l=> l.addEventListener('click', colorLink))
   
   });


</script>
</html>