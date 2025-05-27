<?php
namespace App\Http\Controllers;

use App\Models\Equipement;
use Illuminate\Http\Request;

class EquipementController extends Controller
{
    public function index()
    {
        $equipements = Equipement::orderBy('name')->paginate(10);
        return view('equipements.index', compact('equipements'));
    }

    public function create()
    {
        return view('equipements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:equipements,name|max:255',
        ]);
        Equipement::create($request->only('name'));
        return redirect()->route('equipements.index')->with('success', 'Équipement ajouté.');
    }

    public function edit(Equipement $equipement)
    {
        return view('equipements.edit', compact('equipement'));
    }

    public function update(Request $request, Equipement $equipement)
    {
        $request->validate([
            'name' => 'required|string|unique:equipements,name,'.$equipement->id.'|max:255',
        ]);
        $equipement->update($request->only('name'));
        return redirect()->route('equipements.index')->with('success', 'Équipement mis à jour.');
    }

    public function destroy(Equipement $equipement)
    {
        $equipement->delete();
        return redirect()->route('equipements.index')->with('success', 'Équipement supprimé.');
    }
}