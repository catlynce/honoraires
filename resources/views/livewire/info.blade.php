<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('My Info') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <form wire:submit="save" class="max-w-md space-y-4">
                    <div>
                        <label for="social_number" class="block text-base font-medium leading-6 text-gray-700 dark:text-gray-200">
                            Matricule
                        </label>
                        <input
                            type="text"
                            id="social_number"
                            wire:model="social_number"
                            class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm dark:border-gray-700 dark:bg-gray-800 dark:text-white"
                        />
                    </div>
                    <div>
                        <label for="address" class="block text-base font-medium leading-6 text-gray-700 dark:text-gray-200">
                            Adresse
                        </label>
                        <input
                            type="text"
                            id="address"
                            wire:model="address"
                            class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm dark:border-gray-700 dark:bg-gray-800 dark:text-white"
                        />
                    </div>
                    <div>
                        <label for="bank_iban" class="block text-base font-medium leading-6 text-gray-700 dark:text-gray-200">
                            Bank IBAN
                        </label>
                        <input
                            type="text"
                            id="bank_iban"
                            wire:model="bank_iban"
                            class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm dark:border-gray-700 dark:bg-gray-800 dark:text-white"
                        />
                    </div>
                    <div>
                        <label for="bank_swift" class="block text-base font-medium leading-6 text-gray-700 dark:text-gray-200">
                            Bank SWIFT
                        </label>
                        <input
                            type="text"
                            id="bank_swift"
                            wire:model="bank_swift"
                            class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm dark:border-gray-700 dark:bg-gray-800 dark:text-white"
                        />
                    </div>
                    <div>
                        <button
                            class="inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-base font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                        >Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
