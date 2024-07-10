<?php

namespace App\Livewire;

use App\Models\Info as ModelsInfo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Info extends Component
{
    public $id = 0;

    public $social_number;
    public $address;
    public $bank_iban;
    public $bank_swift;

    public function save()
    {
        ModelsInfo::updateOrCreate(
            ['id' => $this->id],
            array_merge($this->all(), ['user_id' => Auth::user()->id])
        );
    }

    public function mount()
    {
        $attributes = Auth::user()->info;

        if ( !empty($attributes) ){
            $this->id = $attributes['id'];
            $this->social_number = $attributes['social_number'];
            $this->address = $attributes['address'];
            $this->bank_iban = $attributes['bank_iban'];
            $this->bank_swift = $attributes['bank_swift'];
        }
    }

    public function render()
    {
        return view('livewire.info');
    }
}
