<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seminario;
class SeminarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pagina(){
        $Seminarios=Seminario::all();
        return view('seminarios',compact('Seminarios'));
    }
     public function index()
    {
        $Seminarios=Seminario::all();
        return view('crudseminario.index',compact('Seminarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudseminario.create');
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
            'nombre'=> 'required', 'descripcion' => 'required' , 'url'=>'required','imagen' => 'required|image|mimes:jpeg,png,svg,gif|max:6000'
        ]);
       // $Seminarios=new Taller();
       $Seminarios = $request->all();
        if($imagen=$request->file('imagen')){
        $rutaGuardarImg ='images/';
        $imagenSeminario=date('YmdHis'). "." .$imagen->getClientOriginalExtension();
        $imagen->move($rutaGuardarImg,$imagenSeminario);
        $Seminarios['imagen']="$imagenSeminario";
        }
        Seminario::create($Seminarios);
        //$tallers->save();
        
        return redirect('/dash/crudseminario');
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
        $Seminarios= Seminario::find($id);
        return view('crudseminario.edit',compact('Seminarios'));
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
        $Seminarios=Seminario::find($id);
        
        $Seminarios->nombre= $request->get('nombre');
        $Seminarios->descripcion =$request->get('descripcion');
        $Seminarios->url =$request->get('url');
        $Seminarios->imagen =$request->get('imagen');

        $Seminarios->save();
        
        return redirect('/dash/crudseminario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Seminarios=Seminario::find($id);
        
        $Seminarios->delete();
        return redirect('/dash/crudseminario');
    }
}
