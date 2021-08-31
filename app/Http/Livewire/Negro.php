<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Negro extends Component
{
    public $img;
    public $count=0;
    public function render()
    {
        
        return view('livewire.negro');
    }
    public function __construct()
    {
        $this->img="dessssin-removebg-preview.png";
    }
    public function taper(){
        $this->count = $this->count+1;

        if($this->count==1){
            $this->img="renoi_qui_a_peure-removebg-preview.png";
        } 

        if($this->count==2){
            $this->img="negro_ki_saigne-removebg-preview.png";
        } 

        if($this->count==3){
            $this->img="negro_ki_saigne-removebg-preview_1.png";
        } 

        if($this->count==4){
            $this->img="neggro-removebg-preview.png";
        } 

        if($this->count==5){
            $this->img="sssunknown-removebg-preview.png";
        } 


        
        if($this->count==6){
            $this->img="unksssnown-removebg-preview.png";
        } 

        if($this->count>=7){
            $this->count=0;
        }

        

    }
}
