<?php

namespace App\Http\Controllers\Expediente;

use App\Expediente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpedienteController extends Controller
{
   
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        $expedientes = Expediente::all();;

        return view('expediente.home', ['expedientes' => $expedientes]);
    }

    public function showExpediente($id) {

        $expedientes = Expediente::where('id_expediente', $id);

        return 'Hola Bebote';
    }
    

}
