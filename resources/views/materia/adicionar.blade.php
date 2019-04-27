@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <h1>
            Matéria
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Matéria</a></li>
            <li class="active">Cadastrar</li>
        </ol>
    </section>

    <section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Cadastro de Disciplinas</h3>
                </div>
                <!-- /.box-header -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br/>
                @endif
                <!-- form start -->
                <form role="form" method="post" action="{{action('MateriaController@store')}}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>Disciplina</label>
                            <select name="disciplina" class="form-control">
                                <option value="" selected>Selecione a disciplina</option>
                                @foreach ($disciplinas->all() as $disciplina)
                                    <option value={{$disciplina->id}}>{{$disciplina->disciplina}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="instituicao">Nome da Matéria</label>
                            <input type="text" class="form-control" name="materia" placeholder="Biologia">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
    </section>
@endsection()