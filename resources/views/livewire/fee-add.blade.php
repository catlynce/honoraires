<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Add Fee') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <form wire:submit="save">
                    <div>
                        <label for="price">Price</label>
                        <input type="text" wire:model="price" class="text-black">
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <textarea id="description" wire:model="description" class="text-black"></textarea>
                    </div>
                    <div>
                        <label for="date">Date of work</label>
                        <input type="date" wire:model="worked_at" class="text-black">
                    </div>
                    <div>
                        <button>Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
