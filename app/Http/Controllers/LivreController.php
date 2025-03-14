<?php

namespace App\Http\Controllers;

// namespace App\Models;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Livre;
use App\Models\Auteur;

class LivreController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livres = Livre::with('auteur')->paginate(10);
        return view('livres.index', compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $auteurs = Auteur::all();
        return view('livres.create', compact('auteurs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'date_publication' => 'required',
            'nombre_pages' => 'required|integer',
            'auteur_id' => 'required|exists:auteurs,id',
        ]);
        Livre::create($request->all());
        return redirect()->route('livres.index')->with('success', 'Livre créé avec succès');
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
    public function edit(Livre $livre)
    {
        $auteurs = Auteur::all();
        return view('livres.edit', compact('livre', 'auteurs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livre $livre)
    {
        $request->validate([
            'titre' => 'required',
            'date_publication' => 'required',
            'nombre_pages' => 'required|integer',
            'auteur_id' => 'required|exists:auteurs,id',
        ]);
        $livre->update($request->all());
        return redirect()->route('livres.index')->with('success', 'Livre modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livre $livre)
    {
        // Delete related records in the emprunts table
        $livre->emprunts()->delete();

        // Delete the livre
        $livre->delete();

        return redirect()->route('livres.index')->with('success', 'Livre supprimé avec succès');
    }
}
