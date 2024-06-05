@php
    $pagetitle = 'Nouveau Eligible';
    $breadcrumbs = ['Liste des Eligible(s)' => route('eligibles.index'), 'Nouveau Eligible' => route('eligibles.create')];
@endphp
@extends('layouts.app')

@section('template_title')
    Nouveau Eligible
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default  border">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('eligibles.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Nouveau : Eligible</h5>
                            <span>Formulaire d'ajout d'un(e)  Eligible</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('eligibles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('eligible.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
