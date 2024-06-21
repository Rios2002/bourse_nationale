@php
    $pagetitle = 'Détails Demande Allocation';
    $breadcrumbs = ['Liste des Demande Allocation' => route('demande-allocations.index'), 'Détails Demande Allocation' => ''];
@endphp

@extends('layouts.app')

@section('template_title')
    Détails  Demande Allocation
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('demande-allocations.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="row">

                            

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codedemandeallocation:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeAllocation->CodeDemandeAllocation }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Type:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeAllocation->type }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Statut:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeAllocation->statut }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codepays:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeAllocation->CodePays }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codefiliere:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeAllocation->CodeFiliere }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codeanneeacademique:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeAllocation->CodeAnneeAcademique }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codeanneeetude:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeAllocation->CodeAnneeEtude }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codediplome:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeAllocation->CodeDiplome }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">User Id:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $demandeAllocation->user_id }}"
                                readonly>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
