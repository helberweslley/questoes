@extends('adminlte::page')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Questão
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Questão</a></li>
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
                        <h3 class="box-title">Lista de Questões</h3>
                        <div class="box-tools">
                            <p class="pull-right">
                                <a href="{{action('QuestaoController@create')}}"
                                   class="btn btn-success btn-sm ad-click-event">
                                    <i class="fa fa-fw fa-plus"> </i> Nova Questão
                                </a>
                            </p>

                        </div>

                    </div>
                    <!-- /.box-header -->


                    <div class="js-question q-question js-question-is-multiple-choice" data-question-id="964098">
                        <div class="q-question-header">
                            <div class="q-ref"><span class="q-index js-question-index visible">2</span>
                                <div class="q-id"><a target="_blank" href="/questoes-de-concursos/questoes/6761b8a1-24">Q964098</a>
                                </div>
                            </div>
                            <div class="q-question-breadcrumb"><input type="checkbox"
                                                                      class="q-question-breadcrumb-toggle-input"
                                                                      id="breadcrumb-toggle-input-964098"> <a
                                        href="/questoes-de-concursos/disciplinas/enfermagem-enfermagem" class="q-link">
                                    Enfermagem </a> <span class="q-arrow-separator"></span> <a
                                        href="/questoes-de-concursos/disciplinas/enfermagem-enfermagem/administracao-de-medicamentos"
                                        class="q-link"> Administração de medicamentos <span class="">, </span> </a> <a
                                        href="/questoes-de-concursos/disciplinas/enfermagem-enfermagem/diabetes-mellitus"
                                        class="q-link"> Diabetes Mellitus <span class="">, </span> </a> <a
                                        href="/questoes-de-concursos/disciplinas/enfermagem-enfermagem/calculo-de-solucao-e-medicamentos"
                                        class="q-link"> Cálculo de Solução e Medicamentos <span
                                            class="q-first-subjects-comma">, </span> </a> <a
                                        href="/questoes-de-concursos/disciplinas/enfermagem-enfermagem/doencas-cronicas-nao-transmissiveis"
                                        class="q-link q-hidden-crumb"> Doenças Crônicas Não Transmissíveis </a> <label
                                        for="breadcrumb-toggle-input-964098" class="q-question-breadcrumb-toggle">
                                    (<span class="q-symbol"></span> assuntos) </label></div>
                        </div>
                        <div class="q-question-info"><span><strong>Ano: </strong>2019</span>
                            <span> <strong>Banca: </strong> <a
                                        href="/questoes-de-concursos/bancas/iades">IADES</a> </span> <span> <strong>Órgão: </strong> <a
                                        href="/questoes-de-concursos/institutos/al-go">AL-GO</a> </span> <span
                                    class="q-exams"> <strong>Prova: </strong> <a
                                        href="/questoes-de-concursos/provas/iades-2019-al-go-tecnico-em-enfermagem-do-trabalho">IADES - 2019 - AL-GO - Técnico em Enfermagem do Trabalho</a> <span
                                        class="q-separator">|</span> </span></div>
                        <div class="q-question-mobile-info"><span class="q-float-left">Q964098</span> <span
                                    class="q-float-right">Enfermagem</span></div>
                        <div class="q-question-body">
                            <div class="js-question-label q-question-label-container"></div>
                            <div class="q-question-enunciation"> O técnico em enfermagem instalou, em um paciente
                                diabético, uma solução endovenosa de 100 UI de insulina Regular (1 mL) + 239 mL de soro
                                fisiológico 0,9% em bomba de infusão contínua a 9 mL por hora. Após 7 horas, qual é a
                                dosagem de insulina que esse paciente recebeu?
                            </div>
                            <ul class="q-question-options ">
                                <li><label class="q-radio-button js-choose-alternative"> <input type="radio"
                                                                                                class="js-question-answer"
                                                                                                name="answer-question-964098"
                                                                                                value="A"> <i
                                                class="q-icon q-icon-cut js-discard-alternative q-discard-alternative"></i>
                                        <span class="q-option-item">A</span>
                                        <div class="q-item-enum js-alternative-content">24,12 UI.</div>
                                    </label></li>
                                <li><label class="q-radio-button js-choose-alternative"> <input type="radio"
                                                                                                class="js-question-answer"
                                                                                                name="answer-question-964098"
                                                                                                value="B"> <i
                                                class="q-icon q-icon-cut js-discard-alternative q-discard-alternative"></i>
                                        <span class="q-option-item">B</span>
                                        <div class="q-item-enum js-alternative-content">26,25 UI.</div>
                                    </label></li>
                                <li><label class="q-radio-button js-choose-alternative"> <input type="radio"
                                                                                                class="js-question-answer"
                                                                                                name="answer-question-964098"
                                                                                                value="C"> <i
                                                class="q-icon q-icon-cut js-discard-alternative q-discard-alternative"></i>
                                        <span class="q-option-item">C</span>
                                        <div class="q-item-enum js-alternative-content">16,85 UI.</div>
                                    </label></li>
                                <li><label class="q-radio-button js-choose-alternative"> <input type="radio"
                                                                                                class="js-question-answer"
                                                                                                name="answer-question-964098"
                                                                                                value="D"> <i
                                                class="q-icon q-icon-cut js-discard-alternative q-discard-alternative"></i>
                                        <span class="q-option-item">D</span>
                                        <div class="q-item-enum js-alternative-content">13,41 UI.</div>
                                    </label></li>
                                <li><label class="q-radio-button js-choose-alternative"> <input type="radio"
                                                                                                class="js-question-answer"
                                                                                                name="answer-question-964098"
                                                                                                value="E"> <i
                                                class="q-icon q-icon-cut js-discard-alternative q-discard-alternative"></i>
                                        <span class="q-option-item">E</span>
                                        <div class="q-item-enum js-alternative-content">21,78 UI.</div>
                                    </label></li>
                            </ul>
                            <div class="q-question-buttons">
                                <button class="js-answer-btn btn btn-primary" data-question-id="964098"
                                        data-discipline="Enfermagem" data-permissions="confirmed_account,account"
                                        disabled="">Responder
                                </button>
                                <span class="js-response-wrong q-inline-answer q-wrong"> <i class="q-icon q-icon-times"
                                                                                            aria-hidden="true"></i> Você errou! <span
                                            class="q-answer-feedback"> &nbsp; Resposta: <b><span
                                                    class="js-question-right-answer"></span></b> </span> </span> <span
                                        class="js-response-correct q-inline-answer q-correct"> <i
                                            class="q-icon q-icon-check" aria-hidden="true"></i> Parabéns! Você acertou! </span>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->


                </div>


                <!-- /.box -->
            </div>

        </div>


    </section>
@endsection()
