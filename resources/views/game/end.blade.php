<!-- resources/views/game/end.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Ended</title>
    <!-- Include Tailwind CSS styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-cover bg-center bg-fixed" style="background-image: url('/img/2.png')">
    <div class="container mx-auto p-8 text-center text-white">
        <h1 class="text-4xl font-bold mb-4">Game Ended</h1>

        <p class="text-xl mb-4">Your final score: {{ $score }}</p>

        <p class="text-lg mb-8">Thank you for playing!</p>

        <div class="space-x-4">
            <form action="{{ route('dashboard') }}" method="GET">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Return to Dashboard</button>
            </form>

            <form action="{{ route('game.play-again') }}" method="GET">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-5" type="submit">Play Again</button>
            </form>

            <form action="{{ route('game.share-achievement') }}" method="GET">
                <button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded mt-5" type="submit">Share Achievement</button>
            </form>
        </div>
    </div>
</body>
</html>
