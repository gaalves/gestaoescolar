@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Listagem de Disciplinas</h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">

                    {!! Button::primary('Nova Disciplinas')->asLinkTo(route('admin.subjects.create')) !!}

                <br>

                    {!!
                       Table::withContents($subjects->items())
                       ->striped()
                       ->callback('Ações', function($field, $model){
                            $linkEdit = route('admin.subjects.edit', ['subject' => $model->id]);
                            $linkShow = route('admin.subjects.show', ['subject' => $model->id]);
                            return Button::Link(Icon::create('edit').'Editar')->asLinkTo($linkEdit).'|'.
                                Button::Link(Icon::create('folder-open').'Ver')->asLinkTo($linkShow);
                       })
                   !!}

                {!! $subjects->links() !!}
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@stop

