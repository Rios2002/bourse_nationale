<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_etablissement" class="form-label">{{ __('Codeetablissement') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="CodeEtablissement" class="form-control @error('CodeEtablissement') is-invalid @enderror rounded-05" value="{{ old('CodeEtablissement', $etablissement?->CodeEtablissement) }}" id="code_etablissement" >
            {!! $errors->first('CodeEtablissement', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="libelle_etablissement" class="form-label">{{ __('Libelleetablissement') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="LibelleEtablissement" class="form-control @error('LibelleEtablissement') is-invalid @enderror rounded-05" value="{{ old('LibelleEtablissement', $etablissement?->LibelleEtablissement) }}" id="libelle_etablissement" >
            {!! $errors->first('LibelleEtablissement', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_universite" class="form-label">{{ __('Codeuniversite') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="CodeUniversite" class="form-control @error('CodeUniversite') is-invalid @enderror rounded-05" value="{{ old('CodeUniversite', $etablissement?->CodeUniversite) }}" id="code_universite" > -->
           <select name="CodeUniversite" id=""
                class="form-select select2 form-control  @error('CodeUniversite') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($universites as $universite)
                    <option value="{{$universite->CodeUniversite}}" @if ($universite->CodeUniversite == old('CodeUniversite', $etablissement?->CodeUniversite)) selected @endif>
                        {{ $universite->LibelleUniversite }}</option>
                @endforeach
            </select>
            {!! $errors->first('CodeUniversite', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
