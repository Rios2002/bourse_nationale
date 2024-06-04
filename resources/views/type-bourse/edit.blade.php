@php
    $pagetitle = 'Modifier Type Bourse';
    $breadcrumbs = ['Liste des Type Bourse(s)' => route('type-bourses.index'), 'Modifier Type Bourse' => ''];
@endphp
@extends('layouts.app')

@section('template_title')
    Formulaire de modification: Type Bourse
@endsection

@section('content')
    <section class="">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('type-bourses.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Mettre à jour Type Bourse</h5>
                            <span>Formulaire de modification: Type Bourse</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('type-bourses.update', $typeBourse->CodeTypeBourse) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('type-bourse.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
