<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta and links remain the same -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inscription</title>
    <!-- Other necessary links -->
    <link rel="stylesheet" href="https://preline.co/assets/css/main.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-50 dark:bg-neutral-900">

    <!-- Page Content -->
    <main class="flex items-center justify-center w-full max-w-2xl min-h-screen">
        <div class="w-full">
            <div class="p-5 space-y-4 sm:p-6 sm:space-y-6">
                <div class="bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700">
                    <div class="p-14 sm:p-7">
                        <div class="text-center">
                            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Créer un compte</h1>
                            <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                                Déjà un compte ?
                                <a class="font-medium text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline dark:text-blue-500" href="{{ route('login') }}">
                                    Connexion
                                </a>
                            </p>
                        </div>
                        <div class="mt-5">
                            <div class="flex items-center py-3 text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-800 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">Ou</div>
                            <!-- Form -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="grid gap-y-4">
                                    <!-- Name -->
                                    <div>
                                        <label for="name" class="block mb-2 text-sm dark:text-white">Nom</label>
                                        <input type="text" id="name" name="name" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                    </div>
                                    <!-- End Name -->

                                    <!-- Email Address -->
                                    <div>
                                        <label for="email" class="block mb-2 text-sm dark:text-white">Adresse email</label>
                                        <input type="email" id="email" name="email" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                    </div>
                                    <!-- End Email Address -->

                                    <!-- Password -->
                                    <div>
                                        <label for="password" class="block mb-2 text-sm dark:text-white">Mot de passe</label>
                                        <input type="password" id="password" name="password" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                    </div>
                                    <!-- End Password -->

                                    <!-- Confirm Password -->
                                    <div>
                                        <label for="password_confirmation" class="block mb-2 text-sm dark:text-white">Confirmer le mot de passe</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                    </div>
                                    <!-- End Confirm Password -->

                                    <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">S'inscrire</button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
