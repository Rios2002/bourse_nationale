<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_pays" class="form-label">{{ __('Codepays') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="CodePays" class="form-control @error('CodePays') is-invalid @enderror rounded-05" value="{{ old('CodePays', $taux?->CodePays) }}" id="code_pays" > -->
            <select name="CodePays" id=""
                class="form-select select2 form-control  @error('CodePays') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($pays as $pay)
                    <option value="{{$pay->CodePays}}" @if ($pay->CodePays == old('CodePays', $taux?->CodePays)) selected @endif>
                        {{ $pay->LibellePays }}</option>
                @endforeach
            </select>
            {!! $errors->first('CodePays', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_filiere" class="form-label">{{ __('Codefiliere') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="CodeFiliere" class="form-control @error('CodeFiliere') is-invalid @enderror rounded-05" value="{{ old('CodeFiliere', $taux?->CodeFiliere) }}" id="code_filiere" > -->
            <select name="CodeFiliere" id=""
                class="form-select select2 form-control  @error('CodeFiliere') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($filieres as $filiere)
                    <option value="{{$filiere->CodeFiliere}}" @if ($filiere->CodeFiliere == old('CodeFiliere', $taux?->CodeFiliere)) selected @endif>
                        {{ $filiere->LibelleFiliere }}</option>
                @endforeach
            </select>
            {!! $errors->first('CodeFiliere', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_annee_etude" class="form-label">{{ __('Codeanneeetude') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="CodeAnneeEtude" class="form-control @error('CodeAnneeEtude') is-invalid @enderror rounded-05" value="{{ old('CodeAnneeEtude', $taux?->CodeAnneeEtude) }}" id="code_annee_etude" > -->
            <select name="CodeAnneeEtude" id=""
                class="form-select select2 form-control  @error('CodeAnneeEtude') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($annee_etudes as $annee_etude)
                    <option value="{{$annee_etude->CodeAnneeEtude}}" @if ($annee_etude->CodeAnneeEtude == old('CodeAnneeEtude', $taux?->CodeAnneeEtude)) selected @endif>
                        {{ $annee_etude->CodeAnneeEtude }}</option>
                @endforeach
            </select>
            {!! $errors->first('CodeAnneeEtude', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_annee_academique" class="form-label">{{ __('Codeanneeacademique') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="CodeAnneeAcademique" class="form-control @error('CodeAnneeAcademique') is-invalid @enderror rounded-05" value="{{ old('CodeAnneeAcademique', $taux?->CodeAnneeAcademique) }}" id="code_annee_academique" > -->
            <select name="CodeAnneeAcademique" id=""
                class="form-select select2 form-control  @error('CodeAnneeAcademique') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($annee_academiques as $annee_academique)
                    <option value="{{$annee_academique->CodeAnneeAcademique}}" @if ($annee_academique->CodeAnneeAcademique == old('CodeAnneeAcademique', $taux?->CodeAnneeAcademique)) selected @endif>
                        {{ $annee_academique->LibelleAnneeAcademique }}</option>
                @endforeach
            </select>
            {!! $errors->first('CodeAnneeAcademique', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="taux" class="form-label">{{ __('Taux') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="taux" class="form-control @error('taux') is-invalid @enderror rounded-05" value="{{ old('taux', $taux?->taux) }}" id="taux" >
            {!! $errors->first('taux', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
