@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Editar Usuário</h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">
                {!!
                            form($form->add('edit','submit',[
                                'attr' => ['class' => 'btn btn-primary btn-block'],
                                'label' => Icon::create('save').' Editar'
                            ]))
                        !!}
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@stop
