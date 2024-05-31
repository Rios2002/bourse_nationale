@php
    $pagetitle = 'Détails Diplome';
    $breadcrumbs = ['Liste des Diplome' => route('diplomes.index'), 'Détails Diplome' => ''];
@endphp

@extends('layouts.app')

@section('template_title')
    Détails  Diplome
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('diplomes.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="row">

                            

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codediplome:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $diplome->CodeDiplome }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Libellediplome:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $diplome->LibelleDiplome }}"
                                readonly>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
