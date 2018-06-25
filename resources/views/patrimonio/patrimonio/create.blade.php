{{--  @extends('layouts.app')  --}}
@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row">
            {{--  @include('admin.sidebar')  --}}

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New Patrimonio</div>
                    <div class="card-body">
                        <a href="{{ url('/patrimonio/patrimonio') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form id="formPatr" onkeydown="return totalizar(this)" method="POST" action="{{ url('/patrimonio/patrimonio') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('patrimonio.patrimonio.form')

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
