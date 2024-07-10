<div>
    @foreach ($fees as $fee)
        <div class="flex flex-col mb-8 p-4 border border-slate-500 rounded bg-slate-700 shadow-lg">
            <div class="flex justify-between">
                <span>{{ $fee->worked_at }}</span>
                <span>{{ Number::currency($fee->price, 'EUR') }}</span>
            </div>
            <div class="mt-4 pb-2">{{ $fee->description }}</div>
        </div>
    @endforeach
</div>
