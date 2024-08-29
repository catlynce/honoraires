<div>
    @foreach ($fees as $fee)
        <div class="flex flex-col mb-8 p-4 text-gray-100 border border-slate-500 rounded bg-slate-600 shadow-lg">
            <div class="flex justify-between">
                <span><strong>{{ $fee->user->name }}</strong> <span class="ml-4">{{ $fee->worked_at }}</span></span>
                <span>{{ Number::currency($fee->price, 'EUR') }}</span>
            </div>
            <div class="mt-4 pb-6">{{ $fee->description }}</div>
            <div class="flex items-center justify-between">
                <div class="flex space-x-2">
                    <a
                        href="{{ route('fee.preview', ['fee' => $fee]) }}"
                        target="_blank"
                        class="flex items-center gap-2 px-2 py-1.5 text-black font-medium border border-slate-300 rounded bg-slate-200 hover:bg-slate-300"
                    >
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>
                        View PDF
                    </a>
                    <a
                        href="{{ route('fee.download', ['fee' => $fee]) }}"
                        class="flex items-center gap-2 px-2 py-1.5 text-black font-medium border border-slate-300 rounded bg-slate-200 hover:bg-slate-300"
                    >
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 242.7-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7 288 32zM64 352c-35.3 0-64 28.7-64 64l0 32c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-32c0-35.3-28.7-64-64-64l-101.5 0-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352 64 352zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
                        Download PDF
                    </a>
                </div>
                <div>
                    @if ($fee->payed)
                        Payed at: {{ $fee->payed_at }}
                    @else
                        <button
                            wire:click="payed({{ $fee->id }})"
                            class="flex items-center gap-2 px-2 py-1.5 border rounded capitalize text-black border-green-600 bg-green-400 hover:bg-green-500 transition"
                        >
                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/></svg>
                            mark as payed
                        </button>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
