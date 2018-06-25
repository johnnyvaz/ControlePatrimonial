{{--  @extends('layouts.app')  --}}
@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row">
            {{--  @include('admin.sidebar')  --}}

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Tipo {{ $tipo->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/patrimonio/tipo') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/patrimonio/tipo/' . $tipo->id . '/edit') }}" title="Edit Tipo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('patrimonio/tipo' . '/' . $tipo->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Tipo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $tipo->id }}</td>
                                    </tr>
                                    <tr><th> Descricao </th><td> {{ $tipo->descricao }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
