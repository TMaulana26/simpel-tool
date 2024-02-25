<div>
    <div class="flex flex-col items-center">
        <div class="flex p-16 mx-auto justify-center items-center gap-4">
            <input type="number" wire:model='num1' placeholder="Enter the number...">
            <select wire:model='action'>
                <option>+</option>
                <option>-</option>
                <option>x</option>
                <option>:</option>
                <option>%</option>
            </select>
            <input type="number" wire:model='num2' placeholder="Enter the number...">
            <button wire:click='calculate'
                class="py-2 px-4 bg-purple-600 disabled:cursor-not-allowed disabled:bg-opacity-80 rounded text-yellow-200"
                {{ $disabled ? 'disabled' : '' }}>=
            </button>
        </div>
        <h2 class="text-3xl text-yellow-200 font-bold">{{ $result }}</h2>
    </div>
</div>