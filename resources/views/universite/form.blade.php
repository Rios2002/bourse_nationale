<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_universite" class="form-label">{{ __('Codeuniversite') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="CodeUniversite" class="form-control @error('CodeUniversite') is-invalid @enderror rounded-05" value="{{ old('CodeUniversite', $universite?->CodeUniversite) }}" id="code_universite" >
            {!! $errors->first('CodeUniversite', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="libelle_universite" class="form-label">{{ __('Libelleuniversite') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="LibelleUniversite" class="form-control @error('LibelleUniversite') is-invalid @enderror rounded-05" value="{{ old('LibelleUniversite', $universite?->LibelleUniversite) }}" id="libelle_universite" >
            {!! $errors->first('LibelleUniversite', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
