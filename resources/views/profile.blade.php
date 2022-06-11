@extends('layouts.main')

@section('container')

<div class="container">
    <div class="d-flex flex-row bd-highlight mb-4">
        <div class="p-2 bd-highlight"><img class="profile-picture" src="{{ asset('img/dummy-profile.png') }}"></div>
        <div class="p-2 bd-highlight"><h4>{{ $title }}</h4></div>
    </div>
</div>

<h5>Projects</h5>
<div class="container">
    <div class="row">

        @foreach($projects as $project)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://source.unsplash.com/1200x400?{{ $project->name }}" class="card-img-top" alt="inventory-name">
                <div class="card-body">
                  <h5 class="card-title">{{ $project->name }}</h5>
                  <p class="card-text">Created By: {{ $project->user->name }}</p>
                  <a class="fa-solid fa-arrow-right arrow-icon" href="/projects/{{ $project->slug }}">Details</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>


<h5>Items</h5>
<div class="container">
    <div class="row">

        @foreach($items as $item)
        <div class="col-md-4">
            <div class="card">
                <img src="https://source.unsplash.com/1200x400?{{ $item->name }}" class="card-img-top" alt="inventory-name">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->name }}</h5>
                  <p class="card-text">Created By: {{ $item->user->name }}</p>
                  <a class="fa-solid fa-arrow-right arrow-icon" href="/items/{{ $item->slug }}">Details</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection