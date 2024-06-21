<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="type" class="form-label">{{ __('Type') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="type" class="form-control @error('type') is-invalid @enderror rounded-05" value="{{ old('type', $demandeBillet?->type) }}" id="type" >
            {!! $errors->first('type', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="motif" class="form-label">{{ __('Motif') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="motif" class="form-control @error('motif') is-invalid @enderror rounded-05" value="{{ old('motif', $demandeBillet?->motif) }}" id="motif" >
            {!! $errors->first('motif', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="ville_depart" class="form-label">{{ __('Ville Depart') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="ville_depart" class="form-control @error('ville_depart') is-invalid @enderror rounded-05" value="{{ old('ville_depart', $demandeBillet?->ville_depart) }}" id="ville_depart" >
            {!! $errors->first('ville_depart', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="ville_destination" class="form-label">{{ __('Ville Destination') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="ville_destination" class="form-control @error('ville_destination') is-invalid @enderror rounded-05" value="{{ old('ville_destination', $demandeBillet?->ville_destination) }}" id="ville_destination" >
            {!! $errors->first('ville_destination', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="date_depart" class="form-label">{{ __('Date Depart') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="date" name="date_depart" class="form-control @error('date_depart') is-invalid @enderror rounded-05" value="{{ old('date_depart', $demandeBillet?->date_depart) }}" id="date_depart" >
            {!! $errors->first('date_depart', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="date_retour" class="form-label">{{ __('Date Retour') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="date" name="date_retour" class="form-control @error('date_retour') is-invalid @enderror rounded-05" value="{{ old('date_retour', $demandeBillet?->date_retour) }}" id="date_retour" >
            {!! $errors->first('date_retour', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="adresse" class="form-label">{{ __('Adresse') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="Adresse" class="form-control @error('Adresse') is-invalid @enderror rounded-05" value="{{ old('Adresse', $demandeBillet?->Adresse) }}" id="adresse" >
            {!! $errors->first('Adresse', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="statut" class="form-label">{{ __('Statut') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="statut" class="form-control @error('statut') is-invalid @enderror rounded-05" value="{{ old('statut', $demandeBillet?->statut) }}" id="statut" >
            {!! $errors->first('statut', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="user_id" class="form-label">{{ __('User Id') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror rounded-05" value="{{ old('user_id', $demandeBillet?->user_id) }}" id="user_id" > -->
            <select name="user_id" id=""
                class="form-select select2 form-control  @error('user_id') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($eligibles as $eligible)
                    <option value="{{$eligible->user_id}}" @if ($eligible->user_id == old('user_id', $demandeBillet?->user_id)) selected @endif>
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
