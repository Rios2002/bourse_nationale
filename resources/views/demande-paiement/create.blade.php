@php
    $pagetitle = 'Nouveau Demande Paiement';
    $breadcrumbs = ['Liste des Demande Paiement(s)' => route('demande-paiements.index'), 'Nouveau Demande Paiement' => route('demande-paiements.create')];
@endphp
@extends('layouts.app')

@section('template_title')
    Nouveau Demande Paiement
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default  border">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('demande-paiements.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Nouveau : Demande Paiement</h5>
                            <span>Formulaire d'ajout d'un(e)  Demande Paiement</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('demande-paiements.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('demande-paiement.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
