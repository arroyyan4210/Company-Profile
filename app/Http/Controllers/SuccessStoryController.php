<?php

namespace App\Http\Controllers;

use App\Models\SuccessStory;
use Illuminate\Http\Request;

class SuccessStoryController extends Controller
{
    public function index()
    {
        $stories = SuccessStory::paginate(10);
        return view('pages.success', compact('stories'));
    }

    public function show(SuccessStory $successStory)
    {
        return view('pages.success_show', ['story' => $successStory]);
    }
}
