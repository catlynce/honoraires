<?php

namespace App\Livewire;

use App\Models\Fee;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class FeeAdd extends Component
{
    public $description;

    public $price;

    public $worked_at;

    public function save()
    {
        $attrs = $this->only(['description', 'price', 'worked_at']);
        $attrs['user_id'] = Auth::user()->id;

        Fee::create(
            $attrs
        );

        return redirect('dashboard');
    }

    public function render()
    {
        return view('livewire.fee-add');
    }
}
