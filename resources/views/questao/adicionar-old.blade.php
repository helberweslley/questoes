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
                                <textarea id="enunciado" name="enunciado" style="display:none;"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Matéria</label>
                                <select name="materia" class="form-control select2 select2-hidden-accessible"
                                        multiple="" data-placeholder="Selecione a matéria" style="width: 100%;"
                                        tabindex="-1" aria-hidden="true">
                                    <option value="">Selecione a matéria</option>
                                    @foreach ($materias->all() as $materia)
                                        <option value={{$materia->id}}>{{$materia->materia}}</option>
                                    @endforeach
                                </select>
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
                                <div id="dinamico"></div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <label for="" class="text-center">Alternativa B</label>
                                    <span class="input-group-addon">
                                    <input type="radio" name="radiog" value=1 id="radio1">
                                </span>

                                    <div id="editor-alternativa1" name="editor-alternativa1"
                                         style="height: 70px;"></div>
                                    <textarea id="alternativa1" name="alternativa1" style="display:none;"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <label for="" class="text-center">Alternativa B</label>
                                    <span class="input-group-addon">
                                    <input type="radio" name="radiog" value=2 id="radio1">
                                </span>

                                    <div id="editor-alternativa2" name="editor-alternativa2"
                                         style="height: 70px;"></div>
                                    <textarea id="alternativa2" name="alternativa2" style="display:none;"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <label for="" class="text-center">Alternativa C</label>
                                    <span class="input-group-addon">
                                    <input type="radio" name="radiog" value=3 id="radio1">
                                </span>

                                    <div id="editor-alternativa3" name="editor-alternativa3"
                                         style="height: 70px;"></div>
                                    <textarea id="alternativa3" name="alternativa3" style="display:none;"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <label for="" class="text-center">Alternativa D</label>
                                    <span class="input-group-addon">
                                    <input type="radio" name="radiog" value=4 id="radio1">
                                </span>

                                    <div id="editor-alternativa4" name="editor-alternativa4"
                                         style="height: 70px;"></div>
                                    <textarea id="alternativa4" name="alternativa4" style="display:none;"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <label for="" class="text-center">Alternativa E</label>
                                    <span class="input-group-addon">
                                    <input type="radio" name="radiog" value=5 id="radio1">
                                </span>

                                    <div id="editor-alternativa5" name="editor-alternativa5"
                                         style="height: 70px;"></div>
                                    <textarea id="alternativa5" name="alternativa5" style="display:none;"></textarea>
                                </div>
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
                            <div id="editor-alternativa" style="height: 155px">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left"
                                data-dismiss="modal">Fechar
                        </button>
                        <button type="button" class="btn btn-primary" onclick="setAlternativa()" data-dismiss="modal">
                            Salvar
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>


        <script>
            function teste(select) {
                if (select.name == "questao_tipo") {
                    switch (select.value) {
                        case '1':
                            var abre = '<div class="form-group">\n' +
                                '                                <div class="col-md-12">';
                            var fecha = '</div>\n' +
                                '                            </div>';

                            var alternativa = '';

                            for (let i = 1; i < 5; i++) {
                                alternativa += '<div class="input-group">\n' +
                                    '               <span class="input-group-addon">\n' +
                                    '                     <input type="radio" name="radiog" value=' + i + ' id="radio' + i + '">\n' +
                                    '               </span>\n' +
                                    '               <div onclick="getEditorAlternativa(this)" name="editor-alternativa\' + i + \'" id="editor-alternativa\' + i + \'" data-toggle="modal" data-target="#modal-default" data-id="alternativa\' + i + \'"></div>\n' +
                                    '               <textarea style="display:none;" type="text" class="form-control" name="alternativa' + i + '" id="alternativa' + i + '"></textarea>\n' +
                                    '           </div>' +
                                    '           <br>'
                            }
                            document.getElementById("dinamico").innerHTML = abre + alternativa + fecha;
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

        </script>
    </section>


    <script>
        var toolbarOptions = [
            [{'font': []}],
            [{'align': []}],
            [{'header': [1, 2, 3, 4, 5, 6, false]}],
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

        var quill1 = new Quill('#editor-alternativa1', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Realizar a reforma? (adote π = 3,14).',
            theme: 'snow'  // or 'bubble'
        });

        var quill2 = new Quill('#editor-alternativa2', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Realizar a reforma? (adote π = 3,14).',
            theme: 'snow'  // or 'bubble'
        });
        var quill3 = new Quill('#editor-alternativa3', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Realizar a reforma? (adote π = 3,14).',
            theme: 'snow'  // or 'bubble'
        });
        var quill4 = new Quill('#editor-alternativa4', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Realizar a reforma? (adote π = 3,14).',
            theme: 'snow'  // or 'bubble'
        });

        var quill5 = new Quill('#editor-alternativa5', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Realizar a reforma? (adote π = 3,14).',
            theme: 'snow'  // or 'bubble'
        });

        /*
        var quill2 = new Quill('#editor-alternativa2', {
            modules: {
                toolbar: ''
            },
            theme: 'bubble'  // or 'bubble'
        });*/

        quill.on('text-change', function () {
            document.getElementById('enunciado').innerHTML = quill.root.innerHTML;
            quill2.setContents(quill.getContents());
            document.getElementById("dinamico").innerHTML = quillGetHTML(quill.getContents());

        });

        function getEditorAlternativa(quillAlternativa) {
            quill1.setContents(window.delta);
        }

        function setAlternativa() {
            window.delta = quill1.getContents();
            alert(window.delta);

        }

        function quillGetHTML(inputDelta) {
            var tempCont = document.createElement("div");
            (new Quill(tempCont)).setContents(inputDelta);
            return tempCont.getElementsByClassName("ql-editor")[0].innerHTML;
        }

        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()
        })

    </script>




@endsection()




