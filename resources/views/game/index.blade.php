<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climate Quiz Game</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-cover bg-no-repeat bg-center font-sans text-white" style="background-image: url('/img/5.jpeg');">
    <div class="flex justify-center items-center min-h-screen p-5">
        <div class="bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 p-10 rounded-lg opacity-90 max-w-2xl w-full shadow-md">
            <h1 class="text-4xl font-bold mb-6 text-yellow-100">Climate Quiz Game</h1>

            <p class="text-yellow-100">Questions Left: {{ $unansweredQuestionCount }} out of {{ $questionCount }}</p>

            @if (session('notification'))
                <div class="mb-6 p-3 font-semibold rounded-md {{ session('isCorrect') ? 'text-green-500 bg-green-100' : 'text-red-500 bg-red-100' }}">
                    {{ session('notification') }}
                </div>
            @endif

            <p class="mb-8 text-xl font-medium">{{ $question->question }}</p>

            <div class="space-y-4">
                <button type="button" onclick="selectOption(1)" class="block mb-4 w-full p-3 text-lg rounded-md bg-yellow-50 text-gray-800 text-left transition duration-300 ease-in-out transform hover:scale-105 {{ session('selectedOption') == 1 ? 'bg-orange-500 text-white' : '' }}">
                    {{ $question->option1 }}
                </button>
                <button type="button" onclick="selectOption(2)" class="block mb-4 w-full p-3 text-lg rounded-md bg-yellow-50 text-gray-800 text-left transition duration-300 ease-in-out transform hover:scale-105 {{ session('selectedOption') == 2 ? 'bg-orange-500 text-white' : '' }}">
                    {{ $question->option2 }}
                </button>
                <button type="button" onclick="selectOption(3)" class="block mb-4 w-full p-3 text-lg rounded-md bg-yellow-50 text-gray-800 text-left transition duration-300 ease-in-out transform hover:scale-105 {{ session('selectedOption') == 3 ? 'bg-orange-500 text-white' : '' }}">
                    {{ $question->option3 }}
                </button>
                <button type="button" onclick="selectOption(4)" class="block mb-4 w-full p-3 text-lg rounded-md bg-yellow-50 text-gray-800 text-left transition duration-300 ease-in-out transform hover:scale-105 {{ session('selectedOption') == 4 ? 'bg-orange-500 text-white' : '' }}">
                    {{ $question->option4 }}
                </button>
            </div>

            <form id="quiz-form" action="{{ route('game.checkAnswer') }}" method="post" style="display: none;">
                @csrf
                <input type="hidden" name="question_id" value="{{ $question->id }}">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="selected_option" id="selected-option">
            </form>

            <button id="stop" onclick="stopGame()" class="mt-8 bg-red-500 text-white py-3 px-6 rounded-md font-semibold transition duration-300 ease-in-out transform hover:scale-105">Stop Game</button>
        </div>
    </div>

    <div id="correct-answer-popup" class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-gray-800 text-white p-4 rounded-md shadow-md hidden">
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
