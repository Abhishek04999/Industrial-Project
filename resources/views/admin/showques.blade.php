@extends('layouts.main')

@section('main-section')
<head>
    @push('title')
    <title>Quiz delete</title>
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
    <table class="table table-bordered" style="width: 70vw; box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); background-color:rgb(224, 216, 224);  margin-left: 2vw;  text-shadow: 200px;">
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
                <a href="{{env('APP_URL')}}/viewquestion/{{$quiz->quizid}}">
                    <button class="btn btn-success">Start</button></a>&nbsp;
              <button class="btn btn-danger">Restart</button></td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
</div>
</div>
@endsection
