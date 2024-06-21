<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="objet" class="form-label">{{ __('Objet') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="objet" class="form-control @error('objet') is-invalid @enderror rounded-05" value="{{ old('objet', $demandeReclamation?->objet) }}" id="objet" >
            {!! $errors->first('objet', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="contenu" class="form-label">{{ __('Contenu') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="contenu" class="form-control @error('contenu') is-invalid @enderror rounded-05" value="{{ old('contenu', $demandeReclamation?->contenu) }}" id="contenu" >
            {!! $errors->first('contenu', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="statut" class="form-label">{{ __('Statut') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="statut" class="form-control @error('statut') is-invalid @enderror rounded-05" value="{{ old('statut', $demandeReclamation?->statut) }}" id="statut" >
            {!! $errors->first('statut', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="user_id" class="form-label">{{ __('User Id') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror rounded-05" value="{{ old('user_id', $demandeReclamation?->user_id) }}" id="user_id" > -->
            <select name="user_id" id=""
                class="form-select select2 form-control  @error('user_id') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($eligibles as $eligible)
                    <option value="{{$eligible->user_id}}" @if ($eligible->user_id == old('user_id', $demandeReclamation?->user_id)) selected @endif>
                        {{ $eligible->Num_table }}</option>
                @endforeach
            </select>
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
