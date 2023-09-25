@extends('layouts.main')

@section('main-section')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
 <div class="card-body">
    <table class="table table-bordered" style="width: 70vw; box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); background-color:rgb(224, 216, 224);  margin-left: 10vw; margin-top: 8rem; text-shadow: 200px;">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Topic</th>
              <th scope="col">Total Question</th>
              <th scope="col">Marks</th>
              <th scope="col">Time Limit</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>C++</td>
              <td>10</td>
              <td>10</td>
              <td>5 min</td>
              <td><button class="btn btn-success">Start</button></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>PHP</td>
              <td>15</td>
              <td>15</td>
              <td>10 min</td>
              <td><button class="btn btn-success">Start</button></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Java</td>
              <td>20</td>
              <td>20</td>
              <td>15 min</td>
              <td><button class="btn btn-danger">Remove</button></td>
            </tr>
          </tbody>
      </table>
    </div>
@endsection
