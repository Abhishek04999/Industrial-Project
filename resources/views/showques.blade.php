@extends('layouts.main')

@section('main-section')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @push('title')
    <title>Quiz delete</title>
    @endpush

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
            @foreach ($showques as $quiz )
            <tr>
              <th scope="row">{{$quiz->quizid}}</th>
              <td>{{$quiz->qtitle}}</td>
              <td>{{$quiz->questotlnumber}}</td>
              <td>{{$quiz->rightmarksans}}</td>
              <td>{{$quiz->timelimit}} min</td>
              <td>
                <a href="{{route('view-question')}}">
                    <button class="btn btn-success">Start</button></a>&nbsp;
              <button class="btn btn-danger">Restart</button></td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
@endsection
