@extends('layouts.modal')
@section('title')
<h3 id="hs-focus-management-modal-label" class="font-bold text-gray-800 dark:text-white">
  Ajouter une Session
  </h3>
@endsection
@section('form')
<form action={{ route("session_store") }} method="POST">
    @csrf
<div class="p-4 overflow-y-auto">
  <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Intitule</label>
  <input type="text" name="intitule" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400" placeholder="Intitule de la session" autofocus="">
</div>
<div class="p-4 overflow-y-auto">
    <label for="promotion" class="block text-sm font-medium mb-2 dark:text-white">Promotion</label>
    <div class="relative">
        <select id="promotion" name="promotion" class="appearance-none py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 transition-all duration-300 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 shadow-sm">
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
    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Mention</label>
    <input type="text" name="mention" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400" placeholder="Mention" autofocus="">
  </div>

 <div class="p-4 overflow-y-auto">
    <label for="semestre" class="block text-sm font-medium mb-2 dark:text-white">Semestre</label>
    <div class="relative">
        <select id="semestre" name="semestre" class="appearance-none py-3 px-4 block w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 transition-all duration-300 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 shadow-sm">
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


  {{-- <div class="p-4 overflow-y-auto">
    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">année académique</label>
    <input type="date" name="an_academique" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400" placeholder="année académique" autofocus="">
  </div> --}}

<div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
  <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-focus-management-modal">
    Close
  </button>
  <button  type="submit" id='admin_store' type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
    Save changes
  </button>

</div>
</form>
@endsection
