<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Add Fee') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <form wire:submit="save" class="max-w-md space-y-4">
                    <div>
                        <label for="price" class="block text-base font-medium leading-6 text-gray-700 dark:text-gray-200">
                            Price
                        </label>
                        <input
                        type="text"
                        id="price"
                        wire:model="price"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm dark:border-gray-700 dark:bg-gray-800 dark:text-white"
                        />
                    </div>
                    <div>
                        <label for="description" class="block text-base font-medium leading-6 text-gray-700 dark:text-gray-200">
                            Description
                        </label>
                        <textarea
                            id="description"
                            wire:model="description"
                            class="mt-2 w-full rounded-lg border-gray-200 align-top shadow-sm sm:text-sm dark:border-gray-700 dark:bg-gray-800 dark:text-white"
                            rows="4"
                        ></textarea>
                    </div>
                    <div>
                        <label for="date" class="block text-base font-medium leading-6 text-gray-700 dark:text-gray-200">
                            Date of work
                        </label>
                        <input
                        type="date"
                        id="date"
                        wire:model="worked_at"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm dark:border-gray-700 dark:bg-gray-800 dark:text-white"
                        />
                    </div>
                    <div>
                        <button
                        class="inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-base font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                        >Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
