<?php

namespace App\Http\Controllers;


use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()//show, index, 
    {

        // $ideas = Idea::when(request()->has('search'), function ($query) {
        //     $query->search(request('search', ''));
        // })->orderBy('created_at', 'DESC')->paginate(5);


        // return view('dashboard', [
        //     'ideas' => $ideas
        // ]);
        $ideas = Idea::OrderBy('created_at', 'DESC');

        if (request()->has('search')) {
            $ideas = $ideas->where('content', 'like', '%' . request()->get('search', '') . '%');
        }

        return view("welcome", ['ideas' => $ideas->paginate(4)]);
    }
}