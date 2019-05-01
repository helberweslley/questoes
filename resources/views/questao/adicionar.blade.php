@extends('adminlte::page')

@section('app_css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection()

@section('app_js')


    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection()



@section('content')

    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br/>
                @endif
            </div>
        </div>

        <h1>
            Questão
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Questão</a></li>
            <li class="active">Cadastrar</li>
        </ol>
    </section>

    <section class="content container-fluid">

        <form role="form" method="post" action="{{action('QuestaoController@store')}}">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Cadastro de Questões</h3>
                        </div>

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
                                <select id="questao_tipo" name="questao_tipo" class="form-control" onchange="getAlternativa(this)">
                                    <option value="">Selecione</option>
                                    @foreach ($questao_tipos->all() as $tipo)
                                        <option value={{$tipo->id}}>{{$tipo->tipo}}</option>
                                    @endforeach
                                </select>
                            </div>


                            {{--<div class="form-group">
                                <div id="dinamico"></div>
                            </div>--}}

                        </div>
                    </div>
                </div>
            </div>

            <div id="alternativa5op" class="row">
                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title"> 5 Alternativas</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div class="form-group">
                                <div class="input-group">
                                    <label for="" class="text-center">Alternativa A</label>
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
                    </div>
                </div>
            </div>

            <div id="alternativa4op" class="row">
                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title"> 4 Alternativas</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div class="form-group">
                                <div class="input-group">
                                    <label for="" class="text-center">Alternativa A</label>
                                    <span class="input-group-addon">
                                    <input type="radio" name="radiog" value=1 id="radio1">
                                </span>

                                    <div id="editor-alternativa6" name="editor-alternativa6"
                                         style="height: 70px;"></div>
                                    <textarea id="alternativa6" name="alternativa6" style="display:none;"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <label for="" class="text-center">Alternativa B</label>
                                    <span class="input-group-addon">
                                    <input type="radio" name="radiog" value=2 id="radio1">
                                </span>

                                    <div id="editor-alternativa7" name="editor-alternativa7"
                                         style="height: 70px;"></div>
                                    <textarea id="alternativa7" name="alternativa7" style="display:none;"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <label for="" class="text-center">Alternativa C</label>
                                    <span class="input-group-addon">
                                    <input type="radio" name="radiog" value=3 id="radio1">
                                </span>

                                    <div id="editor-alternativa8" name="editor-alternativa8"
                                         style="height: 70px;"></div>
                                    <textarea id="alternativa8" name="alternativa8" style="display:none;"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <label for="" class="text-center">Alternativa D</label>
                                    <span class="input-group-addon">
                                    <input type="radio" name="radiog" value=4 id="radio1">
                                </span>

                                    <div id="editor-alternativa9" name="editor-alternativa9"
                                         style="height: 70px;"></div>
                                    <textarea id="alternativa9" name="alternativa9" style="display:none;"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="alternativaCE" class="row">
                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">Alternativas Certo ou Errado</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-lg-1">
                                    <label>Alternativa</label>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                      <input type="radio">
                                    </span>
                                        <input type="text" class="form-control" value="Certo">
                                    </div>
                                    <!-- /input-group -->
                                </div>


                                <div class="col-lg-3">
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                      <input type="radio">
                                    </span>
                                        <input type="text" class="form-control" value="Errado">
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="alternativaVF" class="row">
                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">Alternativas Verdadeiro ou Falso</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        Checkbox 1
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        Checkbox 2
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        Checkbox 3
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        Checkbox 4
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        Checkbox 5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="alternativaSoma" class="row">
                <div class="col-md-12">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title">Somatório</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        Checkbox 1
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        Checkbox 2
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        Checkbox 3
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        Checkbox 4
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        Checkbox 5
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>

        </form>
        </div>
    </section>

    <script>
        $(document).ready(function(){
            $("#alternativa4op").hide();
            $("#alternativa5op").hide();
            $("#alternativaCE").hide();
            $("#alternativaVF").hide();
            $("#alternativaSoma").hide();


            $("#questao_tipo").change(function(){
                var opcao = $(this).val();

                switch(opcao) {
                    case '1':
                        $("#alternativa4op").show();

                        $("#alternativa5op").hide();
                        $("#alternativaCE").hide();
                        $("#alternativaVF").hide();
                        $("#alternativaSoma").hide();


                        break;
                    case '2':
                        $("#alternativa5op").show();
                        $("#alternativaCE").hide();
                        $("#alternativaVF").hide();
                        $("#alternativaSoma").hide();
                        $("#alternativa4op").hide();
                        break;
                    case '3':
                        $("#alternativaSoma").show();

                        $("#alternativa4op").hide();
                        $("#alternativa5op").hide();
                        $("#alternativaCE").hide();
                        $("#alternativaVF").hide();
                        break;
                    case '4':
                        $("#alternativaVF").show();

                        $("#alternativa4op").hide();
                        $("#alternativa5op").hide();
                        $("#alternativaCE").hide();
                        $("#alternativaSoma").hide();
                        break;
                    case '5':
                        $("#alternativaCE").show();

                        $("#alternativa4op").hide();
                        $("#alternativa5op").hide();
                        $("#alternativaVF").hide();
                        $("#alternativaSoma").hide();
                        break;
                    default:
                    // code block
                }

            });
        });


        /* function getAlternativa(questao_tipo) {
            var opcao = document.getElementById("questao_tipo").value;

            switch(opcao) {
                case '1':
                    alert('1');
                    $("#alternativaVF").remove();
                    break;
                case 2:
                    // code block
                    break;
                case 3:
                    // code block
                    break;
                case 4:
                    // code block
                    break;
                case 5:
                    // code block
                    break;
                default:
                // code block
            }
        }*/
    </script>

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

        var quill6 = new Quill('#editor-alternativa6', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Realizar a reforma? (adote π = 3,14).',
            theme: 'snow'  // or 'bubble'
        });

        var quill7 = new Quill('#editor-alternativa7', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Realizar a reforma? (adote π = 3,14).',
            theme: 'snow'  // or 'bubble'
        });

        var quill8 = new Quill('#editor-alternativa8', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Realizar a reforma? (adote π = 3,14).',
            theme: 'snow'  // or 'bubble'
        });

        var quill9 = new Quill('#editor-alternativa9', {
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




