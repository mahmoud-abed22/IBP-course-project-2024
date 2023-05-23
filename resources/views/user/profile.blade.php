{{-- add_places --}}
@extends('components.indexUser')
@section('main')    

<h4 style="padding: 20px ; font-size: 22px; color: red; font-weight: 600; padding-left: 0;">Profile </h4>

<br>
<div class="row w-100">
    <div class="col">Name : </div>
    <div class="col" style="text-transform: capitalize"> {{Auth::User()->name}} </div>
</div>
<br>
<div class="row w-100">
    <div class="col">Surname : </div>
    <div class="col" style="text-transform: capitalize"> {{Auth::User()->surname}} </div>
</div>
<br>
<div class="row w-100">
    <div class="col">Age : </div>
    <div class="col"> {{ $age}} </div>
</div>
<br>
<div class="row w-100">
    <div class="col">Gender : </div>
    <div class="col"style="text-transform: capitalize"> {{Auth::User()->gender}} </div>
</div>
<br>
<div class="row w-100">
    <div class="col">Phone : </div>
    <div class="col"> {{Auth::User()->phone}} </div>
</div>
<br>
<div class="row w-100">
    <div class="col">Email : </div>
    <div class="col"> {{Auth::User()->email}} </div>
</div>

<div class="row w-100" style="padding-bottom:100px;padding-top :30px; ">
  <a href="{{route('changepw')}}" class="btn btn-primary " style=" color:#fff;padding:10px;width:250px;text-align: center ;font-size: 14px">Change Password </a>

</div>

  @stop
