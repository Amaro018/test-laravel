<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function store(){
        // dump($_POST);

        // $share = new Idea([
        //     'content'=>request()->get('share-content',''),
        // ]);
        // $share->save();

        $share = Idea::create(
            [
               'content'=>request()->get('share-content',''),
            ]
        );
        
        return redirect()->route('homepage')->with('success','');
        
    } 
}
