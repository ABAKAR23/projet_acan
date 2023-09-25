<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;


class CommandeController extends Controller
{
    public function index()
    {
        $commandes = Commande::all();
        return view('commandes.index', ['commandes' => $commandes]);
    }

    public function show($id)
    {
        $commande = Commande::findOrFail($id);
        
        return view('commandes.show', ['commande' => $commande]);


    }

    public function create()
    {
        // Afficher le formulaire de création de commande
        return view('commandes.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom_client' => 'required|string',
            // ... autres règles de validation ...
        ]);
        $commande = new Commande;
        $commande->nom_client = $request->input('nom_client');
        // ... autres attributs ...

        $commande->save();

        return redirect()->route('commandes.index')->with('success', 'Commande créée avec succès');

    }

    public function edit($id)
    {
        $commande = Commande::findOrFail($id);
        return view('commandes.edit', ['commande' => $commande]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom_client' => 'required|string',
            // ... autres règles de validation ...
        ]);

        $commande = Commande::findOrFail($id);
        $commande->nom_client = $request->input('nom_client');
        // ... autres attributs ...

        $commande->save();

        return redirect()->route('commandes.index')->with('success', 'Commande mise à jour avec succès');
    }

    public function destroy($id)
    {
        $commande = Commande::findOrFail($id);
        $commande->delete();

        return redirect()->route('commandes.index')->with('success', 'Commande supprimée avec succès');
    }


}
