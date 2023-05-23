
@extends('components.indexDoctor')
@section('main')


<h4 style="padding: 20px ; font-size: 22px; color: red; font-weight: 600; padding-left: 0;"><a href="{{route('donation_dates')}}" style="color:red ">Blood Donation Appointment</a> / <span style="color: rgb(179, 22, 22); font-size:18px ;">Appointment Detiales</span>  </h4>
<div class="my-3 p-3 bg-body rounded shadow-sm w-100" style="margin: auto;" >
    <h6 class="border-bottom pb-2 mb-0">Appointment Detailes</h6>


    <br>

    @php
    $user = $users->first();
    
@endphp

    <div class="row w-100">
        <div class="col">Appointment : </div>
        <div class="col"style="text-transform: capitalize"> {{$dates->date}} </div>
    </div>
    <br>
    <div class="row w-100">
        <div class="col">Appointment Hour : </div>
        <div class="col"> {{$dates->hour}} </div>
    </div>

    <br>
    <div class="row w-100">
        <div class="col">Name : </div>
        <div class="col" style="text-transform: capitalize"> {{$user->name}} </div>
    </div>
    <br>
    <div class="row w-100">
        <div class="col">Surname : </div>
        <div class="col" style="text-transform: capitalize"> {{$user->surname}} </div>
    </div>
    <br>
    <div class="row w-100">
        <div class="col">Age : </div>
        <div class="col"> {{$age}} </div>
    </div>
    <br>
    <div class="row w-100">
        <div class="col">Gender : </div>
        <div class="col"style="text-transform: capitalize"> {{$user->gender}} </div>
    </div>
    <br>
    <div class="row w-100">
        <div class="col">Phone : </div>
        <div class="col"> {{$user->phone}} </div>
    </div>
    <br>
    <div class="row w-100">
        <div class="col">Email : </div>
        <div class="col"> {{$user->email}} </div>
    </div>


    <div class="row w-100" style="padding-bottom:100px;padding-top :30px; ">
        <a href="{{route('add_blood' ,$dates->id)}}" style="background-color: green ; color:#eee;padding:10px;width:250px;text-align: center ;font-size: 14px"> Donation Completed Successfully </a>

        <div style="padding: 10px" ></div>

        <a href="{{route('deleteDate2' ,$dates->id )}}" style="background-color: red ; color:#eee;padding:10px;width:250px;text-align: center;font-size: 14px "> Donation Failed </a> 

    </div>

</div>

@stop

