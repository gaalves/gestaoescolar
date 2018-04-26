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

                    {!! Button::primary('Novo Usuário')->asLinkTo(route('admin.users.create')) !!}

                <br>

                    {!!
                       Table::withContents($users->items())
                       ->striped()
                       ->callback('Ações', function($field, $model){
                            $linkEdit = route('admin.users.edit', ['user' => $model->id]);
                            $linkShow = route('admin.users.show', ['user' => $model->id]);
                            return Button::Link(Icon::create('edit').'Editar')->asLinkTo($linkEdit).'|'.
                                Button::Link(Icon::create('folder-open').'Ver')->asLinkTo($linkShow);
                       })
                   !!}

                {!! $users->links() !!}
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@stop

