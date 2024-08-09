<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Fee as ModelsFee;
use Illuminate\Support\Facades\Auth;

class Fee extends Component
{
    public $fees;

    public function mount()
    {
        // dump(Auth::user()->admin);
        if ( Auth::user()->isAdmin() ){
            $this->fees = ModelsFee::latest()->get();
        } else {
            $this->fees = ModelsFee::latest()->where('user_id', Auth::user()->id)->get();
        }
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
