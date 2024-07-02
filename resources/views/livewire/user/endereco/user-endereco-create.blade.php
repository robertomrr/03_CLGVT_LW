<div class="container mx-auto mt-5">
    <h2 class="text-2xl mb-4">Create User Endereço</h2>

    @if(session('success'))
        <div class="bg-green-500 text-white p-3 mb-4">
            {{ session('success') }}
        </div>
    @endif
    
    @if(session()->has('message') )
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="create" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="street">Street</label>
            <input type="text" wire:model="street" name="street" id="street" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('street') }}">
            @error('street')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="city">City</label>
            <input type="text" wire:model="city" name="city" id="city" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('city') }}">
            @error('city')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="state">State</label>
            <input type="text" wire:model="state" name="state" id="state" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('state') }}">
            @error('state')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="country">Country</label>
            <input type="text" wire:model="country" name="country" id="country" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('country') }}">
            @error('country')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror            
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="zipcode">ZipCode</label>
            <input type="text" wire:model="zipcode" name="zipcode" id="zipcode" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" onblur="pesquisacep(this.value);">
            @error('zipcode')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror            
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Address User</button>
            <a href="{{ route('endereco.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Back to Address User List</a>                
        </div>
    </form>
</div>

