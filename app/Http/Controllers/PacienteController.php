<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

/**
 * Class PacienteController
 * @package App\Http\Controllers
 */
class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::paginate();
        //$pacientes = Paciente::where("id",$id)->get(nombres, apellidos, edad);
        return view('paciente.index', compact('pacientes'))
            ->with('i', (request()->input('page', 1) - 1) * $pacientes->perPage());
    }
    public function index_pruebas($id)
    {
        $paciente = Paciente::find($id);
        //$pacientes = Paciente::where("id",$id)->get(nombres, apellidos, edad);
        //return ('paciente.index_pruebas')
        return view('paciente.index_pruebas',compact('paciente'));
        

        // ->with('paciente'->$paciente);
    }

    public function consulta_by_users()
    {
        //$pacientes = Paciente::paginate();
        //$paciente = Paciente::find();
        return view('paciente.consulta_by_users', )
            ->with('success', 'Ingresa tu Número de Docuento');
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paciente = new Paciente();
        echo "echo does not require parentheses.";
        return view('paciente.create', compact('paciente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Paciente::$rules);

        $paciente = Paciente::create($request->all());

        return redirect()->route('home')
            ->with('Paciente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id)
    public function show()
    {
        //$paciente = Paciente::find($id);
        $paciente = Paciente::pluck('identificacion');
        //return view('paciente.show', compact('paciente'));
        return view('paciente.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);

        return view('paciente.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Paciente $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        request()->validate(Paciente::$rules);

        $paciente->update($request->all());

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id)->delete();

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente deleted successfully');
    }
}
