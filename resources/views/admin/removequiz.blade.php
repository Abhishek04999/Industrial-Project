@extends('layouts.main')

@section('main-section')
<head>
    @push('title')
    <title>Quiz delete</title>
    @endpush
</head>
<div class="home-content">
    <div style="margin-left:4em; margin-bottom:2em">
        <form class="d-flex" role="search" action="{{ url('/removequiz') }}" method="GET">
            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>&nbsp;
            <a href="{{ url('/removequiz') }}" class="btn btn-resett">Reset</a>
          </form>

    </div>


 <div class="card-body">
    <table class="table table-bordered" style="width: 70vw; box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); background-color:rgb(224, 216, 224);  margin-left: 2vw; text-shadow: 200px;">
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
            @foreach ($viewquiz as $quiz )
            <tr>
              <th scope="row">{{$quiz->quizid}}</th>
              <td>{{$quiz->qtitle}}</td>
              <td>{{$quiz->questotlnumber}}</td>
              <td>{{$quiz->rightmarksans}}</td>
              <td>{{$quiz->timelimit}} min</td>
              <td>
                <a href="{{route('removequiz.delete',['id'=>$quiz->quizid])}}">
                <button class="btn btn-danger">Delete</button></a>&nbsp;
                {{-- <button class="btn btn-dark">View</button> --}}
            </td>
            </tr>
            @endforeach
          </tbody>
      </table>
    </div>
</div>
@endsection
