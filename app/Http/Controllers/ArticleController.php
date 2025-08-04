<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Affiche la liste des articles.
     */
    public function index()
    {
        $articles = Article::with('category')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('articles.index', compact('articles'));
    }

    /**
     * Affiche le formulaire de création d’un article.
     */
    public function create()
    {
        $categories = Category::all();
        return view('articles.create', compact('categories'));
    }

    /**
     * Enregistre un nouvel article.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        Article::create([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('article.index')->with('success', 'Article ajouté avec succès.');
    }

    /**
     * Affiche les détails d’un article.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Affiche le formulaire d’édition d’un article.
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::all();

        return view('articles.edit', compact('article', 'categories'));
    }

    /**
     * Met à jour un article existant.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ]);

        $article = Article::findOrFail($id);

        $article->update([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('article.index')->with('success', 'Article mis à jour avec succès.');
    }

    /**
     * Supprime un article.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('article.index')->with('success', 'Article supprimé avec succès.');
    }
}
