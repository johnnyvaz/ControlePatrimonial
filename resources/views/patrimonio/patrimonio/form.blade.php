<div class="form-group {{ $errors->has('descricao') ? 'has-error' : ''}}">
    <label for="descricao" class="col-md-4 control-label">{{ 'Descricao' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="descricao" type="text" id="descricao" value="{{ $patrimonio->descricao or ''}}" required >
        {!! $errors->first('descricao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="estado" type="text" id="estado" value="{{ $patrimonio->estado or ''}}" required>
        {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('valor') ? 'has-error' : ''}}">
    <label for="valor" class="col-md-4 control-label">{{ 'Valor' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="valor" type="number" id="valor" onchange="converter(this)" value="{{ $patrimonio->valor or ''}}" >
        {!! $errors->first('valor', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('quantidade') ? 'has-error' : ''}}">
    <label for="quantidade" class="col-md-4 control-label">{{ 'Quantidade' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="quantidade" type="number" id="quantidade" onchange="converter(this)" value="{{ $patrimonio->quantidade or ''}}" >
        {!! $errors->first('quantidade', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
    <label for="total" class="col-md-4 control-label">{{ 'Total' }}</label>
    <div class="col-md-6">
        {{--  <input class="form-control" name="total" type="number" id="total" value="{{ $patrimonio->total or ''}}" readonly >  --}}
        <input class="form-control" name="total" type="number" id="total" readonly >
        {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dataAquisicao') ? 'has-error' : ''}}">
    <label for="dataAquisicao" class="col-md-4 control-label">{{ 'Dataaquisicao' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dataAquisicao" type="date" id="dataAquisicao" value="{{ $patrimonio->dataAquisicao or ''}}" >
        {!! $errors->first('dataAquisicao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('observacao') ? 'has-error' : ''}}">
    <label for="observacao" class="col-md-4 control-label">{{ 'Observacao' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="observacao" type="textarea" id="observacao" >{{ $patrimonio->observacao or ''}}</textarea>
        {!! $errors->first('observacao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
    <label for="foto" class="col-md-4 control-label">{{ 'Foto' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="foto" type="file" id="foto" value="{{ $patrimonio->foto or ''}}" >
        {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>

<script type="text/javascript">
      
    function totalizar() {
        var quantidade = document.getElementById('quantidade').value;
        var valor = document.getElementById('valor').value;

        var resultado = 0;
           resultado = quantidade * valor;
        
        document.getElementById('total').value = resultado;

    };
 
 </script>
