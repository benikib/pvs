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
</head>

<body class="bg-neutral-900">
  <!-- ========== HEADER ========== -->
  <header class="sticky top-4 inset-x-0 flex flex-wrap md:justify-between md:flex-nowrap z-50 w-full bg-gray-800 shadow-lg">
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
          <button type="button" class="hs-collapse-toggle flex justify-center items-center text-sm font-semibold rounded-full bg-gray-700 text-white disabled:opacity-50 disabled:pointer-events-none" data-hs-collapse="#navbar-collapse" aria-controls="navbar-collapse" aria-label="Toggle navigation">
            <svg class="hs-collapse-open:hidden flex-shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" x2="21" y1="6" y2="6" />
              <line x1="3" x2="21" y1="12" y2="12" />
              <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg class="hs-collapse-open:block hidden flex-shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
          </button>
        </div>
      </div>

      @if (Route::has('login'))
        <nav class="-mx-3 flex flex-1 justify-end space-x-4">
          @auth
            <a href="{{ url('/dashboard') }}" class="inline-flex items-center gap-x-2 py-2 px-4 bg-yellow-400 text-gray-900 font-medium text-sm rounded-lg hover:bg-yellow-300 focus:outline-none">
              Tableau de bord
            </a>
          @else
            <a href="{{ route('login') }}" class="inline-flex items-center gap-x-2 py-2 px-4 text-gray-200 bg-gray-700 hover:bg-gray-600 rounded-lg transition focus:outline-none">
              Connexion
            </a>

            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="inline-flex items-center gap-x-2 py-2 px-4 text-gray-200 bg-gray-700 hover:bg-gray-600 rounded-lg transition focus:outline-none">
                Inscription
              </a>
            @endif
          @endauth
        </nav>
      @endif


    </nav>
  </header>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content">
    <!-- Hero -->
    <div class="bg-neutral-900">
        <div class="max-w-5xl mx-auto px-4 xl:px-0 pt-24 lg:pt-32 pb-24">
          <h1 class="font-semibold text-white text-5xl md:text-6xl">
            <span class="text-[#ff0]">Gestion Proces verbaux pour la surveillance des Examens:</span> Assurer une surveillance rigoureuse
          </h1>
          <div class="max-w-4xl">
            <p class="mt-5 text-neutral-400 text-lg">
              Bienvenue sur notre plateforme dédiée à la gestion des procès-verbaux pour la surveillance des examens. Nous offrons des solutions complètes pour documenter et analyser chaque étape du processus de surveillance, assurant ainsi la transparence et l'intégrité des examens. Que ce soit pour consigner les incidents, suivre les performances des surveillants ou générer des rapports détaillés, notre outil est conçu pour répondre à tous vos besoins en matière de gestion et de vérification des examens.
            </p>
          </div>
        </div>
      </div>
      <!-- End Hero -->

      <!-- Clients -->
      <div class="relative overflow-hidden pt-4 bg-neutral-900">
        <svg class="absolute -bottom-20 start-1/2 w-[1900px] transform -translate-x-1/2" width="2745" height="488" viewBox="0 0 2745 488" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0.5 330.864C232.505 403.801 853.749 527.683 1482.69 439.719C2111.63 351.756 2585.54 434.588 2743.87 487" class="stroke-neutral-700/50" stroke="currentColor" />
          <path d="M0.5 308.873C232.505 381.81 853.749 505.692 1482.69 417.728C2111.63 329.765 2585.54 412.597 2743.87 465.009" class="stroke-neutral-700/50" stroke="currentColor" />
          <path d="M0.5 286.882C232.505 359.819 853.749 483.701 1482.69 395.738C2111.63 307.774 2585.54 390.606 2743.87 443.018" class="stroke-neutral-700/50" stroke="currentColor" />
          <path d="M0.5 264.891C232.505 337.828 853.749 461.71 1482.69 373.747C2111.63 285.783 2585.54 368.615 2743.87 421.027" class="stroke-neutral-700/50" stroke="currentColor" />
          <path d="M0.5 242.9C232.505 315.837 853.749 439.719 1482.69 351.756C2111.63 263.792 2585.54 346.624 2743.87 399.036" class="stroke-neutral-700/50" stroke="currentColor" />
          <path d="M0.5 220.909C232.505 293.846 853.749 417.728 1482.69 329.765C2111.63 241.801 2585.54 324.633 2743.87 377.045" class="stroke-neutral-700/50" stroke="currentColor" />
          <path d="M0.5 198.918C232.505 271.855 853.749 395.737 1482.69 307.774C2111.63 219.81 2585.54 302.642 2743.87 355.054" class="stroke-neutral-700/50" stroke="currentColor" />
          <path d="M0.5 176.927C232.505 249.864 853.749 373.746 1482.69 285.783C2111.63 197.819 2585.54 280.651 2743.87 333.063" class="stroke-neutral-700/50" stroke="currentColor" />
          <path d="M0.5 154.937C232.505 227.873 853.749 351.756 1482.69 263.792C2111.63 175.828 2585.54 258.661 2743.87 311.072" class="stroke-neutral-700/50" stroke="currentColor" />
          <path d="M0.5 132.946C232.505 205.882 853.749 329.765 1482.69 241.801C2111.63 153.837 2585.54 236.67 2743.87 289.082" class="stroke-neutral-700/50" stroke="currentColor" />
          <path d="M0.5 110.955C232.505 183.891 853.749 307.774 1482.69 219.81C2111.63 131.846 2585.54 214.679 2743.87 267.091" class="stroke-neutral-700/50" stroke="currentColor" />
          <path d="M0.5 88.9639C232.505 161.901 853.749 285.783 1482.69 197.819C2111.63 109.855 2585.54 192.688 2743.87 245.1" class="stroke-neutral-700/50" stroke="currentColor" />
          <path d="M0.5 66.9729C232.505 139.91 853.749 263.792 1482.69 175.828C2111.63 87.8643 2585.54 170.697 2743.87 223.109" class="stroke-neutral-700/50" stroke="currentColor" />
          <path d="M0.5 44.9819C232.505 117.919 853.749 241.801 1482.69 153.837C2111.63 65.8733 2585.54 148.706 2743.87 201.118" class="stroke-neutral-700/50" stroke="currentColor" />
          <path d="M0.5 22.991C232.505 95.9276 853.749 219.81 1482.69 131.846C2111.63 43.8824 2585.54 126.715 2743.87 179.127" class="stroke-neutral-700/50" stroke="currentColor" />
          <path d="M0.5 1C232.505 73.9367 853.749 197.819 1482.69 109.855C2111.63 21.8914 2585.54 104.724 2743.87 157.136" class="stroke-neutral-700/50" stroke="currentColor" />
        </svg>


      </section>
      
<form   action = {{ route("etudiant.store") }} method="POST"  >
    @csrf

    <div class="p-4 overflow-y-auto">
        <div class="p-4 overflow-y-auto">
            <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Nom complet</label>
            <input required type="text" name="nom" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400" placeholder="Nom complet" autofocus="">
          </div>
        </div>
    <div class="p-4 overflow-y-auto">
      <div class="p-4 overflow-y-auto">
          <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Mention</label>
          <input required type="text" name="mention" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400" placeholder="Mention" autofocus="">
        </div>
        <div class="p-4 overflow-y-auto">
          <select required name="sessions" class="py-3 px-4 pe-9 block w-full bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600">
              <option selected="">Sessions </option>
              <option value='Premier session '>Premiere Session </option>
              <option value='Deuxième session '>Deuxième session </option>
              <option value='Session speciale '>Session speciale</option>
            </select>
        </div>
      <label for="promotion" class="block text-sm font-medium mb-2 dark:text-white">Promotion</label>
      <div class="relative">
          <select required id="promotion" name="promotion" class="appearance-none py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 transition-all duration-300 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 shadow-sm">
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
      <label for="semestre" class="block text-sm font-medium mb-2 dark:text-white">Semestre</label>
      <div class="relative">
          <select required id="semestre" name="semestre" class="appearance-none py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 transition-all duration-300 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 shadow-sm">
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

  <script>
      const promotionSelect = document.getElementById('promotion');
      const semestreSelect = document.getElementById('semestre');

      const optionsByPromotion = {
          'L1': ['S1', 'S2'],
          'L2': ['S3', 'S4'],
          'L3': ['S5', 'S6'],
          'M1': ['S1', 'S2'],
          'M2': ['S3', 'S4']
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
    <div class="p-4 overflow-y-auto">
        <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Année académique</label>
        <select name="an_academique" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400">
            @for ($year = now()->year; $year <= now()->year + 10; $year++)
                <option value="{{ $year }}-{{ $year + 1 }}">{{ $year }}-{{ $year + 1 }}</option>
            @endfor
        </select>
    </div>



    <div class="mt-6 grid">
      <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Valider</button>
    </div>
  </form>



  
</body>
</html>
