@extends("layouts.personnel")
@section("content")


  
<div class="masx-w-2xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Card -->
    <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-neutral-900">
      <div class="text-center mb-8">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-neutral-200">
          PROCES VERBAL DE  SURVEILLANCE D'EXAMEN
        </h2>
      
      </div>
  
      <form action={{ route("soumis.stor") }} method="post">
        <!-- Section -->
        @csrf
        <div class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
          <label for="af-payment-billing-contact" class="inline-block text-sm font-medium dark:text-white">
            Promotion : {{ $session->promotion }} {{ '       ' }}    ANNEE ACADEMIQUE {{ $session->an_academique }}     
          </label>

          <div class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
            <label for="af-payment-billing-contact" class="inline-block text-sm font-medium dark:text-white">
              Intitule : {{ $examen->intitule }}    
            </label>
            <div class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                <label for="af-payment-billing-contact" class="inline-block text-sm font-medium dark:text-white">
                  Professeur Titulaire : {{ $examen->professeur }} 
                </label>
                <div class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                    <label for="af-payment-billing-contact" class="inline-block text-sm font-medium dark:text-white">
                      Date : {{ $examen->date }}
                    </label>
          <div class="mt-2 space-y-3">
            <input id="af-payment-billing-contact" type="hidden" value="{{ $examen->id }}" name="examen_id" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" >
            <input id="af-payment-billing-contact" type="text"  name="local"class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Local">
            <input name="dure" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="durée">
            <input name="hcom" type="time" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder=" de ">
            <input name='hfin' type="time" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder=" à ">
          </div>
        </div>
        <!-- End Section -->
  
        <!-- Section -->
        <div class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
          <label for="af-payment-billing-address" class="inline-block text-sm font-medium dark:text-white">
            Agent commis à la surveillance de l'examen
          </label>
  
          <div class="mt-2 space-y-3">
            <input  id="af-payment-billing-address" name="agent1"  value="{{ Auth::user()->id }}" type="hidden" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" >
            <input  id="af-payment-billing-address" name="d"  value="" type="text" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="{{ $user->name }}" @disabled(true)>
            <div class="flex flex-col sm:flex-row gap-3">
            @for($i = 2; $i < 5; $i++)
            <select  name="{{ "agent".$i }}" class="py-2 px-3 pe-9 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                
                 @foreach ($agents as $agent )
                    <option value={{ $agent->id  }}>{{ $agent->name }} </option>
                 
                 @endforeach
                </select> 
            @endfor
         
            </div>
          </div>
        </div>
        <!-- End Section -->
  
        <!-- Section -->
        <div class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
          <label for="af-payment-payment-method" class="inline-block text-sm font-medium dark:text-white">
           Cloture de l'examen
          </label>
          <div class="flex flex-col sm:flex-row gap-3">
            <input  name="hd" type="time" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="heure  de début">
            <input name="n_etudiant" type="number" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="nombre d etudiant au debut ">
          </div>
          <div class="mt-2 space-y-3">
            
                <label for="textarea-label-with-helper-text" class="block text-sm font-medium mb-2 dark:text-white">Faire Description sommaire du déroulement de l ' examen , signaler tout incident, même mineur, etablir un procès-verbal de constat et d'audition en cas de fraude fragrate </label>
                <textarea name="description" id="textarea-label-with-helper-text" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="3" placeholder="Notes les ici" aria-describedby="hs-textarea-helper-text"></textarea>
                <p class="mt-2 text-xs text-gray-500 dark:text-neutral-500" id="hs-textarea-helper-text">Heure de clôture de l'examen </p>
              
            
            <div class="flex flex-col sm:flex-row gap-3">
              <input type="time" name="hcloture" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Heure de clôcture d'effctive de l'examen ">
              <input type="number"  name="n_etudiants_depot" class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="nombre des copies">
            </div>
          </div>
        </div>
        <!-- End Section -->
      </form>
  
      <div class="mt-5 flex justify-end gap-x-2">
        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
          Annuler
        </button>
        <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
          Envoyer
        </button>
      </div>
    </div>
    <div class="relative">
        <input type="password" class="peer py-3 pe-0 ps-8 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 dark:focus:border-b-neutral-600" placeholder="Enter password" disabled="" readonly="">
        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-2 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
          <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z"></path>
            <circle cx="16.5" cy="7.5" r=".5"></circle>
          </svg>
        </div>
      </div>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Card Section -->
@endsection
