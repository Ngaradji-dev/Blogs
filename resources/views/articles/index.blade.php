@extends('layouts.app')

@section('content')

<div class="dashboard-main-body">
    <h6 class="fw-semibold mb-0 mb-24">Liste des Articles</h6>

    <div class="card radius-12">
        <div class="card-body p-24">
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('article.create') }}" class="btn btn-primary">
                    <iconify-icon icon="ic:baseline-plus"></iconify-icon> Ajouter Article
                </a>
            </div>
            <div class="table-responsive">
                <table class="table bordered-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Catégorie</th>
                            <th>Contenu</th>
                            <th>Date de création</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $index => $article)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $article->titre }}</td>
                            <td>{{ $article->category->titre ?? 'Non défini' }}</td>
                            <td>{{ Str::limit($article->contenu, 50) }}</td>
                            <td>{{ $article->created_at->format('d/m/Y') }}</td>
                            <td class="d-flex gap-2">
                                <a href="{{ route('article.show', $article) }}" class="btn btn-info btn-sm">
                                    <iconify-icon icon="majesticons:eye-line"></iconify-icon>
                                </a>
                                <a href="{{ route('article.edit', $article) }}" class="btn btn-success btn-sm">
                                    <iconify-icon icon="lucide:edit"></iconify-icon>
                                </a>

                                <!-- Formulaire suppression avec SweetAlert -->
                                <form id="delete-form-{{ $article->id }}" action="{{ route('article.delete', $article) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $article->id }})">
                                        <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @if($articles->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center">Aucun article trouvé</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Êtes-vous sûr ?',
            text: "Cette action est irréversible !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Oui, supprimer',
            cancelButtonText: 'Annuler'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        });
    }

    // Optionnel: Affichage des messages flash success ou error avec SweetAlert
    document.addEventListener('DOMContentLoaded', function() {
        @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Succès',
            text: @json(session('success')),
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: false
        });
        @endif

        @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Erreur',
            text: @json(session('error')),
            timer: 3000,
            timerProgressBar: true,
            showConfirmButton: false
        });
        @endif
    });
</script>

@endsection