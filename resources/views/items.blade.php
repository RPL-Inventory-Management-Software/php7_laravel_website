@extends('layouts.main')

@section('container')

  <h1>All Items</h1>


  <div class="row row-cols-1 row-cols-md-3 g-4" style="margin: auto 5%;">

    @foreach($items as $item)

    <div class="col">
      <div class="card">
        <img src="https://accurate.id/wp-content/uploads/2020/11/inventory-adalah-1.jpg" class="card-img-top" alt="inventory-name">
        <div class="card-body">
          <h5 class="card-title">{{ $item->name }}</h5>
          <p class="card-text">Created By: {{ $item->user->name }}</p>
          <a class="fa-solid fa-arrow-right arrow-icon" href="#"></a>
        </div>
      </div>
    </div>

    @endforeach

    {{-- <div class="col">
      <div class="card">
        <img src="https://accurate.id/wp-content/uploads/2020/11/inventory-adalah-1.jpg" class="card-img-top" alt="inventory-name">
        <div class="card-body">
          <h5 class="card-title">Inventory Name</h5>
          <p class="card-text">Created by</p>
          <a class="fa-solid fa-arrow-right arrow-icon" href="#"></a>
        </div>
      </div>
    </div> --}}

  </div>

@endsection
