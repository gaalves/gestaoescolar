@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 xmlns:v-on="http://www.w3.org/1999/xhtml">Administração de alunos na turma</h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">
                <!-- CRIAR UM COMPONENT VUE.JS -->
                <div id="class-student">
                    <class-student class-information="{{$class_information->id}}"></class-student>
                </div>



            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@stop

