<?php

namespace App\Livewire;

use App\Models\Fee as ModelsFee;
use Livewire\Component;

class Fee extends Component
{
    public $fees;

    public function mount()
    {
        $this->fees = ModelsFee::latest()->get();
    }

    public function render()
    {
        return view('livewire.fee');
    }
}
