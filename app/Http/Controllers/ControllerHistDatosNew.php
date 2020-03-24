<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hist_datos_new;

class ControllerHistDatosNew extends Controller
{
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = hist_datos_new::offset(0)->limit(5)->get();
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
        $user = hist_datos_new::create($input);
        return response()->json(['status' => $this->successStatus], $this->successStatus);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($num_pen)
    {
        $directo = hist_datos_new::where('num_pen', $num_pen)->get();
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
    public function update(Request $request, $num_pen)
    {
        // dd($num_pen);
        hist_datos_new::where('num_pen',$num_pen)->update($request->all());
        return response()->json([
            'status' => $this->successStatus,
            'num_pen' => $num_pen
        ], $this->successStatus);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($num_pen)
    {
        $deletedRows = hist_datos_new::where('num_pen', $num_pen)->delete();
        return response()->json(['status' => $this->successStatus], $this->successStatus);
    }
}
