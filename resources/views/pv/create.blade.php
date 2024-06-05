@php
    $pagetitle = 'Nouveau Pv';
    $breadcrumbs = ['Liste des Pv(s)' => route('pvs.index'), 'Nouveau Pv' => route('pvs.create')];
@endphp
@extends('layouts.app')

@section('template_title')
    Nouveau Pv
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default  border">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('pvs.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Nouveau : Pv</h5>
                            <span>Formulaire d'ajout d'un(e)  Pv</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('pvs.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('pv.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
