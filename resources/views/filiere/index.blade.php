@php
    $pagetitle = 'Liste des Filiere(s)';
    $breadcrumbs = ['Liste des Filiere(s)' => route('filieres.index')];
@endphp

@extends('layouts.app')


@section('content')
    <div class="">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">



                    <div class="card-body">
                      @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="text-end">
                            <a href="{{ route('filieres.create') }}" class="btn btn-sm btn-primary rounded-05"> Nouveau</a>
                        </div>
                        <div class="col mb-2">
                            <h5 class="card-title text-dark fw-bolder mb-0">Filiere(s)</h5>
                            <span>Liste des Filiere(s)</span>
                            <hr>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover datatable">
                                <thead class="thead">
                                    <tr>
                                        <th>N°</th>
                                        
									<th >Codefiliere</th>
									<th >Libellefiliere</th>
									<th >Codeetablissement</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($filieres as $filiere)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $filiere->CodeFiliere }}</td>
										<td >{{ $filiere->LibelleFiliere }}</td>
										<td >{{ $filiere->CodeEtablissement }}</td>

                                            <td>
                                                <div class="dropdown dropstart">
                                                    <a href="javascript:void(0)" class="text-muted show" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-expanded="true">
                                                        <i class="ti ti-dots-vertical fs-5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                                                        style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-20px, 1.6px, 0px);"
                                                        data-popper-placement="left-start">
                                                        <li>
                                                            <a class="dropdown-item d-flex align-items-center gap-3" href="{{ route('filieres.show',$filiere->id) }}">
                                                                <i class="fs-4 ti ti-eye"></i> Détails
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item d-flex align-items-center gap-3" href="{{ route('filieres.edit',$filiere->id) }}">
                                                                <i class="fs-4 ti ti-edit"></i> Modifier
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <form action="{{ route('filieres.destroy',$filiere->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item text-danger">
                                                                <i class="fs-4 ti ti-trash"></i> {{ __('Supprimer') }}
                                                                </button>
                                                            </form>

                                                        </li>
                                                    </ul>
                                                </div>
                                                {{--
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Actions
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="{{ route('filieres.show',$filiere->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Détails') }}</a>
                                                            <a class="dropdown-item" href="{{ route('filieres.edit',$filiere->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Modifier') }}</a>
                                                            <div class="dropdown-divider"></div>
                                                            <form action="{{ route('filieres.destroy',$filiere->id) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item text-danger"><i class="fa fa-fw fa-trash"></i> {{ __('Supprimer') }}</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                --}}
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $filieres->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection