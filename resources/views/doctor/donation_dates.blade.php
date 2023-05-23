
@extends('components.indexDoctor')

@section('css')

<style type="text/css">
  body{
      counter-reset: Serial;  
  }
  
  .Bcount th:first-child:before
  {
    counter-increment: Serial;      
    content: counter(Serial); 
  }
</style>
@stop

@section('main')

<h4 style="padding: 20px ; font-size: 22px; color: red; font-weight: 600; padding-left: 0;">Blood Donation Appointments </h4>
<div style="padding: 10px;">

<section class="intro">
  <div class="bg-image h-100" style="">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card shadow-2-strong" style="background-color: #f5f7fa;">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-borderless mb-0">
                    <thead>
                      <tr>
                        <th></th>
                        <th scope="col">Donor Name</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Appointment</th>
                        <th scope="col">Hour</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach ($dates as $date )
                      @php
                          $user_data = $users->where( 'id' , $date->user_id)->first();
                          
                      @endphp
                          <tr class="Bcount">
                          <th scope="row" > </th>
                          <td style="text-transform: capitalize">{{$user_data->name}} {{$user_data->surname}}</td>
                          <td>{{$user_data->phone}}</td>
                          <td>{{$date->date}}</td>
                          <td>{{$date->hour}}</td>
                          <td><a href="{{route('date_detailes' ,$date->id)}}">Detailes</a> </td>
                        </tr>
                      @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>

@stop