{{--  @extends('layouts.app')  --}}
@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            {{--  @include('admin.sidebar')  --}}

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Teste {{ $teste->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/teste') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/teste/' . $teste->id . '/edit') }}" title="Edit Teste"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/teste' . '/' . $teste->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Teste" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $teste->id }}</td>
                                    </tr>
                                    <tr><th> Nome </th><td> {{ $teste->nome }} </td></tr><tr><th> Campo1 </th><td> {{ $teste->campo1 }} </td></tr><tr><th> Campo2 </th><td> {{ $teste->campo2 }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
