<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()//show, index, 
    {
        $idea = new Idea([
            'content' => 'test',
        ]);
        $idea->save();
        dump(Idea::all());

        return view("welcome", ['ideas' => Idea::all()]);
    }

}