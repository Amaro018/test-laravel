<?php

namespace App\Http\Controllers;


use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()//show, index, 
    {
        // $idea = new Idea([
        //     'content' => 'hello youtube',
        // ]);
        // $idea->save();
        // dump(Idea::all());

        // return view("welcome", ['ideas' => Idea::all()]);
        return view("welcome", ['ideas' => Idea::OrderBy('created_at', 'DESC')->paginate(4)]);
    }

    public function show()
    {
        return view('Dashboard');
    }
}