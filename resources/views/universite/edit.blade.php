@php
    $pagetitle = 'Modifier Universite';
    $breadcrumbs = ['Liste des Universite(s)' => route('universites.index'), 'Modifier Universite' => ''];
@endphp
@extends('layouts.app')

@section('template_title')
    Formulaire de modification: Universite
@endsection

@section('content')
    <section class="">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('universites.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Mettre à jour Universite</h5>
                            <span>Formulaire de modification: Universite</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('universites.update', $universite->CodeUniversite) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('universite.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
