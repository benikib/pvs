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
<body class="bg-gray-50 dark:bg-neutral-900 flex items-center justify-center min-h-screen">

    <!-- Page Content -->
    <main class=" justify-center items-center min-h-screen">
        <div class="w-full max-w-2xl">
            <div class="p-5 sm:p-6 space-y-4 sm:space-y-6">
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
                    <div class="p-14 sm:p-7">
                        <div class="text-center">
                            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Creer un compte</h1>
                            <p class="mt-2 text-sm text-gray-600 dark:text-neutral-900">
                                Deja un compte ?
                                <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="{{ route('login') }}">
                                    connexion
                                </a>
                            </p>
                        </div>
                        <div class="mt-5">
                            <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-800 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">Or</div>
                            <!-- Form -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="grid gap-y-4">
                                    <!-- Name -->
                                    <div>
                                      <label for="name" class="block text-sm mb-2 dark:text-white">Name</label>
                                      <input type="text" id="name" name="name" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                    </div>
                                    <!-- End Name -->
                          
                                    <!-- Email Address -->
                                    <div>
                                      <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
                                      <input type="email" id="email" name="email" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                    </div>
                                    <!-- End Email Address -->
                          
                                    <!-- Grade -->
                                    <div>
                                      <label for="grade" class="block text-sm mb-2 dark:text-white">Grade</label>
                                      <input type="text" id="grade" name="grade" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                    </div>
                                    <!-- End Grade -->
                          
                                    <!-- Filière -->
                                    <div>
                                      <label for="filiere" class="block text-sm mb-2 dark:text-white">Filière</label>
                                      <input type="text" id="filiere" name="filiere" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                    </div>
                                    <!-- End Filière -->
                          
                                    <!-- Password -->
                                    <div>
                                      <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                                      <input type="password" id="password" name="password" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                    </div>
                                    <!-- End Password -->
                          
                                    <!-- Confirm Password -->
                                    <div>
                                      <label for="password_confirmation" class="block text-sm mb-2 dark:text-white">Confirm Password</label>
                                      <input type="password" id="password_confirmation" name="password_confirmation" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                    </div>
                                    <!-- End Confirm Password -->
                          
                                    <!-- Checkbox -->
                                    <div class="flex items-center">
                                      <input id="remember-me" name="remember-me" type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                      <label for="remember-me" class="text-sm dark:text-white ms-3">I accept the <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">Terms and Conditions</a></label>
                                    </div>
                                    <!-- End Checkbox -->
                          
                                    <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Sign up</button>
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
