<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SuccessStory;
use Illuminate\Http\Request;

class SuccessStoryController extends Controller
{
    public function index()
    {
        $stories = SuccessStory::latest()->paginate(15);
        return view('admin.success_stories.index', compact('stories'));
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (!auth()->check() || !auth()->user()->is_admin) {
                abort(403);
            }
            return $next($request);
        });
    }

    public function create()
    {
        return view('admin.success_stories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'story' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        SuccessStory::create($data);

        return redirect()->route('admin.success_stories.index')->with('success', 'Kisah sukses dibuat');
    }

    public function edit(SuccessStory $success_story)
    {
        return view('admin.success_stories.edit', ['story' => $success_story]);
    }

    public function update(Request $request, SuccessStory $success_story)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'story' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        $success_story->update($data);

        return redirect()->route('admin.success_stories.index')->with('success', 'Kisah sukses diupdate');
    }

    public function destroy(SuccessStory $success_story)
    {
        $success_story->delete();
        return back()->with('success', 'Kisah sukses dihapus');
    }
}
