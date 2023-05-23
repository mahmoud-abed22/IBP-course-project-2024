
@extends('components.indexUser')

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

  @media screen and (min-width: 400px) {
    .beraa{
        transform:translate(0px , 0px) !important 
    }
}

@media screen and (min-width: 800px) {
    .beraa{
        transform:translate(0px , 0px) !important 
    }
}

  
</style>
@stop
@section('main')

<h4 style="padding: 20px ; font-size: 22px; color: red; font-weight: 600; padding-left: 0;">My Appointments </h4>


<section class="intro beraa" style="padding-top: 50px ; transform:translate(-50px , 0px)">
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
                        <th scope="col">Place Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Hour</th>
                        <th scope="col">Location</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($dates as $date )
                      @php
                          $place_data = $places->where( 'id' , $date->place_id)->first();
                      @endphp
                      <tr class="Bcount">
                        <th scope="row"> </th>
                        <td style="text-transform: capitalize">{{$place_data->name}} Merkezi</td>
                        <td>{{$date->date}}</td>
                        <td>{{$date->hour}}</td>
                        <td><a href="{{route('place_detailes2', $date->place_id)}}">Place Detailes</a> </td>
                        <td>
                          <form class="" method="POST" action="{{ route('deleteDate', $date->id) }}">
                            @csrf 
                            @method('POST')
                            <button class="" style="padding:2px ; border-radius: 25% ; background-color:#DB3545; border:none ;  ">
                              <i class='bx bx-x nav_icon' style="transform: translate(0px , 3px) ; color:white" ></i>
                            </button>
                        </form>


                        </td>
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



@stop


@section("error")
<div class="toast-container" style=" position: fixed; top : 110px ; right : 20px">

  {{--  add success --}}

  @if (Session::has("addmessage"))

    <div class="bs-toast toast fade show bg-danger  screen2" style="width:400px;" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <i class="bx bx-bell me-2"></i>
          <div class="me-auto fw-semibold">delete Appointment</div>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" >
        {{Session::get('addmessage')}}
        </div>
      </div>
  @endif  

</div>
@stop