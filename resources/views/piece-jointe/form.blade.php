<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="libelle_piece_jointe" class="form-label">{{ __('Libellepiecejointe') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="LibellePieceJointe" class="form-control @error('LibellePieceJointe') is-invalid @enderror rounded-05" value="{{ old('LibellePieceJointe', $pieceJointe?->LibellePieceJointe) }}" id="libelle_piece_jointe" >
            {!! $errors->first('LibellePieceJointe', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
