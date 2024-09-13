@extends('layouts.modal')
@section('title')
<h3 id="hs-focus-management-modal-label" class="font-bold text-gray-800 dark:text-white">
  Ajoute un Surveillant
  </h3>
@endsection
@section('form')
<form action={{ route("surveillant_store") }} method="POST">
    @csrf
<div class="p-4 overflow-y-auto">
  <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">email</label>
  <input type="hidden" name="examen_id" value="{{ $examen->id }}">
  <select  name="user_id" class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
    <option selected="">Selection un surveillant</option>
    @foreach ($users_dispo as $user )
    <option value="{{ $user->id }}">{{ $user->email }}</option>
    @endforeach


  </select>
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
