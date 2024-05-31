@php
    $pagetitle = 'Nouveau Type Bourse';
    $breadcrumbs = ['Liste des Type Bourse(s)' => route('type-bourses.index'), 'Nouveau Type Bourse' => route('type-bourses.create')];
@endphp
@extends('layouts.app')

@section('template_title')
    Nouveau Type Bourse
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default  border">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('type-bourses.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Nouveau : Type Bourse</h5>
                            <span>Formulaire d'ajout d'un(e)  Type Bourse</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('type-bourses.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('type-bourse.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
