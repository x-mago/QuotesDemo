<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Logo_The_Simpsons.svg" class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Simpsons-Zitate für Dich!
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed">
        <form action="{{ route('update') }}" method="post">
            @csrf
        @if($quotes->count())
            <button  class="inline-flex items-center px-4 py-2 mb-4 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Neues Zitat laden
            </button>            
            <div class="grid grid-cols-12">
@foreach($quotes as $q)
                <div class="row-span-2 col-span-1 rounded mb-4"><img src="{{ $q->image }}" class="w-10"></div>
                <div class="col-span-11 text-base">{{ $q->quote }}</div>
                <div class="col-span-11 text-sm mb-4">{{ $q->character }}</div>
@endforeach
            </div>
        @else
            Es sind noch keine Zitate vorhanden. Möchtest du gerne das Erste abrufen?
            <button  class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Zitat laden
            </button>            
        @endif
        </form>
    </p>
</div>
            


            </div>
        </div>
    </div>
</x-app-layout>
