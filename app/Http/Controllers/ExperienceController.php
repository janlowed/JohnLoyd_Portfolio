<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }
        $experiences = Experience::all();
        return view("experience.index", compact("experiences"))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }
        return view("experience.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }
        $data = $request->validate([
            'title' => 'required',
            'year' => 'required',
            'detail' => 'required',
            'image' => 'required',
        ]);
   
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagePath = $image->store('img', 'public');
            $data['image'] = $imagePath; 
        }

        Experience::create($data);
        return redirect()->route('experiences.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }
        return view('experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience): RedirectResponse
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }
        $data = $request->validate([
            'title' => 'required',
            'year' => 'required',
            'detail' => 'required',
            'image' => 'required',
        ]);
   
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imagePath = $image->store('img', 'public');
            $data['image'] = $imagePath; 
        }

        $experience->update($data);
        return redirect()->route('experiences.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience): RedirectResponse
    {
        //
        if(empty(auth()->user()->role)){
            abort(404);
        }
        $experience->delete();

        return redirect()->route('experiences.index');
    }
}
