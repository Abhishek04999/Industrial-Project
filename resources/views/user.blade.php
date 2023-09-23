@extends('layouts.main')

@section('main-section')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
 <div class="card-body">
    <table class="table table-bordered" style="width: 70vw; box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); background-color:rgb(224, 216, 224);  margin-left: 10vw; margin-top: 8rem; text-shadow: 200px;">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">UserName</th>
              <th scope="col">Gender</th>
              <th scope="col">E-mail</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Male</td>
              <td>@mdo</td>
              <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Female</td>
              <td>@fat</td>
              <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry the Bird</td>
              <td>Male</td>
              <td>@twitter</td>
              <td><button class="btn btn-danger">Delete</button></td>
            </tr>
          </tbody>
      </table>
    </div>
@endsection