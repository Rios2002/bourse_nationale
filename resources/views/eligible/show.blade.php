@php
    $pagetitle = 'Détails Eligible';
    $breadcrumbs = ['Liste des Eligible' => route('eligibles.index'), 'Détails Eligible' => ''];
@endphp

@extends('layouts.app')

@section('template_title')
    Détails  Eligible
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('eligibles.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="row">

                            

                        <div class="col-lg-4">
                            <strong class="text-dark ">Num Table:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $eligible->Num_table }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codeanneeacademique:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $eligible->CodeAnneeAcademique }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Nom:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $eligible->Nom }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Prenoms:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $eligible->Prenoms }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Numero:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $eligible->Numero }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Sexe:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $eligible->Sexe }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Serie:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $eligible->Serie }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Lieunaissance:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $eligible->LieuNaissance }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Moyenne:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $eligible->Moyenne }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Mention:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $eligible->Mention }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Datenaissance:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $eligible->DateNaissance }}"
                                readonly>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
