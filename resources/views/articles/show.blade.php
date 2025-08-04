@extends('layouts.app')

@section('content')

<div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Détails de l'article</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('articles.index') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Tableau de bord
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Voir Article</li>
        </ul>
    </div>

    <div class="row gy-4">
        <div class="col-lg-6 offset-lg-3">
            <div class="user-grid-card position-relative border radius-16 overflow-hidden bg-base h-100 shadow-sm">
                <!-- <img src="{{ asset('assets/images/banner-bg.jpg') }}" alt="banniere"
                    class="w-100 object-fit-cover" style="height:200px; object-fit: cover;"> -->
                <div class="pb-24 px-16 mb-24 mt--100">
                    <div class="text-center border border-top-0 border-start-0 border-end-0 pb-3">
                        <iconify-icon icon="solar:document-outline" class="text-primary text-6xl mb-3"></iconify-icon>
                        <h4 class="mb-0">{{ $article->titre }}</h4>
                        <span class="text-secondary-light">Article</span>
                    </div>

                    <div class="mt-24">
                        <h6 class="text-xl mb-16">Informations</h6>
                        <ul>
                            <li class="d-flex align-items-center gap-1 mb-12">
                                <span class="w-30 text-md fw-semibold text-primary-light">Titre</span>
                                <span class="w-70 text-secondary-light fw-medium">: {{ $article->titre }}</span>
                            </li>
                            <li class="d-flex align-items-start gap-1 mb-12">
                                <span class="w-30 text-md fw-semibold text-primary-light">Contenu</span>
                                <span class="w-70 text-secondary-light fw-medium">: {!! nl2br(e($article->contenu)) !!}</span>
                            </li>
                            <li class="d-flex align-items-center gap-1 mb-12">
                                <span class="w-30 text-md fw-semibold text-primary-light">Catégorie</span>
                                <span class="w-70 text-secondary-light fw-medium">: {{ $article->category->titre ?? 'Non défini' }}</span>
                            </li>
                            <li class="d-flex align-items-center gap-1 mb-12">
                                <span class="w-30 text-md fw-semibold text-primary-light">Créé le</span>
                                <span class="w-70 text-secondary-light fw-medium">: {{ $article->created_at->format('d/m/Y H:i') }}</span>
                            </li>
                            <li class="d-flex align-items-center gap-1">
                                <span class="w-30 text-md fw-semibold text-primary-light">Modifié le</span>
                                <span class="w-70 text-secondary-light fw-medium">: {{ $article->updated_at->format('d/m/Y H:i') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection