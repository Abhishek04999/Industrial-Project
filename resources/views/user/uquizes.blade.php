@extends('layouts1.main')

@section('Main-section')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @push('title')
    <title>Quiz delete</title>
    @endpush

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div style="margin-left:18em;  margin-top:2em" class="help">
        <form class="d-flex" role="search" action="{{ url('/ushowques') }}" method="GET">
            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>&nbsp;
            <a href="{{ url('/ushowques') }}"  class="btn btn-reset">Reset</a>
          </form>

    </div>
    <div class="card-body">
        <table class="table table-bordered" style="width: 70vw; box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); background-color:rgb(224, 216, 224); margin-left: 10vw; margin-top: 4rem; text-shadow: 200px;">
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
                @foreach ($ushowques as $quiz )
                <tr>
                    <th scope="row">{{$quiz->quizid}}</th>
                    <td>{{$quiz->qtitle}}</td>
                    <td>{{$quiz->questotlnumber}}</td>
                    <td>{{$quiz->rightmarksans}}</td>
                    <td>{{$quiz->timelimit}} min</td>
                    <td>
                        <!-- Start Quiz button with timer functionality -->
                        <a href="{{env('APP_URL')}}/ushowquestion/{{$quiz->quizid}}" class="start-quiz-btn" onclick="startTimer({{$quiz->timelimit}})"><button class="btn btn-success"> Start Quiz </button></a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- JavaScript for timer functionality -->

            <!-- JavaScript for timer functionality -->
<script>
    function startTimer(timeLimitString) {
        const timeLimit = parseInt(timeLimitString, 10);

        localStorage.setItem('timerValue', timeLimit * 60); // Store the time limit in seconds

        // Redirect to the second file with timer value
        window.location.href = '{{env('APP_URL')}}/ushowquestion?timerValue=' + (timeLimit * 60);
    }
</script>


</body>
</html>
@endsection
