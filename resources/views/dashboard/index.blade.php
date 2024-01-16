<!DOCTYPE html>
<html>
<head>
    <title>Climate Quiz Game - Dashboard</title>
    <style>
        body {
            background: url(/img/agric24.jpg);
            background-size: cover;
            color: green;
            font-size: 20px;
            overflow-y: auto; 
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            opacity: 0.8;
            overflow: auto; 
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            max-width: 600px; 
            margin: 0 auto; 
        }

        table {
            color: green;
            padding-bottom: 50px;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid green;
            padding: 8px;
        }

        .btn {
            background-color: green;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20%;
        }

        h1 {
            color: #3A5F0B;
            font-size: 30px;
        }

        h2 {
            color: #666699;
            font-size: 25px;
        }

        p{
            color: #800000;
            font-size: 20px;
        }

        td {
            color: #800000;
        }

        img {
            max-width: 20%;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        #dashboard {
            text-align: center;
        }

        /* CSS styles for the game instructions pop-up */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .popup-content h2 {
            margin-top: 0;
        }

        .popup-content ul {
            list-style: disc;
            padding-left: 20px;
        }

        .popup-content button {
            margin-top: 10px;
        }
        .play-again-button {

            margin-top: 50px;
        }
        .user-position {
            position: static;
            top: 20px;
            right: 20px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .user-position {
                position: static;
                margin-top: 20px;
                text-align: center;
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="logo">
                <img src="/img/logo.png" alt="">
            </div>
            @if ($user)
                <h3>Welcome, {{ $user->name }}</h3>
            @else
                <h3>Welcome, Guest</h3>
            @endif

            <h1 id='dashboard'>Climate Game Dashboard</h1>

        <button id="instructions-btn">Game Instructions</button>

            <!-- Game instructions pop-up -->
            <div id="instructions-popup" class="popup">
                <div class="popup-content">
                    <h2>Game Instructions</h2>
                    <p>Here are the instructions for the game:</p>
                    <ul>
                        <li>Read each question carefully.</li>
                        <li>Select the appropriate option for each question.</li>
                        <li>You will receive 1 points for each correct answer.</li>
                        <li>You will lose 1 points for each wrong answer.</li>
                        <li>Click the "Stop Game" button to end the game and submit your score.</li>
                        <li>When you complete the game you have the chance of playing again.</li>
                        <li>If you are the top player of the month you can redeem a tree of your choice.</li>
                        <li>Tree will be sent to you at your selected location for planting</li>
                    </ul>
                    <button id="close-btn">Close</button>
                </div>
            </div>

            <h2>Your Progress:</h2>
            @if ($user)
                <p>Correct Answers: {{ $user->correct_answers }}</p>
                <p>Wrong Answers: {{ $user->wrong_answers }}</p>
            @else
                <p>Correct Answers: 0</p>
                <p>Wrong Answers: 0</p>
            @endif

            <h2>Top Users</h2>
            <ul>
                @foreach ($topUsers as $index => $topUser)
                    <li>{{ $index+1 }}. {{ $topUser->name }} - {{ $topUser->score }} points</li>
                @endforeach
            </ul>

            <p>Redeemed Trees: {{ $redeemedTreesCount }}</p>
 
            @if (isset($user) && $user->id === $topPlayerId)
                <a href="{{ route('redeem.tree') }}">Redeem a Tree</a>
            @endif

            <div class="user-position">
                <p>Your Position: {{ $rank !== false ? $rank + 1 : 'N/A' }}</p>
            </div>

            <a href="#" id="invite-btn" class="btn">Invite Friends</a>

            <h2>Leaderboard:</h2>

            <table>
                <tr>
                    <th>Position</th>
                    <th>Rank</th>
                    <th>Name</th>
                    <th>Correct Answers</th>
                    <th>Wrong Answers</th>
                </tr>
                @foreach ($users as $index => $user)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>
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
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->correct_answers }}</td>
                        <td>{{ $user->wrong_answers }}</td>
                    </tr>
                @endforeach
            </table>

            <div style="margin-top: 50px;">
                <a href="{{ route('game.index') }}" class="play-again-button btn">Play Again</a>
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
