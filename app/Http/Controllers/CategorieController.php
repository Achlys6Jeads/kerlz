<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\incategorie;
use App\Models\News;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //
    public function index(){
        $categories = categorie::get();

        return view('template/categorie', 
        ['categories' => $categories]
        );
    }
    public function paid(){
        $u = 86400;
        $t = time()+$u;
                $resources = incategorie::select('*')->increment('unlock_date', 86400);

    }
    public function categorie($a){
        $id = htmlspecialchars(addslashes($a));
        $resources = incategorie::select('*')->where('categorie_id','=',$id)->get();

        return view('template/incategorie', 
        ['resources' => $resources]
        );
    }
    public function validermail($a) {
        $x  = News::select('*')->where('token','=',$a)->update(['valider' => 1]);
        if($x){
            return view('verifier');
        } else {
            dd('E-mail non verifié');
        }
    }
}
