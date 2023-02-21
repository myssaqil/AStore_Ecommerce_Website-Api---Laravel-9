<!DOCTYPE html>
<html lang="en">
  <head>
    <title>AStore | Login</title>
    <link data-default-icon="{{asset('Assets/Svg/logo.svg')}}" rel="icon" sizes="192x192" href="{{asset('Assets/Svg/logo.svg')}}">
    <link rel="stylesheet" href="{{asset('Css/Css.css')}}" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="wrapper">
        <h1 class="mb-2">Sign In</h1>
        <form action="{{ route('login.action')}}" method="POST">
            @csrf
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="password">
            <button value="Submit" type="submit">Sign In</button>
        </form>
       
        <div class="member">
            Already a member at Astore? <a href="{{ url('user/register') }}">
                Login Here
            </a>
        </div>
    </div>

  </body>
</html>