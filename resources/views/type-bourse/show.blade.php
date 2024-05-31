@php
    $pagetitle = 'Détails Type Bourse';
    $breadcrumbs = ['Liste des Type Bourse' => route('type-bourses.index'), 'Détails Type Bourse' => ''];
@endphp

@extends('layouts.app')

@section('template_title')
    Détails  Type Bourse
@endsection

@section('content')
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <div class="card">


                    <div class="card-body">
                        <div class="text-end">
                            <a href="{{ route('type-bourses.index') }}" class="btn btn-sm btn-primary"> Retour</a>
                        </div>
                        <div class="row">

                            

                        <div class="col-lg-4">
                            <strong class="text-dark ">Codetypebourse:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $typeBourse->CodeTypeBourse }}"
                                readonly>
                        </div>

                        <div class="col-lg-4">
                            <strong class="text-dark ">Libelletypebourse:</strong>
                            <input type="text" class="form-control rounded-05 my-1 text-dark" value="{{ $typeBourse->LibelleTypeBourse }}"
                                readonly>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
