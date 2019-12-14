<?php

namespace App\Http\Controllers;
use PDO;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
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
        //$id = Auth::user()->id;
        if ($tipo == "admin"){
            return view('dashboard');
        }
        else {
            if ($id == null){
                return view('hos.cadastro');
            }
            else{
                return view('hos.principal')->with('hospede', $hospede)->with('reserva', $reserva);
            }
        }
    }
}
