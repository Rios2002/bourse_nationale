@php
    $pagetitle = 'Modifier Eligible';
    $breadcrumbs = ['Liste des Eligible(s)' => route('eligibles.index'), 'Modifier Eligible' => ''];
@endphp
@extends('layouts.app')

@section('template_title')
    Formulaire de modification: Eligible
@endsection

@section('content')
    <section class="">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('eligibles.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Mettre à jour Eligible</h5>
                            <span>Formulaire de modification: Eligible</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('eligibles.update', $eligible->Num_table) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('eligible.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
