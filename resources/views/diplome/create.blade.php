@php
    $pagetitle = 'Nouveau Diplome';
    $breadcrumbs = ['Liste des Diplome(s)' => route('diplomes.index'), 'Nouveau Diplome' => route('diplomes.create')];
@endphp
@extends('layouts.app')

@section('template_title')
    Nouveau Diplome
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default  border">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('diplomes.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Nouveau : Diplome</h5>
                            <span>Formulaire d'ajout d'un(e)  Diplome</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('diplomes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('diplome.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
