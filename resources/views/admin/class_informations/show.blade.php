@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Editar Turma</h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">
                @php
                    $linkEdit = route('admin.class_informations.edit', ['class_information' => $class_information->id]);
                    $linkDelete = route('admin.class_informations.destroy', ['class_information' => $class_information->id]);
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
                            <td>{{ $class_information->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Data Inícios</th>
                            <td>{{ $class_information->date_start->format('d/m/y') }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Data Fim</th>
                            <td>{{ $class_information->date_end->format('d/m/y') }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Ciclo</th>
                            <td>{{ $class_information->cicle}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Subdivisão</th>
                            <td>{{ $class_information->subdivision}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Semestre</th>
                            <td>{{ $class_information->year}}</td>
                        </tr>
                        </tbody>
                    </table>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@stop



