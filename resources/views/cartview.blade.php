<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Cart</title>
  <link href="{{ asset('/css/cart.css') }}" rel="stylesheet">

</head>

<body>
  <div class="back">
    <a href="/">
      <img class="back-arrow" src="{{ URL::to('/assets/img/Vector 9.svg')}}">
    </a>
    <a href="/">
      <div class="back-text">Home</div>
    </a>
  </div>
  <div class="title">Your Items</div>
  <div class="frame">
    <div class="card">
      <div class="content">
        <h1>Aqua 600ml<br>
          <p>Rp 4.500</p>
        </h1>
        <div class="image">
          <img class="C1" src="{{ URL::to('/assets/img/Rectangle 10.svg') }}">
        </div>
      </div>
      <div class="container">
        <div class="quantity">
          <img class="min" src="{{ URL::to('/assets/img/Minus.svg') }}">
          <h1>1</h1>
          <img class="plus" src="{{ URL::to('/assets/img/Plus.svg') }}">
        </div>
      </div>
    </div>
    <div class="card">
      <div class="content">
        <h1>Coca Cola 330ml<br>
          <p>Rp 12.000</p>
        </h1>
        <div class="image">
          <img class="C1" src="{{ URL::to('/assets/img/Rectangle 14.svg') }}">
        </div>
      </div>
      <div class="container">
        <div class="quantity">
          <img class="min" src="{{ URL::to('/assets/img/Minus.svg') }}">
          <h1>2</h1>
          <img class="plus" src="{{ URL::to('/assets/img/Plus.svg') }}">
        </div>
      </div>
    </div>
    <div class="card">
      <div class="content">
        <h1>Daging Ayam Segar 1kg<br>
          <p>Rp 50.000</p>
        </h1>
        <div class="image">
          <img class="C1" src="{{ URL::to('/assets/img/Rectangle 12.svg') }}">
        </div>
      </div>
      <div class="container">
        <div class="quantity">
          <img class="min" src="{{ URL::to('/assets/img/Minus.svg') }}">
          <h1>1</h1>
          <img class="plus" src="{{ URL::to('/assets/img/Plus.svg') }}">
        </div>
      </div>
    </div>
    <div class="card lastcard">
      <div class="content">
        <h1>Kanzler Crispy Chicken Nugget 300g<br>
          <p>Rp 14.500</p>
        </h1>
        <div class="image">
          <img class="C1" src="{{ URL::to('/assets/img/Rectangle 11.svg') }}">
        </div>
      </div>
      <div class="container">
        <div class="quantity">
          <img class="min" src="{{ URL::to('/assets/img/Minus.svg') }}">
          <h1>1</h1>
          <img class="plus" src="{{ URL::to('/assets/img/Plus.svg') }}">
        </div>
      </div>
    </div>
  </div>
  <div class="bar">
    <div class="content2">
      <h1>Total Price
        <p>Rp 81.000</p>
      </h1>
      <a href="/payment">
        <div class="button">
          <p>Pay</p>
        </div>
      </a>
    </div>
  </div>
</body>

</html>