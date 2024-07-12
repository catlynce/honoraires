<?php

namespace App\Livewire;

use App\Models\Fee as ModelsFee;
use Carbon\Carbon;
use Livewire\Component;

class Fee extends Component
{
    public $fees;

    public function mount()
    {
        $this->fees = ModelsFee::latest()->get();
    }

    public function payed($id)
    {
        ModelsFee::find($id)->update(['payed' => true, 'payed_at' => Carbon::now()]);
    }

    public function render()
    {
        return view('livewire.fee');
    }
}
