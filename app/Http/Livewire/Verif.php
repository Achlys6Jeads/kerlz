<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;
use App\Mail\newsletter;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class Verif extends Component
{
    public $style;
    public $email;
    
    public function render()
    {


        return view('livewire.verif');
    }
    public function __construct(){
        if(Session::has('verif')){
            $this->style = "display:none;";
        } else {
            $this->style = "display:flex;";
        }
    }
    public function valider(){

        
        $email = htmlspecialchars(addslashes($this->email));
        $token = md5(rand(100,10000));
        if($x = News::select('*')->where('email','=',$email)->first()){
            if($x->valider){
                $this->style = "display:none !important;";
                Session::push('verif','true');
            } else {
                $this->email = "Verifie ton e-mail le couz";
            }
        } else {
            $flight = News::create([
                'email' => $email,
                'token'=>$token,
            ]);
            if($flight){
                Mail::to($email)
            ->send(new newsletter($token));
                $this->email = "Verifie ton e-mail le couz";
            }
        }
     
       

    }
}
