<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/inventory_software.css') }}">

    <title>Hello, world!</title>
  </head>
  <body>

    @include('partials.navbar')

    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-12 center">
                <img src="{{ asset('img/item.jpg') }}" class="item-photo">
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="item-description-container">
                    <h1>Project Name</h1>
                    <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight"><img class="profile-picture" src="{{ asset('img/dummy-profile.png') }}"></div>
                        <div class="p-2 bd-highlight"><h5>Creator Name</h5></div>
                    </div>
                    <div class="d-flex flex-row bd-highlight ">
                        <div class="p-2 bd-highlight">Date : </div>
                        <div class="p-2 bd-highlight">DD/MM/YYYY</div>
                    </div>
                    <div class="d-flex flex-row bd-highlight mb-3">
                        <div class="p-2 bd-highlight">Type : </div>
                        <div class="p-2 bd-highlight"><span class="badge bg-warning text-dark">Project Type</span></div>
                    </div>
                    <p class="item-description">You can spend millions of dollars on product development, but if the end-user just "doesn't get it" -- you're toast. And there's where UX (short for user experience) comes in.</p>

                    <div class="d-grid gap-2">
                        <button type="button" class="btn btn-warning function-button">DOWNLOAD / WEB LINK</button>
                    </div>
    
                </div>
            </div>
            
        </div>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>