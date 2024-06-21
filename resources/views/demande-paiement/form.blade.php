<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_banque" class="form-label">{{ __('Codebanque') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="CodeBanque" class="form-control @error('CodeBanque') is-invalid @enderror rounded-05" value="{{ old('CodeBanque', $demandePaiement?->CodeBanque) }}" id="code_banque" >
            {!! $errors->first('CodeBanque', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_guichet" class="form-label">{{ __('Codeguichet') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="CodeGuichet" class="form-control @error('CodeGuichet') is-invalid @enderror rounded-05" value="{{ old('CodeGuichet', $demandePaiement?->CodeGuichet) }}" id="code_guichet" >
            {!! $errors->first('CodeGuichet', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="num_compte" class="form-label">{{ __('Numcompte') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="NumCompte" class="form-control @error('NumCompte') is-invalid @enderror rounded-05" value="{{ old('NumCompte', $demandePaiement?->NumCompte) }}" id="num_compte" >
            {!! $errors->first('NumCompte', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="cle_r_i_b" class="form-label">{{ __('Clerib') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="CleRIB" class="form-control @error('CleRIB') is-invalid @enderror rounded-05" value="{{ old('CleRIB', $demandePaiement?->CleRIB) }}" id="cle_r_i_b" >
            {!! $errors->first('CleRIB', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="i_b_a_n" class="form-label">{{ __('Iban') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="IBAN" class="form-control @error('IBAN') is-invalid @enderror rounded-05" value="{{ old('IBAN', $demandePaiement?->IBAN) }}" id="i_b_a_n" >
            {!! $errors->first('IBAN', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_swift" class="form-label">{{ __('Codeswift') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="CodeSwift" class="form-control @error('CodeSwift') is-invalid @enderror rounded-05" value="{{ old('CodeSwift', $demandePaiement?->CodeSwift) }}" id="code_swift" >
            {!! $errors->first('CodeSwift', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="adresse" class="form-label">{{ __('Adresse') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="Adresse" class="form-control @error('Adresse') is-invalid @enderror rounded-05" value="{{ old('Adresse', $demandePaiement?->Adresse) }}" id="adresse" >
            {!! $errors->first('Adresse', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="statut" class="form-label">{{ __('Statut') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="statut" class="form-control @error('statut') is-invalid @enderror rounded-05" value="{{ old('statut', $demandePaiement?->statut) }}" id="statut" >
            {!! $errors->first('statut', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="user_id" class="form-label">{{ __('User Id') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror rounded-05" value="{{ old('user_id', $demandePaiement?->user_id) }}" id="user_id" > -->
            <select name="user_id" id=""
                class="form-select select2 form-control  @error('user_id') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($eligibles as $eligible)
                    <option value="{{$eligible->user_id}}" @if ($eligible->user_id == old('user_id', $demandePaiement?->user_id)) selected @endif>
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
