@php
    $pagetitle = 'Modifier Etablissement';
    $breadcrumbs = ['Liste des Etablissement(s)' => route('etablissements.index'), 'Modifier Etablissement' => ''];
@endphp
@extends('layouts.app')

@section('template_title')
    Formulaire de modification: Etablissement
@endsection

@section('content')
    <section class="">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('etablissements.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Mettre à jour Etablissement</h5>
                            <span>Formulaire de modification: Etablissement</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('etablissements.update', $etablissement->CodeEtablissement) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('etablissement.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
