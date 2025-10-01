<?php

namespace App\Http\Controllers;
use App\Models\Blueprint;
use Illuminate\Http\Request;


class BlueprintController extends Controller
{
    public function getBlueprint(){
        /**Select * from blueprint*/
        $data = Blueprint::all();
        //dd($data);
        return view('admin.blueprint')
            ->with('blueprint',$data);

    }
    public function createBlueprint(Request $request){
        //dd($request->email);
        //reglas de validación
        $request->validate([
            "name_blueprint"=>'required|min:4|unique:blueprint',
            "document"=>'required|min:3',
            "version"=>'required|min:1',
            "sheet"=>'required|min:1',
        ]);
        //Guardar Registro insert into blueprint ....
        $blue = new Blueprint();
        $blue->name_blueprint=$request->name_blueprint;
        $blue->document=$request->document;
        $blue->version=$request->version;
        $blue->sheet=$request->sheet;
        $blue->project_id="1";
        $blue->save();
        return redirect()
            ->back()
            ->with('success',"Plano insertado correctamente");
    }
    
}
