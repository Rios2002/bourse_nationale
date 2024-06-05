@php
    $pagetitle = 'Détails Taux';
    $breadcrumbs = ['Liste des Taux' => route('tauxes.index'), 'Détails Taux' => ''];
@endphp

@extends('layouts.app')

@section('template_title')
    Détails  Taux
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('tauxes.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="row">

                            

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codepays:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $taux->CodePays }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codefiliere:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $taux->CodeFiliere }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codeanneeetude:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $taux->CodeAnneeEtude }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codeanneeacademique:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $taux->CodeAnneeAcademique }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Taux:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $taux->taux }}"
                                readonly>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
