<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_annee_etude" class="form-label">{{ __('Codeanneeetude') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="CodeAnneeEtude" class="form-control @error('CodeAnneeEtude') is-invalid @enderror rounded-05" value="{{ old('CodeAnneeEtude', $anneeEtude?->CodeAnneeEtude) }}" id="code_annee_etude" >
            {!! $errors->first('CodeAnneeEtude', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
