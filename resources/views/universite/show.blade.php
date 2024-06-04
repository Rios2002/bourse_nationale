@php
    $pagetitle = 'Détails Universite';
    $breadcrumbs = ['Liste des Universite' => route('universites.index'), 'Détails Universite' => ''];
@endphp

@extends('layouts.app')

@section('template_title')
    Détails  Universite
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('universites.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="row">

                            

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codeuniversites:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $universite->CodeUniversite }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Libelleuniversites:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $universite->LibelleUniversite }}"
                                readonly>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
