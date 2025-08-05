@extends('layouts.app')

@section('content')
<div class="dashboard-main-body">
    <h6 class="fw-semibold mb-0 mb-24">Liste des Catégories</h6>

    <div class="card radius-12">
        <div class="card-body p-24">
            <div class="d-flex justify-content-end mb-3">
                <a href="{{ route('categorie.create') }}" class="btn btn-primary">
                    <iconify-icon icon="ic:baseline-plus"></iconify-icon> Ajouter Catégorie
                </a>
            </div>

            <div class="card basic-data-table">
                <div class="card-body">
                    <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titre</th>
                                <th>Contenu</th>
                                <th>Date de création</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $index => $category)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $category->titre }}</td>
                                <td>{{ Str::limit($category->contenu, 50) }}</td>
                                <td>{{ $category->created_at->format('d/m/Y') }}</td>
                                <td class="d-flex gap-2">
                                    <a href="{{ route('categorie.show', $category) }}" class="btn btn-info btn-sm">
                                        <iconify-icon icon="majesticons:eye-line"></iconify-icon>
                                    </a>
                                    <a href="{{ route('categorie.edit', $category) }}" class="btn btn-success btn-sm">
                                        <iconify-icon icon="lucide:edit"></iconify-icon>
                                    </a>
                                    <form id="delete-form-{{ $category->id }}" action="{{ route('categorie.delete', $category) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $category->id }})">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @if($categories->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center">Aucune catégorie trouvée</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
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

    document.addEventListener('DOMContentLoaded', function() {
        @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Succès',
            text: @json(session('success')),
            timer: 1500,
            timerProgressBar: true,
            showConfirmButton: false
        });
        @endif

        @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Erreur',
            text: @json(session('error')),
            timer: 1500,
            timerProgressBar: true,
            showConfirmButton: false
        });
        @endif
    });
</script>

@endsection