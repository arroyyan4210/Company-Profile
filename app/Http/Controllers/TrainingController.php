<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        $trainings = Training::paginate(10);
        return view('pages.training', compact('trainings'));
    }

    public function show(Training $training)
    {
        return view('pages.training_show', compact('training'));
    }
}
