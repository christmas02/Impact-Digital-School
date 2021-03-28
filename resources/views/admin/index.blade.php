@extends('layouts/dashboard')

@section('content')

<div class="container-fluid">
    <h3 class="text-white mb-1">Dashboard</h3>
    <div class="row">
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-primary py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1"><span>Earnings (monthly)</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0"><span>$40,000</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-success py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1"><span>Earnings (annual)</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0"><span>$215,000</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-info py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-info font-weight-bold text-xs mb-1"><span>Tasks</span></div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="text-dark font-weight-bold h5 mb-0 mr-3"><span>50%</span></div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="sr-only">50%</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4">
            <div class="card shadow border-left-warning py-2">
                <div class="card-body">
                    <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                            <div class="text-uppercase text-warning font-weight-bold text-xs mb-1"><span>Pending Requests</span></div>
                            <div class="text-dark font-weight-bold h5 mb-0"><span>18</span></div>
                        </div>
                        <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col col-md-12">
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="text-primary font-weight-bold m-0">
                     @switch( Auth::user()->role )
                        @case(0)
                        Bienvenu Admin  {{ Auth::user()->name }}
                            @break
                        @case(1)
                        Bienvenu Formateur  {{ Auth::user()->name }}
                            @break
                        @case(2)
                        Bienvenu Etudiant  {{ Auth::user()->name }}
                            @break
                        @default

                    @endswitch
                </h6>
                {{-- <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                    <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in" role="menu">
                        <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
                </div> --}}
            </div>
            <div class="card-body">

                {{-- <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div><canvas data-bs-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;0&quot;,&quot;10000&quot;,&quot;5000&quot;,&quot;15000&quot;,&quot;10000&quot;,&quot;20000&quot;,&quot;15000&quot;,&quot;25000&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}]}}}" style="display: block; width: 668px; height: 320px;" width="668" height="320" class="chartjs-render-monitor"></canvas></div> --}}
            </div>
        </div>
    </div>
</div>

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


