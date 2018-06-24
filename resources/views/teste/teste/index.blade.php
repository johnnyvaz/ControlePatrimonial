{{--  @extends('layouts.app')  --}}
@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row">
            {{--  @include('admin.sidebar')  --}}

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"><h1>Teste</h1></div>
                    <div class="card-body">
                        <a href="{{ url('/admin/teste/create') }}" class="btn btn-success btn-sm" title="Add New Teste">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/teste') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Nome</th><th>Campo1</th><th>Campo2</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($teste as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->nome }}</td><td>{{ $item->campo1 }}</td><td>{{ $item->campo2 }}</td>
                                        <td>
                                            <a href="{{ url('/admin/teste/' . $item->id) }}" title="View Teste"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/teste/' . $item->id . '/edit') }}" title="Edit Teste"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/teste' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Teste" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $teste->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
