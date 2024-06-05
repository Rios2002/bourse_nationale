@php
    $pagetitle = 'Nouveau Lot';
    $breadcrumbs = ['Liste des Lot(s)' => route('lots.index'), 'Nouveau Lot' => route('lots.create')];
@endphp
@extends('layouts.app')

@section('template_title')
    Nouveau Lot
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default  border">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('lots.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Nouveau : Lot</h5>
                            <span>Formulaire d'ajout d'un(e)  Lot</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('lots.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('lot.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
