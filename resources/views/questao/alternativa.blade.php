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
                                    <option value="" selected>Instituição</option>
                                    @foreach ($instituicoes->all() as $instituicao)
                                        <option value={{$instituicao->id}}>{{$instituicao->sigla}}
                                            - {{$instituicao->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ano</label>
                                <select name="ano" class="form-control">
                                    <option value="" selected>Ano da questão</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Enunciado da Questão</label>
                                <div id="editor" name="editor" style="height: 170px;"></div>
                                <textarea id="enunciado" name="enunciado" style="display:none;">#####</textarea>
                            </div>

                            <div class="form-group">
                                <label>Tipo de Questão</label>
                                <select name="questao_tipo" class="form-control" onchange="teste(this)">
                                    <option value="">Selecione</option>
                                    @foreach ($questao_tipos->all() as $tipo)
                                        <option value={{$tipo->id}}>{{$tipo->tipo}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Matéria</label>
                                <select name="materia" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Selecione a matéria" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                    <option value="">Selecione a matéria</option>
                                    @foreach ($materias->all() as $materia)
                                        <option value={{$materia->id}}>{{$materia->materia}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{--<script>
                                function teste(select) {
                                    if (select.name == "tipoQuestao") {
                                        switch (select.value) {
                                            case '1':
                                                document.getElementById("dinamico").innerHTML = '';
                                                break;
                                            case '2':
                                                window.open('popup.html', 'popup');
                                                break;
                                            case '3':
                                                window.open('popup.html', 'popup');
                                                break;
                                            case '4':
                                                window.open('popup.html', 'popup');
                                                break;
                                            default:
                                        }
                                    }
                                }

                                function pegaValor(radior) {
                                    document.getElementById("dinamico").innerHTML = radior.value;
                                }
                            </script>

                            <div id="dinamico"></div>--}}

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
{{--
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
                            <div id="editor-container" style="height: 155px">
                            </div>


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
        </div>--}}
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

        var quill = new Quill('#editor', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'A prefeitura de Boa Vista realizará uma reforma nas praças do centro da cidade. Será reconstruída uma praça circular com raio de 40 m. A prefeitura comprou pisos quadrados de lado 20 cm. Sabendo que cada caixa contém 20 pisos, qual o número de caixas que a prefeitura deverá comprar para realizar a reforma? (adote π = 3,14).',
            theme: 'snow'  // or 'bubble'
        });

        var justHtmlContent = document.getElementById('enunciado');

        quill.on('text-change', function() {
            var justHtml = quill.root.innerHTML;
            justHtmlContent.innerHTML = justHtml;
        });

        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()
        })

    </script>


@endsection()




