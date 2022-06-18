<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jelas;
use Illuminate\Support\Facades\DB;

class JelasController extends Controller
{
   public function home(Request $request){

      $pp = $request->input('perp');

      if($pp <= 0){

         $jelas = Jelas::paginate(5);
         return view('jelas.jelas', ['jelas' => $jelas]);

      }else {

         $jelas = Jelas::paginate($pp);
         return view('jelas.jelas', ['jelas' => $jelas]);

      }
   } 
}
