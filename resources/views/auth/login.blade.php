<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta and links remain the same -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connexion</title>
    <!-- Other necessary links -->
    <link rel="stylesheet" href="https://preline.co/assets/css/main.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-50 dark:bg-neutral-900">

    <!-- Page Content -->
    <main class="flex items-center justify-center w-full max-w-2xl min-h-screen">
        <!-- Augmenter la largeur maximale -->
        <div class="w-full bg-white border border-gray-200 shadow-sm mt-7 rounded-xl dark:bg-neutral-900 dark:border-neutral-700">
            <!-- Largeur complète -->
            <div class="p-6">
                <!-- Ajustement du padding -->
                <div class="text-center">
                    <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Connexion</h1>
                    <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                        Vous n'avez pas de compte ?
                        <a class="font-medium text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline dark:text-blue-500" href="{{ route('register') }}">
                            Créer un compte
                        </a>
                    </p>
                </div>

                <div class="mt-5">
                    <div class="flex items-center py-3 text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">Ou</div>

                    <!-- Form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="grid gap-y-4">
                            <!-- Email Address -->
                            <div>
                                <label for="email" class="block mb-2 text-sm dark:text-white">Email</label>
                                <div class="relative">
                                    <input type="email" id="email" name="email" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ old('email') }}" required aria-describedby="email-error">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Password -->
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="password" class="block mb-2 text-sm dark:text-white">Mot de passe</label>
                                    <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-none focus:underline dark:text-blue-500" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                                </div>
                                <div class="relative">
                                    <input type="password" id="password" name="password" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required aria-describedby="password-error">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                            </div>

                            <!-- Remember Me -->
                            <div class="flex items-center">
                                <div class="flex">
                                    <input id="remember-me" name="remember" type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                </div>
                                <div class="ms-3">
                                    <label for="remember-me" class="text-sm dark:text-white">Se souvenir de moi</label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                Se connecter
                            </button>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>

    </main>


</body>
</html>
