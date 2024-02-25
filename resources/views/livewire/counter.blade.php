<div class="p-16 flex justify-center gap-6 items-center">
    <button wire:click='increment'
        class="py-2 px-4 bg-purple-600 hover:bg-purple-900 rounded text-white font-bold">+</button>
    <span class="font-bold text-yellow-200">{{ $count }}</span>
    <button wire:click='decrement'
        class="py-2 px-4 bg-purple-600 hover:bg-purple-900 rounded text-white font-bold">-</button>
</div>