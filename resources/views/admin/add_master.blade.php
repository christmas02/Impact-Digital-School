@extends('layouts/layoutBack')

@section('content')
<div class="container-fluid">
    <h3 class="text-white mb-1">Couleur</h3>

    <div class="card shadow my-3">
        <div class="card-header py-3">
            <p class="text-primary m-0 font-weight-bold ">Liste des couleurs</p>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" id="close" aria-label="Close" @click="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session('success') }}
                </div>
            @endif
            @if ($id == null)
            <form action="{{ route('save_master') }}" method="POST" class="my-4">


            @else
            <form action="{{ route('edit_master') }}" method="POST" class="my-4">
            @method('PUT')
            @endif

                @csrf
                <div class="row col ">
                    <div class="form-group col-md-12 row">
                        <label for="" class="col-md-2">Libellé</label>
                        <div class="col col-md-4">
                            <input type="text" name="libelle" placeholder="Entrez le libellé" value="{{ empty($couleur)? old('libelle') : $couleur->libelle }}" class="form-control">

                        </div>
                        <div class="col-md-6">
                            @if (!empty($id))
                                <a href="{{ route('couleur.index') }}" class="btn btn-primary">Ajouter un Couleur </a>
                            @endif
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Enregistrer</button>
            </form>

            <div class="table-responsive table mt-2" id="" role="grid" aria-describedby="dataTable_info">

                <table class="table table-bordered dataTable my-0" id="dataTable2">
                    <thead>
                        <tr>
                            <tr>
                                <th>Libelle</th>
                                <th>Action</th>
                            </tr>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($couleurs as $couleur)
                        <tr>

                            <td>{{ $couleur->libelle }}</td>

                            <td>
                                <a href="{{ route('couleur.edit', $couleur->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                <button data-toggle="modal" data-target="#deleteCouleur" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Libelle</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</div>
@foreach ($couleurs as $couleur )
<div class="modal fade" id="deleteCouleur" tabindex="-1" aria-labelledby="delteCouleur" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <form action="{{ route('couleur.destroy', $couleur->id) }}" method="POST">
        @csrf
        @method('DELETE')
            <div class="modal-header">
                <h5 class="modal-title" id="delteCouleur">Supprimer cet Couleur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
            Voulez vous supprimer cette couleur <br>
            <strong>NB:</strong> cette action est irreversible
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Non</button>
                <button type="submit" class="btn btn-success">oui</button>
            </div>
        </form>
      </div>
    </div>
</div>
@endforeach

@endsection
@section('extra-js')
    <script>
                $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });


            $( "#close" ).click(function() {
                $(".alert").alert('close');
            });

            $(function () {
                $("#dataTable").DataTable();
                $('#dataTable2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "language": {
                        processing:     "Traitement en cours...",
                        search:         "Rechercher&nbsp;:",
                        lengthMenu:     "Afficher _MENU_ &eacute;l&eacute;ments",
                        info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                        infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                        infoPostFix:    "",
                        loadingRecords: "Chargement en cours...",
                        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
                        emptyTable:     "Aucune donnée disponible dans le tableau",
                        paginate: {
                            first:      "Premier",
                            previous:   "Pr&eacute;c&eacute;dent",
                            next:       "Suivant",
                            last:       "Dernier"
                        },
                        aria: {
                            sortAscending:  ": activer pour trier la colonne par ordre croissant",
                            sortDescending: ": activer pour trier la colonne par ordre décroissant"
                        }
                    }
                });
            });


        //Autoriser que la saisie des chiffres
        function chiffres(event) {
                // Compatibilité IE / Firefox
                if(!event&&window.event) {
                event=window.event;
                }
                // IE
                if(event.keyCode < 48 || event.keyCode > 57 || event.keyCode  == 8 || event.keyCode == 127) {
                event.returnValue = false;
                event.cancelBubble = true;
                }
                // DOM
                if(event.which < 48 || event.which > 57 || event.keyCode == 8 || event.keyCode == 127) {
                event.preventDefault();
                event.stopPropagation();
                }
        }



    </script>
@endsection
