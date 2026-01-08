<?php

namespace App\Http\Controllers;

use App\Models\Program;


class HomeController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        return view('pages.home', compact('programs'));
    }
}
