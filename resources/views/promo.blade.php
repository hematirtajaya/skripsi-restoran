@extends('layout/main')

@section('title','Foodserve!')

@section('container')
<div class="container">
<div class="row row-cols-1 row-cols-md-3 mt-5">
  <div class="col mb-4">
    <div class="card h-100">
      <img src="https://image.freepik.com/free-psd/voucher-pizza-template-50-off_23-2148280401.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <a href="/about" style="text-decoration:none;"><h5 class="card-title">50% DISC PIZZA</h5></a>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <img src="https://image.freepik.com/free-psd/restaurant-gift-voucher-template_23-2148339493.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="/about" style="text-decoration:none;"><h5 class="card-title">20% OFF HEALTHY FOOD</h5></a>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <img src="https://image.freepik.com/free-psd/colorful-mexican-restaurant-voucher-template_23-2148348579.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <a href="/about" style="text-decoration:none;"><h5 class="card-title">BUY 2 GET 1 FREE TACO!</h5></a>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <img src="https://image.freepik.com/free-psd/italian-food-voucher-template_23-2148573446.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <a href="/about" style="text-decoration:none;"><h5 class="card-title">DISCOUNT 30% FOR ANY ORDER!</h5></a>
        <p class="card-text"></p>
      </div>
    </div>
  </div>
</div>
</div>
@endsection