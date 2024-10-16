<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="https://preline.co/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Discover the difference that a professionally crafted website can make for your business.">

    <meta name="twitter:site" content="@preline">
    <meta name="twitter:creator" content="@preline">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Agency Demo Template Tailwind CSS | Preline UI, crafted with Tailwind CSS">
    <meta name="twitter:description" content="Discover the difference that a professionally crafted website can make for your business.">
    <meta name="twitter:image" content="https://preline.co/assets/img/og-image.png">

    <meta property="og:url" content="https://preline.co/">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Preline">
    <meta property="og:title" content="Agency Demo Template Tailwind CSS | Preline UI, crafted with Tailwind CSS">
    <meta property="og:description" content="Discover the difference that a professionally crafted website can make for your business.">
    <meta property="og:image" content="https://preline.co/assets/img/og-image.png">

    <!-- Title -->
    <title>pvs</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://preline.co/favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Theme Check and Update -->
    <script>
        const html = document.querySelector('html');
        const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') === 'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
        const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);

        if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
        else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
        else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
        else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');

    </script>

    <!-- CSS Preline -->
    <link rel="stylesheet" href="https://preline.co/assets/css/main.min.css">
    <style>
        .form-container {
            display: none;
        }

    </style>
    <script>
        function toggleForm() {
            const formContainer = document.getElementById('form-container');
            formContainer.style.display = formContainer.style.display === 'none' ? 'block' : 'none';
        }

    </script>
</head>

<body class="bg-neutral-900">
   <!-- ========== HEADER ========== -->
   <header class="sticky inset-x-0 z-50 flex flex-wrap w-full bg-gray-800 shadow-lg top-4 md:justify-between md:flex-nowrap">
       <nav class="relative max-w-[66rem] w-full bg-gray-900 rounded-lg py-3 px-4 md:flex md:items-center md:justify-between md:py-0 mx-4 lg:mx-auto" aria-label="Global">
           <div class="flex items-center justify-between">
               <!-- Logo -->
               <a class="flex-none text-xl font-semibold text-white" href="/" aria-label="Gestion de procès-verbaux">
                   <svg class="w-24 h-auto" width="116" height="32" viewBox="0 0 116 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                       <!-- SVG code here -->
                   </svg>
               </a>
               <!-- End Logo -->
               <div class="md:hidden">
                   <button type="button" class="flex items-center justify-center text-sm font-semibold text-white bg-gray-700 rounded-full hs-collapse-toggle disabled:opacity-50 disabled:pointer-events-none" data-hs-collapse="#navbar-collapse" aria-controls="navbar-collapse" aria-label="Toggle navigation">
                       <svg class="flex-shrink-0 w-6 h-6 hs-collapse-open:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                           <line x1="3" x2="21" y1="6" y2="6" />
                           <line x1="3" x2="21" y1="12" y2="12" />
                           <line x1="3" x2="21" y1="18" y2="18" />
                       </svg>
                       <svg class="flex-shrink-0 hidden w-6 h-6 hs-collapse-open:block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                           <path d="M18 6 6 18" />
                           <path d="m6 6 12 12" />
                       </svg>
                   </button>
               </div>
           </div>

           @if (Route::has('login'))
           <nav class="flex justify-end flex-1 -mx-3 space-x-4">
               @auth

               <form action="{{ route('logout') }}" method="POST" class="inline">
                   @csrf
                   <button type="submit" class="inline-flex items-center px-4 py-2 text-gray-200 transition bg-gray-700 rounded-lg gap-x-2 hover:bg-gray-600 focus:outline-none">
                       Déconnexion
                   </button>
               </form>
               @else
               <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 text-gray-200 transition bg-gray-700 rounded-lg gap-x-2 hover:bg-gray-600 focus:outline-none">
                   Connexion
               </a>
               @endif
           </nav>
           @endif
       </nav>
   </header>
   <!-- ========== END HEADER ========== -->



    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">
        <!-- Hero -->
        <div class="bg-neutral-900">
            <div class="max-w-5xl px-4 pt-24 pb-24 mx-auto xl:px-0 lg:pt-32">
               <img src="/img/images (1).png" alt="Description de l'image" class="w-24 h-auto mx-auto mb-4 md:w-32" />
                <h1 class="text-5xl font-semibold text-white md:text-6xl">
                    <span class="text-[#ff0]">Gestpub:</span> Simplifiez la gestion de vos résultats académiques
                </h1>
                <div class="max-w-4xl">
                    <p class="mt-5 text-lg text-neutral-400">
                        Notre application vous permet de gérer efficacement la publication des résultats académiques. Que vous soyez un établissement d'enseignement, un professeur, ou un étudiant, nous proposons des outils adaptés à vos besoins.
                    </p>
                    <br>
                        <h1 class="text-[#ff0] text-2xl ">Critères</h1>

                    <p class="mt-5 text-lg text-neutral-400">

                        1. Etre en ordre avec les frais académiques (avoir tout soldé)
                        <br>
                        2. S'être enrôlé(e) pour la passation de la  session
                    </p>
                </div>
            </div>
        </div>
        <!-- End Hero -->

        <!-- Button to Show Form -->
        <section class="max-w-5xl px-4 mx-auto mt-10 text-center">
             @if (session('error'))
             <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-700" role="alert">
                 <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                     <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                 </svg>
                 <span class="sr-only">Info</span>
                 <div class="text-sm font-medium ms-3">
                     {{ session('error') }}
                 </div>
                 <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-700 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                     <span class="sr-only">Close</span>
                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                     </svg>
                 </button>
             </div>
             @endif

             @if (session('success'))
             <div id="alert-3" class="flex items-center p-4 mb-4 text-green-900 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-700" role="alert">
                 <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                     <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                 </svg>
                 <span class="sr-only">Info</span>
                 <div class="text-sm font-medium ms-3">
                     {{ session('success') }}
                 </div>



                 <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                     <span class="sr-only">Close</span>
                     <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                     </svg>
                 </button>
             </div>
             @endif

            <button onclick="toggleForm()" class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-500">Afficher le formulaire</button>
        </section>

        <!-- Form Section -->
        <section id="form-container" class="max-w-5xl px-4 mx-auto mt-10 form-container">
            <h2 class="text-2xl font-semibold text-white">Veuillez saisir vos informations</h2>
            <form action={{ route("etudiant.store") }} method="POST" class="p-6 mt-5 bg-gray-800 rounded-lg">
                @csrf

                <div class="mb-4">
                    <label for="session" class="block text-gray-200">Sessions</label>

                    <select id="session"  name="session" class="w-full p-2 mt-1 text-white bg-gray-700 rounded">
                        <option value="" selected="">Sélectionnez session</option>
                        <option value="Premiere session">Premiere session</option>
                        <option value="Deuxieme session">Deuxieme session</option>
                        <option value="Speciale session">Speciale session</option>


                    </select>
                </div>

                <div class="mb-4">
                    <label for="an_acaddemique" class="block text-gray-200">Année académique</label>

                    <select id="an_acaddemique" name="an_acaddemique" class="w-full p-2 mt-1 text-white bg-gray-700 rounded">
                        <option value="" selected="">Sélectionnez Année</option>
                        @for ($year = now()->year - 1; $year <= now()->year + 3; $year++)
                            <option value="{{ $year }}-{{ $year + 1 }}">{{ $year }}-{{ $year + 1 }}</option>
                            @endfor
                            </select>


                     <label for="mention" class="block mb-2 text-sm font-medium text-gray-200">Mention</label>

                     <input required type="text" name="mention" id="mention" class="w-full p-2 mt-1 text-white bg-gray-700 rounded">

                     <label for="nom" class="block mb-2 text-sm font-medium text-gray-200">Nom</label>

                    <input required type="text" name="nom" id="nom" class="w-full p-2 mt-1 text-white bg-gray-700 rounded">



                </div>
                 <label for="promotion" class="block mb-2 text-sm font-medium text-gray-200">Promotion</label>

                 <div class="relative">
                     <select required id="promotion" name="promotion" class="w-full p-2 mt-1 text-white bg-gray-700 rounded">

                         <option value="" selected="">Sélectionnez Promotion</option>
                         <option value="L1">L1</option>
                         <option value="L2">L2</option>
                         <option value="L3">L3</option>
                         <option value="M1">M1</option>
                         <option value="M2">M2</option>
                     </select>
                     <!-- Icone pour le champ -->
                     <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                         <svg class="w-5 h-5 text-gray-400 dark:text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                         </svg>
                     </div>
                 </div>
                 </div>


                 <div class="p-4 overflow-y-auto">
                     <label for="semestre" class="block mb-2 text-sm font-medium text-gray-200">Semestre</label>

                     <div class="relative">
                         <select required id="semestre" name="semestre" class="w-full p-2 mt-1 text-white bg-gray-700 rounded">

                             <option value="" selected="">Sélectionnez Semestre</option>
                         </select>
                         <!-- Icone pour le champ -->
                         <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                             <svg class="w-5 h-5 text-gray-400 dark:text-neutral-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                             </svg>
                         </div>
                     </div>
                 </div>

               <div class="grid mt-6">
                   <button type="submit" class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Valider</button>
               </div>

            </form>
        </section>
        <!-- End Form Section -->
    </main>
</body>
  <script>
      const promotionSelect = document.getElementById('promotion');
      const semestreSelect = document.getElementById('semestre');

      const optionsByPromotion = {
          'L1': ['S1', 'S2']
          , 'L2': ['S3', 'S4']
          , 'L3': ['S5', 'S6']
          , 'M1': ['S1', 'S2']
          , 'M2': ['S3', 'S4']
      };

      promotionSelect.addEventListener('change', function() {
          const selectedPromotion = this.value;
          semestreSelect.innerHTML = '<option value="">Sélectionnez Semestre</option>'; // Réinitialise les options du semestre

          if (selectedPromotion && optionsByPromotion[selectedPromotion]) {
              optionsByPromotion[selectedPromotion].forEach(function(semestre) {
                  const option = document.createElement('option');
                  option.value = semestre;
                  option.textContent = semestre;
                  semestreSelect.appendChild(option);
              });
          }
      });
   </script>


</html>
