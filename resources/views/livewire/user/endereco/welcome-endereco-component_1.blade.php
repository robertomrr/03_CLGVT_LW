<div>
    <div class="container mx-auto bg-slate-500 text-center text-3xl">
        <p> Abaixo Segue Exemplo de CRUD utilizando Livewire</p>
    </div>
    <br>
    <div class="container mx-auto bg-orange-300 text-center text-3xl">
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate> <<<-Dashboard</a>
    </div>
    <br>
    <div class="container mx-auto bg-orange-300 text-center text-3xl" style="height:83px">
        <button><a href="{{ route('endereco.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Endereço List - Maintenance</a></button>
        <button class="m-4"><a href="{{ route('endereco.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Available</a></button>
    </div>
    <br>
</div>
