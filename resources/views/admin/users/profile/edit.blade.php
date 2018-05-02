@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="col-md-12">

        <div class="box box-default">
            <!-- /.box-header -->
            @component('admin.users.tabs-component',['user' => $form->getModel()])
                <div class="box-body">

                        <?php $icon = Icon::create('pencil');?>
                        {!!
                            form($form->add('salve', 'submit', [
                                'attr' => ['class' => 'btn btn-primary btn-block'],
                                'label' => $icon
                            ]))
                        !!}


                </div>
                <!-- /.box-body -->
            @endcomponent
        </div>
        <!-- /.box -->
    </div>
@stop



