<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cryptocoin;
use App\Models\trades;

class cryptocoincontroller extends Controller
{

    public function index(){
        $newtrades = trades::all();
        return view('edittrades', ['newtrades' => $newtrades]);
    }

    public static function newtrade(Request $request){
        $newtrade = new trades();

        $request->validate([

            'coin' => 'required',
            'type' => 'required',
            'entryprice' => 'required|numeric'

        ]);

        $newtrade->coin = $request->coin;
        $newtrade->entryprice = $request->entryprice;
        $newtrade->type = $request->type;
        $newtrade->status= 'open';

    
        $newtrade->save();
        return redirect('edittrades');
    }


    public static function closetrade(Request $request){
        $newtrade = trades::find($request->closetrade);
        $newtrade->status = 'closed';
        $newtrade->save();
        return redirect('edittrades');
    }

}
