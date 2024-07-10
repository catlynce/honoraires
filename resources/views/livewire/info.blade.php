<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('My Info') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <form wire:submit="save">
                    <div>
                        <label for="social_number">Matricule</label>
                        <input type="text" wire:model="social_number" class="text-black">
                    </div>
                    <div>
                        <label for="address">Adresse</label>
                        <input type="text" wire:model="address" class="text-black">
                    </div>
                    <div>
                        <label for="bank_iabn">Bank IBAN</label>
                        <input type="" wire:model="bank_iban" class="text-black">
                    </div>
                    <div>
                        <label for="bank_swift">Bank SWIFT</label>
                        <input type="text" wire:model="bank_swift" class="text-black">
                    </div>
                    <div>
                        <button>Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
