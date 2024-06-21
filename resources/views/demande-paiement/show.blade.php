@php
    $pagetitle = 'Détails Demande Paiement';
    $breadcrumbs = ['Liste des Demande Paiement' => route('demande-paiements.index'), 'Détails Demande Paiement' => ''];
@endphp

@extends('layouts.app')

@section('template_title')
    Détails  Demande Paiement
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('demande-paiements.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="row">

                            

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codebanque:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandePaiement->CodeBanque }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codeguichet:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandePaiement->CodeGuichet }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Numcompte:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandePaiement->NumCompte }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Clerib:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandePaiement->CleRIB }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Iban:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandePaiement->IBAN }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codeswift:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandePaiement->CodeSwift }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Adresse:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandePaiement->Adresse }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Statut:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandePaiement->statut }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">User Id:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandePaiement->user_id }}"
                                readonly>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
