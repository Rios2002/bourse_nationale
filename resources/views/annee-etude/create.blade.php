@php
    $pagetitle = 'Nouveau Annee Etude';
    $breadcrumbs = ['Liste des Annee Etude(s)' => route('annee-etudes.index'), 'Nouveau Annee Etude' => route('annee-etudes.create')];
@endphp
@extends('layouts.app')

@section('template_title')
    Nouveau Annee Etude
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default  border">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('annee-etudes.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Nouveau : Annee Etude</h5>
                            <span>Formulaire d'ajout d'un(e)  Annee Etude</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('annee-etudes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('annee-etude.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
