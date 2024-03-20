<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cryptocoin;

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
}
