@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">
                {{ Auth::user() }}
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@stop