@extends('backend.layouts.master')

@section('title')
Demandes de Contact & Devis
@endsection

@section('css')
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
@component('backend.components.breadcrumb')
@slot('li_1')
Administration
@endslot
@slot('title')
Demandes de devis / Contact
@endslot
@endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Liste des messages reçus</h4>
                <div class="flex-shrink-0">
                    <span class="badge bg-soft-info text-info">Total : {{ count($data_contacts) }}</span>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom & Prénoms</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Entreprise</th>
                                <th>Date Réception</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_contacts as $key => $item)
                            <tr id="row_{{ $item->id }}">
                                <td>{{ ++$key }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 fw-medium">{{ $item->nom }}</div>
                                    </div>
                                </td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->contact ?? 'N/A' }}</td>
                                <td>
                                    <span class="badge bg-light text-body">{{ $item->entreprise ?? 'Particulier' }}</span>
                                </td>
                                <td>{{ $item->created_at->format('d/m/Y H:i') }}</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            {{-- Voir le message détaillé --}}
                                            <li>
                                                <a type="button" class="dropdown-item"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#viewModal{{ $item->id }}">
                                                    <i class="ri-eye-fill align-bottom me-2 text-muted"></i> Lire le message
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:{{ $item->email }}" class="dropdown-item">
                                                    <i class="ri-mail-send-fill align-bottom me-2 text-muted"></i> Répondre
                                                </a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li>
                                                <a href="#" class="dropdown-item remove-item-btn delete"
                                                    data-id="{{ $item->id }}">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-danger"></i> Supprimer
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <div class="modal fade" id="viewModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-light p-3">
                                            <h5 class="modal-title">Détail de la demande</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Message :</label>
                                                <div class="p-3 bg-light rounded">
                                                    {{ $item->message }}
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-muted small">Reçu le : {{ $item->created_at->format('d/m/Y à H:i') }}</div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link link-success fw-medium shadow-none" data-bs-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script src="{{ URL::asset('build/js/pages/datatables.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>

<script>
    $(document).ready(function() {
        // Assurez-vous que la route correspond à votre contrôleur backend
        var route = "contacts";
        delete_row(route);
    });
</script>
@endsection