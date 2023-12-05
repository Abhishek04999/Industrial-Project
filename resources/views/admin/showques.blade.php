@extends('layouts.main')

@section('main-section')
<head>
    @push('title')
    <title>Quiz delete</title>
    @endpush
</head>
<div class="home-content">
    <div style="margin-left:4em; margin-bottom:2em">
        <form class="d-flex" role="search" action="{{ url('/showques') }}" method="GET">
            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>&nbsp;
            <a href="{{ url('/showques') }}" class="btn btn-resett">Reset</a>
          </form>

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
                <!-- Start Quiz button with timer functionality -->
                <a href="{{env('APP_URL')}}/viewquestion/{{$quiz->quizid}}" class="start-quiz-btn" onclick="startTimer({{$quiz->timelimit}})"><button class="btn btn-success"> Start Quiz </button></a>
            </td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
</div>
</div>
<!-- JavaScript for timer functionality -->

<!-- JavaScript for timer functionality -->
<script>
    function startTimer(timeLimitString) {
    const timeLimit = parseInt(timeLimitString, 10);

    localStorage.setItem('timerValue', timeLimit * 60); // Store the time limit in seconds

    // Redirect to the second file with timer value
    window.location.href = '{{env('APP_URL')}}/viewquestion?timerValue=' + (timeLimit * 60);
    }
    </script>
@endsection





