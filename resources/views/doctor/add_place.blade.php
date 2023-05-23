{{-- add_places --}}
@extends('components.indexDoctor')
@section('main')

<h4 style="padding: 20px ; font-size: 22px; color: red; font-weight: 600; padding-left: 0;"> <span style="">Add Place</span>  </h4>


<form method="POST" action ="{{route('add_place')}}">
 @method('POST')
  @csrf
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" value="{{old('name')}}" placeholder="Place Name" name="name">
      @error("name") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror

    </div>
    <div class="col">
    </div>
  </div>

  <br>
  <div class="row">
    <div class="col">
        <input type="text" class="form-control" value="{{old('adress')}}" placeholder="Adress" name="adress">
            @error("adress") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror

    </div>
    <div class="col">
      <input type="number" class="form-control" value="{{old('room')}}" placeholder="Room Number" name="room">
      @error("room") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror

    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" value="{{old('phone')}}" placeholder="Phone" name="phone">
      @error("phone") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror

    </div>
    <div class="col">
      <input type="email" class="form-control" value="{{old('email')}}" placeholder="Email" name="email">
      @error("email") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror

    </div>
  </div>

  <br>
  <div class="row">
    <div class="col">
      <input type="password" class="form-control"  placeholder="Password" name="password">
      @error("password") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror

    </div>
    <div class="col">
      <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
      @error("password_confirmation") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror

    </div>
  </div>

    <br>
  <div class="input-group">
      <span class="input-group-text">Google Map Location ( src ) </span>
      <textarea type="text" class="form-control"  value="{{old('location')}}" aria-label="With textarea" name="location"></textarea>

  </div>
      @error("location") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror
  <br>
  <button  class="btn btn-primary">Add Place</button>
  </form> 
  <br>
  <br>

  @stop

  @section("error")
<div class="toast-container" style=" position: fixed; top : 110px ; right : 20px">

  {{--  add success --}}

  @if (Session::has("addmessage"))

    <div class="bs-toast toast fade show bg-success  screen2" style="width:600px;" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <i class="bx bx-bell me-2"></i>
          <div class="me-auto fw-semibold">Add Place</div>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" >
        {{Session::get('addmessage')}}
        </div>
      </div>
  @endif  
</div>
@stop

