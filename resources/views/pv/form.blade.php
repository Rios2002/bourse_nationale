<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_p_v" class="form-label">{{ __('Codepv') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="CodePV" class="form-control @error('CodePV') is-invalid @enderror rounded-05" value="{{ old('CodePV', $pv?->CodePV) }}" id="code_p_v" >
            {!! $errors->first('CodePV', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="reference__p_v" class="form-label">{{ __('Reference Pv') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="Reference_PV" class="form-control @error('Reference_PV') is-invalid @enderror rounded-05" value="{{ old('Reference_PV', $pv?->Reference_PV) }}" id="reference__p_v" >
            {!! $errors->first('Reference_PV', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="date_debut_session" class="form-label">{{ __('Datedebutsession') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="date" name="DateDebutSession" class="form-control @error('DateDebutSession') is-invalid @enderror rounded-05" value="{{ old('DateDebutSession', $pv?->DateDebutSession) }}" id="date_debut_session" >
            {!! $errors->first('DateDebutSession', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="date_fin_session" class="form-label">{{ __('Datefinsession') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="date" name="DateFinSession" class="form-control @error('DateFinSession') is-invalid @enderror rounded-05" value="{{ old('DateFinSession', $pv?->DateFinSession) }}" id="date_fin_session" >
            {!! $errors->first('DateFinSession', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="annee_civile" class="form-label">{{ __('Anneecivile') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="number" name="AnneeCivile" class="form-control @error('AnneeCivile') is-invalid @enderror rounded-05" value="{{ old('AnneeCivile', $pv?->AnneeCivile) }}" id="annee_civile" >
            {!! $errors->first('AnneeCivile', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="note_bas_page" class="form-label">{{ __('Notebaspage') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="number" name="NoteBasPage" class="form-control @error('NoteBasPage') is-invalid @enderror rounded-05" value="{{ old('NoteBasPage', $pv?->NoteBasPage) }}" id="note_bas_page" >
            {!! $errors->first('NoteBasPage', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="date_transmission_liste" class="form-label">{{ __('Datetransmissionliste') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="date" name="DateTransmissionListe" class="form-control @error('DateTransmissionListe') is-invalid @enderror rounded-05" value="{{ old('DateTransmissionListe', $pv?->DateTransmissionListe) }}" id="date_transmission_liste" >
            {!! $errors->first('DateTransmissionListe', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="ref_lettre_transmission_liste" class="form-label">{{ __('Reflettretransmissionliste') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="RefLettreTransmissionListe" class="form-control @error('RefLettreTransmissionListe') is-invalid @enderror rounded-05" value="{{ old('RefLettreTransmissionListe', $pv?->RefLettreTransmissionListe) }}" id="ref_lettre_transmission_liste" >
            {!! $errors->first('RefLettreTransmissionListe', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="statut" class="form-label">{{ __('Statut') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="statut" class="form-control @error('statut') is-invalid @enderror rounded-05" value="{{ old('statut', $pv?->statut) }}" id="statut" >
            {!! $errors->first('statut', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
