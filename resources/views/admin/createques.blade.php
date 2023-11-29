@extends('layouts.main') {{-- Assuming you have a layout file --}}

@section('main-section')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @push('title')
    <title>create quiz</title>
    @endpush
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <b><br /><!-- Text input-->
        <div class="container">



            @for ($i = 1; $i <= $x; $i++)
            <form method='POST' action="{{ route('save-quiz') }}" class="form-horizontal">
                @csrf
                <fieldset>

                <legend>Quiz Question {{ $i }}</legend>

                <!-- Textarea for the question -->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="qns{{ $i }}"></label>
                    <div class="col-md-12">
                        <textarea rows="3" cols="5" name="qns{{ $i }}" class="form-control" placeholder="Write question number {{ $i }} here..."></textarea>
                    </div>
                </div>

                <input type="text" name="x" class="d-none" value="{{$x}}" id="">

                <!-- Text inputs for options a, b, c, and d -->
                @foreach (['a', 'b', 'c', 'd'] as $option)
                <div class="form-group">
                    <label class="col-md-12 control-label" for="{{ $i }}{{ $option }}"></label>
                    <div class="col-md-12">
                        <input id="{{ $i }}{{ $option }}" name="{{ $i }}{{ $option }}" placeholder="Enter option {{ $option }}" class="form-control input-md" type="text">
                    </div>
                </div>
                @endforeach

                <br />
                <b>Correct answer</b>:<br />
                <!-- Select for correct answer -->
                <select id="ans{{ $i }}" name="ans{{ $i }}" placeholder="Choose correct answer" class="form-control input-md">
                    <option value="a">Select answer for question {{ $i }}</option>
                    <option value="a">option a</option>
                    <option value="b">option b</option>
                    <option value="c">option c</option>
                    <option value="d">option d</option>
                </select>
                <br /><br />

                </fieldset>

                @if ($i < $x)
                <hr> <!-- Add a horizontal line to separate the forms -->
                @endif

            @endfor

            <input type="text" class="" name="id" value="{{$quizid}}">
            <!-- Submit button outside the loop -->
            <div class="form-group">
                <label class="col-md-12 control-label" for=""></label>
                <div class="col-md-12">
                    <input type="submit" style="margin-left: 45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
                </div>
            </div>
        </div>
    </form>
      @endsection

