<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Profile</title>
  <link href="{{ asset('/css/profile.css') }}" rel="stylesheet">
</head>

<body>
  <div class="header">
    <img class="icon-profile" src="{{ URL::to('/assets/img/profilepic.svg')}}">
    <h1 class="detail-profile">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}<br>
      <p class="text"></p>
      <p class="text">{{{ isset(Auth::user()->email) ? Auth::user()->email : Auth::user()->name }}}</p>
    </h1>
  </div>

  <h1 class="section-title">Account Settings</h1>

  <div class="features">
    <div class="card">
      <img class="icon-menu" src="{{ URL::to('/assets/img/User.svg')}}">
      <div class="text">
        <h2>Edit Profile</h2>
        <p>Change your name, phone numbers, and registered email</p>
      </div>
    </div>

    <div class="line"></div>
    
    <div class="card">
      <img class="icon-menu" src="{{ URL::to('/assets/img/Lock.svg')}}">
      <div class="text">
        <a href="/password/reset">
        <h2 class="menu-name">Change Password</h2>
        <p class="text">Change your security password to secure your account</p>
      </div></a>
    </div>

    <div class="line"></div>
    
    <div class="lastcard">
      <img class="icon-menu" src="{{ URL::to('/assets/img/Sign_out_squre.svg')}}">
        <div class="text">
          <a href="/home">
          <h2 class="menu-name">Sign Out</h2>
        </div></a>
    </div>
  </div>

  <div class="navigation-bar">
        <li>
          <a href="/"><img class="icon-nb-home" src="{{ URL::to('/assets/img/Home.svg') }}"></a>
        </li>
        <li>
          <a href="/cartview"><img class="icon-nb-cart" src="{{ URL::to('/assets/img/Cart.svg') }}"></a>
        </li>
        <li>
          <a href="/scanner"><img class="icon-nb-scan" src="{{ URL::to('/assets/img/Scan.svg') }}"></a>
        </li>
        <li>
          <a href="/history"><img class="icon-history" src="{{ URL::to('/assets/img/History.svg') }}"></a>
        </li>
        <li>
          <a href="/profile"></a><img class="icon-nb-profile" src="{{ URL::to('/assets/img/Profile2.svg') }}">
        </li>
    </div>
</body>
</html>