<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pagina(){
        $Videos=Video::all();
        return view('videos',compact('Videos'));
    }
    public function index()
    {
        $Videos=Video::all();
        return view('crudvideo.index',compact('Videos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('crudvideo.create');
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
            'nombre'=> 'required', 'descripcion' => 'required' ,'url'=>'required', 'imagen' => 'required|image|mimes:jpeg,png,svg,gif|max:6000'
        ]);
       // $tallers=new Taller();
       $Videos = $request->all();
        if($imagen=$request->file('imagen')){
        $rutaGuardarImg ='images/';
        $imagenVideo=date('YmdHis'). "." .$imagen->getClientOriginalExtension();
        $imagen->move($rutaGuardarImg,$imagenVideo);
        $Videos['imagen']="$imagenVideo";
        }
        Video::create($Videos);
        //$tallers->save();
        
        return redirect('/dash/crudvideo');
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
        $Videos=Video::find($id);
        return view('crudvideo.edit',compact('Videos'));
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
        $Videos=Video::find($id);
        
        $Videos->nombre= $request->get('nombre');
        $Videos->descripcion =$request->get('descripcion');
        $Videos->url=$request->get('url');
        $Videos->imagen =$request->get('imagen');

        $Videos->save();
        
        return redirect('/dash/crudvideo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Videos=Video::find($id);
        $Videos->delete();
        return redirect('/dash/crudvideo');
    }
}
