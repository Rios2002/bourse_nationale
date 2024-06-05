@php
    $pagetitle = 'Modifier Taux';
    $breadcrumbs = ['Liste des Taux(s)' => route('tauxes.index'), 'Modifier Taux' => ''];
@endphp
@extends('layouts.app')

@section('template_title')
    Formulaire de modification: Taux
@endsection

@section('content')
    <section class="">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('tauxes.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Mettre à jour Taux</h5>
                            <span>Formulaire de modification: Taux</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('tauxes.update', $taux->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('taux.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
