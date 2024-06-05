<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="num_table" class="form-label">{{ __('Num Table') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="Num_table" class="form-control @error('Num_table') is-invalid @enderror rounded-05" value="{{ old('Num_table', $eligible?->Num_table) }}" id="num_table" >
            {!! $errors->first('Num_table', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_annee_academique" class="form-label">{{ __('Codeanneeacademique') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="CodeAnneeAcademique" class="form-control @error('CodeAnneeAcademique') is-invalid @enderror rounded-05" value="{{ old('CodeAnneeAcademique', $eligible?->CodeAnneeAcademique) }}" id="code_annee_academique" > -->
            <select name="CodeAnneeAcademique" id=""
                class="form-select select2 form-control  @error('CodeAnneeAcademique') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($annee_academiques as $annee_academique)
                    <option value="{{$annee_academique->CodeAnneeAcademique}}" @if ($annee_academique->CodeAnneeAcademique == old('CodeAnneeAcademique', $eligible?->CodeAnneeAcademique)) selected @endif>
                        {{ $annee_academique->LibelleAnneeAcademique }}</option>
                @endforeach
            </select>
            {!! $errors->first('CodeAnneeAcademique', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="nom" class="form-label">{{ __('Nom') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="Nom" class="form-control @error('Nom') is-invalid @enderror rounded-05" value="{{ old('Nom', $eligible?->Nom) }}" id="nom" >
            {!! $errors->first('Nom', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="prenoms" class="form-label">{{ __('Prenoms') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="Prenoms" class="form-control @error('Prenoms') is-invalid @enderror rounded-05" value="{{ old('Prenoms', $eligible?->Prenoms) }}" id="prenoms" >
            {!! $errors->first('Prenoms', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="numero" class="form-label">{{ __('Numero') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="Numero" class="form-control @error('Numero') is-invalid @enderror rounded-05" value="{{ old('Numero', $eligible?->Numero) }}" id="numero" >
            {!! $errors->first('Numero', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="sexe" class="form-label">{{ __('Sexe') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="Sexe" class="form-control @error('Sexe') is-invalid @enderror rounded-05" value="{{ old('Sexe', $eligible?->Sexe) }}" id="sexe" >
            {!! $errors->first('Sexe', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="serie" class="form-label">{{ __('Serie') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="Serie" class="form-control @error('Serie') is-invalid @enderror rounded-05" value="{{ old('Serie', $eligible?->Serie) }}" id="serie" >
            {!! $errors->first('Serie', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="lieu_naissance" class="form-label">{{ __('Lieunaissance') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="LieuNaissance" class="form-control @error('LieuNaissance') is-invalid @enderror rounded-05" value="{{ old('LieuNaissance', $eligible?->LieuNaissance) }}" id="lieu_naissance" >
            {!! $errors->first('LieuNaissance', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="moyenne" class="form-label">{{ __('Moyenne') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="Moyenne" class="form-control @error('Moyenne') is-invalid @enderror rounded-05" value="{{ old('Moyenne', $eligible?->Moyenne) }}" id="moyenne" >
            {!! $errors->first('Moyenne', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="mention" class="form-label">{{ __('Mention') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="Mention" class="form-control @error('Mention') is-invalid @enderror rounded-05" value="{{ old('Mention', $eligible?->Mention) }}" id="mention" >
            {!! $errors->first('Mention', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="date_naissance" class="form-label">{{ __('Datenaissance') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="date" name="DateNaissance" class="form-control @error('DateNaissance') is-invalid @enderror rounded-05" value="{{ old('DateNaissance', $eligible?->DateNaissance) }}" id="date_naissance" >
            {!! $errors->first('DateNaissance', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
