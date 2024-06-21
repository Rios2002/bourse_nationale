@php
    $pagetitle = 'Détails Demande Reclamation';
    $breadcrumbs = ['Liste des Demande Reclamation' => route('demande-reclamations.index'), 'Détails Demande Reclamation' => ''];
@endphp

@extends('layouts.app')

@section('template_title')
    Détails  Demande Reclamation
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('demande-reclamations.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="row">

                            

                        <div class="col-lg-4">
                            <strong class="text-dark ">Objet:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeReclamation->objet }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Contenu:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeReclamation->contenu }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Statut:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeReclamation->statut }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">User Id:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeReclamation->user_id }}"
                                readonly>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
