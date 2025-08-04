<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
        ]);

        Category::create($request->only(['titre', 'contenu']));

        return redirect()->route('categorie.index')->with('success', 'Catégorie ajoutée avec succès.');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
        ]);

        $category->update($request->only(['titre', 'contenu']));

        return redirect()->route('categorie.index')->with('success', 'Catégorie mise à jour.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categorie.index')->with('success', 'Catégorie supprimée.');
    }
}
