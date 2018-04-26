@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Usuário - {{ $user->name }}</h1>
@stop

@section('content')
    <div class="col-md-12">
        <div class="box box-default">
            <!-- /.box-header -->
            <div class="box-body">
                {!! Button
                    ::normal('Listar usuários')
                    ->appendIcon(Icon::thList())
                    ->asLinkTo(route('admin.users.index'))
                    ->addAttributes([
                        'class' => 'hidden-print'
                    ])
            !!}
                <br/><br/>
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th scope="row">#</th>
                        <td>{{$user->id}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Nome</th>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <th scope="row">E-mail</th>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Password</th>
                        <td>
                            <span data-toggle="tooltip" title="" class="badge bg-yellow" data-original-title="3 New Messages">
                                {{ $user->password }}
                            </span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@stop
