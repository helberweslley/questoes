@extends('adminlte::page')

@section('content')
    <section class="content-header">
        <h1>
            Instituição
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Instituição</a></li>
            <li class="active">Cadastrar</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Cadastro de Instituições</h3>
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
                    <form role="form" method="post" action="{{action('InstituicaoController@store')}}">
                        @csrf
                        <div class="box-body">

                            <div class="form-group">
                                <label>Região</label>
                                <select name="regiao" class="form-control">
                                    <option value="" selected>Selecione a Região</option>
                                    <option value="NORTE" selected>Norte</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Estado</label>
                                <select name="estado" class="form-control">
                                    <option value="" selected>Selecione o Estado</option>
                                    <option value="AC" selected>Acre</option>
                                    <option value="AP" selected>Amapá</option>
                                    <option value="AM" selected>Amazonas</option>
                                    <option value="PA" selected>Pará</option>
                                    <option value="RR" selected>Roraima</option>
                                    <option value="RO" selected>Rondônia</option>
                                    <option value="TO" selected>Tocantins</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="sigla">Sigla</label>
                                <input type="text" class="form-control" name="sigla" placeholder="UFRR">
                            </div>

                            <div class="form-group">
                                <label for="instituicao">Nome da Instituição</label>
                                <input type="text" class="form-control" name="nome"
                                       placeholder="Universidade Federal de Roraima">
                            </div>

                            <div class="form-group">
                                <label for="site">Site</label>
                                <input type="text" class="form-control" name="site" placeholder="ufrr.br">
                            </div>

                            <div class="form-group">
                                <label for="site_comissao_vestibular">Comissão do Vestibular</label>
                                <input type="text" class="form-control" name="site_comissao_vestibular"
                                       placeholder="ufrr.br/cpv">
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
