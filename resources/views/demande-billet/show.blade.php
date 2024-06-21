@php
    $pagetitle = 'Détails Demande Billet';
    $breadcrumbs = ['Liste des Demande Billet' => route('demande-billets.index'), 'Détails Demande Billet' => ''];
@endphp

@extends('layouts.app')

@section('template_title')
    Détails  Demande Billet
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('demande-billets.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="row">

                            

                        <div class="col-lg-4">
                            <strong class="text-dark ">Type:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeBillet->type }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Motif:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeBillet->motif }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Ville Depart:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeBillet->ville_depart }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Ville Destination:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeBillet->ville_destination }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Date Depart:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeBillet->date_depart }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Date Retour:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeBillet->date_retour }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Adresse:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeBillet->Adresse }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Statut:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeBillet->statut }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">User Id:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeBillet->user_id }}"
                                readonly>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
