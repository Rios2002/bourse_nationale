@php
    $pagetitle = 'Détails Annee Etude';
    $breadcrumbs = ['Liste des Annee Etude' => route('annee-etudes.index'), 'Détails Annee Etude' => ''];
@endphp

@extends('layouts.app')

@section('template_title')
    Détails  Annee Etude
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('annee-etudes.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="row">

                            

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codeanneeetude:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $anneeEtude->CodeAnneeEtude }}"
                                readonly>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
