<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalController extends Controller
{
    public function index()
{
    $locals = Local::with('category', 'equipements')->get();
    return view('locals.index', compact('locals'));
}

public function create()
{
    $categories = Category::all();
    $equipements = Equipement::all();
    return view('locals.create', compact('categories', 'equipements'));
}

public function store(Request $request)
{
    $validated = $request->validate([
        'type' => 'required',
        'capacite' => 'required|integer',
        'prix' => 'required|numeric',
        'location' => 'required',
        'status' => 'required',
        'categorie_id' => 'nullable|exists:categories,id',
        'equipements' => 'array|nullable',
    ]);

    $local = Local::create($validated);
    $local->equipements()->sync($request->equipements);
    return redirect()->route('locals.index')->with('success', 'Local ajouté avec succès.');
}

public function edit(Local $local)
{
    $categories = Category::all();
    $equipements = Equipement::all();
    return view('locals.edit', compact('local', 'categories', 'equipements'));
}

public function update(Request $request, Local $local)
{
    $validated = $request->validate([
        'type' => 'required',
        'capacite' => 'required|integer',
        'prix' => 'required|numeric',
        'location' => 'required',
        'status' => 'required',
        'categorie_id' => 'nullable|exists:categories,id',
        'equipements' => 'array|nullable',
    ]);

    $local->update($validated);
    $local->equipements()->sync($request->equipements);
    return redirect()->route('locals.index')->with('success', 'Local mis à jour avec succès.');
}

}
