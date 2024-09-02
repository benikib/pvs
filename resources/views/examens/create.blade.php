@extends('layouts.modal')
@section('title')
<h3 id="hs-focus-management-modal-label" class="font-bold text-gray-800 dark:text-white">
  Ajoute un administrateur
  </h3>
@endsection
@section('form')
<form action="{{ route('examen_store') }}" method="POST">
    @csrf
<div class="p-4 overflow-y-auto">
  <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Intitule</label>
  <input type="text" name="intitule" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400" placeholder="Intitule de l'examen" autofocus="">
  <input type="hidden" name="session_examens_id"  value="{{ $session->id }}">
</div>
<div class="p-4 overflow-y-auto">
    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Professeur titulaire</label>
    <input type="text" name="professeur" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400" placeholder="Professeur titulaire" autofocus="">
  </div>
  <div class="p-4 overflow-y-auto">
    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">nombre de local</label>
    <input type="number" name="n_local" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400" placeholder="nombre de local" autofocus="">
  </div>
  <div class="p-4 overflow-y-auto">
    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">date</label>
    <input type="date" name="date" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400" placeholder="date" autofocus="">
  </div>
  <div class="p-4 overflow-y-auto">
    <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">heure</label>
    <input type="time" name="heure" id="input-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:placeholder-neutral-500 dark:text-neutral-400" placeholder="heure" autofocus="">
  </div>
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
