
@extends('layouts.main') {{-- Assuming you have a layout file --}}

@section('main-section')
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @push('title')
    <title>Simple Quiz</title>
    @endpush
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;

        }

        #quiz-container {
            max-width: 600px;
            margin-left: 2em;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        .question {
            margin-bottom: 20px;
        }

        .options {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 10px;
            margin-top: 10px;
        }

        label {
            display: block;
            background-color: #ddd;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        input {
            display: none;
        }

        input:checked + label {
            background-color: #5cb85c;
            color: #fff;
        }
        .question-number {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>

</head>
<body>
    <div class="home-content">
    <div id="scoreDisplay" style="display: none;">
        <p id="userScore" style="font-size: 135%; margin-top: 3em"></p>
    </div>
    <form id="quizForm" method="POST" action="{{ route('submit-quiz') }}">
        @csrf
        <div id="quiz-container">
            <div id="timer" style="font-size: 24px; margin-top: 10px; font-weight: bold;"></div>
            <div class="question">
                @foreach($showquestions as $index => $question)
                    <p class="question-number">Question {{ $index + 1 }}: {{ $question->question }}</p>
                    <div class="options">
                        @foreach(['a', 'b', 'c', 'd'] as $option)
                            <input type="radio" id="option{{ $index + 1 }}{{ $option }}" name="q{{ $index + 1 }}" value="{{ $option }}">
                            <label for="option{{ $index + 1 }}{{ $option }}">{{ $question->{'option_' . $option} }}</label>
                        @endforeach
                    </div>
                @endforeach
            </div>
            <button type="button" id="submitQuizBtn" class="btn btn-primary">Submit</button>
        </div>

    </form>

    <script>
       document.getElementById('submitQuizBtn').addEventListener('click', function() {
            var form = document.getElementById('quizForm');
            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        var response = JSON.parse(xhr.responseText);
                        document.getElementById('scoreDisplay').style.display = 'block';
                        document.getElementById('userScore').innerText = 'Your score: ' + response.score + ' out of ' + response.totalQuestions;
                    } else {
                        console.error('Failed to get the score');
                    }
                }
            };

            xhr.open('POST', form.action);
            xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
            xhr.send(formData);
        });
    </script>



<!-- JavaScript for timer functionality -->
<script>
    window.onload = function() {
        const urlParams = new URLSearchParams(window.location.search);
        const timerValueFromURL = urlParams.get('timerValue');
        const storedTimerValue = localStorage.getItem('timerValue');

        const timerValue = timerValueFromURL || storedTimerValue;
        const timerElement = document.getElementById('timer');

        if (timerValue) {
            let countdown = parseInt(timerValue, 10);
            let timerInterval = setInterval(function() {
                if (countdown <= 0) {
                    clearInterval(timerInterval);
                    // Redirect to the first file when the timer reaches zero
                    window.location.href = '{{env('APP_URL')}}/showques'; // Replace 'first_file_url' with the correct URL of the first file
                } else {
                    timerElement.textContent = `Timer: ${countdown} seconds`;
                    countdown--;
                    localStorage.setItem('timerValue', countdown); // Update timer value in Local Storage
                }
            }, 1000);
        } else {
            timerElement.textContent = 'Timer: Not started';
        }
    };
</script>
</div>
@endsection
