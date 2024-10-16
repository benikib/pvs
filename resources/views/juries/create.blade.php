@extends('layouts.modal')
@section('title')
<h3 id="hs-focus-management-modal-label" class="font-bold text-gray-800 dark:text-white">
  Ajoute un administrateur
  </h3>
@endsection
@section('form')
<form   action = {{ route("jyries.store") }} method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="p-4 overflow-y-auto">
        <div class="p-4 overflow-y-auto">
            <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Faculté</label>
            <input required type="text" name="mention" id="input-label" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400" placeholder="Mention" autofocus="">
          </div>
          <div class="p-4 overflow-y-auto">
            <select required name="sessions" class="block w-full px-4 py-3 text-sm bg-gray-100 border-transparent rounded-lg pe-9 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:focus:ring-neutral-600">
                <option selected="">Sessions </option>
                <option value='Premiere session '>Premiere Session </option>
                <option value='Deuxième session '>Deuxième session </option>
                <option value='Session speciale '>Session speciale</option>
              </select>
          </div>
        <label for="promotion" class="block mb-2 text-sm font-medium dark:text-white">Promotion</label>
        <div class="relative">
            <select required id="promotion" name="promotion" class="block w-full px-4 py-3 text-sm transition-all duration-300 border border-gray-300 rounded-lg shadow-sm appearance-none focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
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
        <label for="semestre" class="block mb-2 text-sm font-medium dark:text-white">Semestre</label>
        <div class="relative">
            <select required id="semestre" name="semestre" class="block w-full px-4 py-3 text-sm transition-all duration-300 border border-gray-300 rounded-lg shadow-sm appearance-none focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
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
            <label for="input-label" class="block mb-2 text-sm font-medium dark:text-white">Année académique</label>
            <select name="an_academique" id="input-label" class="block w-full px-4 py-3 text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400">

               @for ($year = now()->year - 1; $year <= now()->year + 3; $year++)

                    <option value="{{ $year }}-{{ $year + 1 }}">{{ $year }}-{{ $year + 1 }}</option>
                @endfor
            </select>
        </div>
<div class="p-4 overflow-y-auto">

    <label for="file-input" class="sr-only">importe un fichier</label>

    <input type="file" name="link" id="file-input" class="block w-full text-sm border border-gray-200 rounded-lg shadow-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 file:bg-gray-50 file:border-0 file:me-4 file:py-3 file:px-4 dark:file:bg-neutral-700 dark:file:text-neutral-400">


      </div>
<div class="flex items-center justify-end px-4 py-3 border-t gap-x-2 dark:border-neutral-700">
  <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-focus-management-modal">
    Close
  </button>
  <button  type="submit" id='admin_store' type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
    Save changes
  </button>

</div>
</form>
@endsection
