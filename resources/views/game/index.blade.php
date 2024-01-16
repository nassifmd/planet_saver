<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climate Quiz Game</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <style>
        body {
            background-image: url('/img/agric23.jpg');
            background-size: cover;
            color: #fff;
            font-size: 18px;
            line-height: 1.5;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .form-container {
            background-color: #e1ad01;
            padding: 20px;
            border-radius: 5px;
            opacity: 0.8;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            font-size: 24px;
            margin-top: 0;
        }

        .notification {
            color: red;
            margin-bottom: 10px;
        }

        .question {
            margin-bottom: 20px;
        }

        .answer-options button {
            display: block;
            margin-bottom: 10px;
            width: 100%;
            padding: 10px;
            font-size: 18px;
            border-radius: 5px;
            background-color: #fff;
            color: #000;
            text-align: left;
        }

        .highlight {
            background-color: #ff0000;
            color: #fff;
        }

        #stop {
            margin-top: 20px;
        }

        .correct-answer-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #000;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            display: none;
        }

        .notification {
            margin-bottom: 10px;
            font-weight: bold;
        }

        .notification.correct {
            color: green;
            text-align: center;
        }

        .notification.wrong {
            color: red;
            text-align: center;
        }

        .answer-options button {
            /* Your existing styles */
        }

        .answer-options button.selected {
            background-color: #9E6C02;
            color: #fff;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Climate Quiz Game</h1>

            <p>Questions Left: {{ $unansweredQuestionCount }} out of {{ $questionCount }}</p>

            @if (session('notification'))
                <div class="notification {{ session('isCorrect') ? 'correct' : 'wrong' }}">
                    {{ session('notification') }}
                </div>
            @endif


            <p class="question">{{ $question->question }}</p>

            <div class="answer-options">
                <button type="button" onclick="selectOption(1)" class="{{ session('selectedOption') == 1 ? 'selected' : '' }}">{{ $question->option1 }}</button>
                <button type="button" onclick="selectOption(2)" class="{{ session('selectedOption') == 2 ? 'selected' : '' }}">{{ $question->option2 }}</button>
                <button type="button" onclick="selectOption(3)" class="{{ session('selectedOption') == 3 ? 'selected' : '' }}">{{ $question->option3 }}</button>
                <button type="button" onclick="selectOption(4)" class="{{ session('selectedOption') == 4 ? 'selected' : '' }}">{{ $question->option4 }}</button>
            </div>


            <form id="quiz-form" action="{{ route('game.checkAnswer') }}" method="post" style="display: none;">
                @csrf
                <input type="hidden" name="question_id" value="{{ $question->id }}">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="selected_option" id="selected-option">
            </form>

            <button id="stop" onclick="stopGame()">Stop Game</button>
        </div>
    </div>

    <div id="correct-answer-popup" class="correct-answer-popup">
        <span id="correct-answer-text"></span>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        function selectOption(option) {
            $('.answer-options button').removeClass('selected');
            $('.answer-options button:nth-child(' + option + ')').addClass('selected');
            $('#selected-option').val(option);
            submitForm();
        }

        function submitForm() {
            var form = $('#quiz-form');
            form.submit();
        }

        function stopGame() {
            window.location.href = '{{ route('dashboard') }}';
        }

        function showCorrectAnswerPopup(correctOption) {
            var optionText = getOptionText(correctOption);
            $('#correct-answer-text').text('The correct answer is: ' + optionText);
            $('.correct-answer-popup').fadeIn();
        }

        function highlightCorrectOption(correctOption) {
            $('.answer-options button:nth-child(' + correctOption + ')').addClass('highlight');
        }

        function highlightSelectedOption(selectedOption) {
            $('.answer-options button:nth-child(' + selectedOption + ')').addClass('highlight');
        }

        function getOptionText(option) {
            switch (option) {
                case 1:
                    return "{{ $question->option1 }}";
                case 2:
                    return "{{ $question->option2 }}";
                case 3:
                    return "{{ $question->option3 }}";
                case 4:
                    return "{{ $question->option4 }}";
                default:
                    return '';
            }
        }
    </script>
</body>
</html>
