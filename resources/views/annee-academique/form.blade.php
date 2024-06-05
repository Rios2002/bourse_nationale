<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_annee_academique" class="form-label">{{ __('Codeanneeacademique') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="CodeAnneeAcademique" class="form-control @error('CodeAnneeAcademique') is-invalid @enderror rounded-05" value="{{ old('CodeAnneeAcademique', $anneeAcademique?->CodeAnneeAcademique) }}" id="code_annee_academique" >
            {!! $errors->first('CodeAnneeAcademique', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="libelle_annee_academique" class="form-label">{{ __('Libelleanneeacademique') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="LibelleAnneeAcademique" class="form-control @error('LibelleAnneeAcademique') is-invalid @enderror rounded-05" value="{{ old('LibelleAnneeAcademique', $anneeAcademique?->LibelleAnneeAcademique) }}" id="libelle_annee_academique" >
            {!! $errors->first('LibelleAnneeAcademique', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="debut_echeance" class="form-label">{{ __('Debutecheance') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="date" name="DebutEcheance" class="form-control @error('DebutEcheance') is-invalid @enderror rounded-05" value="{{ old('DebutEcheance', $anneeAcademique?->DebutEcheance) }}" id="debut_echeance" >
            {!! $errors->first('DebutEcheance', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="fin_echeance" class="form-label">{{ __('Finecheance') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="date" name="FinEcheance" class="form-control @error('FinEcheance') is-invalid @enderror rounded-05" value="{{ old('FinEcheance', $anneeAcademique?->FinEcheance) }}" id="fin_echeance" >
            {!! $errors->first('FinEcheance', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="statut_annee_academique" class="form-label">{{ __('Statutanneeacademique') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="StatutAnneeAcademique" class="form-control @error('StatutAnneeAcademique') is-invalid @enderror rounded-05" value="{{ old('StatutAnneeAcademique', $anneeAcademique?->StatutAnneeAcademique) }}" id="statut_annee_academique" >
            {!! $errors->first('StatutAnneeAcademique', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
