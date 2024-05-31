<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_pays" class="form-label">{{ __('Codepays') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="CodePays" class="form-control @error('CodePays') is-invalid @enderror rounded-05" value="{{ old('CodePays', $pay?->CodePays) }}" id="code_pays" >
            {!! $errors->first('CodePays', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="libelle_pays" class="form-label">{{ __('Libellepays') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="LibellePays" class="form-control @error('LibellePays') is-invalid @enderror rounded-05" value="{{ old('LibellePays', $pay?->LibellePays) }}" id="libelle_pays" >
            {!! $errors->first('LibellePays', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
