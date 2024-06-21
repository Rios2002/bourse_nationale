@php
    $pagetitle = 'Vérification';
    $breadcrumbs = [];
@endphp

@extends('layouts.app')


@section('content')
<div class="form-group my-2">
                <div class="alert alert-info">
                <strong>Information :</strong>    
                Vous devez remplir ce formulaire afin d'accéder à cette platefrome réservé aux boursiers
                </div>
            </div>
<div class="card">
    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                 <form action="{{ route('route-enregistrer')}}" method="post" class="my-5">
            @csrf
            
           


            <div class="form-group my-2">

                <strong class="text-dark mb-3">
                    <label for="" >
                        N° de Table
                    </label>
                    <strong class="text-danger"> * </strong> 
                </strong>
                <input type="text" class="mt-2 form-control rounded-05 @error('NumeroDeTable') is-invalid @enderror" name="NumeroDeTable" required>
            {!! $errors->first('NumeroDeTable', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            <small id="email" class="text-muted ">
                                    <i class="fa-solid fa-circle-info text-italic me-1 "></i>
                                    Le N° de table qui vous a été attribué au BAC / Concours
                                </small>
            </div>
            <div class="form-group mb-2 ">
            <strong> <label for="date_naissance" class="form-label">{{ __('Date de Naissance') }}</label> <strong class="text-danger"> * </strong>   </strong>
            <input type="date" name="DateNaissance" class="form-control @error('DateNaissance') is-invalid @enderror rounded-05" value="{{ old('DateNaissance') }}" id="date_naissance" required>
            {!! $errors->first('DateNaissance', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            <small id="email" class="text-muted ">
                                    <i class="fa-solid fa-circle-info text-italic me-1 "></i>
                                    La date de votre de naissance
                                </small>
        </div>
            <div class="form-group my-2">

                <strong class="text-dark mb-3">
                    <label for="" >
                        Année d'obtention
                    </label>
                    <strong class="text-danger"> * </strong> 
                </strong>
                @php
                $annees = array();
                for ($i=date('Y'); $i > date('Y')-50 ; $i--) { 
            $annees[$i]=$i;
          }
                @endphp

                {{
                html()->select("AnneeObtention",$annees)
                ->class("form-control form-select rounded-05 mt-2")
                ->value(old("AnneeObtention"))
                ->required()
                }}
                
                <small id="email" class="text-muted ">
                                    <i class="fa-solid fa-circle-info text-italic me-1 "></i>
                                    L'année d'obtention du BAC / Concours
                                </small>
            {!! $errors->first('NumeroDeTable', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-success rounded-05 w-100 mt-2">
                    Soumettre
                </button>
            </div>
            
        </form>
            </div>
        </div>
       
    </div>
</div>
@endsection