<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Add User') }}
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <form wire:submit="save" class="max-w-md space-y-4">
                    <div>
                        <label for="name" class="block text-base font-medium leading-6 text-gray-700 dark:text-gray-200">
                            Name
                        </label>
                        <input
                            type="text"
                            id="name"
                            wire:model="name"
                            class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm dark:border-gray-700 dark:bg-gray-800 dark:text-white"
                        />
                    </div>
                    <div>
                        <label for="email" class="block text-base font-medium leading-6 text-gray-700 dark:text-gray-200">
                            Email
                        </label>
                        <input
                            type="email"
                            id="email"
                            wire:model="email"
                            class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm dark:border-gray-700 dark:bg-gray-800 dark:text-white"
                        />
                    </div>
                    <div>
                        <label for="password" class="block text-base font-medium leading-6 text-gray-700 dark:text-gray-200">
                            Password
                        </label>
                        <input
                            type="password"
                            id="password"
                            wire:model="password"
                            class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm dark:border-gray-700 dark:bg-gray-800 dark:text-white"
                        />
                    </div>
                    <div>
                        <label for="password_confirmation" class="block text-base font-medium leading-6 text-gray-700 dark:text-gray-200">
                            Password Confirmation
                        </label>
                        <input
                            type="password"
                            id="password_confirmation"
                            wire:model="password_confirmation"
                            class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm dark:border-gray-700 dark:bg-gray-800 dark:text-white"
                        />
                    </div>
                    <div>
                        <button
                            class="inline-block rounded border border-indigo-600 bg-indigo-600 px-12 py-3 text-base font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
                        >Add User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

