<div class="">
    <div class="row">
        
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="code_p_v" class="form-label">{{ __('Codepv') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <!-- <input type="text" name="CodePV" class="form-control @error('CodePV') is-invalid @enderror rounded-05" value="{{ old('CodePV', $lot?->CodePV) }}" id="code_p_v" > -->
            <select name="CodePV" id=""
                class="form-select select2 form-control  @error('CodePV') is-invalid @enderror">
                <option value="">-- Sélectionner --</option>
                @foreach ($pvs as $pv)
                    <option value="{{$pv->CodePV}}" @if ($pv->CodePV == old('CodePV', $lot?->CodePV)) selected @endif>
                        {{ $pv->CodePV }}</option>
                @endforeach
            </select>
            {!! $errors->first('CodePV', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="col-lg-6 form-group mb-2 mb20">
            <strong> <label for="numero" class="form-label">{{ __('Numero') }}</label> <!-- <strong class="text-danger"> * </strong> -->  </strong>
            <input type="text" name="Numero" class="form-control @error('Numero') is-invalid @enderror rounded-05" value="{{ old('Numero', $lot?->Numero) }}" id="numero" >
            {!! $errors->first('Numero', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="box-footer mt-3">
        <button type="submit" class="btn btn-success rounded-1">Enregistrer</button>
    </div>
</div>
