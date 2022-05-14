<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taller;

class TallerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pagina(){
        $tallers=Taller::all();
        return view('talleres',compact('tallers'));
    }
     public function index()
    {
        $tallers=Taller::all(); 
        return view('crudtaller.index',compact('tallers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('crudtaller.create');
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
            'nombre'=> 'required', 'descripcion' => 'required' , 'imagen' => 'required|image|mimes:jpeg,png,svg,gif|max:1024'
        ]);
       // $tallers=new Taller();
       $tallers = $request->all();
        if($imagen=$request->file('imagen')){
        $rutaGuardarImg ='images/';
        $imagenTaller=date('YmdHis'). "." .$imagen->getClientOriginalExtension();
        $imagen->move($rutaGuardarImg,$imagenTaller);
        $tallers['imagen']="$imagenTaller";
        }
        Taller::create($tallers);
        //$tallers->save();
        
        return redirect('/dash/crudtaller');
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
        $tallers= Taller::find($id);
        return view('crudtaller.edit',compact('tallers'));
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
        $tallers=Taller::find($id);
        
        $tallers->nombre= $request->get('nombre');
        $tallers->descripcion =$request->get('descripcion');
        $tallers->imagen =$request->get('imagen');

        $tallers->save();
        
        return redirect('/dash/crudtaller');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tallers=Taller::find($id);
        
        $tallers->delete();
        return redirect('/dash/crudtaller');
    }
}
