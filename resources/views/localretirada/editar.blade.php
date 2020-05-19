@extends('layouts.app')

@section('titulo','Editar Produtor')

@section('navbar')
<a href="{{ route("home") }}">Início</a> > 
    <a href="{{ route("grupoConsumo.listar")}}">Grupos de Consumo</a> > 
    <a href="{{ route("grupoConsumo.gerenciar", ["id" => $grupoConsumo->id]) }}">Gerenciar Grupo: {{$grupoConsumo->name}}</a> >
    <a href="{{ route('locaisretirada.listar',['grupoconsumo_id' => $grupoConsumo->id]) }}">Locais de Retirada</a> > 
    Editar: {{$local->nome}}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Produtor</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('locaisretirada.atualizar') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="id" type="hidden" class="form-control" name="id" value="{{ $local->id }}">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('grupoConsumo') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <input id="grupoConsumo" type="hidden" class="form-control" name="grupoConsumo" value="{{$grupoConsumo->id}}">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Nome do Local</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" value="{{$local->nome}}" required autofocus>

                                @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a class="btn btn-danger" href="{{route('locaisretirada.listar',['grupoconsumo_id' => $grupoConsumo->id])}}">Voltar</a>
                                <button type="submit" class="btn btn-success">
                                    Atualizar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
