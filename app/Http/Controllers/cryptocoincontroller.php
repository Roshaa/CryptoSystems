<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cryptocoin;
use App\Models\newtrade;

class cryptocoincontroller extends Controller
{

    
    public static function newcoin(Request $request){
        $coin = new cryptocoin();

        $request->validate([

            'name' => 'required|max:30',
            'nameabr' => 'required|max:10',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'

        ]);

        $coin->name = request('name');
        $coin->nameabr = request('nameabr');
        $coin->imagepath = request('image');

        

        $imageName = time().'.'.$request->image->extension();

        // Public Folder
        $request->image->move(public_path('images'), $imageName);

        $coin->save();
        return redirect('edittrades');
    }

    public static function newtrade(Request $request){
        $newtrade = new newtrade();

        $request->validate([

            'coin' => 'required',
            'conditions' => 'required|min:10',
            'type' => 'required',
            'entryprice' => 'required|numeric'

        ]);

        $newtrade->coin = $request->coin;
        $newtrade->conditions = $request->conditions;
        $newtrade->entryprice = $request->entryprice;
        $newtrade->type = $request->type;
        $newtrade->status= 'open';

    
        $newtrade->save();
        return redirect('edittrades');
    }
}
