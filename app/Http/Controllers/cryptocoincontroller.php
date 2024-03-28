<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\strategies;
use App\Models\trades;

class cryptocoincontroller extends Controller
{

    public function index(){
        $trades = trades::all();
        $strategies = strategies::all();
        return view('homepage', ['newtrades' => $trades, 'strategies' => $strategies]);
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
        $newtrade->conditions = $request->conditions;
        $newtrade->status= 'open';

    
        $newtrade->save();
        return redirect('homepage');
    }

    public static function newstrategy(Request $request){
        $newstrategy = new strategies();

        $request->validate([

            'coin' => 'required',
            'conditions' => 'required',
            'type' => 'required'

        ]);

        $newstrategy->coin = $request->coin;
        $newstrategy->conditions = $request->conditions;
        $newstrategy->type = $request->type;
    
        $newstrategy->save();
        return redirect('homepage');
    }

    public static function incrementwin(Request $request){
        $strategy = strategies::find($request->incrementwin);
        $strategy->wins = $strategy->wins + 1;

        $strategy->save();
        return redirect('homepage');
    }
    public static function incrementloss(Request $request){
        $strategy = strategies::find($request->incrementloss);
        $strategy->losses = $strategy->losses + 1;

        $strategy->save();
        return redirect('homepage');
    }



    public static function closetrade(Request $request){
        $closetrade = trades::find($request->closetrade);
        $closetrade->exitprice = $request->exitprice;
        $closetrade->status = 'closed';
        $closetrade->save();
        return redirect('homepage');
    }

}
