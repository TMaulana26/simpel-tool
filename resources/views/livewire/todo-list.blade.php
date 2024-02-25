<div>
    <div class="flex flex-col w-[400px] mx-auto py-16">
        <div class="flex gap-4 justify-between">
            <input type="text" wire:model='todoText' wire:keydown.enter='addTodo'
                placeholder="Enter your To Do and hit Enter" class="flex-1">
            <button
                class="py-2 px-4 bg-purple-600 hover:bg-purple-700 disabled:cursor-not-allowed disabled:bg-opacity-80 rounded text-yellow-200"
                wire:click='addTodo'>
                Add
            </button>
        </div>
        <div class="py-6">
            @if (count($todos) == 0)
            <p class="text-white text-center">You don't have a to do list, let's make one</p>
            @endif
            @foreach ($todos as $index => $todo)
            <div class="flex gap-4 justify-between items center py-1">
                <input class="mt-1" type="checkbox" {{$todo->completed ? 'checked' : ''}}
                wire:change='toggleTodo({{$todo->id}})'>
                <label class="flex-1 text-white font-semibold {{$todo->completed ? 'line-through' : ''}}">{{ $todo->todo
                    }}</label>
                <button wire:click="deleteTodo({{ $todo->id }})">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path class="text-red-700" fill-rule="evenodd"
                            d="M12.963 2.286a.75.75 0 0 0-1.071-.136 9.742 9.742 0 0 0-3.539 6.176 7.547 7.547 0 0 1-1.705-1.715.75.75 0 0 0-1.152-.082A9 9 0 1 0 15.68 4.534a7.46 7.46 0 0 1-2.717-2.248ZM15.75 14.25a3.75 3.75 0 1 1-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 0 1 1.925-3.546 3.75 3.75 0 0 1 3.255 3.718Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            @endforeach
        </div>
    </div>
</div>