@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Items</h1>
</div>

<div class="table-responsive col-lg-8">
  <a href="/dashboard/items/create" class="btn btn-primary mb-3"> Submit new Items </a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($items as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->name }}</td>
          <td></td>
          <td>
            <a href="/dashboard/items/{{ $item->slug }}" class="badge bg-info">  <span data-feather="eye" class="align-text-bottom"></span> </a>
            <a href="" class="badge bg-warning">  <span data-feather="edit" class="align-text-bottom"></span> </a>
            <a href="" class="badge bg-danger">  <span data-feather="x-circle" class="align-text-bottom"></span> </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection