@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Usuário</div>

                    <div class="card-body">
                        {!!
                            form($form->add('edit','submit',[
                                'attr' => ['class' => 'btn btn-primary btn-block'],
                                'label' => Icon::create('save').' Editar'
                            ]))
                        !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
