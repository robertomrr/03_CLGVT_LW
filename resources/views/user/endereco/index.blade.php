<!-- resources/views/user/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Address List</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container mx-auto mt-5">
        <h2 class="text-2xl mb-4">Address List</h2>

        @if(session('success'))
            <div class="bg-green-500 text-white p-3 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Botão para acionar a função create -->
        <a href="{{ route('UserEndereco.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Create New Address</a>
        <a href="{{ url('Welcome-Endereco') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Back to Welcome-Endereco</a>  

        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2">ID</th>
                    <th class="py-2">Street</th>
                    <th class="py-2">City</th>
                    <th class="py-2">State</th>
                    <th class="py-2">Country</th>
                    <th class="py-2">ZipCode</th>
                    <th class="py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($enderecos as $endereco)
                    <tr>
                        <td class="py-2">{{ $endereco->id }}</td>
                        <td class="py-2">{{ $endereco->street }}</td>
                        <td class="py-2">{{ $endereco->city }}</td>
                        <td class="py-2">{{ $endereco->state }}</td>
                        <td class="py-2">{{ $endereco->country }}</td>
                        <td class="py-2">{{ $endereco->zipcode }}</td>
                        <td class="py-2">
                            <!-- Formulário para excluir usuário -->
                            <form action="{{ route('UserEndereco.destroy', $endereco->id) }}" method="POST">
                                @csrf
                                <button><a href="{{ route('UserEndereco.show',['id'=> $endereco->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Show</a></button>
                                <button><a href="{{ route('UserEndereco.edit',['id'=> $endereco->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Edit</a></button>
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
