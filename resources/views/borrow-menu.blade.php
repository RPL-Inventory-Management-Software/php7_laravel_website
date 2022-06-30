<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Borrow Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="css\borrow-menu.css">
  <script src="https://kit.fontawesome.com/3040aa43c5.js" crossorigin="anonymous"></script>
</head>

<body>

@include('partials.navbar')

  <div class="container-fluid">
    <span class="borrow-title">Borrow Menu</span>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">BorrowID</th>
          <th scope="col">Username</th>
          <th scope="col">Item</th>
          <th scope="col">Quantity</th>
          <th scope="col">StartDate</th>
          <th scope="col">EndDate</th>
          <th scope="col">Description</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>001</td>
          <td>achmadjie</td>
          <td>table</td>
          <td>5</td>
          <td>09/07/2022</td>
          <td>17/07/2022</td>
          <td>Dipinjam untuk rapat HIMA</td>
          <td>Approved</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>002</td>
          <td>axelrose</td>
          <td>chair</td>
          <td>10</td>
          <td>15/08/2022</td>
          <td>29/09/2022</td>
          <td>Dipinjam untuk rapat ICAO</td>
          <td>Disapproved</td>
        </tr>
      </tbody>
    </table>
  </div>
  <section id="footer">
    <div class="foot text-center p-4">
      © 2022 Copyright:
      <span>IMS-2022</span>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </script>
</body>

</html>
