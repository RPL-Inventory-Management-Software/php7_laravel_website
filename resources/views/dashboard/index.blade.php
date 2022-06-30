@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
</div>
<div class="features-text">
      <span class="">Features</span>
    </div>
    <div class="d-flex justify-content-center menu-space">
      <div class="item text-center mx-5 my-3">
        <div class="btn-icon">
          <a class="btn btn-colored" href="/projects" role="button"><i class="fa-solid fa-boxes-stacked fa-4x mx-auto position-absolute top-50 start-50 translate-middle"></i></a>
        </div>
        <div class="btn-icon-caption">
          <span class="icon-caption">Project List Page</span>
        </div>
      </div>
      <div class="item text-center mx-5 my-3">
        <div class="btn-icon">
          <a class="btn btn-colored" href="dashboard/projects" role="button"><i class="fa-solid fa-window-restore fa-4x mx-auto position-absolute top-50 start-50 translate-middle"></i></a>
        </div>
        <div class="btn-icon-caption">
          <span class="icon-caption">Input Project</span>
        </div>
      </div>
      <div class="item text-center mx-5 my-3">
        <div class="btn-icon">
          <a class="btn btn-colored" href="dashboard/items" role="button"><i class="fa-solid fa-chair fa-4x mx-auto position-absolute top-50 start-50 translate-middle"></i></a>
        </div>
        <div class="btn-icon-caption">
          <span class="icon-caption">Input Borrow</span>
        </div>
      </div>
      <div class="item text-center mx-5 my-3">
        <div class="btn-icon">
          <a class="btn btn-colored" href="#" role="button"><i class="fa-solid fa-list-check fa-4x mx-auto position-absolute top-50 start-50 translate-middle"></i></a>
        </div>
        <div class="btn-icon-caption">
          <span class="icon-caption">Borrowing Menu</span>
        </div>
      </div>
    </div>
@endsection