@php
    $pagetitle = 'Modifier Lot';
    $breadcrumbs = ['Liste des Lot(s)' => route('lots.index'), 'Modifier Lot' => ''];
@endphp
@extends('layouts.app')

@section('template_title')
    Formulaire de modification: Lot
@endsection

@section('content')
    <section class="">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('lots.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Mettre à jour Lot</h5>
                            <span>Formulaire de modification: Lot</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('lots.update', $lot->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('lot.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
