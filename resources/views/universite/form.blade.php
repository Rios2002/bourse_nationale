<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_universites" class="form-label">{{ __('Codeuniversites') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="CodeUniversites" class="form-control @error('CodeUniversites') is-invalid @enderror rounded-05" value="{{ old('CodeUniversites', $universite?->CodeUniversites) }}" id="code_universites" >
            {!! $errors->first('CodeUniversites', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="libelle_universites" class="form-label">{{ __('Libelleuniversites') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="LibelleUniversites" class="form-control @error('LibelleUniversites') is-invalid @enderror rounded-05" value="{{ old('LibelleUniversites', $universite?->LibelleUniversites) }}" id="libelle_universites" >
            {!! $errors->first('LibelleUniversites', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
