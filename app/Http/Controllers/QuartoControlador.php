<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quarto;
use Illuminate\Support\Facades\DB;

class QuartoControlador extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \App\Quarto  $qua
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $quarto1 = DB::select('select * from quartos where codquarto = ?', ['C01']);
        $quarto2 = DB::select('select * from quartos where codquarto = ?', ['C02']);
        $quarto3 = DB::select('select * from quartos where codquarto = ?', ['C03']);
        $quarto4 = DB::select('select * from quartos where codquarto = ?', ['S01']);
        $quarto5 = DB::select('select * from quartos where codquarto = ?', ['S02']);

        return view('pages.quartos')->with('quarto1', $quarto1)->with('quarto2', $quarto2)->with('quarto3', $quarto3)->with('quarto4', $quarto4)->with('quarto5', $quarto5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quarto  $quarto
     * @return \Illuminate\Http\Response
     */
    public function show(Quarto $quarto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quarto  $quarto
     * @return \Illuminate\Http\Response
     */
    public function edit(Quarto $quarto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $qua = Quarto::find($id);
        if(isset($qua)){
            $qua->max_camas = $request->input('max_camas');
            $qua->valor = $request->input('valor');
            $qua->tipo = $request->input('tipo');
            
            $qua->save();
        }
        return redirect()->route('quartos')->withStatus(__('Quarto alterado com sucesso.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quarto  $quarto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quarto $quarto)
    {
        //
    }
}
