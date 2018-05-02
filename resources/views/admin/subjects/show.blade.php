@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Editar Disciplina</h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">
                @php
                    $linkEdit = route('admin.subjects.edit', ['subject' => $subject->id]);
                    $linkDelete = route('admin.subjects.destroy', ['subject' => $subject->id]);
                @endphp
                <div class="row">
                    <div class="col-md-4">
                        {!! Button::primary('Editar '.Icon::edit())->asLinkTo($linkEdit) !!}

                        {!!
                            Button::danger('Excluir '. Icon::trash())->asLinkTo($linkDelete)
                                ->addAttributes([
                                    'onclick' => "event.preventDefault();document.getElementById(\"form-delete\").submit();"
                                ])
                         !!}
                    </div>
                </div>


                @php
                    $formDelete = FormBuilder::plain([
                        'id' => 'form-delete',
                        'url' => $linkDelete,
                        'method' => 'DELETE',
                        'style' => 'display:none'
                    ])
                @endphp

                {!! form($formDelete) !!}
                <br>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th scope="row">ID</th>
                            <td>{{ $subject->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nome</th>
                            <td>{{ $subject->name }}</td>
                        </tr>

                        </tbody>
                    </table>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@stop



