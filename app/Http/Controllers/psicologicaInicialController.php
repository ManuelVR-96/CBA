<?php

namespace CBA\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use CBA\Cliente;
use CBA\User;
use CBA\PsicologicaInicial;

class psicologicaInicialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $nuevoCliente= Cliente::findOrFail($id);
        
        return view ('RegistroPsicologiaInicial', compact("nuevoCliente"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $nuevoPsicologica = new testDelta();
        $nuevoPsicologica->escala_pfeffer = $request->escala_pfeffer;
        $nuevoPsicologica->minimental = $request->minimental;
        $nuevoPsicologica->yesavage_uno = $request->yesavage_uno;
        $nuevoPsicologica->yesavage_dos = $request->yesavage_dos;
        $nuevoPsicologica->yesavage_tres = $request->yesavage_tres;
        $nuevoPsicologica->yesavage_cuatro = $request->yesavage_cuatrp;
        $nuevoPsicologica->yesavage_cinco= $request->yesavage_cinco;
        $nuevoPsicologica->yesavage_seis= $request->yesavage_seis;
        $nuevoPsicologica->yesavage_siete= $request->yesavage_siete;
        $nuevoPsicologica->yesavage_ocho= $request->yesavage_ocho;
        $nuevoPsicologica->yesavage_nueve= $request->yesavage_nueve;
        $nuevoPsicologica->yesavage_diez= $request->yesavage_diez;
        $nuevoPsicologica->yesavage_once= $request->yesavage_once;
        $nuevoPsicologica->yesavage_doce= $request->yesavage_doce;
        $nuevoPsicologica->yesavage_trece= $request->yesavage_trece;
        $nuevoPsicologica->yesavage_catorce= $request->yesavage_catorce;
        $nuevoPsicologica->yesavage_quince= $request->yesavage_quince;
        $nuevoPsicologica->yesavage_total= $request->yesavage_total;
        $nuevoPsicologica->autoestima_uno= $request->autoestima_uno;
        $nuevoPsicologica->autoestima_dos= $request->autoestima_dos;
        $nuevoPsicologica->autoestima_tres= $request->autoestima_tres;
        $nuevoPsicologica->autoestima_cuatro= $request->autoestima_cuatro;
        $nuevoPsicologica->autoestima_cinco= $request->autoestima_cinco;
        $nuevoPsicologica->autoestima_seis= $request->autoestima_seis;
        $nuevoPsicologica->autoestima_siete= $request->autoestima_siete;
        $nuevoPsicologica->autoestima_ocho= $request->autoestima_ocho;
        $nuevoPsicologica->autoestima_nueve= $request->autoestima_nueve;
        $nuevoPsicologica->autoestima_diez= $request->autoestima_diez;
        $nuevoPsicologica->autoestima_total= $request->autoestima_total;
        $nuevoPsicologica->encargado= $request->encargado;
        $nuevoPsicologica->save();

        return back();
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
