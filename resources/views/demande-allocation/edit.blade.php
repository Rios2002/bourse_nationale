@php
    $pagetitle = 'Modifier Demande Allocation';
    $breadcrumbs = ['Liste des Demande Allocation(s)' => route('demande-allocations.index'), 'Modifier Demande Allocation' => ''];
@endphp
@extends('layouts.app')

@section('template_title')
    Formulaire de modification: Demande Allocation
@endsection

@section('content')
    <section class="">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">

                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('demande-allocations.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Mettre à jour Demande Allocation</h5>
                            <span>Formulaire de modification: Demande Allocation</span>
                            <hr>
                        </div>
                        <form method="POST" action="{{ route('demande-allocations.update', $demandeAllocation->CodeDemandeAllocation) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('demande-allocation.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
