@extends('dashboard.layouts.main')

@section('container')

    <div class="container mt-4">

        <a href="/dashboard/projects" class="btn btn-success"> <span data-feather="arrow-left"></span> Back to all my Projects</a>
        <a href="" class="btn btn-warning"> <span data-feather="edit"></span> Edit</a>
        <a href="" class="btn btn-danger"> <span data-feather="x-circle"></span> Delete</a>

        <div class="row mt-3">
            <div class="col-lg-6 col-md-12 center">
                <img src="https://source.unsplash.com/500x500?{{ $project->name }}" class="item-photo">
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="item-description-container">
                    <h1>{{ $project->name }}</h1>
                    <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"><img class="profile-picture" src="{{ asset('img/dummy-profile.png') }}" width="30px"></div>
                        <div class="p-2 bd-highlight"><h5><a href="/profile/{{ $project->user->name }}" class="text-decoration-none">{{ $project->user->name }}</a></h5></div>
                    </div>
                    <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight">Date : </div>
                        <div class="p-2 bd-highlight">{{ $project->created_at->diffForHumans() }}</div>
                    </div>
                    <div class="d-flex flex-row bd-highlight mb-3">
                        <div class="p-2 bd-highlight">Type : </div>
                        <div class="p-2 bd-highlight"><span class="badge bg-warning text-dark">Project Type</span></div>
                    </div>
                    <p class="item-description">{{ $project->description }}</p>

                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-warning function-button">DOWNLOAD / WEB LINK</button>
                    </div>
    
                </div>
            </div>
            
        </div>

    </div>
@endsection