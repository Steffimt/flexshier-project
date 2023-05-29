<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="{{ asset('/css/history.css') }}" rel="stylesheet">
  <title>History</title>
</head>

<body>
  <div class="title">Transaction History</div>
  <div class="frame">
    <div class="card">
      <h1>Shop</h1>
      <div class="status-label">
        <h2>Pending</h2>
      </div>
      <p>4 April 2023</p>
      <div class="line"></div>
      <div class="content">
        <img class="T1" src="{{ URL::to('/assets/img/Rectangle 10.svg') }}">
        <h1>TRX 12345678<br>
          <p>Rp 81.000</p>
        </h1>
      </div>
      <div class="detail">
        <h3>Show QR Code</h3>
      </div>
    </div>
    <div class="card">
      <h1>Shop</h1>
      <div class="status-label2">
        <h2>Finished</h2>
      </div>
      <p>1 April 2023</p>
      <div class="line"></div>
      <div class="content">
        <img class="T2" src="{{ URL::to('/assets/img/Rectangle 10.svg') }}">
        <h1>TRX 12345678<br>
          <p>Rp 81.000</p>
        </h1>
      </div>
      <div class="detail2">
        <h3>See Receipt</h3>
      </div>
    </div>
    <div class="card">
      <h1>Shop</h1>
      <div class="status-label3">
        <h2>Cancelled</h2>
      </div>
      <p>1 April 2023</p>
      <div class="line"></div>
      <div class="content">
        <img class="T3" src="{{ URL::to('/assets/img/Rectangle 11.svg') }}">
        <h1>TRX 56732918<br>
          <p>Rp 21.000</p>
        </h1>
      </div>
    </div>
    <div class="lastcard">
      <h1>Shop</h1>
      <div class="status-label2">
        <h2>Finished</h2>
      </div>
      <p>21 March 2023</p>
      <div class="line"></div>
      <div class="content">
        <img class="T4" src="{{ URL::to('/assets/img/Rectangle 13.svg') }}">
        <h1>TRX 52627122<br>
          <p>Rp 111.000</p>
        </h1>
      </div>
      <div class="detail2">
        <h3>See Receipt</h3>
      </div>
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
      <a href="/history"><img class="icon-history" src="{{ URL::to('/assets/img/History2.svg') }}"></a>
    </li>
    <li>
      <a href="/profile"><img class="icon-nb-profile" src="{{ URL::to('/assets/img/Profile.svg') }}"></a>
    </li>
  </div>
</body>

</html>
