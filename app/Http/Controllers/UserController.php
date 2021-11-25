<?php

namespace App\Http\Controllers;

use App\Models\ProgramaModel;
use App\Models\User;
use App\Models\UserProgramaModel;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $programas;

    protected $usuario;

    protected $usuarioPrograma;

    public function __construct(
        ProgramaModel $programas,
        User $usuario,
        UserProgramaModel $usuarioPrograma
    ) {
        $this->programas = $programas;
        $this->usuario = $usuario;
        $this->usuarioPrograma = $usuarioPrograma;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = $this->programas->all();
        return view('usuarios.index', compact('programas'));
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
        $usuario = new $this->usuario;
        $usuarioPrograma = new $this->usuarioPrograma;

        $usuario->name = $request['data']['name'];
        $usuario->lastName = $request['data']['lastName'];
        $usuario->email = $request['data']['email'];
        $usuario->phone = $request['data']['phone'];

        $usuario->save();

        $usuarioPrograma->user_id = $usuario->id;
        $usuarioPrograma->programa_id = $request['data']['programas'];

        $usuarioPrograma->save();


        return $usuario->id;
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
