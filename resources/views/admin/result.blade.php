@extends('layouts.main')

@section('main-section')
<head>
    @push('title')
    <title>User</title>
    @endpush
</head>
<div class="home-content">

    <div class="searchh-bar">
        <input class="  form-control" type="text" placeholder="Search" aria-label="Search">
        <div class="btn-wrapperr">
        <button class=" btn btn-primary">Search</button>
        <button class=" btn btn-resett">Reset</button>
        </div>
        </div>

 <div class="card-body">
    <table class="table table-bordered" style="width: 70vw; box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); background-color:rgb(224, 216, 224);  margin-left: 2vw; text-shadow: 200px;">
        <thead>
            <tr>
              <th scope="col">Rank</th>
              <th scope="col">Name</th>
              <th scope="col">Gender</th>
              <th scope="col">Score</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Male</td>
              <td>8</td>
              <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Female</td>
              <td>7</td>
              <td><button class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry the Bird</td>
              <td>Male</td>
              <td>6</td>
              <td><button class="btn btn-danger">Delete</button></td>
            </tr>
          </tbody>
      </table>
    </div>
</div>
@endsection
