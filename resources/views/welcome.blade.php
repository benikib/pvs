<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pvs</title>
    <link rel="stylesheet" href="https://preline.co/assets/css/main.min.css">
    <style>
        body {
            background-image: url('https://www.orangedigitalcenters.com:12345/api/v1/odcGlobal/ComingSoon%E2%80%9311652362999309.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            /* Pour le positionnement de l'image floue */
        }

        /* Flou de l'image de fond */
        .bg-blur {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            filter: blur(15px);
            /* Augmenter le flou */
            z-index: 0;
            /* Placer derrière le contenu */
        }

        .content {
            position: relative;
            z-index: 10;
            /* Placer au-dessus de l'image */
            max-width: 400px;
            /* Limiter la largeur du conteneur */
            padding: 20px;
            /* Espace intérieur pour le texte */
        }

    </style>
</head>

<body class="flex items-center justify-center min-h-screen bg-neutral-900">

    <div class="bg-blur"></div> <!-- Image de fond floue -->

    <!-- Centered Content -->
    <div class="text-center bg-black rounded-lg shadow-lg content bg-opacity-70">
        <p class="mt-5 text-lg text-neutral-200">
            Gestpub <br>
            Simplifiée de Vos Résultats. Publiez et Suivez Vos Résultats en Toute Simplicité. Commencez dès aujourd'hui. Créez votre compte gratuitement.
        </p>

        <div class="mt-4">
            <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-6 py-3 text-sm font-medium text-white bg-red-600 border border-transparent rounded-lg gap-x-2 hover:bg-red-700 focus:outline-none focus:bg-red-700">
                Connexion
            </a>
            <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-6 py-3 mt-4 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg gap-x-2 hover:bg-green-700 focus:outline-none focus:bg-green-700">
                Inscription
            </a>
        </div>
    </div>
</body>
</html>
