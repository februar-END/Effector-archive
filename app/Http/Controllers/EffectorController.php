<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Effector;

class EffectorController extends Controller
{
    function index(){
        $effectors = Effector::all();
        return view("effectors.index",compact("effectors"));
    }

    function show(Effector $effector){
        return view("effectors.show",compact("effector"));
    }

    public function create(){
        return view("effectors.create");
    }

    public function store(Request $request){
        $effector = new Effector();
        $effector->fill($request->all());
        $effector->save();
        return redirect()->route('effectors.show',$effector);
    }

    public function edit(Effector $effector){
        return view("effectors.edit",compact("effector"));
    }

    public function update(Request $request,Effector $effector){
        $effector->fill($request->all());
        $effector->save();
        return redirect()->route('effectors.show',$effector);
    }

    public function destroy(Effector $effector){
        $effector->delete();
        return redirect()->route('effectors.index');
    }
}