<!-- resources/views/user/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container mx-auto bg-slate-400 text-center text-3xl">
        <p> Veja o Controller desta view , existem exemplos de passagem de parâmetros para uma views.</p>
    </div>
    <div class="container mx-auto mt-5">
        <h2 class="text-2xl mb-4">User Projects and Tasks</h2>

        <div class="mb-4">
            <h3 class="text-xl">Projects:</h3>
            <ul class="list-disc ml-5">
                @foreach($projects as $project)
                    <li>{{ $project }}</li>
                @endforeach
            </ul>
        </div>

        <div class="mb-4">
            <h3 class="text-xl">Tasks:</h3>
            <ul class="list-disc ml-5">
                @foreach($tasks as $task)
                    <li>{{ $task }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="container mx-auto bg-slate-500 text-center text-3xl">
        <p> Abaixo Segue Exemplo de CRUD clássico utilizando Query Builder</p>
    </div>
    <br>
    <div class="container mx-auto bg-sky-300 text-center text-3xl">
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate> <<<-Dashboard</a>
    </div>
    <br>
    <div class="container mx-auto bg-sky-300 text-center text-3xl" style="height:83px">
        <button><a href="{{ route('user.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">User List - Maintenance</a></button>
        <button class="m-4"><a href="{{ route('user.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Available</a></button>
    </div>
    <br>
    <div class="container mx-auto bg-slate-500 text-center text-3xl">
        <p> Abaixo Segue Exemplo de CRUD Livewire</p>
    </div>
</body>
</html>

