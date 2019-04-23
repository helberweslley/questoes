@extends('adminlte::page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Matéria
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Matéria</a></li>
            <li class="active">Lista</li>
        </ol>

    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div><br/>
                @endif
            </div>
            <div class="col-xs-12">
                <div class="box">

                    <div class="box-header">
                        <h3 class="box-title">Lista de Matérias</h3>
                        <div class="box-tools">
                            <p class="pull-right">
                                <a href="{{action('MateriaController@create')}}"
                                   class="btn btn-success btn-sm ad-click-event">
                                    <i class="fa fa-fw fa-plus"> </i> Nova Matéria
                                </a>
                            </p>

                        </div>

                    </div>
                    <!-- /.box-header -->


                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>#</th>
                                <th>Matéria</th>
                            </tr>

                            @foreach ($materias as $materia)
                                <tr>
                                    <td>{{$materia->id}}</td>
                                    <td>{{$materia->materia}}</td>
                                    <td>{{$materia->disciplina_id}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->


                </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            {!! $materias->links() !!}
                        </div>
                    </div>

                <!-- /.box -->
            </div>

        </div>


    </section>
@endsection()
