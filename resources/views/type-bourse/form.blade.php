<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_type_bourse" class="form-label">{{ __('Codetypebourse') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="CodeTypeBourse" class="form-control @error('CodeTypeBourse') is-invalid @enderror rounded-05" value="{{ old('CodeTypeBourse', $typeBourse?->CodeTypeBourse) }}" id="code_type_bourse" >
            {!! $errors->first('CodeTypeBourse', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="libelle_type_bourse" class="form-label">{{ __('Libelletypebourse') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="LibelleTypeBourse" class="form-control @error('LibelleTypeBourse') is-invalid @enderror rounded-05" value="{{ old('LibelleTypeBourse', $typeBourse?->LibelleTypeBourse) }}" id="libelle_type_bourse" > -->
            <select name="LibelleTypeBourse" id=""
                class="form-select select2 form-control  @error('LibelleTypeBourse') is-invalid @enderror">
                <option value="{{ $typeBourse?->LibelleTypeBourse }}">{{ $typeBourse?->LibelleTypeBourse }}</option>
                <option value="Bourse d'Excellence">Bourse d'Excellence</option>
                <option value="Bourse Inter-Etats">Bourse Inter-Etats</option>
                <option value="Bourse Enfant de Diplomate">Bourse Enfant de Diplomate</option>
                
            </select>
            {!! $errors->first('LibelleTypeBourse', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
