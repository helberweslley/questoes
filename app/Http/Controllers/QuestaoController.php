<?php

namespace App\Http\Controllers;

use App\Instituicao;
use App\Models\Materia;
use App\Models\Questao;
use App\QuestaoTipo;
use Illuminate\Http\Request;

class QuestaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('questao.index', ['questoes' => Questao::paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questao.adicionar',['instituicoes'=>Instituicao::all(),'materias'=>Materia::all(),'questao_tipos'=>QuestaoTipo::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            /* 'instituicao' => 'required',
            'ano' => 'required',*/
            'enunciado' => 'required',
            'questao_tipo' => 'required',
            /*'materia' => 'required'*/
        ]);

        $questao = new Questao([
            'instituicao_id' => $request->get('instituicao'),
            'ano' => $request->get('ano'),
            'questao' => $request->get('enunciado'),
            'questao_tipo_id' => $request->get('questao_tipo'),
            'materia' => $request->get('materia')
        ]);

        $questao->save();

        return redirect('/questao')->with('success', 'Questão adicionada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('questao.show', ['questao' => Questao::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
