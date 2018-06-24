<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="col-md-4 control-label">{{ 'Nome' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nome" type="text" id="nome" value="{{ $teste->nome or ''}}" >
        {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('campo1') ? 'has-error' : ''}}">
    <label for="campo1" class="col-md-4 control-label">{{ 'Campo1' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="campo1" type="text" id="campo1" value="{{ $teste->campo1 or ''}}" >
        {!! $errors->first('campo1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('campo2') ? 'has-error' : ''}}">
    <label for="campo2" class="col-md-4 control-label">{{ 'Campo2' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="campo2" type="text" id="campo2" value="{{ $teste->campo2 or ''}}" >
        {!! $errors->first('campo2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
