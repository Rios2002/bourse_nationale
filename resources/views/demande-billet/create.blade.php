@php
    $pagetitle = 'Nouveau Demande Billet';
    $breadcrumbs = ['Liste des Demande Billet(s)' => route('demande-billets.index'), 'Nouveau Demande Billet' => route('demande-billets.create')];
@endphp
@extends('layouts.app')

@section('template_title')
    Nouveau Demande Billet
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default  border">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('demande-billets.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Nouveau : Demande Billet</h5>
                            <span>Formulaire d'ajout d'un(e)  Demande Billet</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('demande-billets.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('demande-billet.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
