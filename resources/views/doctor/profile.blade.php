@extends('components.indexDoctor')
@section('main')

<h4 style="padding: 20px ; font-size: 22px; color: red; font-weight: 600; padding-left: 0;">Donation Place Detailes </h4>

    <div class="my-3 p-3 bg-body rounded shadow-sm w-100" style="margin: auto;" >
        <h6 class="border-bottom pb-2 mb-0">Place Detailes</h6>

        <br>
        @php
            $places = $place->first();
        @endphp
        <div class="row w-50">
            <div class="col" > Place Name : </div>
            <div class="col" style="text-transform: capitalize"> {{$places->name}} Merkezi</div>
        </div>

        <br>

        <div class="row w-50">
            <div class="col"> Room Number : </div>
            <div class="col"> {{$places->room_number}} </div>
        </div>
        <br>
        <div class="row w-50">
            <div class="col"> Phone : </div>
            <div class="col"> {{$places->phone}} </div>
        </div>
        <br>
        <div class="row w-50">
            <div class="col"> Email : </div>
            <div class="col"> {{$places->email}} </div>
        </div>

        <br>
        <div class="row w-50">
            <div class="col"> Address : </div>
            <div class="col"> {{$places->address}} </div>
        </div>

        <br>    
        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
            
                <iframe src="{{$places->location}}"></iframe>
          </div>
      </div> 

  @stop
