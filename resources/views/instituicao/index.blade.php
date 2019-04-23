@extends('adminlte::page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Instituição
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Instituição</a></li>
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
                        <h3 class="box-title">Lista de Instituição</h3>
                        <div class="box-tools">
                            <p class="pull-right">
                                <a href="{{action('InstituicaoController@create')}}"
                                   class="btn btn-success btn-sm ad-click-event">
                                    <i class="fa fa-fw fa-plus"> </i> Nova Instituição
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
                                <th>Sigla</th>
                                <th>Instituição</th>
                                <th>Site</th>
                                <th>Portal da Comissão do Vestibular</th>
                                <th>Ações</th>
                            </tr>

                            @foreach ($instituicoes as $instituicao)

                                <tr>
                                    <td>{{$instituicao->id}}</td>
                                    <td>{{$instituicao->sigla}}</td>
                                    <td>{{$instituicao->nome}}</td>
                                    <td><a target="_blank" href="{{$instituicao->site}}">{{$instituicao->site}}</a></td>
                                    <td><a target="_blank" href="{{$instituicao->site_comissao_vestibular}}">{{$instituicao->site_comissao_vestibular}}</a></td>
                                    <td>
                                        {{--<a href="{{action('InstituicaoController@show', $instituicao->id)}}">
                                            <span class="badge bg-blue">  <i class="fa fa-search"></i> </span>
                                        </a>--}}
                                        <a href="{{action('InstituicaoController@edit', $instituicao->id)}}">
                                            <span class="badge bg-yellow"><i class="fa fa-edit"></i></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->


                </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            {!! $instituicoes->links() !!}
                        </div>
                    </div>

                <!-- /.box -->
            </div>

        </div>


    </section>
@endsection()
