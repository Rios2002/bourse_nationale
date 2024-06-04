<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_filiere" class="form-label">{{ __('Codefiliere') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="CodeFiliere" class="form-control @error('CodeFiliere') is-invalid @enderror rounded-05" value="{{ old('CodeFiliere', $filiere?->CodeFiliere) }}" id="code_filiere" >
            {!! $errors->first('CodeFiliere', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="libelle_filiere" class="form-label">{{ __('Libellefiliere') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="LibelleFiliere" class="form-control @error('LibelleFiliere') is-invalid @enderror rounded-05" value="{{ old('LibelleFiliere', $filiere?->LibelleFiliere) }}" id="libelle_filiere" >
            {!! $errors->first('LibelleFiliere', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_etablissement" class="form-label">{{ __('Codeetablissement') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="c" class="form-control @error('CodeEtablissement') is-invalid @enderror rounded-05" value="{{ old('CodeEtablissement', $filiere?->CodeEtablissement) }}" id="code_etablissement" > -->
            <select name="CodeEtablissement" id=""
                class="form-select select2 form-control  @error('CodeEtablissement') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($etablissements as $etablissement)
                    <option value="{{$etablissement->CodeEtablissement}}" @if ($etablissement->CodeEtablissement == old('CodeEtablissement', $filiere?->CodeEtablissement)) selected @endif>
                        {{ $etablissement->LibelleEtablissement }}</option>
                @endforeach
            </select>
            {!! $errors->first('CodeEtablissement', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
