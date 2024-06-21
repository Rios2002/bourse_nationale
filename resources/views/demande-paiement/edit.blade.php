@php
    $pagetitle = 'Modifier Demande Paiement';
    $breadcrumbs = ['Liste des Demande Paiement(s)' => route('demande-paiements.index'), 'Modifier Demande Paiement' => ''];
@endphp
@extends('layouts.app')

@section('template_title')
    Formulaire de modification: Demande Paiement
@endsection

@section('content')
    <section class="">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('demande-paiements.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Mettre à jour Demande Paiement</h5>
                            <span>Formulaire de modification: Demande Paiement</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('demande-paiements.update', $demandePaiement->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('demande-paiement.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
