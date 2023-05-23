
@extends('components.indexUser')

@section('main')

<h4 style="padding: 20px ; font-size: 22px; color: red; font-weight: 600; padding-left: 0;">Change Password </h4>
  <form method="POST" action ="{{route('change_pass')}}">
    @method('POST')
    @csrf

    <div class="row">
        <div class="col-6">
          <input type="text" class="form-control" placeholder="New Password :" name="password">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-6">
          <input type="text" class="form-control" placeholder="Confirm Password :" name="conpass">
        </div>
      </div>
      <br>


    <br>
    <button type="submit" class="btn btn-primary">Change</button>
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
          <div class="me-auto fw-semibold">Change Password</div>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" >
        {{Session::get('addmessage')}}
        </div>
      </div>
  @endif  
</div>
@stop
