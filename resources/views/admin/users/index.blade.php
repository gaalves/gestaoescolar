@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Listagem de Usuários</div>

                    <div class="card-body">
                        <div class="row">
                            {!! Button::primary('Novo Usuário')->asLinkTo(route('admin.users.create')) !!}
                        </div>
                        <br>
                        <div class="row">
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
                        </div>
                        {!! $users->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
