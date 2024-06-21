@php
    $pagetitle = 'Nouveau Demande Allocation';
    $breadcrumbs = ['Liste des Demande Allocation(s)' => route('demande-allocations.index'), 'Nouveau Demande Allocation' => route('demande-allocations.create')];
@endphp
@extends('layouts.app')

@section('template_title')
    Nouveau Demande Allocation
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default  border">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('demande-allocations.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Nouveau : Demande Allocation</h5>
                            <span>Formulaire d'ajout d'un(e)  Demande Allocation</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('demande-allocations.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('demande-allocation.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
