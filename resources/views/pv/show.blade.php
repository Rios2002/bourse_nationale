@php
    $pagetitle = 'Détails Pv';
    $breadcrumbs = ['Liste des Pv' => route('pvs.index'), 'Détails Pv' => ''];
@endphp

@extends('layouts.app')

@section('template_title')
    Détails  Pv
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('pvs.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="row">

                            

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codepv:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $pv->CodePV }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Reference Pv:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $pv->Reference_PV }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Datedebutsession:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $pv->DateDebutSession }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Datefinsession:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $pv->DateFinSession }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Anneecivile:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $pv->AnneeCivile }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Notebaspage:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $pv->NoteBasPage }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Datetransmissionliste:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $pv->DateTransmissionListe }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Reflettretransmissionliste:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $pv->RefLettreTransmissionListe }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Statut:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $pv->statut }}"
                                readonly>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
