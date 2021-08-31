<?php

namespace App\Http\Livewire;

use App\Models\incategorie;
use Livewire\Component;

class Cooldown extends Component
{
    public $time;
    public $item;
    public $ids;

    function Decompte(){
        $ic = incategorie::select('*')->Where('unlock_date','>',time())->orderBy('unlock_date')->first();
        if(!$ic){
            $this->time = "desactivé";
        } else {
            $this->time =$ic->unlock_date - time() ;
            $this->item = $ic->nom;
            $this->ids = $ic->categorie_id;
        }
        

    }
    public function render()
    {
        return view('livewire.cooldown');
    }
}
