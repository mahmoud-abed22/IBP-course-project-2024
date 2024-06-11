{{-- add_blood_request --}}
@extends('components.indexDoctor')
@section('main')


<h4 style="padding: 20px ; font-size: 22px; color: red; font-weight: 600; padding-left: 0;">Add Blood </h4>
<h4 style="padding: 20px ; font-size: 22px; color: red; font-weight: 600; padding-left: 0;"><a href="{{route('donation_dates')}}" style="color:red ">Blood Donation Appointment</a> / 
    <a href="{{route('date_detailes',$id)}}" style="color: rgb(179, 22, 22); font-size:18px ; ">Appointment Detiales</a> /
    <span style="color: rgb(179, 22, 22); font-size:18px ;">Add Blood</span>  </h4>

<form method="POST" action ="{{route('addWarehouse' , $id )}}">
  @method('POST')
  @csrf
  
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

