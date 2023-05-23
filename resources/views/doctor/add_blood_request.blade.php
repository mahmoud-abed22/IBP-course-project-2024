{{-- add_blood_request --}}
@extends('components.indexDoctor')
@section('main')


<h4 style="padding: 20px ; font-size: 22px; color: red; font-weight: 600; padding-left: 0;">Blood Request </h4>
  <form method="POST" action ="{{route('deleteWarehouse')}}">
    @method('POST')
    @csrf

    <div class="row">
      <div class="col-6">
        <input type="text" class="form-control" placeholder="Give To :" name="to">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
          <select class="form-select" aria-label="Default select example" style="color :#6C757D" name="blood_type" >
            <option value="">Blood Type : </option>
            @foreach ($warehouses as $warehouse )
              <option value="{{$warehouse->id}}">{{$warehouse->blood_type}}</option>
            @endforeach
            </select>
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="Quantity (L) :" name="quantity">
      </div>
    </div>

    <br>
    <button type="submit" class="btn btn-primary">Confirm</button>
    </form> 

  @stop

@section("error")
<div class="toast-container" style=" position: fixed; top : 110px ; right : 20px">

  {{--  add success --}}

  @if (Session::has("addmessage"))

    <div class="bs-toast toast fade show bg-success  screen2" style="width:600px;" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <i class="bx bx-bell me-2"></i>
          <div class="me-auto fw-semibold">Request Done</div>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" >
        {{Session::get('addmessage')}}
        </div>
      </div>
  @endif  

  @if (Session::has("addmessage2"))

    <div class="bs-toast toast fade show bg-danger  screen2" style="width:400px;" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <i class="bx bx-bell me-2"></i>
          <div class="me-auto fw-semibold">Request Failed</div>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" >
        {{Session::get('addmessage2')}}
        </div>
      </div>
  @endif 

</div>
@stop

