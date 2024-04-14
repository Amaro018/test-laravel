<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
        public function showHeader()
    {
        return view('Header.header'); // Make sure you have a view file named header.blade.php
    }
}
