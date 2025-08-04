@extends('layouts.app')
@section('content')

<div class="dashboard-main-body">
    <h6 class="fw-semibold mb-0 mb-24">Modifier l'article</h6>

    <div class="card p-24 radius-12">
        <div class="card-body">
            <form action="{{ route('article.update', $article) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-20">
                    <label class="form-label text-primary-light fw-semibold mb-8">Titre <span class="text-danger-600">*</span></label>
                    <input type="text" name="titre" class="form-control radius-8" value="{{ $article->titre }}">
                </div>

                <div class="mb-20">
                    <label class="form-label text-primary-light fw-semibold mb-8">Catégorie <span class="text-danger-600">*</span></label>
                    <select name="category_id" class="form-control radius-8 form-select">
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->titre }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-20">
                    <label class="form-label text-primary-light fw-semibold mb-8">Contenu <span class="text-danger-600">*</span></label>
                    <textarea name="contenu" class="form-control radius-8">{{ $article->contenu }}</textarea>
                </div>

                <div class="d-flex justify-content-end gap-3">
                    <a href="{{ route('article.index') }}" class="border border-danger-600 text-danger-600 px-56 py-11 radius-8">Annuler</a>
                    <button type="submit" class="btn btn-primary px-56 py-12 radius-8">Mettre à jour</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection