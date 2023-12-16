<!-- resources/views/game/end.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Game Ended</title>
</head>
<body>
    <h1>Game Ended</h1>

    <p>Your final score: {{ $score }}</p>

    <p>Thank you for playing!</p>

    <div>
        <form action="{{ route('dashboard') }}" method="GET">
            <button type="submit">Return to Dashboard</button>
        </form>
        
        <form action="{{ route('game.play-again') }}" method="GET">
            <button type="submit">Play Again</button>
        </form>

        <form action="{{ route('game.share-achievement') }}" method="GET">
            <button type="submit">Share Achievement</button>
        </form>
    </div>
</body>
</html>

