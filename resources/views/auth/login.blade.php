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
        <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
            <div class="p-4 sm:p-7">
              <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Connexion</h1>
                <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                  Vous avez pas de compte ?
                  <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="{{ route('register') }}">
                   creer un coompte
                  </a>
                </p>
              </div>
          
              <div class="mt-5">
                
          
                <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">Or</div>
          
                <!-- Form -->
                <form method="POST" action="{{ route('login') }}">
                  @csrf
          
                  <div class="grid gap-y-4">
                    <!-- Email Address -->
                    <div>
                      <label for="email" class="block text-sm mb-2 dark:text-white">Email address</label>
                      <div class="relative">
                        <input type="email" id="email" name="email" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value="{{ old('email') }}" required aria-describedby="email-error">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                      </div>
                    </div>
          
                    <!-- Password -->
                    <div>
                      <div class="flex justify-between items-center">
                        <label for="password" class="block text-sm mb-2 dark:text-white">Password</label>
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="{{ route('password.request') }}">Forgot password?</a>
                      </div>
                      <div class="relative">
                        <input type="password" id="password" name="password" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required aria-describedby="password-error">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                      </div>
                    </div>
          
                    <!-- Remember Me -->
                    <div class="flex items-center">
                      <div class="flex">
                        <input id="remember-me" name="remember" type="checkbox" class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                      </div>
                      <div class="ms-3">
                        <label for="remember-me" class="text-sm dark:text-white">Remember me</label>
                      </div>
                    </div>
          
                    <!-- Submit Button -->
                    <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                      Sign in
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
