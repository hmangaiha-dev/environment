<?php

namespace App\Http\Controllers;

use App\Models\Form1;
use Illuminate\Http\Request;

class Form1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $forms = Form1::all()->toArray();
        return array_reverse($forms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('form1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $forms = new Form1([
            'name'=>$request->input('name'),
            'fathersname'=>$request->input('fathersname'),
            'address'=>$request->input('address'),
            'area'=>$request->input('area'),
            'boundaries'=>$request->input('boundaries'),
            'reference'=>$request->input('reference'),
            'treespecies'=>$request->input('treespecies'),

        
        ]);
        $forms->save();
        return response()->json('Product created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form1  $form1
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $forms = Form1::find($id);
        return response()->json($forms);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form1  $form1
     * @return \Illuminate\Http\Response
     */
    public function edit(Form1 $form1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form1  $form1
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, Form1 $form1)
    {
        //
        $forms = Form1::find($id);
        $forms->update($request->all());
        return response()->json('Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form1  $form1
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Form1 $form1)
    {
        //
        $forms = Form1::find($id);
        $forms->delete();

        return response()->json('Product deleted!');
    }
}
