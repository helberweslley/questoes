@extends('adminlte::page')

@section('content')
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
                            <label for="instituicao">Nome da Instituição</label>
                            <input type="text" class="form-control" name="nome" placeholder="Universidade Federal de Roraima">
                        </div>
                        <div class="form-group">
                            <label for="site">Site</label>
                            <input type="text" class="form-control" name="site" placeholder="ufrr.br">
                        </div>
                        <div class="form-group">
                            <label for="site_comissao_vestibular">Comissão do Vestibular</label>
                            <input type="text" class="form-control" name="site_comissao_vestibular" placeholder="ufrr.br/cpv">
                        </div>
                        <div class="form-group">
                            <label for="sigla">Sigla</label>
                            <input type="text" class="form-control" name="sigla" placeholder="UFRR">
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
@endsection()
