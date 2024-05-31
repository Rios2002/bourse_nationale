@php
    $pagetitle = 'Détails Etablissement';
    $breadcrumbs = ['Liste des Etablissement' => route('etablissements.index'), 'Détails Etablissement' => ''];
@endphp

@extends('layouts.app')

@section('template_title')
    Détails  Etablissement
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('etablissements.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="row">

                            

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codeetablissement:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $etablissement->CodeEtablissement }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Libelleetablissement:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $etablissement->LibelleEtablissement }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codeuniversite:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $etablissement->CodeUniversite }}"
                                readonly>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
