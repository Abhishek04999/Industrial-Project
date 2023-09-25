@extends('layouts.main')


@section('main-section')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <div class="card-body" style="width: 60%; height:fit-content;  box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); position:static; background-color:rgb(224, 216, 224);  margin-left: 20vw; margin-top: 12vh; text-shadow: 200px;">
    <form method="POST" action="{{route('createques.ques')}}">
        @csrf
        <div class="row mb-4" style="margin-left: 2vw;">
          <label for="inputEmail3" class="col-sm-6 col-form-label">Enter Quiz Title</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="inputEmail3">
          </div>
        </div>
        <div class="row mb-4" style="margin-left: 2vw;">
          <label for="inputPassword3" class="col-sm-6 col-form-label">Enter Total Number of Question</label>
          <div class="col-sm-5">
            <input type="number" class="form-control" id="inputPassword3">
          </div>
        </div>
        <div class="row mb-4" style="margin-left: 2vw;">
          <label for="inputPassword3" class="col-sm-6 col-form-label">Enter Marks on Right Answer</label>
          <div class="col-sm-5">
            <input type="number" class="form-control" id="inputPassword3">
          </div>
        </div>
        <div class="row mb-4" style="margin-left: 2vw;">
          <label for="inputPassword3" class="col-sm-6 col-form-label">Enter Marks on Wrong Answer Without Sign</label>
          <div class="col-sm-5">
            <input type="number" class="form-control" id="inputPassword3">
          </div>
        </div>
        <div class="row mb-4" style="margin-left: 2vw;">
          <label for="inputPassword3" class="col-sm-6 col-form-label">Enter Time Limit for Test </label>
          <div class="col-sm-5">
            <input type="number" class="form-control" id="inputPassword3">
          </div>
        </div>
        <div style="margin-left: 20vw;">


        <input type="submit" class="btn btn-primary col-sm-3"  value="save">

      </div>
      </form>
    </div>

@endsection
