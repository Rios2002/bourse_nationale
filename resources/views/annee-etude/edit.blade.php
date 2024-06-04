@php
    $pagetitle = 'Modifier Annee Etude';
    $breadcrumbs = ['Liste des Annee Etude(s)' => route('annee-etudes.index'), 'Modifier Annee Etude' => ''];
@endphp
@extends('layouts.app')

@section('template_title')
    Formulaire de modification: Annee Etude
@endsection

@section('content')
    <section class="">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('annee-etudes.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Mettre à jour Annee Etude</h5>
                            <span>Formulaire de modification: Annee Etude</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('annee-etudes.update', $anneeEtude->CodeAnneeEtude) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('annee-etude.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
