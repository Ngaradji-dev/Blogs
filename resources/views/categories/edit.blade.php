@extends('layouts.app')
@section('content')

<div class="dashboard-main-body">
    <h6 class="fw-semibold mb-0 mb-24">Modifier la catégorie</h6>

    <div class="card p-24 radius-12">
        <div class="card-body">
            <form action="{{ route('categorie.update', $category) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-20">
                    <label class="form-label text-primary-light fw-semibold mb-8">Titre <span class="text-danger-600">*</span></label>
                    <input type="text" name="titre" class="form-control radius-8" value="{{ $category->titre }}">
                </div>

                <div class="mb-20">
                    <label class="form-label text-primary-light fw-semibold mb-8">Contenu <span class="text-danger-600">*</span></label>
                    <textarea name="contenu" class="form-control radius-8">{{ $category->contenu }}</textarea>
                </div>

                <div class="d-flex justify-content-end gap-3">
                    <a href="{{ route('categorie.index') }}" class="border border-danger-600 text-danger-600 px-56 py-11 radius-8">Annuler</a>
                    <button type="submit" class="btn btn-primary px-56 py-12 radius-8">Mettre à jour</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection