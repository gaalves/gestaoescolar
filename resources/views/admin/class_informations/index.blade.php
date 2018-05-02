@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Listagem de Turmas</h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">

                    {!! Button::primary('Nova Turma')->asLinkTo(route('admin.class_informations.create')) !!}

                <br>

                    {!!
                       Table::withContents($class_informations->items())
                       ->striped()
                       ->callback('Ações', function($field, $model){
                            $linkEdit = route('admin.class_informations.edit', ['subject' => $model->id]);
                            $linkShow = route('admin.class_informations.show', ['subject' => $model->id]);
                            return Button::Link(Icon::create('edit').'Editar')->asLinkTo($linkEdit).'|'.
                                Button::Link(Icon::create('folder-open').'Ver')->asLinkTo($linkShow);
                       })
                   !!}

                {!! $class_informations->links() !!}
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@stop

