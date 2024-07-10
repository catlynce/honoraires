<div>
    @foreach ($fees as $fee)
        <div class="flex flex-col mb-8 p-4 border border-slate-500 rounded bg-slate-700 shadow-lg">
            <div class="flex justify-between">
                <span>{{ $fee->worked_at }}</span>
                <span>{{ Number::currency($fee->price, 'EUR') }}</span>
            </div>
            <div class="mt-4 pb-2">{{ $fee->description }}</div>
            <div>
                <a href="{{ route('fee.preview', ['fee' => $fee]) }}" target="_blank" class="px-2 py-1.5 text-black font-medium border border-black rounded bg-orange-400">View PDF</a>
                <a href="{{ route('fee.download', ['fee' => $fee]) }}" class="px-2 py-1.5 text-black font-medium border border-black rounded bg-green-400">Download PDF</a>
            </div>
        </div>
    @endforeach
</div>
