<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    // pour la vérification du mail : 

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $annonces = Annonce::all();
        // dd($annonces);
        return view('Annonce.index', ['annonces' => $annonces]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Annonce.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'string',
                'description' => 'string',
                'image' => 'string',
                'price' => 'numeric|max:7000'
            ],

            [
                "title.string" => "Le titre n'est pas valide.",
                "description.string" => "La description n'est pas valide.",
                "image.string" => "L'image n'est pas valide.",
                "price.numeric" => "Le prix n'est pas valide.",
                "price.max" => "Le prix n'est pas valide.",
            ]
        );

        Annonce::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'price' => $request->price
        ]);

        return view('Annonce.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $annonces = Annonce::findOrFail($id);

        return view('Annonce.show', ["annonce" => $annonces]);
    }

    /**
     * Show the form for editing the specified resource.
     * @
     */
    public function edit(string $id)
    {
        $annonce = Annonce::findOrFail($id);

        return view('Annonce.edit', ["annonce" => $annonce]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $annonce = Annonce::findOrFail($id);

        $annonce->title = $request->title;
        $annonce->description = $request->description;
        $annonce->image = $request->image;
        $annonce->price = $request->price;

        $annonce->save();

        return redirect()->route('Annonce.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $annonce = Annonce::findOrFail($id);

        $annonce->delete();

        return view('Annonce.delete');
    }

    public function search(Request $request)
    {
        // escapeWhenCastingToString : boolean 
        // where critères de recherche. 
        // get va exécuter.
        // et toArray permet de convertir le résultat en tableau.
        // penser à faire les tests unitaires !

        $search = trim($request->get('search'));
        $categories = trim($request->get('categories'));

        $recherche = Annonce::query();

        // la spécification :
        if ($categories) {
            // 'titre' : valeur de mon input :
            if ($categories == 'title') {
                $recherche->where('title', 'LIKE', '%' . $search . '%');
            }
            if ($categories == 'description') {
                $recherche->where('description', 'LIKE', '%' . $search . '%');
            }
            if ($categories == 'image') {
                $recherche->where('image', 'LIKE', '%' . $search . '%');
            }
            if ($categories == 'price') {
                $recherche->where('price', 'LIKE', '%' . $search . '%');
            }
            if ($categories == 'id') {
                $recherche->where('id', 'LIKE', '%' . $search . '%');
            }
            if ($categories == 'created_at') {
                $recherche->where('created_at', 'LIKE', '%' . $search . '%');
            }
            // } else {
            //     // recherche par défaut :
            //     $recherche->where('title', 'LIKE', '%' . $search . '%');
            // }
        }
        $annonces = $recherche->get();
        $annonce = $annonces->toArray();

        // dd($annonce);
        // dd($annonces);

        return view('Annonce.search', ['categories' => $categories, 'search' => $search, 'annonces' => $annonce]);
    }
}
