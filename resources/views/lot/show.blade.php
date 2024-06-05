@php
    $pagetitle = 'Détails Lot';
    $breadcrumbs = ['Liste des Lot' => route('lots.index'), 'Détails Lot' => ''];
@endphp

@extends('layouts.app')

@section('template_title')
    Détails  Lot
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('lots.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="row">

                            

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codepv:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $lot->CodePV }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Numero:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $lot->Numero }}"
                                readonly>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
