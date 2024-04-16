<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function store(){
        // dump($_POST);
                $share = new Idea([
            'content' => 'hello youtube',
        ]);
        $share->save();
        
    } 
}
