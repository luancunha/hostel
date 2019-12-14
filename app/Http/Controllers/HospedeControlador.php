<?php

namespace App\Http\Controllers;

use PDO;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Hospede;

class HospedeControlador extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \App\Hospede  $hos
     * @return \Illuminate\View\View
     */
    public function index(Hospede  $hos)
    {
        $name = Auth::user()->name;
        $hospede = DB::select("SELECT * FROM hospedes WHERE nome = ?", [$name]);

        function id1($name){
            $conn = new PDO("mysql:dbname=hostel;host=localhost","root","");
            $stmt = $conn->prepare("SELECT id FROM hospedes WHERE nome = '$name'");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            foreach ($results as $row) {
                foreach ($row as $key => $value) {
                    return $value;
                }
            }
        }
        $id = id1($name);

        $reserva = DB::select("SELECT * FROM reservas WHERE cod_hospede = ?", [$id]);

        $tipo = Auth::user()->tipo;
        if ($tipo == "admin"){
            return view('hospede.index_hospede', ['hospede' => $hos->paginate(10)]);
        }
        else {
            return view('hos.principal')->with('hospede', $hospede)->with('reserva', $reserva);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('hospede.create_hospede');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hospede  $hos
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Hospede $hos)
    {
        $hos->create($request->all());

        $name = Auth::user()->name;
        $hospede = DB::select("SELECT * FROM hospedes WHERE nome = ?", [$name]);

        function id($name){
            $conn = new PDO("mysql:dbname=hostel;host=localhost","root","");
            $stmt = $conn->prepare("SELECT id FROM hospedes WHERE nome = '$name'");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            foreach ($results as $row) {
                foreach ($row as $key => $value) {
                    return $value;
                }
            }
        }
        $id = id($name);

        $reserva = DB::select("SELECT * FROM reservas WHERE cod_hospede = ?", [$id]);

        $tipo = Auth::user()->tipo;
        if ($tipo == "admin"){
            return redirect()->route('index_hospede')->withStatus(__('Hóspede criado com sucesso.'));
        }
        else {
            return view('hos.principal')->with('hospede', $hospede)->with('reserva', $reserva);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hos = Hospede::find($id);
        if(isset($hos)){
            $tipo = Auth::user()->tipo;
            if ($tipo == "admin"){
                return view('hospede.edite_hospede', compact('hos'));
            }
            else {
                return view('hos.editar_cadastro', compact('hos'));
            }
        }
        return redirect('index_hospede');
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
        $hos = Hospede::find($id);
        if(isset($hos)){
            $hos->nome = $request->input('nome');
            $hos->datanasc = $request->input('datanasc');
            $hos->profissao = $request->input('profissao');
            $hos->nacionalidade = $request->input('nacionalidade');
            $hos->sexo = $request->input('sexo');
            $hos->numdoc = $request->input('numdoc');
            $hos->tipodoc = $request->input('tipodoc');
            $hos->org = $request->input('org');
            $hos->endereco = $request->input('endereco');
            $hos->cep = $request->input('cep');
            $hos->cidade = $request->input('cidade');
            $hos->estado = $request->input('estado');
            $hos->pais = $request->input('pais');
            $hos->ultdestino = $request->input('ultdestino');
            $hos->proxdestino = $request->input('proxdestino');
            $hos->motivo = $request->input('motivo');
            $hos->transporte = $request->input('transporte');
            $hos->email = $request->input('email');
            $hos->save();
        }
        function nome($id){
            $conn = new PDO("mysql:dbname=hostel;host=localhost","root","");
            $stmt = $conn->prepare("SELECT nome from hospedes where id = '$id'");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            foreach ($results as $row) {
                foreach ($row as $key => $value) {
                    return $value;
                }
            }
        }
        $nome = nome($id);

        $id2 = auth()->user()->id;

        $tipo = Auth::user()->tipo;
        if ($tipo == "admin"){
            return redirect()->route('index_hospede')->withStatus(__('Hóspede alterado com sucesso.'));
        }
        else {
            DB::update("UPDATE users set name = ? where id = '$id2';", [$nome]);
            return redirect()->route('principal_hos')->withStatus(__('Hóspede alterado com sucesso.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $hos = Hospede::find($id);
        if(isset($hos)){
            $hos->delete();
        }
        return redirect()->route('index_hospede')->withStatus(__('Hóspede deletado com sucesso.'));
    }

}
