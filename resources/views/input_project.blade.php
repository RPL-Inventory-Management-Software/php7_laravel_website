<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="asset{{ 'css/input_project.css' }}">

    <title>Input New Project</title>
  </head>
  <body>

    @include('partials.navbar')

    <div class="container">
      <h1>Input New Project</h1>
    </div>
    <br>
    <div class="container">
      <form>
        <div class="row mb-3">
          <label for="inputProjectName" class="col-sm-2 col-form-label">Project Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputProjectName" placeholder="Input the project name" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputCreatorName" class="col-sm-2 col-form-label">Created by</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputCreatorName" placeholder="Input the project creator" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputDate" class="col-sm-2 col-form-label">Creation Date</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="inputDate" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputFileType" class="col-sm-2 col-form-label">File Type</label>
          <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" required>
              <option selected>Choose the file type of the project</option>
              <option value="1">rar/zip</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label for="formFileLg" class="col-sm-2 col-form-label">Project File</label>
          <div class="col-sm-10">
            <input class="form-control form-control-lg" id="formFileLg" type="file" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="formFile" class="col-sm-2 col-form-label">Cover Picture</label>
          <div class="col-sm-10">
            <input class="form-control" id="formFile" type="file" accept="image/*" required>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputDesc" class="col-sm-2 col-form-label">Description</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="inputDesc" placeholder="Describe about the project" rows="5" required></textarea>
          </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2" type="submit">Submit</button>
        </div>
      </form>
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>