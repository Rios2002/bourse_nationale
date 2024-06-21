@php
    $pagetitle = 'Modifier Demande Billet';
    $breadcrumbs = ['Liste des Demande Billet(s)' => route('demande-billets.index'), 'Modifier Demande Billet' => ''];
@endphp
@extends('layouts.app')

@section('template_title')
    Formulaire de modification: Demande Billet
@endsection

@section('content')
    <section class="">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('demande-billets.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Mettre à jour Demande Billet</h5>
                            <span>Formulaire de modification: Demande Billet</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('demande-billets.update', $demandeBillet->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('demande-billet.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
