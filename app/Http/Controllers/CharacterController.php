<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::all();
        return view('characters.index', compact('characters'));
    }

    public function create()
    {
        return view('characters.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'image' => 'nullable|image',
            'description' => 'required',
            'detailed_description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->image->store('characters', 'public');
        }

        Character::create($data);
        return redirect()->route('characters.index');
    }

    public function show(Character $character)
    {
        return view('characters.show', compact('character'));
    }

    public function edit(Character $character)
    {
        return view('characters.edit', compact('character'));
    }

    public function update(Request $request, Character $character)
    {
        $data = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'image' => 'nullable|image',
            'description' => 'required',
            'detailed_description' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->image->store('characters', 'public');
        }

        $character->update($data);

        return redirect()->route('characters.index');
    }

    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('characters.index');
    }
}
