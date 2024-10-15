@extends("layouts.default")
@section("content")
<div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
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
    
    
        <div class="mt-6 grid">
          <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Valider</button>
        </div>
      </form>


@endsection
