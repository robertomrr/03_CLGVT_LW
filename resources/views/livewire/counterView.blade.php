<div>
    <hr>
        <div>
            <p> Live wire:model.blur</p>
            <div>
                <p>Form - Good for validation</p>
                <form wire:submit="add">
                    <input type="text" wire:model.blur="todo">
                    <span>Current todo: {{ $todo }}</span>
                    <button type="submit">add</button>
                </form>    
            </div>

        </div>
    <hr>
        <div>
            <p> Live wire:model.change</p>
            <div>
                <p>Form - Good for validation</p>
                <form wire:submit="add">
                    <input type="text" wire:model.change="todo">
                    <span>Current todo: {{ $todo }}</span>
                    <button type="submit">add</button>
                </form>    
            </div>

        </div>
    <hr>
        <div>
            <p> Live wire:model.live</p>
            <div>
                <p>Form</p>
                <form wire:submit="add">
                    <input type="text" wire:model.live="todo">
                    <br>
                    <input type="text" wire:model.live.debounce="todo">
                    <br>
                    <input type="text" wire:model.live.debounce.5ms="todo">
                    <span>Current todo: {{ $todo }}</span>
                    <button type="submit">add</button>
                </form>    
            </div>

        </div>
    <hr>
        <div>
            <p>Form</p>
            <form wire:submit="add">
                <input type="text" wire:model="todo">
                <button type="submit">add</button>
            </form>    
        </div>
    <hr>
        <div>
            <p>Input Field</p>
            <input type="text" wire:model="todo">
            <button type="button" wire:click="add">add</button>
            <ul>
                @foreach ( $todos as $todo)
                <li>
                    {{$todo}}
                </li>
                @endforeach
            </ul>
        </div>
    <hr>
        <p> Just a Interaction from Controller to View</p>
        <div>
            <h1>{{ $count }}</h1>
            <button wire:click="increment">+</button>
 
            <button wire:click="decrement">-</button>        
        </div>
    <hr>
</div>
