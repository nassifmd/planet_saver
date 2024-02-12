<!DOCTYPE html>
<html lang="en">

<head>
    <title>Climate Quiz Game - Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background-image: url('/img/1.jpeg'); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body class="bg-cover bg-green-500 text-green-500 text-base overflow-auto">
    <div class="flex justify-center items-center min-h-screen opacity-80 overflow-auto">
        <div class="bg-white p-20 rounded-lg max-w-2xl mx-auto">
            <div class="logo center" style="display: block; margin-left: auto;margin-right: auto;width: 30%;">
                <img src="/img/planetsaver.png" alt="">
            </div>
            @if ($user)
            <h3>Welcome, {{ $user->name }}</h3>
            @else
            <h3>Welcome, Guest</h3>
            @endif

            <h1 class="text-green-900 text-3xl text-center">Climate Game Dashboard</h1>

            <button id="instructions-btn" class="bg-green-500 text-white px-4 py-2 rounded-md mt-4">Game Instructions</button>

            <!-- Game instructions pop-up -->
            <div id="instructions-popup" class="popup">
                <div class="popup-content">
                    <h2>Game Instructions</h2>
                    <p>Here are the instructions for the game:</p>
                    <ul>
                        <li>Read each question carefully.</li>
                        <li>Select the appropriate option for each question.</li>
                        <li>You will receive 1 point for each correct answer.</li>
                        <li>You will lose 1 point for each wrong answer.</li>
                        <li>Click the "Stop Game" button to end the game and submit your score.</li>
                        <li>When you complete the game, you have the chance of playing again.</li>
                        <li>If you are the top player of the month, you can redeem a tree of your choice.</li>
                        <li>Tree will be sent to you at your selected location for planting</li>
                    </ul>
                    <button id="close-btn" class="mt-2 bg-green-500 text-white px-4 py-2 rounded-md">Close</button>
                </div>
            </div>

            <h2 class="text-2xl">Your Progress:</h2>
            @if ($user)
            <p class="text-green-800">Correct Answers: {{ $user->correct_answers }}</p>
            <p class="text-green-800">Wrong Answers: {{ $user->wrong_answers }}</p>
            @else
            <p class="text-green-800">Correct Answers: 0</p>
            <p class="text-green-800">Wrong Answers: 0</p>
            @endif

            <h2 class="text-2xl mt-5">Top Users</h2>
            <ul>
                @foreach ($topUsers as $index => $topUser)
                <li>{{ $index+1 }}. {{ $topUser->name }} - {{ $topUser->score }} points</li>
                @endforeach
            </ul>

            <p class="text-green-800 mt-5">Redeemed Trees: {{ $redeemedTreesCount }}</p>

            @if (isset($user) && $user->id === $topPlayerId)
            <a href="{{ route('redeem.tree') }}" class="text-white bg-green-500 px-4 py-2 rounded-md">Redeem a Tree</a>
            @endif

            <div class="text-center mt-4">
                <p>Your Position: {{ $rank !== false ? $rank + 1 : 'N/A' }}</p>
            </div>

            <h2 class="text-2xl">Leaderboard:</h2>

            <table class="text-green-500 border-collapse border">
                <tr>
                    <th class="border">Position</th>
                    <th class="border">Rank</th>
                    <th class="border">Name</th>
                    <th class="border">Correct Answers</th>
                    <th class="border">Wrong Answers</th>
                </tr>
                @foreach ($users as $index => $user)
                <tr>
                    <td class="border">{{ $index+1 }}</td>
                    <td class="border">
                        @if ($index < 3)
                        <span class="rank">
                            @if ($index == 0)
                            Gold
                            @elseif ($index == 1)
                            Silver
                            @else
                            Bronze
                            @endif
                        </span>
                        @endif
                    </td>
                    <td class="border">{{ $user->name }}</td>
                    <td class="border">{{ $user->correct_answers }}</td>
                    <td class="border">{{ $user->wrong_answers }}</td>
                </tr>
                @endforeach
            </table>

            <div class="mt-8">
                <a href="{{ route('game.index') }}" class="text-white bg-green-500 px-4 py-2 rounded-md mt-10">Play Again</a>
                <button id="invite-btn" class="text-white bg-green-500 px-4 py-2 rounded-md mt-5">Invite Friends</button>
            </div>
        </div>
    </div>

    <script>
        function showGameInstructions() {
            var instructionsPopup = document.getElementById('instructions-popup');
            instructionsPopup.style.display = 'block';
        }

        function hideGameInstructions() {
            var instructionsPopup = document.getElementById('instructions-popup');
            instructionsPopup.style.display = 'none';
        }

        var instructionsBtn = document.getElementById('instructions-btn');
        instructionsBtn.addEventListener('click', showGameInstructions);

        var closeBtn = document.getElementById('close-btn');
        closeBtn.addEventListener('click', hideGameInstructions);

        function inviteFriends() {
            if (navigator.share) {
                navigator.share({
                        title: 'Join me for the Climate Quiz Game!',
                        text: 'Hey, let\'s play the Climate Quiz Game together! It\'s a fun and educational game about climate change. Join me by visiting the following link:',
                        url: '[https://agricconnect.org/register]'
                    })
                    .then(() => console.log('Share successful'))
                    .catch((error) => console.log('Error sharing:', error));
            }
            window.open('mailto:?subject=Join me for the Climate Quiz Game!&body=Hey, let\'s play the Climate Quiz Game together! It\'s a fun and educational game about climate change. Join me by visiting the following link: [https://agricconnect.org/register]');
        }

        var inviteBtn = document.getElementById('invite-btn');
        inviteBtn.addEventListener('click', inviteFriends);

        function inviteFriends() {

            var gameUrl = '[https://agricconnect.org/register]';

            var whatsappShareLink = 'https://api.whatsapp.com/send?text=Join me for the Climate Quiz Game! ' + encodeURIComponent(gameUrl);
            var facebookShareLink = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(gameUrl);
            var linkedinShareLink = 'https://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(gameUrl);
            var emailShareLink = 'mailto:?subject=Join me for the Climate Quiz Game!&body=Hey,%0D%0ALet\'s play the Climate Quiz Game together! It\'s a fun and educational game about climate change. Join me by visiting the following link:%0D%0A%0D%0A' + encodeURIComponent(gameUrl);

            window.open(whatsappShareLink, '_blank');
            window.open(facebookShareLink, '_blank');
            window.open(linkedinShareLink, '_blank');
            window.open(emailShareLink, '_blank');
        }
    </script>
</body>

</html>
