<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\directo;

class ControllerDirecto extends Controller
{
    public $successStatus = 200;

    public function index()
    {
        $directo = directo::offset(1)->limit(5)->get();
        return response()->json(['success' => $directo], $this->successStatus);
    }

    public function show($curp)
    {
        $directo = directo::where('curp', $curp)->get();
        return response()->json(['success' => $directo], $this-> successStatus);
    }

    public function store(Request $request){
        $input = $request->all(); 
        $user = directo::create($input);
        return response()->json(['status' => $this->successStatus], $this->successStatus); 
    }

    public function update(Request $request, $curp)
    {
        directo::where('curp',$curp)->update($request->all());
        return response()->json([
            'status' => $this->successStatus,
            'cupr' => $curp
        ], $this->successStatus);
    }

    public function destroy($curp)
    {
        $deletedRows = directo::where('curp', $curp)->delete();
        return response()->json(['status' => $this->successStatus], $this->successStatus);
    }
    
}
