<div class="form-group {{ $errors->has('descricao') ? 'has-error' : ''}}">
    <label for="descricao" class="col-md-4 control-label">{{ 'Descricao' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="descricao" type="text" id="descricao" value="{{ $estado->descricao or ''}}" >
        {!! $errors->first('descricao', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
