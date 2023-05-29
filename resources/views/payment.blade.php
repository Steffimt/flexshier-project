<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Payment Type</title>
  <link href="{{ asset('/css/payment-type.css') }}" rel="stylesheet">
</head>

<body>
  <div class="back">
    <a href="/cartview"><img class="back-arrow" src="{{ URL::to('/assets/img/Vector 9.svg')}}"></a>
    <a href="/cartview">
      <div class="back-text">Back</div>
    </a>
  </div>
  <div class="title">Choose Your Payment Type</div>
  <div class="frame">
    <div class="card">
      <div class="content">
        <img class="C1" src="{{ URL::to('/assets/img/pay-cashier.svg')}}">
        <h1>Pay at Cashier<br>
          <p>Make sure you have the right amount of cash or you can pay with debit/credit card</p>
        </h1>
      </div>
    </div>
    <div class="lastcard">
      <div class="content">
        <img class="C2" src="{{ URL::to('/assets/img/pay-phone.svg')}}">
        <h1>Pay from Phone<br>
          <p>Hassle free payment directly from your smartphone</p>
        </h1>
      </div>
    </div>
  </div>
  <div class="bar">
    <div class="content2">
      <h1>Total Price
        <p>Rp 81.000</p>
      </h1>
      <div class="button">
        <p>Pay</p>
      </div>
    </div>
  </div>
</body>
{{-- <script>
  // JavaScript code to add/remove 'active' class on click
  document.addEventListener('DOMContentLoaded', function() {
    var cards = document.querySelectorAll('.card');

    cards.forEach(function(card) {
      card.addEventListener('click', function() {
        this.classList.toggle('active');
      });
    });
  });
</script> --}}
<script>
  // JavaScript code to add/remove 'active' class on click for '.card' and '.lastcard' elements
  document.addEventListener('DOMContentLoaded', function() {
    var cards = document.querySelectorAll('.card');
    var lastCard = document.querySelector('.lastcard');

    cards.forEach(function(card) {
      card.addEventListener('click', function() {
        this.classList.toggle('active');
      });
    });

    lastCard.addEventListener('click', function() {
      this.classList.toggle('active');
      this.classList.toggle('persist-border');
    });
  });
</script>
</html>