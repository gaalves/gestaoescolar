@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Novo Usuário</div>
                    @php
                        $linkEdit = route('admin.users.edit', ['user' => $user->id]);
                        $linkDelete = route('admin.users.destroy', ['user' => $user->id]);
                    @endphp
                    <br>
                        <div class="col-md-4">
                            {!! Button::primary('Editar')->asLinkTo($linkEdit) !!}
                            {!!
                                Button::danger('Deletar')->asLinkTo($linkDelete)
                                    ->addAttributes([
                                        'onclick' => "event.preventDefault();document.getElementById(\"form-delete\").submit();"
                                    ])
                             !!}
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
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row">ID</th>
                                    <td>{{ $user->id }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nome</th>
                                    <td>{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
