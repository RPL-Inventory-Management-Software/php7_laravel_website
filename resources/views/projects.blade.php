@extends('layouts.main')

@section('container')

  <h1>All Projects</h1>


  <div class="row row-cols-1 row-cols-md-3 g-4" style="margin: auto 5%;">

    @foreach($projects as $project)

    <div class="col">
      <div class="card">
        <img src="https://source.unsplash.com/1200x400?{{ $project->name }}" class="card-img-top" alt="inventory-name">
        <div class="card-body">
          <h5 class="card-title">{{ $project->name }}</h5>
          <p class="card-text">Created By: <a href="/profile/{{ $project->user->name }}" class="text-decoration-none">{{ $project->user->name }}</a> </p>
          <a class="fa-solid fa-arrow-right arrow-icon" href="/projects/{{ $project->slug }}">Details</a>
        </div>
      </div>
    </div>

    @endforeach

  </div>

@endsection
