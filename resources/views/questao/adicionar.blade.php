@extends('adminlte::page')

@section('app_css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <style>
        .example-modal .modal {
            position: relative;
            top: auto;
            bottom: auto;
            right: auto;
            left: auto;
            display: block;
            z-index: 1;
        }

        .example-modal .modal {
            background: transparent !important;
        }
    </style>
@endsection()

@section('app_js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
@endsection()



@section('content')

    <section class="content-header">
        <h1>
            Questão
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Questão</a></li>
            <li class="active">Cadastrar</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Cadastro de Questões</h3>
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
                    <form role="form" method="post" action="{{action('QuestaoController@store')}}">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label>Instituição</label>
                                <select name="instituicao" class="form-control">
                                    <option value="" selected>Selecione a Instituição</option>
                                    @foreach ($instituicoes->all() as $instituicao)
                                        <option value={{$instituicao->id}}>{{$instituicao->sigla}}
                                            - {{$instituicao->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ano</label>
                                <select name="ano" class="form-control">
                                    <option value="" selected>Selecione o ano</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="enunciado">Enunciado da Questão</label>
                                <div id="enunciado" style="height: 275px;"></div>
                            </div>

                            <div class="form-group">

                                    <button type="button" class="btn btn-success pull-left" data-toggle="modal"
                                            data-target="#modal-default"><i class="fa fa-plus"></i>
                                        Adicionar Alternativa
                                    </button>
                            </div>
                        </div>

                        <!-- /.box-body -->
                        <div class="box-body">
                            <label for="alternativa">Alternativa(s)</label>
                            <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                            <ul class="todo-list ui-sortable">
                                <li class="" style="">
                                    <input type="radio" value="">
                                    <span class="text">a) 12.560 caixas</span>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li class="" style="">
                                    <input type="radio" value="" checked>
                                    <span class="text">b) 628 caixas</span>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li class="" style="">
                                    <input type="radio" value="">
                                    <span class="text">c) 1256 caixas</span>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li class="" style="">
                                    <input type="radio" value="">
                                    <span class="text">d) 125.600 caixas</span>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li class="" style="">
                                    <input type="radio" value="">
                                    <span class="text">e) 6280 caixas</span>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                            </ul>
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

        <!-- Modal: tela de cadastro de alternativas -->
        <div class="modal fade" id="modal-default" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Cadastro de Alternativa</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Alternativa</label>
                            <textarea class="form-control" rows="5"
                                      placeholder="Alternativa ..."></textarea>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Essa alternativa é o gabarito da questão?
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left"
                                data-dismiss="modal">Fechar
                        </button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </section>


    <script>
        var toolbarOptions = [
            [{'font': []}],
            [{'align': []}],
            [{'header': [1, 2, 3, 4, 5, 6, false]}],
            [{'size': ['small', false, 'large', 'huge']}],  // custom dropdown
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            [{'color': []}, {'background': []}],          // dropdown with defaults from theme
            ['image'],

            [{'list': 'ordered'}, {'list': 'bullet'}],
            [{'script': 'sub'}, {'script': 'super'}],      // superscript/subscript
            [{'indent': '-1'}, {'indent': '+1'}],          // outdent/indent

            ['clean']                                         // remove formatting button
        ];

        var quill = new Quill('#enunciado', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'A prefeitura de Boa Vista realizará uma reforma nas praças do centro da cidade. Será reconstruída uma praça circular com raio de 40 m. A prefeitura comprou pisos quadrados de lado 20 cm. Sabendo que cada caixa contém 20 pisos, qual o número de caixas que a prefeitura deverá comprar para realizar a reforma? (adote π = 3,14).',
            theme: 'snow'  // or 'bubble'
        });

    </script>
@endsection()




