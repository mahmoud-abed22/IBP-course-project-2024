
@extends('components.indexUser')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@stop


@section('main')

<h4 style="padding: 20px ; font-size: 22px; color: red; font-weight: 600; padding-left: 0;">Donation Booking </h4>
<div style="padding: 10px;padding-left: 0;"></div>  
<br>

<form method="POST" action ="{{route('AddDate')}}">
  @method('POST')
  @csrf


  <div class="row">
    <div class="col-5"> Select Place : </div>
    <div class="col-5">
      <select class="form-select" name="place_id" style="color :#6C757D">
        <option value="">Choose ...  </option>

        @foreach ($places as $place )
          <option value="{{$place->id}}">{{$place->name}} Merkezi</option>
        @endforeach



      </select>
    </div>
  </div>

    
    <div class="row" style="padding-top:10px ">
      <div class="col-5">Choose Appointment :</div>
      <div class="col-5" >
          <input style="color: #757575;" class="form-control"
            type="date"
            name="date"
            min={{ date('Y-m-d', strtotime ('+1 day'))}}
            max={{ date('Y-m-d', strtotime ('+7 day'))}}
             />
            
      </div>
    </div>

    <div class="row" style="padding-top:10px ">
      
      <div class="col-5">Choose hour :</div>
      <div class="col-5" >

        <select class="form-select" aria-label="Default select example" style="color :#6C757D" name="hour">
          <option value="">Choose ... </option>
          <option value="09:00 - 10:00">09:00 - 10:00</option>
          <option value="10:00 - 11:00">10:00 - 11:00</option>
          <option value="11:00 - 12:00">11:00 - 12:00</option>
          <option value="12:00 - 13:00">12:00 - 13:00</option>
          <option value="14:00 - 15:00">14:00 - 15:00</option>   
          <option value="15:00 - 16:00">15:00 - 16:00</option>
          <option value="16:00 - 17:00">16:00 - 17:00</option>

        </select>
      </div>
    </div>
    <br><br>

    <button  class="btn btn-primary">Add</button>

    </form>
    <br>
    @if($errors -> any() )
           <div class="alert alert-danger">
                <ul>
                    @foreach ($errors -> all() as $error )
                    <li style="text-align: center ; list-style: none;">{{$error}}</li>
                    @endforeach
                </ul>
            </div>
    @endif

@stop

  @section("error")
<div class="toast-container" style=" position: fixed; top : 110px ; right : 20px">

  {{--  add success --}}

  @if (Session::has("addmessage"))

    <div class="bs-toast toast fade show bg-success  screen2" style="width:600px;" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <i class="bx bx-bell me-2"></i>
          <div class="me-auto fw-semibold">Add Appointment</div>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" >
        {{Session::get('addmessage')}}
        </div>
      </div>
  @endif  
</div>
@stop



@section('script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
	$(function(){
		$('#datepicker').datepicker();
	});
</script>
@stop
