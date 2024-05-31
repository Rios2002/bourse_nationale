<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_diplome" class="form-label">{{ __('Codediplome') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="CodeDiplome" class="form-control @error('CodeDiplome') is-invalid @enderror rounded-05" value="{{ old('CodeDiplome', $diplome?->CodeDiplome) }}" id="code_diplome" >
            {!! $errors->first('CodeDiplome', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="libelle_diplome" class="form-label">{{ __('Libellediplome') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="LibelleDiplome" class="form-control @error('LibelleDiplome') is-invalid @enderror rounded-05" value="{{ old('LibelleDiplome', $diplome?->LibelleDiplome) }}" id="libelle_diplome" >
            {!! $errors->first('LibelleDiplome', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
