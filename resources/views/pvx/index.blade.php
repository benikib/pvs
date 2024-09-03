@extends("layouts.default")
@section("content")
@forelse($pvs as $pv)
<div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
    <!-- PV -->
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
        <div class="sm:w-11/12 lg:w-3/4 mx-auto">
            <div class="flex flex-col p-4 sm:p-10 bg-white shadow-md rounded-xl dark:bg-neutral-800">
              <!-- Header -->
<div class="flex flex-col items-center">
    <div>
        <h1 class="mt-2 text-lg md:text-xl font-semibold text-blue-600 dark:text-white">UNIVERSITE DE KINSHASA</h1>
        
    </div>
    <div class="text-center">
        <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 dark:text-neutral-200">Procès-Verbal de Surveillance d'Examen</h2>
        <span class="mt-1 block text-gray-500 dark:text-neutral-500">Numéro PV: {{ $pv->id }}  Session {{ $session->intitule }}</span>
    </div>
</div>
<!-- End Header -->

                
                <!-- Exam Information -->
                <div class="mt-8 grid sm:grid-cols-2 gap-3">
                    <div>
                        <p class="text-lg font-semibold text-gray-800 dark:text-neutral-100">Promotion : {{ $session->promotion }}  {{$session->an_academique  }}  </p>
                        <p class="text-sm font-semibold text-gray-800 dark:text-neutral-100">Intitulé de l'examen : {{ $examen->intitule }} </p>
                        <p class="text-gray-800 dark:text-neutral-200">Professeur titulaire  :  {{ $examen->professeur }}</p>
                        <p class="text-lg font-semibold text-gray-800 dark:text-neutral-100">Salle: {{ $pv->local }}</p>
                        <p class="text-gray-800 dark:text-neutral-200">Durée   :  {{ $pv->dure }} H</p>
                        </div>
                         <div class="sm:text-end">
                        <p class="text-lg font-semibold text-gray-800 dark:text-neutral-100">Date de l'examen:</p>
                        <p class="text-gray-500 dark:text-neutral-500">{{ $examen->date }}</p>
                        <p class="text-lg font-semibold text-gray-800 dark:text-neutral-200">Heure de l'examen:</p>
                        <p class="text-gray-500 dark:text-neutral-500">{{ $pv->hcom }} h - {{ $pv->hfin }} h</p>
                    </div>
                </div>
                <!-- End Exam Information -->
                
                <!-- Table -->
                <div class="mt-6">
                    <div class="border border-gray-200 p-4 rounded-lg space-y-4 dark:border-neutral-700">
                        <div class="hidden sm:grid sm:grid-cols-5">
                            <div class="sm:col-span-2 text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Noms</div>
                            <div class="text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Grade</div>
                            
                            <div class="text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Filiere</div>
                        </div>
                        @foreach (json_decode($pv->agents) as $agent)
                       
                        <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                            <div class="col-span-full sm:col-span-2">
                                <p class="font-medium text-gray-800 dark:text-neutral-200">{{ $agent->name }}</p>
                            </div>
                            <div>
                                <p class="text-gray-800 dark:text-neutral-200">{{ $agent->grade }}</p>
                            </div>
                            
                            <div>
                                <p class="sm:text-end text-gray-800 dark:text-neutral-200">{{ $agent->filiere }}</p>
                            </div>
                        </div>
                        @endforeach

                        
                        <!-- Ajoutez d'autres lignes pour les étudiants -->
                    </div>
                </div>
                <!-- End Table -->
                
                <!-- Footer -->
                <div class="mt-8 sm:mt-12">
                    <h4 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">Deroulement de l'examen </h4>
                    <p class="text-gray-500 dark:text-neutral-500"> Heure de début : {{ $pv->hdebut }} H</p>
                    <div class="mt-2">
                        <p class="block text-sm font-medium text-gray-800 dark:text-neutral-200"> les nombre d'etudiants enregistrés au debut de l'examen :{{ $pv->n_etudiants_enregistre }}</p>
                        <p class="block text-sm font-medium text-gray-800 dark:text-neutral-200"> Description sommmaire du deroulement de l'examen :</p>
                        <p class="block text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $pv->description }}</p>
                        <h4 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">Cloture de l'examen</h4>
                        <p class="block text-sm font-medium text-gray-800 dark:text-neutral-200"> Heure de clôture effective de l'examen {{ $pv->hcloture }}</p>
                        <p class="block text-sm font-medium text-gray-800 dark:text-neutral-200"> Le nombre d'etudiants ayant depose leurs copies d'examen et signé la liste de présence {{ $pv->n_depot }}</p>
                    </div>
                </div>
                <!-- End Footer -->
                
                <!-- Buttons -->
                <div class="mt-6 flex justify-end gap-x-3">
                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800" href="path/to/your/pv.pdf" download="pv.pdf">
                        Télécharger PDF
                    </a>
                    <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700" href="#" onclick="window.print(); return false;">
                        Imprimer
                    </a>
                </div>
                <!-- End Buttons -->
            </div>
        </div>
    </div>
</div>
@empty
    
@endforelse




@endsection
