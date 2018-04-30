@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Editar meu perfil de usuário</h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">

                <div class="row">
                    <div class="col-md-4">
                        {!!
           form($form->add('insert','submit',[
               'attr' => ['class' => 'btn btn-primary btn-block'],
               'label' => Icon::create('floppy-disk').' Editar'
           ]))
           !!}
                    </div>
                </div>





            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@stop



