<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fehler') }}
        </h2>
    </x-slot>
    
<div calss="flex min-w-screen min-h-screen">
<div class="flex justify-center item-center">
	<div class="w-85 m-4 p-10 bg-white rounded shadow-xl">
    	<div class="">
      		<div class="w-full px-4 py-3 text-gray-700 bg-gray-200 rounded-b-md">{!! $exception->getMessage() !!}<br>
            @if($exception->getMessage() == 'The MAC is invalid.')
                Bitte den zum Verschlüsseln verwendeten app-key wiederherstellen, 
                oder den Inhalt der Tebelle laravel.quotes löschen.
            @endif
            </div>
    	</div>
    </div>
</div>
</div>
</x-app-layout>
