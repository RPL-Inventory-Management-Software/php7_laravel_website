@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Project</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/projects">
      @csrf
    <br>
    <div class="container">
        <div class="row mb-3">
          <label for="inputProjectName" class="col-sm-2 col-form-label">Project Name</label>
          <div class="col-sm-10 my-auto">
            <input type="text" class="form-control" id="inputProjectName" placeholder="Input the project name" name="name" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputSlugName" class="col-sm-2 col-form-label">Slug</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputSlugName" placeholder="Input the slug" name="slug" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputFileType" class="col-sm-2 col-form-label">File Type</label>
          <div class="col-sm-10 my-auto">
            <select class="form-select" aria-label="Default select example" name="type" required>
              <option selected>Choose the file type of the project</option>
              <option value="application">Application</option>
              <option value="website">Website</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label for="formFileLg" class="col-sm-2 col-form-label">Project File</label>
          <div class="col-sm-10 my-auto">
            <input class="form-control form-control-lg" id="formFileLg" type="file" name="file" required>
          </div>
        </div>
        <!-- <div class="row mb-3">
          <label for="formFile" class="col-sm-2 col-form-label">Cover Picture</label>
          <div class="col-sm-10 my-auto">
            <input class="form-control" id="formFile" type="file" name="picture" required>
          </div>
        </div> -->
        <div class="row mb-3">
          <label for="inputDesc" class="col-sm-2 col-form-label">Description</label>
          <div class="col-sm-10 my-auto">
            <textarea class="form-control" id="inputDesc" placeholder="Describe about the project" rows="5" name="description" required></textarea>
          </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2" type="submit">Submit</button>
        </div>
    </div>
    </form>
</div>

@endsection