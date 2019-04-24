@extends('adminlte::page')

@section('app_css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
@endsection()

@section('app_js')


    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>



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

                                <label for="alternativa">Alternativa(s)</label>
                                <button id="addAlternativa" name="addAlternativa" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                                <div id="alternativas">


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
    </section>


    <script>

        /*
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

        var quill = new Quill('#alternativa', {
            modules: {
                syntax: true,
                toolbar: toolbarOptions
            },
            placeholder: 'Digite o enunciado da questão...',
            theme: 'snow'  // or 'bubble'
        });*/

        var quill = new Quill('#enunciado', {
            modules: {
                toolbar: [
                    [{ header: [1, 2, false] }],
                    ['bold', 'italic', 'underline'],
                    ['image']
                ]
            },
            placeholder: 'Digite o enunciado da questão',
            theme: 'snow'  // or 'bubble'
        });


        $( function() {
            $( "input" ).checkboxradio();
        } );


        $( "#addAlternativa" ).on("click",function() {
            var newDiv =  $("<div />");
            var textArea = $('<textarea style="padding-left:100px" />');
            textArea.text(jsonList);
            newDiv.append(textArea);
        });
    </script>
@endsection()




