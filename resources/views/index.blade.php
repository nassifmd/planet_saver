<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>PlanetSavers: Rise of the Green Guardians</title>
</head>
<body class="font-sans bg-gray-100 relative overflow-hidden bg-cover bg-no-repeat bg-center" style="background-image: url('/img/2.png');">

    <style>
        /* Keyframes for animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    
        @keyframes slideIn {
            from {
                transform: translateX(-20px);
            }
            to {
                transform: translateX(0);
            }
        }
    
        /* Apply animations to specific elements */
        .text-animations p {
            animation: fadeIn 0.5s ease-out;
        }
    
        .text-animations li {
            animation: slideIn 0.5s ease-out;
        }

    </style>

    <div class="h-screen flex items-center justify-center text-white relative">
        <div class="flex-auto w-64 text-center lg:text-left lg:w-1/2 p-8 z-10">
            <h1 class="text-4xl font-bold mb-4">PlanetSavers: Rise of the Green Guardians</h1>
            <p class="text-lg mb-8">Explore the adventure</p>
            <div class="mt-4">
                <a href="register"><button class="bg-green-500 text-white px-6 py-3 rounded-full font-bold text-sm mr-4 hover:bg-green-600">Register</button></a>
                <a href="login"><button class="bg-indigo-500 text-white px-6 py-3 rounded-full font-bold text-sm hover:bg-indigo-600">Login</button></a>
            </div>
        </div>
        
        <div class="text-justify absolute right-10 transform -translate-y-1/2 flex flex-col items-center">
            <div class="text-white fixed top-1/2 right-20 w-96 transform -translate-y-1/2 z-20 mx-7 scroll_effect text-animations">
                <p class="text-lg font-bold mb-2 text-center">About</p>
                <p class="text-sm">Welcome to PlanetSavers, where players become eco-heroes in a battle for a greener future. Armed with sustainable superpowers, you'll tackle real-world environmental challenges, earn eco-points, and rise through the ranks. Join a global community dedicated to making a positive impact and redefine heroism in the quest for a sustainable tomorrow. The journey starts now at PlanetSavers.</p>
                
                <p class="text-lg font-bold mt-4 mb-2 text-center">Game Instructions</p>
                <ol class="text-sm justify-center">
                        <li>Select the appropriate option for each question.</li>
                        <li>You will receive 1 point for each correct answer.</li>
                        <li>You will lose 1 point for each wrong answer.</li>
                        <li>Click the "Stop Game" button to end the game and submit your score.</li>
                        <li>When you complete the game, you have the chance of playing again.</li>
                        <li>If you are the top player of the month, you can redeem a tree of your choice.</li>
                        <li>Tree will be sent to you at your selected location for planting</li>
                </ol>
            </div>
        </div>
    </div>

</body>
</html>
