<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 20px;
        }

        #quiz-container {
            max-width: 600px;
            margin: 0 auto;
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
    <div id="quiz-container">
        <h2></h2>

        <div class="question">
        @foreach($showquestions as $index => $questio)

        <p class="question-number">Question {{ $index + 1 }}: {{ $questio->question }}</p>

            <div class="options">
                @for($i = 1; $i <= 4; $i++)
                <input type="radio" id="option{{ $index + 1 }}{{ $i }}" name="q{{ $index + 1 }}">
                <label for="option{{ $index + 1 }}{{ $i }}">{{ $questio->{'option_' . chr(96 + $i)} }}</label>
            @endfor
            </div>
            @endforeach
        </div>

        <!-- Add more questions as needed -->

        <button type="submit">Submit</button>
    </div>
</body>
</html>
