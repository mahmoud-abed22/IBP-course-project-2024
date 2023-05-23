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
      <div class="form-box" style="height: 380px;">
        <div class="button-box">
          <div id="btn" style="left:0px;"></div>
            <a href="{{ route('login') }}"    class="toggle-btn"  style="display: inline-flex; width: 47px ; color: #000; font-size: 13px;text-decoration: none  ; " >Log in</a>
            <a href="{{ route('register') }}" class="toggle-btn"  style="display: inline-flex; width: 47px ; color: #000; font-size: 13px;text-decoration: none  ; " >Register</a>
        </div>


        <form method="POST" class="input-group" id="login" action="{{ route('login') }}">
        @csrf
          <input type="email" name="email" class="input-field" placeholder="Email : " >
          @error("email") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror

          <input type="password"  name="password" class="input-field" placeholder="Password :" >
          @error("password") <div style="color:red ; font-size : 12px">{{$message}}</div> @enderror
          <input type="checkbox" class="check-box"> <span>Remember password</span>
          <button type="submit" class="submit-btn">Log in</button>

        </form>


      </div>
    </div>

  </body>
</html>

