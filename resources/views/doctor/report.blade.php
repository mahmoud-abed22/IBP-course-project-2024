
@extends('components.indexDoctor')
@section('css')


<style>

body{
    counter-reset: Serial;  
}

.Bcount th:first-child:before
{
  counter-increment: Serial;      
  content: counter(Serial); 
}
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;

}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>

@stop
@section('main')

<h4 style="padding: 20px ; font-size: 22px; color: red; font-weight: 600; padding-left: 0;">Warehouses </h4>

@foreach ($warehouses as $warehouse )
  <div class="row">
    <div class="col-5"><p>{{$warehouse->blood_type}}</p></div>
    <div class="col-5">{{$warehouse->quantity}} L</div>
  </div>
@endforeach



<h4 style="padding: 20px ; font-size: 22px; color: red; font-weight: 600; padding-left: 0;">Reports </h4>


<div class="row">
<div style="padding: 10px;">
  <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for Come From ..." title="Type in a name">
    <table class="table table-borderless" id="myTable" style="">
        <thead style="background-color: #eee;" style="">
          <tr style="" id="header">
            <th scope="col"></th>
            <th scope="col">Come From</th>
            <th scope="col">Give To</th>
            <th scope="col">Blood Type</th>
            <th scope="col">Quantity</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody style="">

          {{--  --}}
@foreach ($repors as $repor )
@php

$warehouse  =  $warehouses->find($repor->blood_type); 
@endphp
<tr class="Bcount">
  <th scope="row"> </th>
  <td>{{$repor->from}}</td>
  <td>{{$repor->to}}</td>
  <td>{{$warehouse->blood_type}}</td>
  <td>{{$repor->quantity}} L</td>
  @if ($repor->from == 'Warehouse')
  <td><i class='bx bx-minus-circle nav_icon' style="background-color : red;border-radius: 20%;color: #eee;padding:2px "></i> </td>
  @else
  <td><i class='bx bx-plus-circle nav_ico n' style="background-color : green;border-radius: 20%;color: #eee;padding:2px "></i> </td>  
@endif

</tr>

@endforeach

  </tbody>
</table>
<br><br><br><br><br><br><br><br>
</div>
</div>

@stop

@section('script')

<script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
  </script>
@stop