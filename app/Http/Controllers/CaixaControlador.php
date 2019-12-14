<?php

namespace App\Http\Controllers;

use PDO;

use App\Caixa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CaixaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Caixa $ca)
    {
        return view('pages.caixa', ['caixa' => $ca->paginate(10)]);    
    }


    public function autorizar()
    {
        function status(){
            $conn = new PDO("mysql:dbname=hostel;host=localhost","root","");
            $stmt = $conn->prepare("SELECT MAX(status) FROM caixa_statuses");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            foreach ($results as $row) {
                foreach ($row as $key => $value) {
                    return $value;
                }
            }
        }
        $status = status();
        
        if($status == "Aberto"){
            return redirect('caixa');
        }
        else {
            return view('pages.autorizar_caixa'); 
        }
    }

    public function fechar()
    {
        // 
        return view('pages.fechar_caixa'); 
        
    }

    public function autoriza(Request $request)
    {
        $valor = $request->input('valor');
        $email = $request->input('email');
        $senha = $request->input('senha');
        
        if (($email == "admin@material.com") && ($senha == "secret")){
            DB::insert('INSERT into caixa_statuses (status, valor, created_at) values (?, ?, ?)', ['Aberto', $valor, now()]);
            return redirect('caixa');
        }
        else {
            return redirect()->route('autorizar')->withStatus(__('Usuário não autorizado.'));
        }
    }

    public function fecha(Request $request)
    {
        $valor = $request->input('valor');
        $email = $request->input('email');
        $senha = $request->input('senha');
        
        if (($email == "admin@material.com") && ($senha == "secret")){
            DB::insert('INSERT into caixa_statuses (status, valor, created_at) values (?, ?, ?)', ['Fechado', $valor, now()]);
            return redirect('autorizar');
        }
        else {
            return redirect()->route('fechar')->withStatus(__('Usuário não autorizado.'));
        }
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
        $id = auth()->user()->id;
    
        $ca = new Caixa();
        $ca->descricao = $request->input('descricao');
        $ca->valor = $request->input('valor');
        $ca->tipo = $request->input('tipo');
        $ca->data_hora = now();
        $ca->usuario = $id;

        $ca->save();

        return redirect()->route('caixa')->withStatus(__('Valor inserido com sucesso.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Caixa  $caixa
     * @return \Illuminate\Http\Response
     */
    public function show(Caixa $caixa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Caixa  $caixa
     * @return \Illuminate\Http\Response
     */
    public function edit(Caixa $caixa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Caixa  $caixa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caixa $caixa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Caixa  $caixa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Caixa $caixa)
    {
        //
    }
}
