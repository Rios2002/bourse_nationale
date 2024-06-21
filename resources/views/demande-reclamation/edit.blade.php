@php
    $pagetitle = 'Modifier Demande Reclamation';
    $breadcrumbs = ['Liste des Demande Reclamation(s)' => route('demande-reclamations.index'), 'Modifier Demande Reclamation' => ''];
@endphp
@extends('layouts.app')

@section('template_title')
    Formulaire de modification: Demande Reclamation
@endsection

@section('content')
    <section class="">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('demande-reclamations.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Mettre à jour Demande Reclamation</h5>
                            <span>Formulaire de modification: Demande Reclamation</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('demande-reclamations.update', $demandeReclamation->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('demande-reclamation.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
