<?php

namespace App\Http\Controllers;

use App\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;
use App\Hospede;
use Illuminate\Support\Facades\Auth;

class ReservaControlador extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  \App\Reserva  $res
     * @return \Illuminate\View\View
     */
    public function index(Reserva  $res)
    {
        return view('reserva.index_reserva', ['reserva' => $res->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function hospede(Hospede  $hos)
    {
        return view('hospede.index_hospede', ['hospede' => $hos->paginate(10)]);
    }

    public function create($id)
    {
        $hos = new Hospede();
        $hos = Hospede::find($id);
        if(isset($hos)){
            $tipo = Auth::user()->tipo;
            if ($tipo == "admin"){
                return view('reserva.nova_reserva', compact('hos'));
            }
            else {
                return view('hos.nova_reserva', compact('hos'));
            }
        }
        return redirect('index_reserva');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $tipo = $request->input('tipo');
        function GETid_quarto(string $tipo){
            $conn = new PDO("mysql:dbname=hostel;host=localhost","root","");
            $stmt = $conn->prepare("SELECT codquarto FROM quartos WHERE max_camas-camas_o > 0 and tipo = '$tipo' ORDER BY RAND() LIMIT 1");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            foreach ($results as $row) {
                foreach ($row as $key => $value) {
                    return $value;
                }
            }
        }

        $id = auth()->user()->id;

        $res = new Reserva();
        $res->qntp = $request->input('qntp');
        $res->id_quarto = GETid_quarto($tipo);
        $res->data_e = $request->input('data_e');
        $res->data_s = $request->input('data_s');
        $res->data_hora = now();
        $res->cod_hospede = $request->input('cod_hospede');
        $res->cod_user = $id;
        $res->status = "1";
        $res->pag = "1";
        $res->save();

        $tipo = Auth::user()->tipo;
            if ($tipo == "admin"){
                return redirect()->route('index_reserva')->withStatus(__('Reserva criada com sucesso.'));
            }
            else {
                return redirect()->route('principal_hos')->withStatus(__('Reserva criada com sucesso.'));
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
    }

    public function updatePag($id)
    {
        DB::update('UPDATE reservas SET pag = 2 where idreserva = ?', [$id]);
        return redirect()->route('index_reserva')->withStatus(__('Pagamento recebido.'));
    }

    public function updateCheckin($id, $cod)
    {
        function qntp($id){
            $conn = new PDO("mysql:dbname=hostel;host=localhost","root","");
            $stmt = $conn->prepare("SELECT qntp FROM reservas WHERE idreserva = '$id'");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            foreach ($results as $row) {
                foreach ($row as $key => $value) {
                    return $value;
                }
            }
        }
        $qntp = qntp($id);
        DB::update("UPDATE quartos SET camas_o = camas_o + '$qntp' where codquarto = ?", [$cod]);
        
        DB::update('UPDATE reservas SET status = 2 where idreserva = ?', [$id]);
        return redirect()->route('index_reserva')->withStatus(__('Check-in feito.'));
    }

    public function updateCheckout($id, $cod)
    {
        function qntp1($id){
            $conn = new PDO("mysql:dbname=hostel;host=localhost","root","");
            $stmt = $conn->prepare("SELECT qntp FROM reservas WHERE idreserva = '$id'");
            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
            foreach ($results as $row) {
                foreach ($row as $key => $value) {
                    return $value;
                }
            }
        }
        $qntp = qntp1($id);
        DB::update("UPDATE quartos SET camas_o = camas_o - '$qntp' where codquarto = ?", [$cod]);

        DB::update('UPDATE reservas SET status = 3 where idreserva = ?', [$id]);
        return redirect()->route('index_reserva')->withStatus(__('Check-out feito.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        DB::delete('delete from reservas where idreserva = ?', [$id]);
        $tipo = Auth::user()->tipo;
            if ($tipo == "admin"){
                return redirect()->route('index_reserva')->withStatus(__('Reserva deletada com sucesso.'));
            }
            else {
                return redirect()->route('principal_hos')->withStatus(__('Reserva deletada com sucesso.'));
            }
    }
}
