<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datospen;

class ControllerDatosPen extends Controller
{
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = datospen::offset(0)->limit(5)->get();
        return response()->json(['data' => $datos], $this->successStatus);
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
        $input = $request->all(); 
        $user = datospen::create($input);
        return response()->json(['status' => $this->successStatus], $this->successStatus); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($curp)
    {
        $directo = datospen::where('curp', $curp)->get();
        return response()->json(['success' => $directo], $this->successStatus);
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
    public function update(Request $request, $curp)
    {
        datospen::where('curp',$curp)->update($request->all());
        return response()->json([
            'status' => $this->successStatus,
            'curp' => $curp
        ], $this->successStatus);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($curp)
    {
        $deletedRows = datospen::where('curp', $curp)->delete();
        return response()->json(['status' => $this->successStatus], $this->successStatus);
    }
}
