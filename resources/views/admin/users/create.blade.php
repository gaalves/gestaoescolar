@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Novo Usuário</div>

                    <div class="card-body">
                        {!!
                            form($form->add('insert','submit',[
                                'attr' => ['class' => 'btn btn-primary btn-block'],
                                'label' => Icon::create('save').' Inserir'
                            ]))
                        !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
