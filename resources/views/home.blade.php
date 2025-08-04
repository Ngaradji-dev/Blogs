@extends('layouts.app')

@section('content')

<div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Tableau de bord</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="{{ route('categorie.index') }}" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>Catégories
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Statistiques générales</li>
        </ul>
    </div>

    <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-4">

        <!-- Carte 1 : Nombre total de catégories -->
        <div class="col">
            <div class="card shadow-none border bg-gradient-start-1 h-100">
                <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium text-primary-light mb-1">Nombre total de catégories</p>
                            <h6 class="mb-0">{{ \App\Models\Category::count() }}</h6>
                        </div>
                        <div class="w-50-px h-50-px bg-cyan rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="ph:folder-open-duotone" class="text-white text-2xl mb-0"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte 2 : Catégorie la plus récente -->
        <div class="col">
            <div class="card shadow-none border bg-gradient-start-2 h-100">
                <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium text-primary-light mb-1">Dernière catégorie ajoutée</p>
                            <h6 class="mb-0">
                                {{ optional(\App\Models\Category::latest()->first())->titre ?? 'Aucune catégorie' }}
                            </h6>
                        </div>
                        <div class="w-50-px h-50-px bg-purple rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="tabler:plus" class="text-white text-2xl mb-0"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carte 3 : Nombre de catégories créées aujourd'hui -->
        <div class="col">
            <div class="card shadow-none border bg-gradient-start-3 h-100">
                <div class="card-body p-20">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div>
                            <p class="fw-medium text-primary-light mb-1">Ajouts aujourd'hui</p>
                            <h6 class="mb-0">
                                {{ \App\Models\Category::whereDate('created_at', today())->count() }}
                            </h6>
                        </div>
                        <div class="w-50-px h-50-px bg-info rounded-circle d-flex justify-content-center align-items-center">
                            <iconify-icon icon="solar:calendar-bold-duotone" class="text-white text-2xl mb-0"></iconify-icon>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection