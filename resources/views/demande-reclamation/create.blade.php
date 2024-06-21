@php
    $pagetitle = 'Nouveau Demande Reclamation';
    $breadcrumbs = ['Liste des Demande Reclamation(s)' => route('demande-reclamations.index'), 'Nouveau Demande Reclamation' => route('demande-reclamations.create')];
@endphp
@extends('layouts.app')

@section('template_title')
    Nouveau Demande Reclamation
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default  border">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('demande-reclamations.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Nouveau : Demande Reclamation</h5>
                            <span>Formulaire d'ajout d'un(e)  Demande Reclamation</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('demande-reclamations.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('demande-reclamation.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
