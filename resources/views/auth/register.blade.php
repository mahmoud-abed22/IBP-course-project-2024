<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/assets/css/login.css">
  </head>

    
  <body>
    <div class="hero">
      <div class="form-box">
        <div class="button-box">
          <div id="btn" style="left:110px;"></div>
            <a href="{{ route('login') }}"    style="display: inline-flex; width: 47px ; color: #000; font-size: 13px;text-decoration: none; "  class="toggle-btn" >Log in</a>
            <a href="{{ route('register') }}" style="display: inline-flex; width: 47px ; color: #000; font-size: 13px;text-decoration: none; " class="toggle-btn" >Register</a>
        </div>

        <div id="register" class="input-group"></div>

        <form method="POST" id="login" class="input-group" action="{{ route('register') }}">
        @csrf

          <input type="text" name="name"  value="{{old('name')}}"  class="input-field" placeholder="Name" >
          @error("name") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror

          <input type="text" name="surname"  value="{{old('surname')}}"  class="input-field" placeholder="Surname" >
          @error("surname") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror


          <div class="date-input">

            <select name="gender" class="input-field" id="" value="{{old('gender')}}" >
              <option value=""><span style="color:red"></span> </option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
            @error("gender") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror

          </div>  

          <div class="date-input">
            <input type="date" name="age" value="{{old('age')}}" style="color: #757575;" id="age" class="input-field" >
            @error("age") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror

          </div>  

          <input type="phone" name="phone"  value="{{old('phone')}}" class="input-field" placeholder="Phone" >
          @error("phone") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror

          <input type="email"  name="email"  value="{{old('email')}}" class="input-field" placeholder="Email" >
          @error("email") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror

          <input type="password"  name="password" class="input-field" placeholder="Password" >
          @error("password") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror

          <input type="password"  name="password_confirmation" class="input-field" placeholder="Confirm Password" >
          @error("password_confirmation") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror


     
          <input type="checkbox" class="check-box"> <span style="color: #757575;">I agree to the terms & conditions</span>
          <button type="submit" class="submit-btn">Register</button>

        </form>

      </div>
    </div>

  </body>
</html>

