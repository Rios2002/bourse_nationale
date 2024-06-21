<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_demande_allocation" class="form-label">{{ __('Codedemandeallocation') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="CodeDemandeAllocation" class="form-control @error('CodeDemandeAllocation') is-invalid @enderror rounded-05" value="{{ old('CodeDemandeAllocation', $demandeAllocation?->CodeDemandeAllocation) }}" id="code_demande_allocation" >
            {!! $errors->first('CodeDemandeAllocation', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="type" class="form-label">{{ __('Type') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="type" class="form-control @error('type') is-invalid @enderror rounded-05" value="{{ old('type', $demandeAllocation?->type) }}" id="type" >
            {!! $errors->first('type', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="statut" class="form-label">{{ __('Statut') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="statut" class="form-control @error('statut') is-invalid @enderror rounded-05" value="{{ old('statut', $demandeAllocation?->statut) }}" id="statut" >
            {!! $errors->first('statut', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_pays" class="form-label">{{ __('Codepays') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="CodePays" class="form-control @error('CodePays') is-invalid @enderror rounded-05" value="{{ old('CodePays', $demandeAllocation?->CodePays) }}" id="code_pays" > -->
            <select name="CodePays" id=""
                class="form-select select2 form-control  @error('CodePays') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($pays as $pay)
                    <option value="{{$pay->CodePays}}" @if ($pay->CodePays == old('CodePays', $demandeAllocation?->CodePays)) selected @endif>
                        {{ $pay->LibellePays }}</option>
                @endforeach
            </select>
            {!! $errors->first('CodePays', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_filiere" class="form-label">{{ __('Codefiliere') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="CodeFiliere" class="form-control @error('CodeFiliere') is-invalid @enderror rounded-05" value="{{ old('CodeFiliere', $demandeAllocation?->CodeFiliere) }}" id="code_filiere" > -->
            <select name="CodeFiliere" id=""
                class="form-select select2 form-control  @error('CodeFiliere') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($filieres as $filiere)
                    <option value="{{$filiere->CodeFiliere}}" @if ($filiere->CodeFiliere == old('CodeFiliere', $demandeAllocation?->CodeFiliere)) selected @endif>
                        {{ $filiere->LibelleFiliere }}</option>
                @endforeach
            </select>
            {!! $errors->first('CodeFiliere', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_annee_academique" class="form-label">{{ __('Codeanneeacademique') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="CodeAnneeAcademique" class="form-control @error('CodeAnneeAcademique') is-invalid @enderror rounded-05" value="{{ old('CodeAnneeAcademique', $demandeAllocation?->CodeAnneeAcademique) }}" id="code_annee_academique" > -->
            <select name="CodeAnneeAcademique" id=""
                class="form-select select2 form-control  @error('CodeAnneeAcademique') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($annee_academiques as $annee_academique)
                    <option value="{{$annee_academique->CodeAnneeAcademique}}" @if ($annee_academique->CodeAnneeAcademique == old('CodeAnneeAcademique', $demandeAllocation?->CodeAnneeAcademique)) selected @endif>
                        {{ $annee_academique->LibelleAnneeAcademique }}</option>
                @endforeach
            </select>
            {!! $errors->first('CodeAnneeAcademique', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_annee_etude" class="form-label">{{ __('Codeanneeetude') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="CodeAnneeEtude" class="form-control @error('CodeAnneeEtude') is-invalid @enderror rounded-05" value="{{ old('CodeAnneeEtude', $demandeAllocation?->CodeAnneeEtude) }}" id="code_annee_etude" > -->
            <select name="CodeAnneeEtude" id=""
                class="form-select select2 form-control  @error('CodeAnneeEtude') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($annee_etudes as $annee_etude)
                    <option value="{{$annee_etude->CodeAnneeEtude}}" @if ($annee_etude->CodeAnneeEtude == old('CodeAnneeEtude', $demandeAllocation?->CodeAnneeEtude)) selected @endif>
                        {{ $annee_etude->CodeAnneeEtude }}</option>
                @endforeach
            </select>
            {!! $errors->first('CodeAnneeEtude', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_diplome" class="form-label">{{ __('Codediplome') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="CodeDiplome" class="form-control @error('CodeDiplome') is-invalid @enderror rounded-05" value="{{ old('CodeDiplome', $demandeAllocation?->CodeDiplome) }}" id="code_diplome" > -->
            <select name="CodeDiplome" id=""
                class="form-select select2 form-control  @error('CodeDiplome') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($diplomes as $diplome)
                    <option value="{{$diplome->CodeDiplome}}" @if ($diplome->CodeDiplome == old('CodeDiplome', $demandeAllocation?->CodeDiplome)) selected @endif>
                        {{ $diplome->CodeDiplome }}</option>
                @endforeach
            </select>
            {!! $errors->first('CodeDiplome', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="user_id" class="form-label">{{ __('User Id') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror rounded-05" value="{{ old('user_id', $demandeAllocation?->user_id) }}" id="user_id" > -->
            <select name="user_id" id=""
                class="form-select select2 form-control  @error('user_id') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($eligibles as $eligible)
                    <option value="{{$eligible->user_id}}" @if ($eligible->user_id == old('user_id', $demandeAllocation?->user_id)) selected @endif>
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
