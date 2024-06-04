@php
    $pagetitle = 'Modifier Diplome';
    $breadcrumbs = ['Liste des Diplome(s)' => route('diplomes.index'), 'Modifier Diplome' => ''];
@endphp
@extends('layouts.app')

@section('template_title')
    Formulaire de modification: Diplome
@endsection

@section('content')
    <section class="">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('diplomes.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Mettre à jour Diplome</h5>
                            <span>Formulaire de modification: Diplome</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('diplomes.update', $diplome->CodeDiplome) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('diplome.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
