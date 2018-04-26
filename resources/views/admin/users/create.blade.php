@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Novo Usuário</h1>
@stop

@section('content')
                   <div class="col-md-12">
                       <div class="box box-default">
                           <!-- /.box-header -->
                           <div class="box-body">
                               {!!
                                  form($form->add('insert','submit',[
                                      'attr' => ['class' => 'btn btn-primary btn-block'],
                                      'label' => Icon::create('save').' Inserir'
                                  ]))
                              !!}
                           </div>
                           <!-- /.box-body -->
                       </div>
                       <!-- /.box -->
                   </div>
@endsection
