@php
    $pagetitle = 'Modifier Pv';
    $breadcrumbs = ['Liste des Pv(s)' => route('pvs.index'), 'Modifier Pv' => ''];
@endphp
@extends('layouts.app')

@section('template_title')
    Formulaire de modification: Pv
@endsection

@section('content')
    <section class="">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('pvs.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Mettre à jour Pv</h5>
                            <span>Formulaire de modification: Pv</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('pvs.update', $pv->CodePV) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('pv.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
