<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pagina(){
        $Cursos=Curso::all();
        return view('cursos',compact('Cursos'));
       
    }
    public function index()
    {
        $Cursos=Curso::all();
        return view('crudcurso.index',compact('Cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudcurso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=> 'required', 'descripcion' => 'required' , 'imagen' => 'required|image|mimes:jpeg,png,svg,gif|max:6000'
        ]);
       // $tallers=new Taller();
       $Cursos = $request->all();
        if($imagen=$request->file('imagen')){
        $rutaGuardarImg ='images/';
        $imagenCurso=date('YmdHis'). "." .$imagen->getClientOriginalExtension();
        $imagen->move($rutaGuardarImg,$imagenCurso);
        $Cursos['imagen']="$imagenCurso";
        }
        Curso::create($Cursos);
        //$tallers->save();
        
        return redirect('/dash/crudcurso');
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
        $Cursos= Curso::find($id);
        return view('crudcurso.edit',compact('Cursos'));
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
        $Cursos=Curso::find($id);
        
        $Cursos->nombre= $request->get('nombre');
        $Cursos->descripcion =$request->get('descripcion');
        $Cursos->imagen =$request->get('imagen');

        $Cursos->save();
        
        return redirect('/dash/crudcurso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Cursos=Curso::find($id);
        
        $Cursos->delete();
        return redirect('/dash/crudcurso');
    }
}
